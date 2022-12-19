<?php
    $con = mysqli_connect('localhost', 'root', '', 'todolist');
    if (isset($con)) {
        echo("");
    } else {
        die("Koneksi Gagal");
    }
?>