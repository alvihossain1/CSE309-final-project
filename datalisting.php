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

<?php 

if(isset($_POST['logout-submit'])){
    if(isset($_SESSION['loggedInUser']) || isset($_SESSION['userEmail'])){
        unset($_SESSION['loggedInUser']);
        unset($_SESSION['userEmail']);
    }
}

?>

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
                                    <li><form class="text-align-center" method="POST" action="">
                                        <button class="dropdown-item" name="logout-submit">Logout</button>
                                    </form></li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- SPECIAL NAV END  -->
                </div>
            </div>
        </nav>
        <!-- Navbar Ends -->

        <div class="bg-p-5 min-vh-100 admin-background">
            <div class="section">
                <div class="small-section">
                    <h1 class="text-white mb-4">Data Listing</h1>

                    <div class="table-holder text-white">
                        <h3>Shows Table</h3>
                        <div class="table-here overflow-hidden p-0 m-0">
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="table-holder text-white">
                        <h3>Users Table</h3>
                        <div class="table-here overflow-hidden p-0 m-0">
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


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