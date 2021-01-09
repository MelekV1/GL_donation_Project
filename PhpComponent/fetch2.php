<?php
include("PhpComponent/config.php");

$query2="SELECT * FROM `Besoin`";
$result2=mysqli_query($link,$query2);
if(!($result2->num_rows > 0)){
    echo "<script>alert('pas de besoin actuellement mais vous pouvez proposez un don')</script>";
}


 ?>
