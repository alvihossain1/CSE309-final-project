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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/external.css">

    <!-- Google Fonts Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <div class="main bg-p-5 position-relative">

        <!-- Navbar Starts Here -->
        <nav class="custom-nav navbar navbar-dark navbar-expand-lg bgnav-p">
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
                            <a class="nav-effect nav-p-link-color nav-link" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-effect nav-p-link-color nav-link myactive" href="./aboutUs.php">About Us</a>
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


        <!-- Abous Us Starts -->
        <div class="text-white">
            <div class="section">
                <div class="small-section">
                    <p class="heading-text heading-p-text" style="font-size: 2.5rem;">About Us</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo nihil eligendi commodi possimus numquam aut fugiat aperiam saepe, itaque, non exercitationem enim expedita illo delectus quo. Excepturi iste officiis asperiores at maiores ea id iusto dignissimos. Ipsum, consectetur reiciendis quis quibusdam consequuntur deserunt temporibus iusto ipsam repellat facilis rem vero, consequatur cumque expedita provident sit nesciunt maxime harum porro pariatur, reprehenderit nulla soluta ex fugiat! Et nisi aut consequuntur omnis distinctio tempore reiciendis delectus itaque, saepe commodi illo accusamus id beatae aspernatur quam possimus facere rerum porro incidunt veritatis iusto inventore veniam expedita? Rerum fugit vitae repudiandae quos nesciunt!</p>
                </div>

            </div>
        </div>
        <!-- Abous Us Ends Here -->



        <!-- Grid Images Starts -->
        <div class="min-vh-100">
            <div class="section">
                <div class="small-section">
                    <div class="row text-white">
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/show3.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text-section">
                                <h1>Songs</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quos quia! Aperiam delectus obcaecati suscipit id deserunt consectetur quisquam iste soluta perferendis ea, vero odio distinctio corporis excepturi voluptatibus nemo.</p>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text-section">
                                <h1>Performance</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quos quia! Aperiam delectus obcaecati suscipit id deserunt consectetur quisquam iste soluta perferendis ea, vero odio distinctio corporis excepturi voluptatibus nemo.</p>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/show2.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/show1.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text-section">
                                <h1>Cultural Theme</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quos quia! Aperiam delectus obcaecati suscipit id deserunt consectetur quisquam iste soluta perferendis ea, vero odio distinctio corporis excepturi voluptatibus nemo.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Grid Images Ends Here -->



        <!-- Contact Us Starts -->
        <div class="text-white">
            <div class="section">
                <div class="small-section">
                    <p class="heading-text heading-p-text">Contact Us</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus libero aperiam, assumenda corporis enim, alias voluptatibus aspernatur corrupti magni nostrum distinctio. Ab commodi veritatis possimus quidem velit nihil necessitatibus natus suscipit. Earum optio, nisi assumenda at, quia a nostrum laboriosam voluptatum accusantium dolorum accusamus ipsum voluptatem, molestias beatae sed soluta.</p>
                    <p>Contact us to get to know more details about the show and venue, Contact No: +1-202-555-0113</p>
                </div>
            </div>
        </div>
        <!-- Contact Us Ends Here -->



        <!-- Venue Us Starts -->
        <div class="text-white">
            <div class="section">
                <div class="small-section">
                    <div class="all-texts">
                        <p class="heading-text heading-p-text">Venue</p>
                        <p>Our venue is in USA, Texas. We have world wide branches in many other countries - France, Italy, Germany, Poland, Spain and countries in Asia Continent.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2 pb-2">
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://theculturetrip.com/wp-content/uploads/2021/03/pedro-lastra-nyvq2juw4_o-unsplash.jpg">
                        </div>
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://www.expatica.com/app/uploads/sites/5/2014/05/france-1920x1080.jpg">
                        </div>
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-g25sDBFgulX5BISHLSClfG_hSHgPqVxdGQ&usqp=CAU">
                        </div>
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://www.planetware.com/wpimages/2020/01/germany-in-pictures-beautiful-places-to-photograph-speicherstadt-hamburg.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Venue Us Ends Here -->



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
                            <p>Shows - Live Performance - Amusement Blend - Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quisquam vitae fugit cumque, a odit.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center h-100 py-4">
                            <div class="links-here">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                                <!-- Linkedin -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                                <!-- Github -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
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

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>