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

    <div class="container pt-5" style="width: 50rem;">
        <div class="row">
            <?php
            $film = listFilm();

            while($data = $film->fetch(PDO::FETCH_ASSOC))
            {?>
            <div class="col">
                <div class="card border-left border-top border-right border-warning rounded border-3 text-center mt-5">
                    <img src="<?= $data['image'] ?>" alt="" class="card-img" style="height: 450px;">
                    <div class="card-footer bg-dark border-3 border-warning">
                        <a href="buy_ticket.php?filmID=<?= $data['filmID'] ?>" class="text-warning">Buy Ticket</a>
                    </div>
                </div>
            </div>

            <?php 
            }
            ?>
        </div>
    </div>

    <!-- Include JavaScript CDN -->
    <?php include "inc/js.php"; ?>

    <!-- Include custom JavaScript -->
    <script src="js/qticket.js"> </script>
</body>

</html>