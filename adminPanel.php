<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Artisan</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/external.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="./css/admin.css">

    <!-- Google Fonts Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="main bg-p-1 position-relative">

        <!-- Navbar Starts Here -->
        <nav class="custom-nav navbar navbar-dark navbar-expand-lg bgnav-p">
            <div class="container-fluid">
                <a class="navbar-brand nav-effect nav-p-link-color" href="./index.php">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <img src="./image/theatreLogo.png" alt="Theatre_Logo" style="height: 3rem; width:auto;">
                        <p class="m-0 p-0">Studio <span class="logo-span">Artisan</span></p>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-effect nav-p-link-color nav-link" aria-current="page"
                                href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-effect nav-p-link-color nav-link" href="./aboutUs.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-effect nav-p-link-color nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                    <div class="profile-nav d-flex">
                        <a class="nav-effect nav-p-link-color nav-link" href="./login.php">Profile / Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar Ends -->

        <div class="bg-p-5 min-vh-100 admin-background">
            <div class="section">
                <div class="small-section">
                    <h1 class="text-white mb-4">Admin Panel</h1>


                    <!-- Dashboard -->
                    <div class="tiles-container my-4">
                        <div class="row m-0 p-0">
                            <div class="col-md-4 thecol">
                                <div class="tiles h-100">
                                    <div class="small-tiles w-100">
                                        <h5>Tickets Bought Total</h5>
                                        <p>900</p>

                                    </div>
                                    <div class="small-tiles w-100">
                                        <h5>Weekly Tickets Bought</h5>
                                        <p>24</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 thecol">
                                <div class="tiles h-100">
                                    <div class="small-tiles">
                                        <h5>Performer Numbers</h5>
                                        <p>150</p>
                                    </div>
                                    <div class="small-tiles">
                                        <h5>Weekly Registered</h5>
                                        <p>14</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 thecol">
                                <div class="tiles h-100">
                                    <div class="small-tiles">
                                        <h5>Users Registered</h5>
                                        <p>700</p>
                                    </div>
                                    <div class="small-tiles">
                                        <h5>Weekly Registered</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="thecol">
                                <div class="tiles h-100">
                                    <div class="small-tiles w-100">
                                        <h5>Sales Chart</h5>
                                    </div>
                                    <div class="small-tiles w-100">
                                        <h5>Monthly Chart</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Dashboard ends -->



                    <!-- Buttons Stack -->
                    <div class="admin-buttons d-flex gap-2">
                        <div class="admin-button m-0 p-0 w-50">
                            <button class="form-button m-0">Add Shows</button>>
                        </div>
                        <div class="admin-button m-0 p-0 w-50">
                            <a href="./datalisting.php" class="form-button m-0 text-center">Data Listing</a>
                        </div>
                    </div>
                    <!-- Buttons Stack Ends -->



                    <!-- Admin Shows -->
                    <div class="admin-show">
                        <div class="admin-show-form w-100">
                            <form class="form-container w-100" method="POST" action="">
                                <div class="form-box flex-column">
                                    <div class="form-block full-width" style="text-align: center;">
                                        <h2>Add Shows</h2>
                                    </div>
                                    <div class="row gap-0 m-0 p-0">
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Show Name</label>
                                                <input class="text-input" type="text" name="showName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Show Type</label>
                                                <input class="text-input" type="text" name="showType" required>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Show Gengre</label>
                                                <input class="text-input" type="text" name="showGenre" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Show Gengre</label>
                                                <input class="text-input" type="text" name="showGenre" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Day of Show</label>
                                                <!-- <input class="text-input" type="text" name="city" required> -->
                                                <select id="shows-day-admin" class="text-input" name="showDay"
                                                    style="cursor: pointer;" required>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Show Timing</label>
                                                <input class="text-input" type="text" name="showTiming" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Hall Name</label>
                                                <input class="text-input" type="text" name="hallName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label class="text-label">Hall Number</label>
                                                <input class="text-input" type="text" name="hallNo" required>
                                            </div>
                                        </div>

                                        <!-- display message below -->
                                        <div class="col-12 px-1 d-none">
                                            <div class="form-block full-width px-1">
                                                <p class="p-0 m-0"></p>
                                            </div>
                                        </div>
                                        <div class="col-12 px-1">
                                            <div class="form-block full-width px-1">
                                                <button class="form-button" type="submit" name="submit">Add
                                                    Show</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- Admin Shows End -->

                </div>

            </div>
        </div>





        <!-- FOOTER Starts Here -->
        <footer class="bg-footer text-center text-white">
            <div class="w-100 p-0 m-0">
                <div class="row m-0 p-0 py-2">
                    <div class="col-md-4">
                        <div class="footer-width-link mx-auto d-flex flex-column py-4">
                            <ul class="d-flex flex-column p-0">
                                <li><a class="myfooter-links" href="./index.php">Home</a></li>
                                <li> <a class="myfooter-links" href="./aboutUs.php">About Us</a></li>
                                <li><a class="myfooter-links" href="./signup.php">Sign Up</a></li>
                                <li> <a class="myfooter-links" href="./login.php">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column py-4" style="color: rgb(216, 216, 216)">
                            <p>Studio Artisan. Central Group Theatre</p>
                            <p>Shows - Live Performance - Amusement Blend - Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Nisi quisquam vitae fugit cumque, a odit.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center h-100 py-4">
                            <div class="links-here">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fab fa-facebook-f"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fab fa-twitter"></i></a>

                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fab fa-google"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fab fa-instagram"></i></a>

                                <!-- Linkedin -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fab fa-linkedin-in"></i></a>

                                <!-- Github -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>

                    </div>
                    <!-- Section: Social media -->
                </div>
                <div class="bg-footer-bottom text-center p-3">
                    © 2022 Copyright:
                    <a class="myfooter-links" href="./index.php">Studio Artisan</a>
                </div>
            </div>
        </footer>
        <!-- FOOTER Ends -->






    </div>
</body>

<script src="./js/main.js" type="text/javascript"></script>
<script src="./js/ticket.js" type="text/javascript"></script>
<script src="./js/admin.js" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</html>