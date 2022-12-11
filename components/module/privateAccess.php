<?php 
if(!isset($_SESSION['loggedInUser'])){
    
header('Location: login.php');
}
