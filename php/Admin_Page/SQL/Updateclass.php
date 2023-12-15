<?php
include '../../connection.php';


$namaclass = $_POST['namaclass'];
$selectguru = $_POST['selectguru'];
$hargaclass = $_POST['hargaclass'];
$periodeclass = $_POST['periodeclass'];
// $idtype = $_POST['idtype'];
$idclass = $_POST['idclass'];

$sql = "UPDATE class 
        SET Id_Guru = '$selectguru', 
            Nama_Class = '$namaclass', 
            Periode = '$periodeclass' 
        WHERE Id_Class = '$idclass'";

if ($conn->query($sql) === TRUE) {
    // Insert data into the second table (replace "second_table" with your actual table name)
    $lastInsertedId = $conn->insert_id; // Get the last inserted ID from the first table

    $sqlTable2 = "UPDATE harga SET Price = '$hargaclass' WHERE Id_Class = '$idclass'";

    if ($conn->query($sqlTable2) === TRUE) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $sqlTable2 . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sqlTable1 . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>