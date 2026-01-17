<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO enquiry (name, email, phone, message)
        VALUES ('$name', '$email', '$phone', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Enquiry Submitted Successfully";
} else {
    echo "Error submitting enquiry";
}
?>
