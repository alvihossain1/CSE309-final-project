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

<?php include "./components/module/sessionHolder.php" ?>
<?php include "./components/module/connection.php" ?>
<?php

?>

<body>
    <div class="main bg-p-1 position-relative">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->

        <div class="bg-p-5 min-vh-100 admin-background">
            <div class="section">
                <div class="small-section">
                    <h1 class="text-white mb-4">Admin Panel</h1>


                    <!-- Dashboard -->
                    <?php include "./components/interface/admin/dashboard.php" ?>
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
                            <div class="form-container w-100">
                                <div class="form-box flex-column">
                                    <div class="form-block full-width" style="text-align: center;">
                                        <h2>Add Shows</h2>
                                    </div>
                                    <div class="row gap-0 m-0 p-0">
                                        <!--  -->
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showName" class="text-label">Show Name</label>
                                                <input id="showName" class="text-input" type="text" name="showName" required>
                                                <p id="showName-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showGenre" class="text-label">Show Gengre</label>
                                                <select id="showGenre" class="text-input" name="showGenre" required>

                                                </select>
                                                <p id="showGenre-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showDate" class="text-label">Show Date</label>
                                                <input id="showDate" class="text-input bg-p-2" type="datetime-local" name="showDate" required>
                                                <p id="showDate-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showUrl" class="text-label">Show Image Link</label>
                                                <input id="showUrl" class="text-input" type="url" name="showUrl" required>
                                                <p id="showUrl-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-12 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showDesc" class="text-label">Show Description</label>
                                                <textarea id="showDesc" class="text-input" name="showDesc"></textarea>
                                                <p id="showDesc-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showVenue" class="text-label">Show Venue</label>
                                                <select id="showVenue" class="text-input" name="showVenue" required>

                                                </select>
                                                <p id="showVenue-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showVenueDetails" class="text-label">Venue Details</label>
                                                <input id="showVenueDetails" class="text-input" type="text" name="showVenueDetails" required>
                                                <p id="showVenueDetails-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="showPrice" class="text-label">Show Ticket Price</label>
                                                <input id="showPrice" class="text-input" type="number" name="showPrice" required>
                                                <p id="showPrice-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-block full-width px-1">
                                                <label for="hallName" class="text-label">Hall Name</label>
                                                <input id="hallName" class="text-input" type="text" name="hallName" required>
                                                <p id="hallName-alert" class="alert-text text-success" style="display: none;"></p>
                                            </div>
                                        </div>


                                        <!-- display message below -->
                                        <div id="text-alert-block" class="col-12 px-1" style="display: none;">
                                            <div class="form-block full-width px-1">
                                                <p class="alert-text p-0 m-0"></p>
                                            </div>
                                        </div>
                                        <!-- display message Ends -->

                                        <div class="col-12 px-1">
                                            <div class="form-block full-width px-1">
                                                <button type="submit" id="admin-show-submit-button" name="admin-show-form-submit" class="form-button">Add Show</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--  -->
                        </div>

                    </div>
                    <!-- Admin Shows End -->

                </div>

            </div>
        </div>







        <!-- FOOTER Starts Here -->
        <?php include './components/interface/footer.php' ?>
        <!-- FOOTER Ends -->


    </div>
</body>

<script src="./js/admin.js" type="text/javascript"></script>
<script src="./js/select.js" type="text/javascript"></script>
<script>
    let genreArr = ["Dance", "Act", "Culture", "Comedy"]
    createSelect("showGenre", genreArr)
    let showVenue = ["Dhaka", "Chittagong", "Sylhet"]
    createSelect("showVenue", showVenue)
</script>

<!-- CONTROLLER -->
<script src="./controller/js/adminShowForm.js"></script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>