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

<?php

    $conn = mysqli_connect("localhost", "root", "", "theatre_db");

    if($conn === false){
        die("ERROR: Could not connect" . mysqli_connect_error());
    }

    $text = "";

    if (isset($_POST['submit-button'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];        

        $sql = "INSERT INTO user_t(fname, lname, addr, city, zip, gender, email, pass) VALUES ('$fname', '$lname', '$address', '$city', '$zip' , '$gender', '$email', '$pass');";
        
        try {
            require_once "signup.php";
            if(mysqli_query($conn, $sql)){
                $text = "Registration Done Successfully";
                $textColor = "text-success";
            }
        }catch (Exception $e){
            if($conn -> errno === 1062){
                $text = "This email is already taken";
                $textColor = "text-warning";
            }
            else{
                $text = $e->getMessage();
                $textColor = "text-warning";
            }
        }

        
        mysqli_close($conn);

    }
    
    


?>

<?php include "./components/module/sessionHolder.php" ?>

<body>
    <div class="main position-relative min-vh-100 background-form">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->


        <!-- Login Template Starts Here -->
        <div class="d-flex justify-content-center align-items-center min-vh-100" style="padding: 2rem 0;">
            <form class="form-container" method="POST" action="">
                <div class="form-box flex-column">
                    <div class="form-block full-width" style="text-align: center;">
                        <h2>Sign Up</h2>
                    </div>                    
                    <div class="row gap-0 m-0 p-0">
                        <div class="col-md-6 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">First Name</label>
                                <input class="text-input" type="text" name="fname" required>
                            </div>
                        </div>
                        <div class="col-md-6 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">Last Name</label>
                                <input class="text-input" type="text" name="lname" required>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">Address</label>
                                <input class="text-input" type="text" name="address" required>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">City</label>
                                <!-- <input class="text-input" type="text" name="city" required> -->
                                <select id="cities" class="text-input" name="city" style="cursor: pointer;" required>
                                    
                                </select>                                
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">Zip</label>
                                <input class="text-input" type="text" name="zip" required>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-12 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">Gender</label>
                                <div class="gender-box gap-3">
                                    <div class="d-flex gap-2">
                                        <label class="gender-label" for="gMale">Male</label>
                                        <input class="gender-input" type="radio" name="gender" value="male" id="gMale" required>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <label class="gender-label" for="gFemale">Female</label>
                                        <input class="gender-input" type="radio" name="gender" value="female" id="gFemale" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">Upload Image</label>
                                <input class="form-control bg-dark text-white" type="file" name="image-file" required>
                            </div>
                        </div>                         -->
                        <!--  -->
                        <div class="col-md-6 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">Email</label>
                                <input class="text-input" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6 px-1">
                            <div class="form-block full-width px-1">
                                <label class="text-label">Password</label>
                                <input class="text-input" type="password" name="pass" required>
                            </div>
                        </div>
                        <!-- display message below -->
                        <div style="display: <?php if($text === ""){echo "none;";}else{echo "flex;";} ?>">
                            <div class="form-block full-width <?php echo $textColor; ?>">
                                <p> <?php echo $text ?> </p>
                            </div>
                        </div>
                        <div class="col-12 px-1">
                            <div class="form-block full-width px-1">
                                <button class="form-button" type="submit" name="submit-button">Sign Up</button>
                            </div>
                        </div>
                    </div>
    
                </div>
            </form>
        </div>
        <!-- Login Template Ends -->

    </div>
</body>


<script src="./js/select.js" type="text/javascript"></script>

<script>
    let citiesArr = ["Dhaka", "Chittagong", "Sylhet", "Rajshahi", "Khulna", "Cox's Bazar"]
    createSelect("cities", citiesArr)
</script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</html>