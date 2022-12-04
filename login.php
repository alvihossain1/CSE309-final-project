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

    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    }

    $text = "";

    if(isset($_POST['submit'])){

        $emailInput = $_POST['email'];
        $passInput = $_POST['password'];

        $sql = "SELECT email, pass, fname, lname FROM user_t WHERE email = '$emailInput' and pass = '$passInput'";
        $result = mysqli_query($conn, $sql);

        foreach($result as $user){
            if($user['email'] === $emailInput && $user['pass'] === $passInput){
                $_SESSION["loggedInUser"] = $user['fname']." ".$user['lname'];
                $_SESSION["userEmail"] = $user['email'];
                header('Location: index.php');
            } 
        }
        if(mysqli_num_rows($result) === 0){
            $text = "Email or Pass doesn't match";
            $textColor = "text-danger";
        }

    }

    mysqli_close($conn);

    
?>

<?php 

if(isset($_POST['logout-submit'])){
    if(isset($_SESSION['loggedInUser']) || isset($_SESSION['userEmail'])){
        unset($_SESSION['loggedInUser']);
        unset($_SESSION['userEmail']);
    }
}

?>




<body>
    <div class="main position-relative vh-100 background-form">

        <!-- Navbar Starts Here SPECIAL -->
        <nav class="custom-nav navbar navbar-dark navbar-expand-lg bgnav-p position-absolute start-0 top-0 end-0">
            <div class="container-fluid">
                <a class="navbar-brand nav-effect nav-p-link-color" href="./index.php">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <img src="./image/theatreLogo.png" alt="Theatre_Logo" style="height: 3rem; width:auto;">
                        <p class="m-0 p-0">Studio <span class="logo-span">Artisan</span></p>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-effect nav-p-link-color nav-link" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-effect nav-p-link-color nav-link" href="./aboutUs.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-effect nav-p-link-color nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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


        <!-- Login Template Starts Here -->
        <div class="d-flex justify-content-center align-items-center h-100">
            <form class="form-container special" method="POST">
                <div class="form-box flex-column">
                    <div class="form-block full-width" style="text-align: center;">
                        <h2>Login</h2>
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
                    <div class="form-block full-width d-none">
                        <p class="p-0 m-0"></p>
                    </div>
                    
                    <!-- Display MS -->
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

<script src="./js/main.js" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</html>