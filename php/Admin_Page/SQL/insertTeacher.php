<?php
include '../../connection.php';
// Tangkap data dari formulir
$nama = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];


// Query untuk menyisipkan data ke dalam database
$sql = "INSERT INTO user (Nama_user,Jenis_User,Email,Password) 
VALUES
('$nama', '2' , '$email' , '$password')";
if ($conn->query($sql) === TRUE) {
    header("Location: ../teacherAdmin.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
