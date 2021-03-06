<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$keyword="";
if(isset($_Post['key']))
{
    echo "<script>alert($key)</script>";
}
include_once("PhpComponent/fetch.php");
include_once("PhpComponent/component.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<title>L'ESPOIR</title>
</head>
<body>
    <div style="line-height:0.6;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="nav-custom col-8">
                <a class="navbar-brand" style="font-size: 60px;" href="index.html">L <span>'</span>ESPOIR</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                    aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse col-4" style="font-family: 'IM Fell French Canon SC', serif;" id="navbarColor02">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="stocks.php"><h1>Stocks</h1></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="offres.php"><h1>Offres</h1></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="stats.php"><h1>statistiques</h1></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php"><h1>logout</h1></a>
                  </li>
              </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
  <div class="page-header">
      <h1>Bienvenue  <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
        <script>
            function myFunction(event){
                alert(event.target.value());
            }
        </script>
        
      <form class="form-inline" >
            <input class="form-control mr-sm-2" 
            name="key" type="search" 
            placeholder="Search" 
            aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    
      <table class="table">
        <thead>
            <tr>
              <th scope="col">Ref</th>
              <th scope="col">Item</th>
              <th scope="col">Nom donateur</th>
              <th scope="col">Num tel</th>
              <th scope="col">Addresse</th>
              <th scope="col">date_reception</th>
              <th scope="col">date_acceptation</th>
              <th scope="col">approuve par</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while($row = mysqli_fetch_assoc($result)){
                  component(
                      $row['Ref'],
                      $row['desc'],
                      $row['Nom_Donateur'],
                      $row['Num_tel'],
                      $row['Adresse'],
                      $row['date_Reception'],
                      $row['date_Acceptation'],
                      $row['approuve_par']
                      );
                  };
            ?>
          </tbody>
      </table>
  </div>
</div>

</body>
</html>
