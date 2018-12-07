<?php

$pageTemp = file_get_contents('data.txt');
$tuff = json_decode($pageTemp);

$bargraph_height = 161 + $tuff-> temperature * 4;
$bargraph_top = 315 - $tuff-> temperature * 4;

echo "<br />";
echo "Last modified: ".date("F d Y H:i:s.",filemtime("index.php"));
?>



<html>
 <head>

   <link href="index.css" type="text/css" rel="stylesheet">
  <title>Temprature Test</title>
  <meta http-equiv="refresh" content="1">

 </head>
 <body>

   <h1>Température</h1>



 <p>Il fait <?php echo $tuff->temperature; ?>° avec <?php echo $tuff->humidite ?>% d'humidité</p>

 <div id="thermometer">
   <div id="bargraph" style="height: <?php echo $bargraph_height ; ?>px; top: <?php echo $bargraph_top ; ?>px;"></div>
 </div>





 </body>
</html>
