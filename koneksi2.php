<?php

$dbhost = 'localhost'; 
$dbuser = 'root';     
$dbpass = '';
$dbname = 'feedback_db';


// melakukan koneksi ke database
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($conn->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $conn->connect_error);
}

if(isset($_POST['submit'])){
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $value3 = $_POST['value3'];

$query = mysqli_query($conn, "INSERT INTO tbl_fb VALUES('$value1','$value2','$value3') ");
if($query == TRUE){
    header('location: feedback2.php');
}
}
?>