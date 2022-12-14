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
    <link rel="stylesheet" type="text/css" href="./css/admin.css">

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
    
    unset($_SESSION['loggedInUser']);
    unset($_SESSION['userEmail']);


    $conn = mysqli_connect("localhost", "root", "", "theatre_db");

    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    }

    $text = "";

    if(isset($_POST['submit'])){

        $emailInput = $_POST['email'];
        $passInput = $_POST['password'];

        $sql = "SELECT email, pass, fname, lname FROM admin_user WHERE email = '$emailInput' and pass = '$passInput'";
        $result = mysqli_query($conn, $sql);

        foreach($result as $user){
            if($user['email'] === $emailInput && $user['pass'] === $passInput){
                $_SESSION["loggedInUser"] = $user['fname']." ".$user['lname'];
                $_SESSION["userEmail"] = $user['email'];
                $_SESSION["loggedInAdminEmail"] = $user['email'];
                header('Location: admin.php');
            } 
        }
        if(mysqli_num_rows($result) === 0){
            $text = "Email or Pass doesn't match";
            $textColor = "text-danger";
        }

    }

    mysqli_close($conn);

    
?>


<body>
    <div class="main position-relative min-vh-100 admin-background">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->

        <div class="position-absolute bg-dark text-white p-2 border border-2 text-center" style="top: 12%; right: 2%;">
            <h1>For Convenience</h1>
            <p>Admin Email: <span class="text-info">admin@yahoo.com</span></p>
            <p>Admin password: <span class="text-info">admin</span></p>
            <p>Admin Name: <span class="text-info">JC Admin</span></p>
        </div>

        <!-- Login Template Starts Here -->
        <div class="d-flex justify-content-center align-items-center min-vh-100">
            <form class="form-container special" method="POST" action="">
                <div class="form-box flex-column">
                    <div class="form-block full-width" style="text-align: center; color: rgba(212, 166, 14, 0.753);">
                        <h2>Admin Login</h2>
                    </div>                    
                    <div class="form-block full-width">
                        <label class="text-label">Email</label>
                        <input class="text-input" type="email" name="email" required>
                    </div>
                    <div class="form-block full-width">
                        <label class="text-label">Password</label>
                        <input class="text-input" type="password" name="password" required>
                    </div>
                    
                    <!-- display message below -->
                    <div style="display: <?php if($text === ""){echo "none;";}else{echo "flex;";} ?>">
                            <div class="form-block full-width <?php echo $textColor; ?>">
                                <p> <?php echo $text ?> </p>
                            </div>
                        </div>
    
                    <div class="form-block full-width">
                        <button class="form-button" type="submit" name="submit">Login</button>
                    </div>
    
                </div>
            </form>
        </div>
        <!-- Login Template Ends -->

    </div>
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</html>