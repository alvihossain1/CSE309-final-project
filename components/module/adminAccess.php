<?php 
if(!isset($_SESSION['loggedInAdmin'])){
    
header('Location: adminLogin.php');
}
