<?php

include_once('lib/lib_form.php');
?>

<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">


	<div class="row"> <!--row 1-->

		<div class="col-md-4"><!--col 1-->

		</div>


		<div class="col-md-4"><!--col 2-->

<?php
	form_create('form-horizontal','','post','?p=reserv_add_a');

	form_input('loc','Start');

	form_input('des','Destination');

	form_input('dt','Date','date');

	form_input('tm','Time','time');

	

 ?>
		</div>

		<div class="col-md-4"><!--col 2-->

		<?php
	
			form_input('num','No of passengers');

			form_select('type','Comfort Level',array('Economy','Luxuary'));

			form_button('s','AJAX','button');

			form_button('add_reserv','POST','submit');

			form_close();
 		?>
 		<div id="response"> </div>

		</div>

	</div>

<script type="text/javascript">
	
$("button").click(function(){

	$.ajax({

		url: "script.php?p=reserv_add_a",
		method:"POST",
		data:{loc:$("#loc").val(), des:$("#des").val() ,dt:$("#dt").val() ,tm:$("#tm").val() ,num:$("#num").val() ,type:$("#type").val()},
		success:function(m){
			$("#response").html(m);
		}

	});
});

</script>

</div>