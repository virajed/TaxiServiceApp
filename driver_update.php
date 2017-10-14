<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container" ng-app="driver" ng-controller="driverCtrl">

	<div class="row"> <!--row 1-->
		<div class="col-md-4"><!--col 1-->


			<?php
				form_create('form-vertical','driver_add','POST');

				form_input('fn','Full Name','text','vertical','form-control','','ng-model="dr.name"');

				form_input('cn','Contact','tel','vertical','form-control','','ng-model="dr.cn"');

				form_input('st','Status','number','vertical','form-control','','ng-model="dr.status"');

				form_button('save','SaveAngular','button','','ng-click=send(dr)');

				form_button('save1','SaveJquery','button','');

				form_close();
			?>  

<p> {{ dr }}</p>
<p id="res"> </p>
<p> {{ response }}</p>
<script>

var app = angular.module('driver',[]);
//{'name':$scope.dr.name,'cn':$scope.dr.cn,'status':$scope.dr.status}
app.controller('driverCtrl',function($scope,$http){

	$scope.send = function(obj){
		$http.post('driver_add_a.php?m=2',obj).
		then(function(res){ 
			console.log(res.data);
			$scope.response = res.status; //'Angular ret';//data
		},function(error){
			console.log("Error :",error);
		});
	}

});

$("#save1").click(function(){
	$.ajax({
		url:'driver_add_a.php?m=1',
		method:'POST',
		async:true,
		data:{name:$("#fn").val(),cn:$("#cn").val(),status:3},
		success:function(msg){ $("#res").html(msg);}
	});
});

</script>

		</div>

		<div class="col-md-4"><!--col 2-->

			Hello

		</div>

		<div class="col-md-4"><!--col 3-->


			Hello

		</div>

	</div>


</div>