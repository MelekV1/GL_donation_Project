<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
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
<div class="page-header">
    <h1> Welcome  <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
</div>
</body>
</html>
