<!-- Navbar Starts Here -->
<nav class="custom-nav navbar navbar-dark navbar-expand-lg bgnav-p position-sticky top-0" style="z-index: 2;">
    <div class="container-fluid">
        <a class="navbar-brand nav-effect nav-p-link-color" href="./index.php">
            <div class="d-flex align-items-center justify-content-center gap-3">
                <img src="./image/theatreLogo.png" alt="Theatre_Logo" style="height: 3rem; width:auto;">
                <p class="m-0 p-0">Studio <span class="logo-span">Artisan</span></p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-effect nav-p-link-color nav-link myactive" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-effect show-nav nav-p-link-color nav-link" href="#wholeShow">Shows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-effect nav-p-link-color nav-link" href="./aboutUs.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-effect nav-p-link-color nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./login.php">Login</a></li>
                        <li><a class="dropdown-item" href="./signup.php">Sign Up</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                    </ul>
                </li>
            </ul>

            <!-- SPECIAL NAV -->
            <div class="profile-nav d-flex">
                <?php if (!isset($_SESSION['loggedInUser'])) { ?>
                    <a class="nav-effect nav-p-link-color nav-link" href="./login.php">Profile / Login</a>
                <?php } else { ?>
                    <div class="dropdown d-flex align-items-center">
                        <a class="nav-effect nav-p-link-color m-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['loggedInUser'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./viewinfo.php">View Information</a></li>
                            <li>
                                <form class="text-align-center" method="POST" action="">
                                    <button class="dropdown-item" name="logout-submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <!-- SPECIAL NAV END  -->

        </div>
    </div>
</nav>
<!-- Navbar Ends -->