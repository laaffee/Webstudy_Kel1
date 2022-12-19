<?php
    include "config.php";
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM `todo` WHERE id=$id");
    header("location:home.php");
?>