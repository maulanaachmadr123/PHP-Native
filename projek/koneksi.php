<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "formulir";
$koneksi = mysqli_connect($host, $username, $password, $database);
$pilih_database = mysqli_select_db($koneksi, $database); 

?>
