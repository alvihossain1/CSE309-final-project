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
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php include "./zconfig.php" ?>">
    <link rel="stylesheet" type="text/css" href="./css/external.css?v=<?php include "./zconfig.php" ?>">

    <!-- Google Fonts Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- STYLESSSS -->
    <style>
        .book-img {
            width: 10rem;
            height: 100%;
            border-radius: 0.2rem;
            object-fit: cover;
            object-position: center;
            transition: 0.4s ease;
            cursor: pointer;
        }

        .book-img:hover{
            transform: scale(1.05);
        }

        .book {
            margin: 1rem;
            padding: 0 0.5rem;
        }

        .border-top {
            border-top: 1px solid #EEEEEE !important;
            margin-top: 1rem;
            padding-top: 0.5rem;
        }

        .filled-fonts{
            font-weight: 600;
        }

    </style>
    <!-- STYLESSSS -->


</head>

<?php include "./components/module/sessionHolder.php" ?>
<?php include "./components/module/privateAccess.php" ?>




<?php


$conn = mysqli_connect("localhost", "root", "", "theatre_db");

if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}





$loggedInUser = $_SESSION['userEmail'];
$sql = "SELECT * FROM user_purchase_t WHERE email = '$loggedInUser'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) === 0) {
    $text = "";
}



mysqli_close($conn);


?>




<body>
    <div class="main position-relative bg-p-4">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->


        <?php if (mysqli_num_rows($result) === 0) { ?>
            <div class="min-vh-100">
                <h1 class="text-center my-3" style="color: goldenrod;">You've No Purchased Tickets.</h1>;
            </div>

        <?php } else { ?>

            <!-- CONTAINER CARTS START -->
            <div class="container px-4 py-5 mx-auto text-white min-vh-100 filled-fonts">
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
                        <h4 class="heading">Purchased Tickets</h4>
                    </div>
                    <div class="col-7">
                        <div class="row text-right">
                            <div class="col-4">
                                <p class="mt-2">Ticket Price</p>
                            </div>
                            <div class="col-4">
                                <p class="mt-2">Total Amount</p>
                            </div>
                            <div class="col-4">
                                <p class="mt-2">Show Date & Time</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- EACH STARTS -->
                <?php foreach ($result as $show) { ?>
                    <div class="row d-flex justify-content-center border-top">
                        <div class="col-5">
                            <div class="row">
                                <div class="book">
                                    <div class="overflow-hidden">
                                        <img src="<?php echo $show['showUrl'] ?>" class="book-img">
                                    </div>
                                    <div class="text-left">
                                        <p class="m-0 mt-2" style="color: goldenrod;"><?php echo $show['showName'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-auto col-7">
                            <div class="row ">
                                <div class="col-4">
                                    <p class="mob-text"><?php echo $show['showTicketPrice'] ?></p>
                                </div>
                                <div class="col-4">
                                    <div class="row d-flex justify-content-end px-3">
                                        <p><?php echo $show['showAmount'] ?></p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <p class="mob-text"><?php echo $show['showDate'] ?> at <?php echo $show['showTime'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- EACH END -->
            <?php } ?>
            <!-- CONTAINER CARTS END -->










            </div>
            <!-- CONTAINER CARTS END -->


            <!-- FOOTER Starts Here -->
            <?php include './components/interface/footer.php' ?>
            <!-- FOOTER Ends -->





    </div>
    <!-- Main DIV Ends -->
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>