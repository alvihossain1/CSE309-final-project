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
    <div class="main position-relative">











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












        <!-- Slider Starts Here -->
        <div class="myslider">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-image" style="background-image: linear-gradient(to right, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), 
                            url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/horse-movies-1553108662.jpg);">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cinematic Shows</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolorum dolores explicabo id aut quibusdam?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-image" style="background-image: linear-gradient(to right, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), 
                            url(https://img.freepik.com/free-vector/movie-theater-cinema-hall-with-wide-screen-seats_107791-16264.jpg?w=2000);">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Now Showing</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fuga ut sequi distinctio eligendi at?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-image" style="background-image: linear-gradient(to right, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), 
                            url(https://img.freepik.com/premium-vector/cinema-landing-page-movie-concert-hall-with-rows-armchairs-luminous-screen-interior_9209-6258.jpg?w=2000);">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Get Your Tickets</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos laborum cumque vitae fuga aliquid. Quisquam?</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Slider Ends -->






        <!-- Show Section Starts Here -->
        <div id="wholeShow" class="show-p-section-bg font-p pb-5">
            <div class="section">
                <div class="show-heading heading-text heading-p-text">
                    <p class="m-0 p-0">Get Show Details</p>
                </div>
                <div class="show-view">
                    <div class="heading-p-text show-heading" style="font-size: 1.2rem;">
                        <p>Now Showing</p>
                    </div>
                    <div class="show-container d-flex flex-wrap justify-content-center justify-content-md-start m-0 p-0">

                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://www.dreamfly.co.uk/wp-content/uploads/2020/03/treasureislandhotrock.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Treasure Island</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://www.subplotstudio.com/resources/images/productions/193/7974/art.overview.437.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">AIDA Show</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://retrographik.com/wp-content/uploads/2014/12/The-BIG-Banner-Show-the-Girl-From-Paris-Vintage-Theater-Poster-585x909.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">80's Big Banner</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://www.subplotstudio.com/wp-content/themes/x-child/images/popular-titanic.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Titanic The Musical</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/talent-show-flyer-design-template-0028b94014f5cee6adca046438bc5a5e_screen.jpg?ts=1636991394" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">The Talent Show</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://img.freepik.com/free-vector/amazing-circus-show-poster_1284-12473.jpg?w=2000" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Prictus Mini Circus</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://img.freepik.com/free-vector/vintage-colored-theatre-advertising-poster_1284-39338.jpg?w=2000" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Classic Comic</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://c8.alamy.com/comp/B7ECDW/broadway-theater-billboard-sign-times-square-new-york-city-usa-B7ECDW.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Legally Blonde</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://www.subplotstudio.com/resources/images/productions/3272/8126/art.sample.437.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Clue</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://ludusyouththeatregroup.files.wordpress.com/2015/02/aladdin-show-poster2.jpg?w=481&h=622" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Aladdin The Show</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/a43e4e23589085.560484311021b.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Sky Hard</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
                        <div class="show-item show-p-item-bg mybg-dark">
                            <div class="image-holder">
                                <img class="image" src="https://i.pinimg.com/564x/9e/30/7f/9e307fb190f45327703606c2446fda1d.jpg" alt="poster_image">
                            </div>
                            <div class="text-holder">
                                <p class="text-center mb-0">Man La Mancha</p>
                            </div>
                            <div class="button-holder w-100 d-flex">
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                            </div>
                        </div>
















                    </div>
                </div>



            </div>
        </div>
        <!-- Show Section Ends -->











        <!-- Sidebar Starts Here -->
        <div class="sidebar sidebar-p-bg position-absolute top-0 end-0 bottom-0 text-white position-fixed overflow-hidden">
            <div class="sidebar-inner overflow-auto h-100">
                <div class="side-image-holder">
                    <img class="side-image" src="">
                </div>
                <div class="side-show-details mb-5">
                    <p class="showName" style="font-size: 1.6rem;"></p>
                    <p class="showGenre"><span class="text-warning">Genre: </span></p>
                    <p class="showTicketPrice"><span style="color: rgb(240, 74, 255);">Ticket Price: </span></p>
                    <p class="showSeats"><span style="color: rgb(164, 131, 255);">Seats Available: </span></p>
                    <p class="showDetails"><span class="text-info">Description: </span>Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Possimus enim dignissimos saepe a necessitatibus praesentium
                        obcaecati impedit! Labore culpa, doloribus pariatur adipisci accusamus, tempora sapiente
                        quibusdam et enim alias animi. Ipsum optio repellat iusto libero, minus adipisci.</p>
                </div>
            </div>

            <button class="mybutton button-p-sidebar-bg position-absolute end-0 bottom-0 start-0 py-2 sidebar-close" style="font-size: 1.1rem;">
                <p>Close</p>
            </button>
        </div>
        <!-- Sidebar Ends -->









        <!-- Grid Section Starts Here -->
        <div class="min-vh-100 bg-p-4 pt-3 pb-5">
            <div class="section">
                <div class="small-section">
                    <div class="heading-text heading-p-text my-3">
                        <p class="m-0 p-0">Our Theatre Overview</p>
                    </div>
                    <div class="row text-white">
                        <div class="col-lg-8 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" style="object-position: bottom;" src="./image/pic5.webp">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/pic6.webp">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/pic1.jpg">
                            </div>
                        </div>
                        <div class="col-lg-5 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/pic2.jpg">
                            </div>
                        </div>
                        <div class="col-lg-3 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/pic3.png">
                            </div>
                        </div>
                        <div class="col-12 p-1">
                            <div class="text-section hover-here">
                                <h1 class="heading-p-text">Theatre</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum veniam iure modi beatae dolorum voluptatibus quo libero? Nulla vitae tempora blanditiis officiis, cum numquam! Quae consequuntur reprehenderit odit tempora, ducimus eum voluptates, possimus voluptate ipsa quasi dolorem? Omnis natus tenetur fugiat adipisci harum! At nesciunt soluta amet laudantium maiores quas.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Grid Section Ends -->






        <!-- Modal Starts Here-->
        <form method="POST" action="">
            <div class="modal position-fixed vh-100 start-0 end-0 top-0 bottom-0 justify-content-center align-items-center" style="z-index: 2;">
                <div class="modal-box mytransition position-relative overflow-auto scrollbar-none">
                    <div class="row m-0 bg-p-1 modal-border modal-shadow">
                        <div class="col-lg-6 m-0 p-0">
                            <div class="modal-image-holder">
                                <img class="modal-image" src="https://www.subplotstudio.com/resources/images/productions/193/7974/art.overview.437.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 m-0 p-0">
                            <div class="modal-texts d-flex flex-column align-items-center py-4 w-100">
                                <h1 class="modal-show-heading mb-5"></h1>
                                <p>Ticket Price: 650</p>
                                <p>Show Time: 12:00 - 1:00 PM</p>
                                <p>Show Duration: 1hr</p>
                                <p>Seats Available: 25</p>
                                <p>Hall Name: xxx</p>
                                <p>Hall Number: 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex position-sticky end-0 bottom-0 start-0 w-100">
                        <a id="modalClosebtn" class="mybutton w-100 py-2" style="cursor: pointer; text-align: center;">Close</a>
                        <button type="submit" name="submit" id="goToPaymentBtn" class="mybutton w-100 py-2">Purchase Tickets</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal ends -->




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
    <!-- Main DIV Ends -->
</body>

<script src="./js/main.js" type="text/javascript"></script>
<script src="./js/modal.js" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>