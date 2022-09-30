<?php
include("connection.php");

$id=$_GET['id'];

$query="DELETE FROM tableform WHERE id='$id' ";
$data= mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    
    <meta http-equiv = "refresh" content="0; url = http://localhost:8080/Form_in_PHP/display.php" />

   <?php

}
else
{
    echo "<script>alert('Failed')</script>";
}

?>