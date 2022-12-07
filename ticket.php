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
                                        <p>Show Name: <span style="color: goldenrod;" id="ticketShowname"></span></p>
                                        <p>Show Time: </p>
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
                                        <p>Select Payment Option</p>
                                        <select class="w-100 p-2 bg-p-1 text-white" style="cursor: pointer;">
                                            <option>Bank</option>
                                            <option>Bkash</option>
                                            <option>Nagad</option>
                                        </select>
                                    </div>
                                    <div class="same mt-3">
                                        <button id="confirm-tickets" class="mybutton w-100 button-p-sidebar-bg p-2">Confirm Tickets</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1 image-hover position-relative">
                                <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(255, 255, 255, 0.1); z-index: 1;"></div>
                                <img class="small-image grid-image" src="https://c8.alamy.com/comp/2BG784X/retro-party-cinema-invitation-vector-tickets-set-vector-golden-tickets-isolated-on-black-background-illustration-2BG784X.jpg"  style="height: 60vh;">
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

<script src="./js/ticket.js" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</html>