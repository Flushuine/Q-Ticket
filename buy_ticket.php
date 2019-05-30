<?php

require "config/config.php";
session_start();

$filmID = filter_input(INPUT_GET, 'filmID', FILTER_SANITIZE_NUMBER_INT);
$filmID = str_replace('-', '', $filmID);

$data = detailFilm($filmID);

//echo $data['film_name'];

?>

<!doctype html>
<html lang="en">

<head>
    <?php include "inc/head.php"; ?>
</head>

<body>
    <?php include "inc/header.php";  ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex">
                    <div class="border rounded border-2 border-warning mt-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="img/john-wick.jpg" alt="" class="card-img">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <table class="table table-borderless table-sm mt-4 ml-3" style="overflow: hidden;">
                            <tr>
                                <td scope="col" colspan="4">
                                    <h5><?= $data['film_name'] ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    Genre
                                </td>
                                <td scope="col" colspan="4">
                                    <?= $data['genre'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    Duration
                                </td>
                                <td scope="col" colspan="4">
                                    <?= $data['duration'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    Director
                                </td>
                                <td scope="col" colspan="4">
                                    <?= $data['director'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    Synopsis
                                </td>
                                <td scope="col">
                                    <div style="height: 20px; overflow: auto;">
                                        <p>
                                            <a data-toggle="collapse" href="#synopsis" role="button"
                                                aria-expanded="false" aria-controls="synopsis">
                                                Click here
                                            </a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">

                                </td>
                                <td colspan="4">
                                    <div class="collapse" id="synopsis" style="width: 480px;">
                                        <div class="card card-body">
                                            <?= $data['synopsis'] ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">
                                    Score
                                </td>
                                <td scope="col">

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <?php
            $col = 3;
            $rowCount = 0;
            $cinema = cinema();

            while($data = $cinema->fetch(PDO::FETCH_ASSOC))
            {
                ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['cinema_name'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $data['address'] ?></h6>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <?php 
                $rowCount++;
                if($rowCount % $col == 0) { echo '</div><div class="row">'; }
            }
            ?>
        </div>

        <!-- Include JavaScript CDN -->
        <?php include "inc/js.php"; ?>

        <!-- Include custom JavaScript -->
        <script src="js/qticket.js"> </script>
</body>

</html>