<?php
$con = mysqli_connect("localhost","root","Aayush");
mysqli_select_db($con, "db_for_mca");
if($con){
    // echo "connection successful";
}else{
    echo "connection failed".mysqli_connect_error();
}

?>