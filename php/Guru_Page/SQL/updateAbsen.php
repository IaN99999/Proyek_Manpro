<?php
include '../../connection.php';


$id_absen = $_POST['idAbsenValue'];
// $idtype = $_POST['idtype'];
$selectedValue = $_POST['selectedValue'];

$sql = "UPDATE absen 
        SET Keterangan = '$selectedValue' 
        WHERE Id_Absen = '$id_absen'";
$conn->query($sql);

// Close the database connection
$conn->close();

?>