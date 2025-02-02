<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <!-- <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css"> -->
    <title>Wiriji Resto</title>
  </head>
  <body>

  <!-- Jumbotron  -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">WIRIJI RESTO</span></h1>
          <hr>
          <p class="lead font-weight-bold"><br> 
          Admin Mode</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand text-white" href="admin.php"><strong>Wiriji</strong> Resto</a>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-5 activated" href="admin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-5" href="daftar_menu.php">Menu</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link mr-5" href="pesanan.php">Orders</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link mr-5" href="logout.php">LogOut</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Home -->    
      <div class="container">
        <div class="judul text-center mt-5">
          <h3 class="font-weight-bold">Wiriji Resto</h3>
          <h7>Jl. Pramuka, No. 21, Kel. Sempaja Selatan, Kota Samarinda
          <br>Open at 11:00 - 23:00 WITA</h7>
        </div>
      </div>
  <!-- Akhir Home -->

  <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
          <div class="copyright">
            <p>Copyright 2023 <strong>- Kelompok 1 (B1)</strong></p>
          </div>
      </div>
  <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>
<?php } ?>