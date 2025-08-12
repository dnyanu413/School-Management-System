<?php

    error_reporting(0);
    session_start();
    session_destroy();


    if($_SESSION['message']){

        $message=$_SESSION['message'];

        echo "<script type ='text/javascript'>

        alert('$message');

        </script>";
    }







?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style1.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <nav>

    <label class="logo">Sinhgad Spring Dale School</label>

    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="login.php" class="btn btn-success">Login</a></li>
    </ul>

    </nav>

    <div class="section1">
        <label class="img_text">We Teach Student With Care</label>
        <img class="main_img" src="school.png">

    </div>

    <div class="container">

        <div class="row">
            
            <div class="col-md-4">
            <img class="welcome_img" src="playground.jpg">

            </div>

        <div class="col-md-8">
            <h1>Welcome to Sinhgad Spring Dale School</h1>
            <p>
                The Sinhgad Spring Dale School, Pune is one of the most renowned and trusted names in quality education. It is recognized for its holistic approach towards education with moral values and journey towards pursuing excellence!
                Sinhgad Schools began its journey in the year 2000. Our campus is situated amidst the lush green undulating land in a picturesque environment at the heart of nature. We dream of building the 'Ideal Learning Environment' which can catalyze holistic education with massive play fields, spacious airy classrooms, laboratories, activity rooms for English, Mathematics, Science, Social Science and regional languages.
        </p>

        </div>

      </div>
        
    </div>

        <center>
            <h1>Our Teachers</h1>
        </center>

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <img class="teacher" src="teacher1.png">
                    <p>in a vibrant, acedemically challenging, and encouraging environment where manifold viewpoint are prized and celebrated.
                     </p>
                </div>
        
                <div class="col-md-4">
                    <img class="teacher" src="teacher2.png">
                     <p>in a vibrant, acedemically challenging, and encouraging environment where manifold viewpoint are prized and celebrated. 
                     </p>
                </div>

                <div class="col-md-4">
                    <img class="teacher" src="teacher3.png">
                     <p>in a vibrant, acedemically challenging, and encouraging environment where manifold viewpoint are prized and celebrated.
                      </p>
            </div>

        </div>

    </div>



        <center>
            <h1>Our Courses</h1>
        </center>

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <img class="teacher" src="web_development.png">
                     <h3>Web Development</h3>
                </div>
        
                <div class="col-md-4">
                    <img class="teacher" src="graphic_design.png">
                     <h3>Graphic Design</h3>
                </div>

                <div class="col-md-4">
                    <img class="teacher" src="digital_marketing.png">
                     <h3>Marketing</h3>
            </div>

        </div>

    </div>

        <center>
            <h1 class="adm">Admission Form</h1>
        </center>

        <div align="center" class="Admission_form">
            <form action="data_check.php" method="POST">
                <div class="adm_inp">
                    <label class="label_text">Name</label>
                    <input class="inp" type="text" name="name">
                </div>

                <div class="adm_inp">
                    <label class="label_text">Email</label>
                    <input class="inp" type="text" name="email">
                </div>

                <div class="adm_inp">
                    <label class="label_text">Phone</label>
                    <input class="inp" type="text" name="phone">
                </div>

                <div class="adm_inp">
                    <label class="label_text">Message</label>
                    <textarea class="inp_m" name="message"></textarea>
                </div>
                 <div class="adm_inp">
                
                    <input type="submit"class="btn btn-primary" id="submit" value="apply" name="apply">
                </div>
            </form>
            
        </div>


        <footer class="footer_text">
            <h3>All @copyright reserved by web tech knowledge</h3>
        </footer>
</body>
</html> 