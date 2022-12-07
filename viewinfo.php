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

$conn = mysqli_connect("localhost", "root", "", "theatre_db");

if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}

if (isset($_SESSION['loggedInUser'])) {
    $userName = $_SESSION['loggedInUser'];
    $userEmail = $_SESSION['userEmail'];

    

    $sql = "SELECT * FROM user_t WHERE email = '$userEmail'";
    $result = mysqli_query($conn, $sql);

    foreach($result as $user){
        $fname = $user['fname'];
        $lname = $user['lname'];
        $addr = $user['addr'];
        $city = $user['city'];
        $zip = $user['zip'];
        $email = $user['email'];
        $pass = $user['pass'];
    }

    
}

mysqli_close($conn);


?>

<?php include "./components/module/sessionHolder.php" ?>


<body>
    <div class="main bg-p-1 position-relative">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->

        <div class="bg-p-5 min-vh-100">
            <div class="section">
                <div class="small-section">
                    <div class="overflow-hidden text-white">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>                                    
                                    <th scope="col">Information</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                    
                                    <td>First Name</td>                                    
                                    <td><?php echo $fname; ?></td>                                    
                                </tr>
                                <tr>                                    
                                    <td>Last Name</td>                                    
                                    <td><?php echo $lname; ?></td>                                    
                                </tr>
                                <tr>                                    
                                    <td>Address</td>                                    
                                    <td><?php echo $addr; ?></td>                                    
                                </tr>
                                <tr>                                    
                                    <td>City</td>                                    
                                    <td><?php echo $city; ?></td>                                    
                                </tr>
                                <tr>                                    
                                    <td>Zip</td>                                    
                                    <td><?php echo $zip; ?></td>                                    
                                </tr>
                                <tr>                                    
                                    <td>Email</td>                                    
                                    <td><?php echo $email; ?></td>                                    
                                </tr>
                                <tr>                                    
                                    <td>Password</td>                                    
                                    <td><?php echo $pass; ?></td>                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>





        <!-- FOOTER Starts Here -->
        <?php include './components/interface/footer.php' ?>
        <!-- FOOTER Ends -->






    </div>
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>