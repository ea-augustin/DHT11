<?php

$pageTemp = file_get_contents('data.txt');

$tuff = json_decode($pageTemp);


$bargraph_height = 161 + $tuff->temperature * 4;
$bargraph_top = 315 + $tuff->humidite * 4;

echo "<br />";
echo "Last modified: ".date("F d Y H:i:s.",filemtime("index.php"));
?>



<html>
 <head>

   <link href="index.css" type="text/css" rel="stylesheet">
  <title>Temprature Test</title>

 </head>
 <body>

   <h1>Température</h1>



 <p>Il fait <?php echo $tuff->temperature; ?>° avec <?php echo $tuff->humidite ?>° d'humidité</p>



 <div id="thermometer">
   <div id="bargraph"> </div>
 </div>



 </body>
</html>
