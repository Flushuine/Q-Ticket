<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand border border-warning px-2 py-2 text-warning" href="#">Q-Ticket</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" id="home">
                <a class="nav-link text-light" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" id="np">
                <a class="nav-link text-light" href="nowplaying.php">Now Playing</a>
            </li>
            <li class="nav-item" id="cs">
                <a class="nav-link text-light" href="#">Coming Soon</a>
            </li>
            <li class="nav-item" id="thea">
                <a class="nav-link text-light" href="#">Theaters</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">About Us</a>
            </li>
        </ul>
        <div class="navbar-nav justify-content-end">
            <li class="nav-item mr-2" id="login">
                <?php
                if(empty($_SESSION['user']))
                {
                    echo "<button type='button' class='btn border-warning text-warning nav-link' data-toggle='modal'
                    data-target='#modalLogin'>Log In</button>";
                }
                elseif(isset($_SESSION['user']))
                {
                    echo "
                    <div class='dropdown'>
                        <button class='btn btn-dark dropdown-toggle' type='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <i class='fa fa-lg fa-user'></i>
                        </button>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenu2'>
                            <button class='dropdown-item' type='button'>Action</button>
                            <button class='dropdown-item' type='button'>Another action</button>
                            <a href='logout.php' id='logout' data-target='#modalLogout' data-toggle='modal'><button class='dropdown-item' type='button'>Logout</button></a>
                        </div>
                    </div>
                    ";
                }
                ?>
            </li>
        </div>
    </div>
</nav>

<!-- Modal Log in -->
<div class="container">
    <div class="modal fade" id="modalLogin" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h5">Log in</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="process_login.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <p>Don't have an account? <a href="register.php">Register here!</a></p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="login">Log in</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Log out -->
<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-exclamation-triangle fa-lg"></i>
                    Confirm logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Log out</button>
            </div>
        </div>
    </div>
</div>