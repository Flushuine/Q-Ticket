<?php require "config/config.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <?php include "inc/head.php"; ?>
</head>

<body>
    <?php include "inc/header.php";  ?>
    <div class="container">
        <h1 class="text-warning mt-3">Register</h1>
        <hr>
        <form action="process_register.php" method="POST" class="mt-3">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Full name" name="name" required>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male"
                                required>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female"
                                required>
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputDate" class="col-sm-2 col-form-label">Date of birth</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputDate" name="birth_date" size="10" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPhone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone number"
                        name="phone_number" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputAddress" placeholder="Address" name="address"
                        required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword1" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword1" placeholder="Password"
                        name="password1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword2" class="col-sm-2 col-form-label">Verify Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Re-enter your password"
                        name="password2" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </div>
            </div>
        </form>

        <!-- Error handling with modal -->
        <!-- Modal Error 1 -->
        <div class="modal fade bd-example-modal-sm" id="err1" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="mySmallModalLabel" class="modal-title h5">ERROR!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Password did not match!
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Error 2 -->
        <div class="modal fade bd-example-modal-sm" id="err2" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="mySmallModalLabel" class="modal-title h5">ERROR!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Yout birth of date is incorrect!
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Error 3 -->
        <div class="modal fade bd-example-modal-sm" id="err3" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="mySmallModalLabel" class="modal-title h5">ERROR!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Failed to create account!
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Include JavaScript CDN -->
    <?php include "inc/js.php"; ?>

    <!-- Include custom JavaScript -->
    <script src="js/qticket.js"> </script>
</body>

</html>