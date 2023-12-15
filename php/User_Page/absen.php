<?php
// echo "iwjdiwajdia";
include '../connection.php';
session_start();
$username = $_SESSION['username'];
$iduser = $_SESSION['id'];

$sql = "SELECT *
FROM absen
JOIN jadwal on absen.Id_Jadwal = jadwal.Id_Jadwal
JOIN class ON jadwal.Id_Class = class.Id_Class 
WHERE absen.Id_Siswa = $iduser && absen.Keterangan = 'Alpha'";
$result = $conn->query($sql);

// Memeriksa hasil query
if ($result->num_rows > 0) {
    // Mengonversi hasil ke array asosiatif
    $data = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $data = array();
}

// echo $data;
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>

    <div class="sidebar">
        <div class="logo">Dana English Course</div>
        <ul class="menu">
            <li>
                <a href="home.php"><i class="fa fa-tachometer-alt"></i><span> Dashboard</span></a>
            </li>
            <li>
                <a href="joinedClass.php"><i class="fa fa-graduation-cap"></i><span> Class</span></a>
            </li>
            <li>
                <a href="reportSiswa.php"><i class="fa fa-book"></i><span> Report</span></a>
            </li>
            <li>
                <a href="absen.php"><i class="fa fa-archive"></i><span> Absen</span></a>
            </li>
            <li>
                <a href="userHoliday.php"><i class="fa fa-calendar"></i><span> Schedule</span></a>
            </li>
            <li class="logout">
                <a href="../Login_Logout/logout.php"><i class="fa fa-sign-out"></i><span> Log out</span></a>
            </li>
        </ul>
    </div>


    <div class="container" style="padding:0px 16px;">
        <div class="user" style="float: right;">
            <h4 class="welcome">WELCOME <?= $username ?></h4>
        </div>


        <div class="row" style="margin-top: 2%;">
            <?php foreach ($data as $loopIndex => $row) : ?>
                <div class="card" style="margin: 2%">
                    <div class="title">
                        <h3 style="color: black; padding-top:4%"><b>PERTEMUAN <?= $loopIndex + 1 ?></b></h3>

                        <p style="color:black">DATE/TIME : <?= $row['Tanggal_Jadwal'] ?>/10.30-13.30</p>
                        <!-- <p style="color:black">LECTURER :</p> -->
                        <p style="color:black">LESSON : <?= $row['Nama_Class'] ?></p>
                        <button type="button" class="btn btn-success" id="btnhadir" style="margin-right:32px; margin-bottom:7px;float: right;" onclick="FucntionHadir(<?= $row['Id_Absen'] ?>)">Hadir</button>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        function FucntionHadir(idabsen) {
                    $.ajax({
                        url: 'UpdateAbsen.php', // Gantilah dengan URL ke skrip PHP untuk menyimpan perubahan status
                        method: 'POST',
                        data: {
                            id: idabsen,
                            status: 'Hadir'
                        },
                        success: function(response) {
                            // Tindakan yang dilakukan setelah permintaan berhasil (jika diperlukan)
                            console.log(response);
                            window.location.reload();
                        },
                        error: function(error) {
                            console.error('Error:', error);
                        }
                    });
                }
    </script>

</body>

</html>