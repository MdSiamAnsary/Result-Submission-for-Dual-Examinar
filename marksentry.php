<?php
session_start();
if (!isset($_SESSION['username']))
{
    header('location:index.php');

}

$user = $_SESSION['username'];

include_once ('dbcon.php');

$error = false;

if (isset($_POST['btn-marksentry']))
{

    $studentid = $_POST['studentid'];
    $studentid = strip_tags($studentid);
    $studentid = htmlspecialchars($studentid);

    $course = $_POST['course'];
    $course = strip_tags($course);
    $course = htmlspecialchars($course);

    $quizmarks = $_POST['quizmarks'];
    $quizmarks = strip_tags($quizmarks);
    $quizmarks = htmlspecialchars($quizmarks);

    $finalmarks = $_POST['finalmarks'];
    $finalmarks = strip_tags($finalmarks);
    $finalmarks = htmlspecialchars($finalmarks);

    $teacher = $_POST['teacher'];
    $teacher = strip_tags($teacher);
    $teacher = htmlspecialchars($teacher);

    //validate
    

    //---------------------------------------------------------------------------------------------
    // Student ID can be only numbers
    if (empty($studentid))
    {
        $error = true;
        $errorstudentid = "Please input a student id";
        $markentryMsg = 'Process unsuccessful';
    }
    else
    {
        if(is_numeric($studentid))
        {

        }
        else
        {
            $error = true;
            $errorstudentid = "Please input a student id";
            $markentryMsg = 'Process unsuccessful';
        }
    }


    // Quiz marks can be only numbers
    if (empty($quizmarks))
    {
        $error = true;
        $errorquizmarks = "Please input a proper quiz mark";
        $markentryMsg = 'Process unsuccessful';
    }
    else
    {
        if(is_numeric($quizmarks))
        {
            if($quizmarks >= 0 && $quizmarks <=40)
            {

            }
            else
            {
                $error = true;
                $errorquizmarks = "Please input a proper quiz mark";
                $markentryMsg = 'Process unsuccessful';
            }

        }
        else
        {
            $error = true;
            $errorquizmarks = "Please input a proper quiz mark";
            $markentryMsg = 'Process unsuccessful';
        }
    }


    // Final marks can be only numbers
    if (empty($finalmarks))
    {
        $error = true;
        $errorfinalmarks = "Please input a proper final mark";
        $markentryMsg = 'Process unsuccessful';
    }
    else
    {
        if(is_numeric($finalmarks))
        {
            if($finalmarks >= 0 && $finalmarks <=60)
            {

            }
            else
            {
                $error = true;
                $errorfinalmarks = "Please input a proper final mark";
                $markentryMsg = 'Process unsuccessful';
            }

        }
        else
        {
            $error = true;
            $errorfinalmarks = "Please input a proper final mark";
            $markentryMsg = 'Process unsuccessful';
        }
    }

    
    
    //----------------------------Mark Entry------------------------------------

    if(!$error)
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'resultsubmissionfordualexaminar';
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql="SELECT * FROM marks_table WHERE BINARY studentid='$studentid'";

        $result=mysqli_query($conn, $sql);

        $count=mysqli_num_rows($result);
        
        
        if ($count != 1)
        {
            if($teacher == "teacher1")
            {
                if($course == "course1")
                {
                    $sql = "insert into  marks_table(studentid, course1quizteacher1, course1finalteacher1) values('$studentid', '$quizmarks', '$finalmarks')";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                elseif($course == "course2")
                {
                    $sql = "insert into  marks_table(studentid, course2quizteacher1, course2finalteacher1) values('$studentid', '$quizmarks', '$finalmarks')";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                elseif($course == "course3")
                {
                    $sql = "insert into  marks_table(studentid, course3quizteacher1, course3finalteacher1) values('$studentid', '$quizmarks', '$finalmarks')";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }

                }
            }
            else
            {
                if($course == "course1")
                {
                    $sql = "insert into  marks_table(studentid, course1quizteacher2, course1finalteacher2) values('$studentid', '$quizmarks', '$finalmarks')";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                elseif($course == "course2")
                {
                    $sql = "insert into  marks_table(studentid, course2quizteacher2, course2finalteacher2) values('$studentid', '$quizmarks', '$finalmarks')";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                elseif($course == "course3")
                {
                    $sql = "insert into  marks_table(studentid, course3quizteacher2, course3finalteacher2) values('$studentid', '$quizmarks', '$finalmarks')";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
            }
        }
        else
        {
            if($teacher == "teacher1")
            {
                if($course == "course1")
                {
                    $sql = " UPDATE marks_table SET course1quizteacher1 = '$quizmarks' ,course1finalteacher1= '$finalmarks' WHERE studentid = '$studentid' ";


                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                elseif($course == "course2")
                {
                    $sql= " UPDATE marks_table SET course2quizteacher1 = '$quizmarks' ,course2finalteacher1= '$finalmarks' WHERE studentid = '$studentid' ";


                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                else
                {
                    $sql = " UPDATE marks_table SET course3quizteacher1 = '$quizmarks' ,course3finalteacher1= '$finalmarks' WHERE studentid = '$studentid' ";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }

                }
            }
            else
            {
                if($course == "course1")
                {
                    $sql = " UPDATE marks_table SET course1quizteacher2 = '$quizmarks' ,course1finalteacher2= '$finalmarks' WHERE studentid = '$studentid' ";

                    

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                elseif($course == "course2")
                {
                    $sql = " UPDATE marks_table SET course2quizteacher2 = '$quizmarks' ,course2finalteacher2= '$finalmarks' WHERE studentid = '$studentid' ";

                   

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
                else
                {
                    $sql = " UPDATE marks_table SET course3quizteacher2 = '$quizmarks' ,course3finalteacher2= '$finalmarks' WHERE studentid = '$studentid' ";

                    if (mysqli_query($conn, $sql))
                    {
                        $marksentrySuccessfulMsg = 'Marks entered successfully.';
                    }
                    else
                    {
                        echo 'Error ' . mysqli_error($conn);
                    }
                }
            }
        }
        
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Marks Entry</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> </head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 style="font-family: LORA" class="logo mr-auto"> <a href="home.php">
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
                    <li><a id="navl1" href="home.php" class="btn btn-primary" style="font-family: Lora; font-size: 1.2em; color: white; font-style: bold">Home</a></li>
                    <li><a id="navl2" href="marksentry.php" class="btn btn-success" style="font-family: Lora; font-size: 1.2em; color: white; font-style: bold">Enter Marks</a></li>
                    
                </ul>
            </nav> <a id="logout" href="logout.php" class="get-started-btn scrollto">LOG OUT</a> </div>
    </header>
    <!-- End Header -->
    <section id="intro" class="d-flex align-items-center"> </section>
    <div class="container">
        <h2 class="text-center" id="title" style="font-family: Garamond; font-size: 2.3em; font-style: bold;">
                Enter marks for a student in a particular course
            </h2>
        <hr>
        <div class="row" style="font-family: Cambria; font-size: 1.3em;">
            <div class="col-md-5">
                <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <?php
                        if(isset($markentryMsg))
                        {
                            ?>
                        <div class="alert alert-success">
                            <p id="marksentryunsuccessfulmsg" class="glyphicon glyphicon-info-sign">Marks entry unsuccessful</p>
                        </div>
                        <?php
                        }
                        ?>
                            <?php
                        if(isset($marksentrySuccessfulMsg))
                        {
                            ?>
                                <div class="alert alert-success">
                                    <p id="marksentrysuccessfulmsg" class="glyphicon glyphicon-info-sign">Marks entry successful</p>
                                </div>
                                <?php
                        }
                        ?>
                                    <fieldset>
                                        <p class="text-lowercase" id="marksentryrequiredtext" style="font-style: italic;"> (<span style="color: red">*</span> marked fields are must) </p>
                                        <div class="form-group">
                                            <label for="studentid" class="control-label">Student ID<span style="color: red">*</span></label>
                                            <input type="text" name="studentid" id="studentid" class="form-control" placeholder="Enter Student ID" value=""> <span class="text-danger"><?php if(isset($errorstudentid)) echo $errorstudentid; ?></span> </div>
                                        <div class="radio">
                                            <label for="course" class="control-label">Choose Course<span style="color: red">*</span></label>
                                            <br>
                                            <input type="radio" id="course1" name="course" class="radio" value="course1" checked>
                                            <label for="course1">Course 1</label> &nbsp &nbsp
                                            <input type="radio" id="course2" name="course" class="radio" value="course2">
                                            <label for="course2">Course 2</label> &nbsp &nbsp
                                            <input type="radio" id="course3" name="course" class="radio" value="course3">
                                            <label for="course3">Course 3</label> <span class="text-danger"><?php if(isset($errorcourse)) echo $errorcourse; ?></span> </div>
                                        <div class="form-group">
                                            <label for="quizmarks" class="control-label">Enter Quiz Marks <span style="color: red">*</span></label>
                                            <input type="text" name="quizmarks" id="quizmarks" class="form-control" autocomplete="off" placeholder="Enter Quiz Marks (value between 0 and 40)" value=""> <span class="text-danger"><?php if(isset($errorquizmarks)) echo $errorquizmarks; ?></span> </div>
                                        <div class="form-group">
                                            <label for="finalmarks" class="control-label">Enter Final Marks <span style="color: red">*</span></label>
                                            <input type="text" name="finalmarks" id="finalmarks" class="form-control" autocomplete="off" placeholder="Enter Final Marks (value between 0 and 60)" value=""> <span class="text-danger"><?php if(isset($errorfinalmarks)) echo $errorfinalmarks; ?></span> </div>
                                        <div class="radio">
                                            <label for="teacher" class="control-label">Enter marks as<span style="color: red">*</span></label>
                                            <br>
                                            <input type="radio" id="teacher1" name="teacher" class="radio" value="teacher1" checked>
                                            <label for="teacher1">Teacher 1</label> &nbsp &nbsp
                                            <input type="radio" id="teacher2" name="teacher" class="radio" value="teacher2">
                                            <label for="teacher2">Teacher 2</label> &nbsp &nbsp <span class="text-danger"><?php if(isset($errorteacher)) echo $errorteacher; ?></span> </div>
                                        <div>
                                            <br>
                                            <input type="submit" name="btn-marksentry" class="btn btn-lg btn-primary" id="btn-marksentry" value="Enter"> </div>
                                        <br>
                                        <br> 
                                    </fieldset>
                </form>
            </div>
        </div>
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













