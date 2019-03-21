<?php 
// This gets our forecast based on our coordinates
require 'logic/forecast1.php';

//Doctype and all the rest of the header info
//Body starts here as well
require 'partials/header.php';

//Contains main content
//Includes additional php requires for different forecasts (daily,weekly)
require 'partials/main.php';

//Closes <body> and <html>
require 'partials/footer.php'; 
?>