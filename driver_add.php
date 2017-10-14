<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container" ng-app="driver">

	<div class="row"> <!--row 1-->
		<div class="col-md-4" ng-controller="driverCtrl"><!--col 1-->


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

//var dri = {"name":$scope.dr.name,"cn":$scope.dr.cn,"status":$scope.dr.status};

var app = angular.module('driver',[]);
app.controller('driverCtrl',function($scope,$http){

	$scope.send = function(dr){
		$http.post('driver_add_a.php?m=2',dr).
		then(function(res){ 
			//console.log(res.data);
			//alert(res.header);
			$scope.response = res.status+res.data+res.header+res.config; //'Angular ret';//data
		},function(error){
			alert('error');
			console.log("Error :",error);
		});
	}

});


</script>

		</div>

		<div class="col-md-4" ng-controller="drvShow"><!--col 2-->

			<table class="table table-hover">
				<tr ng-repeat="r in drivers">
				<td> {{ r[0] }}</td>
				<td> {{ r[1] }}</td>
				<td> {{ r[2] }}</td>
				<td> {{ r[3] }}</td>
				
				</tr>
			</table>


			<script>
				
				//var app = angular.module('taxiApp',[]);
				//$http.get('url').then(function(res){   },function(err){   });

				app.controller('drvShow',function($scope,$http){ 

					$http.get('driver_list.php').
					then(function(res){
						$scope.drivers = res.data;

					},function(err){
						alert();
					});
				});

			</script>

		</div>

		<div class="col-md-4"><!--col 3-->


			Hello

		</div>

	</div>


</div>