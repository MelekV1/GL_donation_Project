<?php
include("PhpComponent/config.php");

$query="SELECT * FROM `stocks`";
$result=mysqli_query($link,$query);
if(!($result->num_rows > 0)){
    echo "<script>alert('Stocks is empty')</script>";
}

 ?>
