<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:index.php');

}

$user = $_SESSION['username'];

include_once('dbcon.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link rel="icon" href="images/icon.png" type="image/x-icon" />

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 


 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 style="font-family: LORA" class="logo mr-auto">
        <a href="home.php">
        <?php

          $con=mysqli_connect("127.0.0.1","root","","resultsubmissionfordualexaminar");
          $query="Select * from teachers_table where username='$user'";
          $result= mysqli_query($con,$query);

          while($row = mysqli_fetch_array($result))
          {
            echo "Username : ".$row["username"]."<br>";  
          }

        ?>
        </a>
      </h1>
        
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a id="navl1" href="home.php" class="btn btn-primary" 
            style="font-family: Lora; font-size: 1.2em; color: white; font-style: bold">Home</a></li>
          <li><a id="navl2" href="marksentry.php" class="btn btn-success" 
            style="font-family: Lora; font-size: 1.2em; color: white; font-style: bold">Enter Marks</a></li>
          
        </ul>
      </nav>
      <a id="logout" href="logout.php" class="get-started-btn scrollto">LOG OUT</a>
    </div>
  </header><!-- End Header -->

 
  <section id="intro" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="section-title">
          <br>
          
          <h2 id="siteid">Result Submission for Dual Examinar</h2>
          
          <p id="sitedescription" style="color: #000; font-size: 1.2em; font-family: lora ">
            
          </p>
        </div>
      </div>
    </div>
  </section>


  <section id="pagebody" class="pagebody">

    <div class="container" data-aos="fade-up">

      <div class="section-title" style="width: 70%; margin-right: auto;margin-left: auto;">

        <a id="navl1" href="marksentry.php" class="btn btn-primary btn-lg btn-block" 
        style="font-family: Lora; font-size: 1.5em; color: white; font-style: bold">Enter Marks</a>

        <a id="navl2" href="courseoneresults.php" class="btn btn-primary btn-lg btn-block" 
        style="font-family: Lora; font-size: 1.5em; color: white; font-style: bold">Display marks by course</a>

        <a id="navl3" href="rollwiseresults.php" class="btn btn-primary btn-lg btn-block" 
        style="font-family: Lora; font-size: 1.5em; color: white; font-style: bold">Display marks of all students </a>

      </div>

    </div>
  </section> 

  

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>