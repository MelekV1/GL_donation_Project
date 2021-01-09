<?php
include("PhpComponent/config.php");

$query1="SELECT * FROM `stocks` Where `approuve` = 0";
$result1=mysqli_query($link,$query1);
if(!($result1->num_rows > 0)){
  print_r($result1);
}

 ?>
