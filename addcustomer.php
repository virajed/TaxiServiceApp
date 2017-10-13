<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-6"><!--col 1-->
<div class="alert alert-confirmation" id="response"> </div>
		<form class="form-horizontal" method="post" action="?p=addcustomer_a">
 			<div class="form-group">
 			<input type="text" name="c_fn" id="c_fn" class="form-control">
 			</div>

 			<div class="form-group">
 				<input type="text" name="c_ln" id="c_ln" class="form-control">
 			</div>

 			<div class="form-group">
 				<input type="text" name="" id="" class="form-control">
 			</div>

 			<div class="form-group">
 				<button type="button" name="s_cus" id="s_cus" class="btn btn-default" value=""> Save </button>
 				<button type="submit" name="s_cus2" id="s_cus2" class="btn btn-default" value=""> Save </button>
 			</div> 

		</form>
		</div>
<script type="text/javascript">
$(document).ready(function(){	
	$("#s_cus").click(function(){ 
		$.ajax({
			url : "addcustomer_a.php",
			method:"POST",
			async:true,
			data:{c_fn: $("#c_fn").val() , c_ln:$("#c_ln").val() },
			success : function(msg){$("#response").html(msg);}
				
			});		
	});

	$("#sh_cus").click(function(){
		$("#cuslist").load('list.php');
	});

});


//Angular
var app = angular.module("myApp",[]);

app.controller("myCtrl",function($scope,$http){ 

$http.get('list.php').then(
	function($response){
		$scope.customers = $response.data;
	},

	function($err){}

	);

  });

</script>




		<div class="col-md-6"><!--col 2-->
		<button type="button" name="sh_cus" id="sh_cus" class="btn btn-default" value=""> Show </button>
			<div id="cuslist" class="" ng-app="myApp" ng-controller="myCtrl">

			<table class="table table-striped">
				<tr ng-repeat="cus in customers">
				<td> {{ cus[0] }}  </td>
				<td> {{ cus[1] }} </td>
				</tr>
			</table>

			</div>

		</div>

		
	</div>


</div>