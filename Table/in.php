<?php 
include"connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo $sql = "Insert into users(name,email,pass)values('$name','$email','$password')";


            
}


?>

<form method="post" action="adduser.php">
Name: <input type="text" name="name" id="name">
<br><br>
Email: <input type="email" name="email" id="email">
<br><br>
Password: <input type="password" name="password" id="password"
required><br><br>
<input type="submit" value="Add User">

</form>