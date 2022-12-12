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

$sql = "SELECT * FROM user_t";
$result_user = mysqli_query($conn, $sql);

$sql = "SELECT * FROM user_purchase_t";
$result_purchased = mysqli_query($conn, $sql);

$sql = "SELECT name, email, comments, submission_date FROM submission ORDER BY submission_date";
$result_queries = mysqli_query($conn, $sql);




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
                            <button class="nav-link" id="nav-queries-tab" data-bs-toggle="tab" data-bs-target="#nav-queries" type="button" role="tab" aria-controls="nav-queries" aria-selected="false">Queries Submission</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <?php include "./components/interface/admin/nav-tabs/showsTable.php" ?>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <?php include "./components/interface/admin/nav-tabs/UsersTable.php" ?>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <?php include "./components/interface/admin/nav-tabs/purchasedTicketsTable.php" ?>
                        </div>
                        <div class="tab-pane fade" id="nav-queries" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <?php include "./components/interface/admin/nav-tabs/queriesTable.php" ?>
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