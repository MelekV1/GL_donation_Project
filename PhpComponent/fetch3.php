<?php
    include_once("PhpComponent/config.php");

    $query3="SELECT DISTINCT LOWER(`Nom_Donateur`) FROM `stocks`";
    $result3=mysqli_query($link,$query3);
    $countDonateur=$result3->num_rows;
    if(!($result3->num_rows > 0)){
        echo "<script>alert('Pas de donateur is empty')</script>";
    }
    
?>