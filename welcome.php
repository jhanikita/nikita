<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- style.css For Custom Styling -->
    <link rel="stylesheet" href="../stylee.css">
    <!-- fontawesome cdn For Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <title>Patent Document Analysis</title>
</head>
<body id='top'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <section class="header_menu" id="header_menu">
        <div class="container-fluid px-0 shadow">
            <img src="assets/Header.jpeg" width="100%" height="400px">
            <nav class="navbar navbar-expand-lg navbar-light  py-3  ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="right: 18px;">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register Here</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="welcome.php">welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.html">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact Us</a>
                        </li>

                    </ul>
                </div>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>

<section class="footer_section pt-5 pb-4" id="footer_section">
            <footer>
                <div class="footer_title">
                    <a href="index.html"><img src="assets/logo.png" width="150px" class="img img-fluid" alt="logo" style="center"></a>
                </div>
                <div class="footer_links">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="category.html">Categories</a></li>
                        <li><a href="login.php">Login</button>
                        <li><a href="register.php">Register here</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                </div>
                <div class="container-fluid">
                    <div class="border-top">
                        <h6 class="text-center mt-3">Copyright ©2021 All rights reserved
                        </h6>
                    </div>
                </div>
            </footer>
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>