<?php
// Koneksi ke database (sesuaikan dengan konfigurasi database Anda)
include '../../connection.php';

// Ambil ID gambar dari parameter URL
$id = $_GET['id'];
// echo $id;
// Ambil data gambar dari database
$query = $conn->prepare('SELECT Bukti_Payment FROM payment WHERE Id_Payment = ?');
$query->execute([$id]);
$result = $query->get_result();

// Fetch the data
$userData = $result->fetch_assoc();
if (!$userData) {
    // Handle jika data tidak ditemukan
    die("Data not found");
}

// Set header untuk tipe konten gambar
header("Content-type: image/png"); // Sesuaikan dengan tipe gambar yang Anda gunakan

// Tampilkan gambar
$blob = $userData['Bukti_Payment'];
// echo '<img src="data:image/png;base64,'.base64_encode($blob).'"/>';
echo $blob;
// $query = $conn->prepare("SELECT `Bukti_Payment` FROM `payment` WHERE `Id_Payment` = ?");
// $query->execute([$id]);
// $data = $query->fetch();
// echo $data;
// if(empty($data)){
//     echo "masuk";
//     header("HTTP/1.0 404 Not Found");
// }
// else {
//     // header('Content-type: image/jpeg');
//     // echo $data['Bukti_Payment'];
// }

// Koneksi PDO tidak perlu ditutup karena akan ditutup secara otomatis saat skrip selesai
?>