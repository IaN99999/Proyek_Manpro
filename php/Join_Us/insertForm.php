<?php
include '../connection.php';
// Tangkap data dari formulir
$nama = $_POST['input_name'];
$tanggal = $_POST['date'];
$pekerjaan = $_POST['Status'];
$no_hp = $_POST['numberhp'];
$alamat = $_POST['address'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['Gender'];
$tempat_lahir = $_POST['city_name'];
$password = $_POST['confirm_pw'];


// Query untuk menyisipkan data ke dalam database
$sql = "INSERT INTO detail_user (nama,tanggal_lahir,pekerjaan,no_hp,alamat,email,jenis_kelamin,tempat_lahir) 
VALUES 
('$nama', '$tanggal', '$pekerjaan', '$no_hp', '$alamat', '$email', '$jenis_kelamin', '$tempat_lahir')";

$sql2 = "INSERT INTO user (Nama_user,Jenis_User,Email,Password) 
VALUES
('$nama', '1' , '$email' , '$password')";
$conn->query($sql2);
if ($conn->query($sql) === TRUE) {
    header("Location: ../Login_Logout/login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
