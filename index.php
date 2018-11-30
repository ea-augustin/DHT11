<html>
 <head>

   <link href="index.css" type="text/css" rel="stylesheet">
  <title>Temprature Test</title>

 </head>
 <body>

   <h1>Température</h1>


 <?php

 $pageTemp = file_get_contents('data.txt');

 $tuff = json_decode($pageTemp);


 ?>

 <p>Il fait <?php echo $tuff->temperature; ?>° avec <?php echo $tuff->humidite ?>% d'humidité</p>


 <div id="thermometer">
   <div id="bargraph"> </div>
 </div>


 </body>
</html>
