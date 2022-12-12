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
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="./css/admin.css">

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
if (!isset($_SESSION['loggedInUser']) && !isset($_SESSION['loggedInAdmin'])) {

    header('Location: adminLogin.php');
}

// SESSION LOGOUT
if (isset($_POST['logout-submit'])) {
    if (isset($_SESSION['loggedInUser']) || isset($_SESSION['userEmail']) || isset($_SESSION['loggedInAdminEmail'])) {
        unset($_SESSION['loggedInUser']);
        unset($_SESSION['userEmail']);
        unset($_SESSION['loggedInAdminEmail']);
        header('Location: adminLogin.php');
    }
}


?>


<?php


$conn = mysqli_connect("localhost", "root", "", "theatre_db");

if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}

$text = "";

$sql = "SELECT * FROM shows_t";
$result_shows = mysqli_query($conn, $sql);
$total_shows = mysqli_num_rows($result_shows);

$sql = "SELECT * FROM user_t";
$result_user = mysqli_query($conn, $sql);
$total_users = mysqli_num_rows($result_user);

$sql = "SELECT * FROM user_purchase_t";
$result_purchased = mysqli_query($conn, $sql);
$total_purchased = mysqli_num_rows($result_purchased);




mysqli_close($conn);


?>

<body>
    <div class="main bg-p-1 position-relative">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/admin/adminNavbar.php" ?>
        <!-- Navbar Ends Here -->



        <div class="bg-p-5 min-vh-100 admin-background">
            <div class="section overflow-auto">
                <div class="tabs-holder-custom text-white">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Show Name Listing</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Users Table Listing</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Purchased Tickts Listing</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="table-holder text-white">
                                <h3>Shows Table</h3>
                                <div class="table-here overflow-auto p-0 m-0">
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Show ID</th>
                                                <th scope="col">Show Name</th>
                                                <th scope="col">Show Genre</th>
                                                <th scope="col">Show Date</th>
                                                <th scope="col">Show Time</th>
                                                <th scope="col">Show Venue</th>
                                                <th scope="col">Show Ticket Price</th>
                                                <th scope="col">Hall Name</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $index = 1 ?>
                                            <?php foreach ($result_shows as $show) { ?>
                                                <tr>
                                                    <th scope="row"><?php echo $index++ ?></th>
                                                    <td><?php echo $show['showID'] ?></td>
                                                    <td><?php echo $show['showName'] ?></td>
                                                    <td><?php echo $show['showGenre'] ?></td>
                                                    <td><?php echo $show['showDate'] ?></td>
                                                    <td><?php echo $show['showTime'] ?></td>
                                                    <td><?php echo $show['showVenue'] ?></td>
                                                    <td><?php echo $show['showTicketPrice'] ?></td>
                                                    <td><?php echo $show['hallName'] ?></td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="table-holder text-white">
                                <h3>Users Table</h3>
                                <div class="table-here overflow-auto p-0 m-0">
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Zip</th>
                                                <th scope="col">Gender</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $index = 1 ?>
                                            <?php foreach ($result_user as $user) { ?>
                                                <tr>
                                                    <th scope="row"><?php echo $index++ ?></th>
                                                    <td><?php echo $user['fname'] ?></td>
                                                    <td><?php echo $user['lname'] ?></td>
                                                    <td><?php echo $user['email'] ?></td>
                                                    <td><?php echo $user['addr'] ?></td>
                                                    <td><?php echo $user['city'] ?></td>
                                                    <td><?php echo $user['zip'] ?></td>
                                                    <td><?php echo $user['gender'] ?></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                            <div class="table-holder text-white">
                                <h3>Purchased Shows</h3>
                                <div class="table-here overflow-auto p-0 m-0">
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Purchase ID</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Show ID</th>
                                                <th scope="col">Show Name</th>
                                                <th scope="col">Ticket Price</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Venue Selection</th>
                                                <th scope="col">Payment Method</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $index = 1 ?>
                                            <?php foreach ($result_purchased as $user) { ?>
                                                <tr>
                                                    <th scope="row"><?php echo $index++ ?></th>
                                                    <td><?php echo $user['purchaseID'] ?></td>
                                                    <td><?php echo $user['email'] ?></td>
                                                    <td><?php echo $user['showID'] ?></td>
                                                    <td><?php echo $user['showName'] ?></td>
                                                    <td><?php echo $user['showTicketPrice'] ?></td>
                                                    <td><?php echo $user['showAmount'] ?></td>
                                                    <td><?php echo $user['venueSelection'] ?></td>
                                                    <td><?php echo $user['paymentMethod'] ?></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
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

<script src="./js/admin.js?v=<?php include "./zconfig.php" ?>" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>