<!-Code of the connection.php->

<?php
$con = mysqli_connect("localhost","root","");
if($con){
    echo "connection successful";
}else{
    echo "connection failed".mysqli_connect_error();
}


?>