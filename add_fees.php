 <?php
session_start();
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Fees</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.aadmin.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/Group%201.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   </head>
  <body>
    <div class="page">
      <?php
        include "includes/navbar.php";
        include "includes/sidebar.php";
        /*include "includes/add_fees.php";*/
        ?>

        <section  id="fees"> 
          <h2 style="margin-top:-10px ; margin-left: 15px;">Add New Fees</h2>
          <hr class="line"> <br>

          <h6 style="margin-top:-10px ; margin-left: 15px;">Fees Details</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>


           
            

             <?php

                        if (isset($_GET['action']) && $_GET['action'] == "add_fees_student.php") {
                            include 'includes/add_fees_student.php';
                        }elseif(isset($_GET['action']) && $_GET['action'] == "add_fees_depart.php"){
                            include 'includes/add_fees_depart.php';
                        }
                        else{
                            /*echo "error";*/
                            include 'includes/add_fees.php';
                        }

            ?> 


        

         


     

     

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="vendor/popper.js/umd/popper.min.js"> </script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
                <script src="js/charts-home.js"></script>
        <script src="js/charts-custom.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <!-- Main File-->
        <script src="js/front.js"></script>
        <script src="js/main.js"></script>
        </body>


       </html>