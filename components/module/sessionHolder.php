<?php 
if(isset($_POST['logout-submit'])){
    if(isset($_SESSION['loggedInUser']) || isset($_SESSION['userEmail'])){
        unset($_SESSION['loggedInUser']);
        unset($_SESSION['userEmail']);
    }
}
?>