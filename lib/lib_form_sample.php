<?php

function form_create($id='',$method='',$act='',$other='')
{
	echo '<form id="'.$id.'" name="'.$id.'" method="'.$method.'" action="'.$act.'">';
}


function form_close()
{
	?>
		</form>
	<?php
}

function form_input($id,$label,$type='text',$class='form-control',$other='')
{
	?>
	<div class="form-group">

	<label for="<?php echo $id;?>"> <?php echo $label;?></label>
	<input type="<?php echo $type;?>" id="<?php echo $id;?>" name="<?php echo $id;?>" class="<?php echo $class;?>">

	</div>
	<?php
}

function form_button($id,$label,$type='submit',$class='btn btn-default',$other='')
{
	?>
	<div class="form-group">
 		<button 
 		type="<?php echo $type;?>" name="<?php echo $id;?>" id="<?php echo $id;?>" class="<?php echo $class;?>" value=""> <?php echo $label;?> 
 		</button>
 	</div> 
 	<?php
}


function form_select($id,$label,$opt,$form='vertical',$class='',$other='')
{
	if($form=='horizontal')
	{
	?>
		<div class="form-group">

			<label class="control-label col-md-2 <?php echo $labelcls; ?>" for="<?php echo $id;?>"> <?php echo $label;?></label>
		
		<div class="col-md-10">
			<select class="form-control <?php echo $class;?>" id="<?php echo $id;?>" name="<?php echo $id;?>" 
			placeholder="<?php echo $label;?>"> 
				<?php
					foreach($opt as $a)
					{
						echo '<option>'.$a.'</option>';
					}
				?>
			</select>
		</div>

	</div>
	<?php
	}
	else{
		?>
		<div class="form-group">

			 <label for="<?php echo $id;?>"><?php echo $label;?>:</label>
  			<select class="form-control <?php echo $class;?>" id="<?php echo $id;?>" name="<?php echo $id;?>">
  				<?php
					foreach($opt as $a)
					{
						echo '<option>'.$a.'</option>';
					}
				?>

  			</select>

		</div>
	<?php
	}
}


function form_textarea($id,$label,$form='vertical',$class='',$other='')
{
	if($form=='horizontal')
	{
	?>
		<div class="form-group">

			<label class="control-label col-md-2 <?php echo $labelcls; ?>" for="<?php echo $id;?>"> <?php echo $label;?></label>
		
		<div class="col-md-10">
			<textarea class="form-control <?php echo $class;?>" rows="5" id="<?php echo $id;?>" name="<?php echo $id;?>" 
			placeholder="<?php echo $label;?>"> </textarea>
		</div>

	</div>
	<?php
	}
	else{
		?>
		<div class="form-group">

			 <label for="<?php echo $id;?>"><?php echo $label;?>:</label>
  			<textarea class="form-control <?php echo $class;?>" rows="5" id="<?php echo $id;?>" name="<?php echo $id;?>"></textarea>

		</div>
	<?php
	}
}


 



function form_checkbox($id,$label='Remember me',$class='checkbox',$other='')
{
	?>
		 <div class="form-group"> 
    		<div class="col-sm-offset-2 col-sm-10">
      			<div class="<?php $class;?>">
        			<label><input type="checkbox" id="<?php echo $id;?>" name="<?php echo $id;?>"> <?php $label;?> </label>
      			</div>
    		</div>
  		</div>

	<?php
}
?>

 
 