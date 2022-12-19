<?php
$LIST = $_POST['list'];
   include "config.php";
   mysqli_query($con, "INSERT INTO `todo`(`list`) VALUES ('$LIST')");
   header("location:home.php");
?>