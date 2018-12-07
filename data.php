
 <?php

if(isset ($_POST["temp"])){
$temperature = $_POST["temp"];
echo $temperature;

$file_name = "data.txt";
file_put_contents($file_name,$temperature);

}

 ?>
