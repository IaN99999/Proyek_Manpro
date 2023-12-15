<?php
include '../../connection.php';
// Tangkap data dari formulir
$date = $_POST['date'];
$description = $_POST['description'];


// Query untuk menyisipkan data ke dalam database
$sql = "INSERT INTO libur (date,description) VALUES ('$date','$description')";
if ($conn->query($sql) === TRUE) {
    header("Location: ../adminHoliday.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
