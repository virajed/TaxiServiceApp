<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-4"><!--col 1-->

			<?php
				form_create();

				form_input('fn','Full Name');

				form_input('cn','Contact','tel');

				form_input('cn','Contact','number');

				form_button('submit','Save');

				form_close();
			?> 

		</div>

		<div class="col-md-4"><!--col 2-->

			Hello

		</div>

		<div class="col-md-4"><!--col 3-->


			Hello

		</div>

	</div>


</div>