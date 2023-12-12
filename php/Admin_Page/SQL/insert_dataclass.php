<?php
include '../../connection.php';


$namaclass = $_POST['namaclass'];
$selectguru = $_POST['selectguru'];
$hargaclass = $_POST['hargaclass'];
$periodeclass = $_POST['periodeclass'];
$idtype = $_POST['idtype'];

$sql = "INSERT INTO class (Id_Type,Id_Guru,Nama_Class,Periode) 
VALUES
('$idtype', '$selectguru' , '$namaclass' , '$periodeclass')";

if ($conn->query($sql) === TRUE) {
    // Insert data into the second table (replace "second_table" with your actual table name)
    $lastInsertedId = $conn->insert_id; // Get the last inserted ID from the first table

    $sqlTable2 = "INSERT INTO harga (Id_Class, session, Price) VALUES ('$lastInsertedId', 15, $hargaclass)";

    if ($conn->query($sqlTable2) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sqlTable2 . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sqlTable1 . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>