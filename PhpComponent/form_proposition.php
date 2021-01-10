<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Traitement form</title>
  </head>
  <body>
    <div class="container">
      <?php

            include_once("config.php");
            if (isset($_POST["submit"])) {
              $name = $_POST["name"];
              $tel = $_POST["tel"];
              $mail = $_POST["mail"];
              $description = $_POST["description"];
              $receptionDate = date("Y-m-d");

              $sql = "INSERT INTO `stocks` (`desc`, `Nom_Donateur`, `Num_tel`, `Adresse`, `date_Reception`, `approuve`)
              VALUES('$description', '$name', $tel, '$mail', '$receptionDate', 0);";
              if ($res = mysqli_query($link, $sql)) {
                  echo "votre don a été proposé";
                  echo"<div class='alert alert-secondary' role='alert'>
                        Retourner vers la page Precedente<a href='../proposition.php' class='alert-link'>Click ici</a>.
                      </div>";
              }
            }
      ?>
    </div>

  </body>
</html>
