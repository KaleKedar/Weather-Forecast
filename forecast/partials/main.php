	<main class="container text-center">
		<h1 class="display-1">Forecast</h1>

		<form class="form-inline" method="post">
			<div class="form-group mx-auto my-5">
				<label class="sr-only" for="location">Enter a Location</label>
				<input type="text" class="form-control" id="location" placeholder="Location"
				name="location">
				<button class="btn btn-primary" type="submit">Search</button>
			</div>
		</form>	
		
		<?php 

		if( isset($_POST['location']))
		{

			echo '<h2 class="display-4">Results for '.$place.'</h2>';
			require 'forecast.php'; 
			require 'forecast-hourly.php';
			require 'forecast-daily.php'; 
		}
		?>


	</main>