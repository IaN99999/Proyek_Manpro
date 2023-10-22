<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "manpro";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn){
        die("<script>alert('Gagal tersambung dengan database')</script>");
    }


?>