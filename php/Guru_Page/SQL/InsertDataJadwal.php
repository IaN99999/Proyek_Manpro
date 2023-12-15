<?php
include '../../connection.php';
// Tangkap data dari formulir
$idclass = $_POST['idclass'];
$selectQuery = "SELECT * FROM user WHERE Jenis_User = 1 AND Id_Class = $idclass";
$result = $conn->query($selectQuery);
// $row = $result->fetch_assoc();
// echo "hallo";
$insertIds = array();
while ($row = $result->fetch_assoc()) {
    $insertIds[] = $row['Id_User'];
}
$sql = "INSERT INTO jadwal (Id_Class, Tanggal_Jadwal) 
VALUES ('$idclass', CURDATE());";
if ($conn->query($sql) === TRUE) {
    // header("Location: ../absensiguru.php");
    // exit();
    $newJadwalId = $conn->insert_id;
    if (!empty($insertIds)) {
        // Gabungkan ID menjadi string dengan koma sebagai pemisah
        // $idString = implode(',', $insertIds);

        // Query untuk menyisipkan data ke dalam tabel absen
        foreach ($insertIds as $id) {
            // Query untuk menyisipkan data ke dalam tabel absen
            $sql2 = "INSERT INTO absen (Id_Siswa, Id_Jadwal, Keterangan, Jam_Absen) 
                    VALUES ($id, $newJadwalId, 'Alpha', '')";

            // Jalankan query INSERT
            if ($conn->query($sql2) !== TRUE) {
                echo "Error: " . $sql2 . "<br>" . $conn->error;
            }
        }
        header("Location: ../absensiguru.php");
        exit();
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// $dataTertentu = $row['nama_kolom_tertentu'];



// Query untuk menyisipkan data ke dalam database


// Tutup koneksi ke database
$conn->close();
