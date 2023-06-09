<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "learn_api";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn) {
        die ("koneksi gagal");
    }




?>