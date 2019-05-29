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

    <div class="card text-center" style="width: 18rem;">
        <img src="img/john-wick.jpg" alt="" class="card-img">
        <div class="card-footer bg-dark">
            <a href="" class="text-warning">Buy Ticket</a>
        </div>
    </div>

    <!-- Include JavaScript CDN -->
    <?php include "inc/js.php"; ?>

    <!-- Include custom JavaScript -->
    <script src="js/qticket.js"> </script>
</body>

</html>