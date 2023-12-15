<?php
include '../connection.php';


$id_absen = $_POST['id'];
// $idtype = $_POST['idtype'];
$status = $_POST['status'];

$sql = "UPDATE absen 
        SET Keterangan = '$status' 
        WHERE Id_Absen = '$id_absen'";
$conn->query($sql);

// Close the database connection
$conn->close();

?>