<?php
include('connection.php');

$fullName = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone'];
$message = $_POST['message'];


$query = $mysqli->prepare("INSERT INTO personal_info (name, email, phone, message) VALUES (?, ?, ?, ?)");

$query ->bind_param('ssss',$fullName, $email, $phoneNumber, $message);

$query->execute();
$response = [];
$response["success"] = true;
echo json_encode($response);
?>
