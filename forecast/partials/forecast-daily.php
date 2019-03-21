	<div class="row">

		  <?php

		  //Set counter at zero
		  $i=0;

		  //Start the foreach loop to get the hourly forecast
		  foreach($forecast->daily->data as $day):

		  $average_temp=(round($day->temperatureHigh)+round($day->temperatureLow))/2;

		  ?>

		  <div class="col-12 col-md-4">
			  	<div class="card p-4 mb-4">
				  	<h2 class="h4">
				  	<?php echo date("l", $day->time); ?>
				    </h2>
				    <h3 class="display-4">
				    	<?php echo round($average_temp); ?>
				    </h3>
				    <div class="d-flex justify-content-between">
					  	<p class="lead">
					  	Hi <?php echo round($day->temperatureHigh); ?>&deg;
					    </p>
					    <p class="lead">
					  	Lo <?php echo round($day->temperatureLow); ?>&deg;
					    </p>
					</div>
				    <p class="lead">
				  		Humidity <?php echo $day->humidity*100; ?>%
				    </p>
				    <p class="m-0">
				    	<?php echo $day->summary; ?>
				    </p>
			    </div>
		  </div>
		  
		  <?php
		  //increase counter by one for each iteration
		  $i++;

		  //Stop the loop after we have 12 iterations
		  if($i==5) break;

		  //End of foreach loop
		  endforeach;
		  ?>

		</div>