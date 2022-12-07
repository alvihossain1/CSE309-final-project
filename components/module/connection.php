<?php
$link = mysqli_connect("localhost", "root", "", "theatre_db");

if ($link === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}


?>