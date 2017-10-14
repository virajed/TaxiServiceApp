<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container" ng-app="taxiApp" ng-controller="reservShow">

	<div class="row"> <!--row 1-->
		<div class="col-md-2"><!--col 1-->



			Hello 

		</div>

		<div class="col-md-10"><!--col 2-->

			<table class="table table-hover">
				<tr ng-repeat="r in reserv">
				<td> {{ r[0] }}</td>
				<td> {{ r[1] }}</td>
				<td> {{ r.r_loc }}</td>
				<td> {{ r[3] }}</td>
				<td> {{ r[4] }}</td>
				<td> {{ r[5] }}</td>

				</tr>
			</table>


			<script>
				
				var app = angular.module('taxiApp',[]);

				app.controller('reservShow',function($scope,$http){ 

					$http.get('reserv_list.php').then(function(res){
						$scope.reserv = res.data;

					});
				});

			</script>

		</div>

	</div>


</div>