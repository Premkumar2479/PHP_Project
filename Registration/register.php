<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, pwd)
            VALUES ('$username', '$email', '$hash')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful ✅";
    } else {
        echo "Error occurred";
    }
}
?>
 