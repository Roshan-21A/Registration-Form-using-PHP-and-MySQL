<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform3";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection Ok";
}
else{
    echo "Connection Failed";
}
?>