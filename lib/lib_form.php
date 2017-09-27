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

function form_button($id,$label,$type='text',$class='form-control',$other='')
{
	?>
	<div class="form-group">
 				<button type="button" name="s_cus" id="s_cus" class="btn btn-default" value=""> Save </button>
 	</div> 
 	<?php
}

?>