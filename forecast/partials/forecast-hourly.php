		<ul class="list-group" style="margin: 0 auto; max-width: 320px;">

		  <?php

		  //Set counter at zero
		  $i=0;

		  //Start the foreach loop to get the hourly forecast
		  foreach($forecast->hourly->data as $hour):

		  ?>

		  <li class="list-group-item d-flex justify-content-between">
		  	<p class="lead m-0">
		  	<?php echo date("g a", $hour->time); ?>
		    </p>
		  	<p class="lead m-0">
		  	<?php echo round($hour->temperature); ?>&deg;
		    </p>
		    <p class="lead m-0">
		  	<span class="sr-only">Humidity</span> <?php echo $hour->humidity*100; ?>%
		    </p>
		  </li>
		  
		  <?php
		  //increase counter by one for each iteration
		  $i++;

		  //Stop the loop after we have 12 iterations
		  if($i==12) break;

		  //End of foreach loop
		  endforeach;
		  ?>

		</ul>