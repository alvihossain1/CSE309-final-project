<?php

$conn = mysqli_connect("localhost", "root", "", "theatre_db");

if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}

$showID = $_POST['showID'];
$showUrl = $_POST['showUrl'];
$userEmail = $_POST['userEmail'];
$paymentMethod = $_POST['paymentMethod'];
$showName = $_POST['showName'];
$showDate = $_POST['showDate'];
$showTime = $_POST['showTime'];
$showTicketPrice = $_POST['showTicketPrice'];
$totalAmount = $_POST['totalAmount'];
$venueSelection = $_POST['venueSelection'];


$sql = "INSERT INTO user_purchase_t(email, showID, showName, showUrl, showTicketPrice, showAmount, showDate, showTime, venueSelection, paymentMethod)
        VALUES('$userEmail', '$showID', '$showName', '$showUrl', '$showTicketPrice', '$totalAmount', '$showDate', '$showTime', '$venueSelection', '$paymentMethod');";

$result = mysqli_query($conn, $sql);

   
if($result){
    $statusCode = "success";
    $statusMessage = "Congratulations, Tickets Purchased.";        
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

?>