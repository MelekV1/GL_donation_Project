<?php
      include_once("config.php");

      if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $tel = $_POST["tel"];
        $mail = $_POST["mail"];
        $description = $_POST["description"];
        $receptionDate = date("Y-m-d");

        $sql = "INSERT INTO `stocks` (`desc`, Nom_Donateur, Num_tel, Adresse, date_Reception, approuve)
        VALUES(`$description`, `$name`, $tel, `$mail`, $receptionDate, 0);";
        echo $sql;
        if ($res = mysqli_query($link, $sql)) {
            echo "votre don a été proposé";
        }
      }
    ?>