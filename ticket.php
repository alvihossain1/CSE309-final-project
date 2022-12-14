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
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php include "./zconfig.php" ?>">
    <link rel="stylesheet" type="text/css" href="./css/external.css?v=<?php include "./zconfig.php" ?>">
    <link rel="stylesheet" type="text/css" href="./css/form.css?v=<?php include "./zconfig.php" ?>">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<?php include "./components/module/sessionHolder.php" ?>
<?php include "./components/module/privateAccess.php" ?>


<body>
    <div class="main bg-p-1 position-relative">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->

        <div class="bg-p-5 min-vh-100">
            <div class="section">
                <div class="small-section">
                    <div class="row text-white">                       
                        <div class="col-md-6 p-0">
                            <div class="d-flex flex-column align-items-center justify-content-center bg-p-2 p-3 h-100">
                                <h1 class="">Get Tickets</h1>
                                <div class="w-50 d-flex flex-column gap-3">
                                    <div class="same text-center">
                                        <p>Show Name: <span style="color: goldenrod;" id="ticket-showName"></span></p>
                                        <p>Show Date: <span style="color: goldenrod;" id="ticket-showDate"></span></p>
                                        <p>Show Time: <span style="color: goldenrod;" id="ticket-showTime"></span></p>
                                        <p>Ticket Price: <span style="color: goldenrod;" id="ticket-showTicketPrice"></span></p>
                                        <p>Total Amount: <span style="color: deeppink;" id="ticket-totalAmount"></span></p>
                                    </div>
                                    <div class="same">
                                        <p>Select No. of Tickets</p>
                                        <div class="d-flex w-100 bg-dark">
                                            <button id="minus-button" class="mybutton w-100 button-p-sidebar-bg py-2">-</button>
                                            <div class="w-100 d-flex align-items-center justify-content-center">
                                                <p id="mid-value" class="m-0">1</p>
                                            </div>
                                            <button id="plus-button" class="mybutton w-100 button-p-sidebar-bg">+</button>
                                        </div>
                                    </div>
                                    <div class="same">
                                        <p>Select Venue</p>
                                        <select id="ticket-venueSelection" class="w-100 p-2 bg-p-1 text-white" style="cursor: pointer;">
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Chittagong">Chittagong</option>
                                        </select>
                                    </div>
                                    <div class="same">
                                        <p>Select Payment Option</p>
                                        <select id="ticket-paymentMethod" class="w-100 p-2 bg-p-1 text-white" style="cursor: pointer;">
                                            <option value="Bank">Bank</option>
                                            <option value="Bkash">Bkash</option>
                                            <option value="Nagad">Nagad</option>
                                        </select>
                                    </div>
                                    <div class="same mt-3">
                                        <p id="text-message">Select Tickets to Purchase</p>
                                    </div>
                                    <div class="same mt-3">
                                        <button id="confirm-tickets" class="mybutton w-100 button-p-sidebar-bg p-2">Confirm Tickets</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1 image-hover position-relative">
                                <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(200, 200, 200, 0.15); z-index: 1;"></div>
                                <img class="small-image grid-image" src="./image/ticket.jpg"  style="height: 100%;">
                            </div>
                        </div>                                                                     
                    </div>
                </div>
    
            </div>
        </div>





        <!-- FOOTER Starts Here -->
        <?php include './components/interface/footer.php' ?>
        <!-- FOOTER Ends -->






    </div>
</body>

<script src="./js/ticket.js?v=<?php include "./zconfig.php"?>" type="text/javascript"></script>
<script src="./controller/js/insertUserShow.js?v=<?php include "./zconfig.php"?>" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</html>