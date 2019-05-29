<?php

require "config/config.php";
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <?php include "inc/head.php"; ?>
</head>

<body>
    <?php include "inc/header.php";  ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="4000">
                <img src="img/3.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="4000">
                <img src="img/06.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="4000">
                <img src="img/07.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Include JavaScript CDN -->
    <?php include "inc/js.php"; ?>

    <!-- Include custom JavaScript -->
    <script src="js/qticket.js"> </script>
</body>

</html>