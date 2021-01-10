<?php
include_once("PhpComponent/config.php");

$query1="SELECT * FROM `stocks` Where `approuve` = 0";
$result1=mysqli_query($link,$query1);
$countOffer=$result1->num_rows;
if(!($result1->num_rows > 0)){

}

 ?>
