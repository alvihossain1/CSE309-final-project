<?php

$conn = mysqli_connect("localhost", "root", "", "theatre_db");

if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}

$showName = $_POST['showName'];
$showGenre = $_POST['showGenre'];
$showDateTime = $_POST['showDateTime'];
$showUrl = $_POST['showUrl'];
$showDescription = $_POST['showDescription'];
$showVenue = $_POST['showVenue'];
$showVenueDetails = $_POST['showVenueDetails'];
$showTicektPrice = $_POST['showTicketPrice'];
$hallName = $_POST['hallName'];


$strFirst = "55";
$idStr = $strFirst.strVal(rand(0, 999999));
$showID = intVal($idStr);


$sql = "INSERT INTO shows_t(showID, showName, showDateTime, showGenre, showUrl, showDescription, showVenue, showVenueDetails, showTicketPrice, hallName) 
                    VALUES('$showID', '$showName', '$showGenre', '$showDateTime', '$showUrl', '$showDescription', '$showVenue', '$showVenueDetails', '$showTicektPrice', '$hallName');";


$result = mysqli_query($conn, $sql);

   
if($result){
    $statusCode = "success";
    $statusMessage = "Show is successfully Inserted into the Database.";        
}
else{
    $statusCode = "error";
    $statusMessage = "Error, please try again";
}


$arrayList = array(
    "statusCode"=>$statusCode,
    "statusMessage"=>$statusMessage
);

echo json_encode($arrayList);

mysqli_close($conn);

?>