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
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php include "./zconfig.php"?>">
    <link rel="stylesheet" type="text/css" href="./css/external.css?v=<?php include "./zconfig.php"?>">

    <!-- Google Fonts Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php include "./components/module/sessionHolder.php" ?>

<?php 
    

    $conn = mysqli_connect("localhost", "root", "", "theatre_db");

    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    }

    $text = "";

    

    

        $sql = "SELECT * FROM shows_t";
        $result = mysqli_query($conn, $sql);

  

    mysqli_close($conn);

    
?>

<body>
    <div class="main position-relative">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->



        <!-- Slider Starts Here -->
        <?php include './components/interface/slider.php' ?>
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

                        <?php foreach ($result as $show) { ?>
                            <div class="show-item show-p-item-bg mybg-dark">
                                <div class="image-holder">
                                    <img class="image" src="<?php echo $show['showUrl']?>" alt="poster_image">
                                </div>
                                <div class="text-holder">
                                    <p class="text-center mb-0"><?php echo $show['showName'] ?></p>
                                    <div class="show-hidden-box d-none">
                                        <p class="h-showID text-center mb-0"><?php echo $show['showID'] ?></p>
                                        <p class="h-showName text-center mb-0"><?php echo $show['showName'] ?></p>
                                        <p class="h-showGenre text-center mb-0"><?php echo $show['showGenre'] ?></p>
                                        <p class="h-showDate text-center mb-0"><?php echo $show['showDate'] ?></p>
                                        <p class="h-showTime text-center mb-0"><?php echo $show['showTime'] ?></p>
                                        <p class="h-showUrl text-center mb-0"><?php echo $show['showUrl'] ?></p>
                                        <p class="h-showDescription text-center mb-0"><?php echo $show['showDescription'] ?></p>
                                        <p class="h-showVenue text-center mb-0"><?php echo $show['showVenue'] ?></p>
                                        <p class="h-showVenueDetails text-center mb-0"><?php echo $show['showVenueDetails'] ?></p>
                                        <p class="h-showTicketPrice text-center mb-0"><?php echo $show['showTicketPrice'] ?></p>
                                        <p class="h-hallName text-center mb-0"><?php echo $show['hallName'] ?></p>
                                    </div>
                                </div>
                                <div class="button-holder w-100 d-flex">
                                    <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 ticketsBtn">Get Tickets</button>
                                    <button class="mybutton button-p-bg btn btn-sm w-50 rounded-0 detailsBtn">Details</button>
                                </div>
                            </div>
                        <?php } ?>



                    </div>
                </div>



            </div>
        </div>
        <!-- Show Section Ends -->



        <!-- Grid Section Starts Here -->
        <?php include './components/interface/theatreOverviewGrid.php' ?>
        <!-- Grid Section Ends -->


        <!-- Sidebar Starts Here -->
        <?php include './components/interface/showSidebar.php' ?>
        <!-- Sidebar Ends -->

        <!-- Modal Starts Here-->
        <div class="modal position-fixed vh-100 start-0 end-0 top-0 bottom-0 justify-content-center align-items-center" style="z-index: 2;">
            <div class="modal-box mytransition position-relative overflow-auto scrollbar-none">
                <div class="row m-0 bg-p-1 modal-border modal-shadow">
                    <div class="col-lg-6 m-0 p-0">
                        <div class="modal-image-holder">
                            <img class="modal-image" src="">
                        </div>
                    </div>
                    <div class="col-lg-6 m-0 p-0">
                        <div class="modal-texts d-flex flex-column align-items-center py-4 w-100">
                            <h1 class="modal-show-heading mb-5"><span id="m-showName" ></span></h1>
                            <p>Genre: <span id="m-showGenre"></span></p>
                            <p>Ticket Price: <span id="m-showTicketPrice"></span></p>
                            <p>Show Date: <span id="m-showDate"></span> </p>
                            <p>Show Time: <span id="m-showTime"></span> </p>
                            <p>Hall Name: <span id="m-hallName"></span> </p>
                            <p>Venue: <span id="m-showVenue"></span></p>
                            <p>Venue Details: <span id="m-showVenueDetails"></span></p>
                            <div class="hidden-box d-none">
                                <p id="m-showUrl"></p>
                                <p id="m-showID"></p>
                                <p id="m-showDescription"></p>                                
                                <p id="m-userEmail"><?php if(isset($_SESSION['userEmail'])){echo $_SESSION['userEmail'];}; ?></p>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex position-sticky end-0 bottom-0 start-0 w-100">
                    <button id="modalClosebtn" class="mybutton w-100 py-2">Close</button>
                    <?php if (isset($_SESSION['loggedInUser'])) { ?>
                        <button name="purchase-ticket-button" id="goToPaymentBtn" class="mybutton w-100 py-2 modal-go-btn">Purchase Tickets</button> 
                    <?php }else { ?>
                        <a href="./login.php" class="mybutton w-100 py-2 modal-go-btn text-white text-center">Login To Purchase</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Modal ends -->




        <!-- FOOTER Starts Here -->
        <?php include './components/interface/footer.php' ?>
        <!-- FOOTER Ends -->





    </div>
    <!-- Main DIV Ends -->
</body>

<script src="./js/index.js?v=<?php include "./zconfig.php"?>" type="text/javascript"></script>
<script src="./js/modal.js?v=<?php include "./zconfig.php"?>" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>