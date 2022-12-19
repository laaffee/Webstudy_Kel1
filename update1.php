<?php
    include "config.php";
    $LIST = $_POST ['list'];
    $id = $_POST ['id'];
    mysqli_query($con, "UPDATE `todo` SET `list`='$LIST' WHERE id=$id");
    header("location:home.php");
?>