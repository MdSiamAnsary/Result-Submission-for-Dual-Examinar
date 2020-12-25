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

  <title>Roll wise Results</title>
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


  <style type="text/css">
    

    table
    {
      background-image: linear-gradient(to bottom right, rgb(252, 215, 212), rgb(230, 236, 242));
      border: none;
      align-self: center;
      font-family: lora;
      font-size: 1.4em;
      text-align: center;
    }

    .blank_row
    {
      height: 1.5em; 
      background-color: white;
      
    }

  </style>

 


 
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
          
        </ul>
      </nav>
      <a id="logout" href="logout.php" class="get-started-btn scrollto">LOG OUT</a>
    </div>
  </header><!-- End Header -->

 
  <section id="intro" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="section-title">
          <h2 id="siteid">Roll wise all courses' results</h2>
        </div>
      </div>
    </div>
  </section>


  <section id="pagebody" class="pagebody">

    <div class="container" data-aos="fade-up">

      <div class="section-title" style="width: 70%; margin-right: auto;margin-left: auto;">

        <?php


          $sql = "SELECT * FROM marks_table";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

            echo "<div class='container>'";

            echo "<html><body><table id='courseoneresults' align = 'center' class=\"table table-hover\" style='max-width: 90%;'>\n";

            echo "<tr>";
            echo "<th class=\"text-center\"> Student ID </th>";
            echo "<th class=\"text-center\"> Total Marks in three course(s) </th>";
            echo "</tr>";

            echo "<tr class=\"blank_row\">";
            echo "<td colspan=\"2\"></td>";
            echo "</tr>";

            while($row = mysqli_fetch_assoc($result)) 
            {

                  $studentid_fromdb = $row['studentid'];

                  if(empty($row['course3quizteacher1']) || empty($row['course3quizteacher2']))
                  {
                    $msgcoursethree = "Marks in Course 3 : Both teachers have not entered results";
                  }
                  else
                  {
                    $quizmarkteacher1_fromdb = (float)$row['course3quizteacher1'];
                    $quizmarkteacher2_fromdb = (float)$row['course3quizteacher2'];

                    $finalmarkteacher1_fromdb = (float)$row['course3finalteacher1'];
                    $finalmarkteacher2_fromdb = (float)$row['course3finalteacher2'];

                    $teacher1marks = $quizmarkteacher1_fromdb + $finalmarkteacher1_fromdb;
                    $teacher2marks = $quizmarkteacher2_fromdb + $finalmarkteacher2_fromdb;

                    if(abs($teacher1marks - $teacher2marks) > 20)
                    {
                      $msgcoursethree = "Marks from two teachers vary greatly. Scripts should be rechecked.";
                    }
                    else
                    {
                      $studentmark = ($teacher2marks + $teacher1marks) / 2;
                      $msgcoursethree = "Marks in Course 3 : " . $studentmark;
                    }
                  }


                  if(empty($row['course1quizteacher1']) || empty($row['course1quizteacher2']))
                  {
                    $msgcourseone = "Marks in Course 1 : Both teachers have not entered results";
                  }
                  else
                  {
                    $quizmarkteacher1_fromdb = (float)$row['course1quizteacher1'];
                    $quizmarkteacher2_fromdb = (float)$row['course1quizteacher2'];

                    $finalmarkteacher1_fromdb = (float)$row['course1finalteacher1'];
                    $finalmarkteacher2_fromdb = (float)$row['course1finalteacher2'];

                    $teacher1marks = $quizmarkteacher1_fromdb + $finalmarkteacher1_fromdb;
                    $teacher2marks = $quizmarkteacher2_fromdb + $finalmarkteacher2_fromdb;

                    if(abs($teacher1marks - $teacher2marks) > 20)
                    {
                      $msgcourseone = "Marks from two teachers vary greatly. Scripts should be rechecked.";
                    }
                    else
                    {
                      $studentmark = ($teacher2marks + $teacher1marks) / 2;
                      $msgcourseone = "Marks in Course 1 : " . $studentmark;
                    }
                  }

                  if(empty($row['course2quizteacher1']) || empty($row['course2quizteacher2']))
                  {
                    $msgcoursetwo = "Marks in Course 2 : Both teachers have not entered results";
                  }
                  else
                  {
                    $quizmarkteacher1_fromdb = (float)$row['course2quizteacher1'];
                    $quizmarkteacher2_fromdb = (float)$row['course2quizteacher2'];

                    $finalmarkteacher1_fromdb = (float)$row['course2finalteacher1'];
                    $finalmarkteacher2_fromdb = (float)$row['course2finalteacher2'];

                    $teacher1marks = $quizmarkteacher1_fromdb + $finalmarkteacher1_fromdb;
                    $teacher2marks = $quizmarkteacher2_fromdb + $finalmarkteacher2_fromdb;

                    if(abs($teacher1marks - $teacher2marks) > 20)
                    {
                      $msgcoursetwo = "Marks from two teachers vary greatly. Scripts should be rechecked.";
                    }
                    else
                    {
                      $studentmark = ($teacher2marks + $teacher1marks) / 2;
                      $msgcoursetwo = "Marks in Course 2 : " . $studentmark;
                    }
                  }

                  echo "<tr>";
                  echo "<td rowspan=\"4\">". $studentid_fromdb . "</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>". $msgcourseone ."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>". $msgcoursetwo ."</td>";
                  echo "</tr>";

                  echo "<tr>";
                  echo "<td>". $msgcoursethree ."</td>";
                  echo "</tr>";

                  echo "<tr class=\"blank_row\">";
                  echo "<td colspan=\"2\"></td>";
                  echo "</tr>";
            }
          } 
          else 
          {

              echo "<div class='container>'";
              echo "<html><body><table id='courseoneresults' align = 'center' class=\"table table-hover\" style='max-width: 80%;'>\n";
              echo "<tr>";
              echo "<th class=\"text-center\"> Student ID </th>";
              echo "<th class=\"text-center\"> Total Marks in three course(s) </th>";
              echo "</tr>";
                
              echo "<tr>";
              echo "<td colspan=\"2\">". "No records" . "</td>";
              echo "</tr>";
          }
  
          echo "\n</table></body></html>";
          echo "</div>";

        ?>

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