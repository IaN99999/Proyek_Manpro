<?php
include '../connection.php';
// include "../navbar_footer/sidebar.php";
session_start();
$pertemuan = isset($_GET['pertemuan']) ? $_GET['pertemuan'] : 'Tidak Ada pertemuan';
$idjadwal = isset($_GET['idjadwal']) ? $_GET['idjadwal'] : 'Tidak Ada idjadwal';
$username = $_SESSION['username'];
// Mengambil data dari tabel
$iduser =  $_SESSION['id'];

// echo $iduser
$sql = "SELECT *
FROM absen join user ON absen.Id_Siswa = user.Id_User
WHERE absen.Id_Jadwal = $idjadwal;";
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
    <title>Check Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <style>
        /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
        *{
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
            font-family: "Poppins";
        }
        body {
            display: flex;
        }
        .sidebar{
            position: sticky;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            height: 100vh;
            padding: 0 1.7rem;
            color: #;
            overflow: hifffdden;
            transition: all 0.5s linear;
            background-image: url("../../assets/asset_web/bg3.png");
        }

        .menu{
            height: 88%;
            position: relative;
            list-style: none;
            padding-top: 35px;
            text-align: center;
            padding-left: 0px;
        }
        .logo{
            font-size: 18px;
            height: 80px;
            padding: 20px;
            text-align: center;
            overflow: initial;
        
        }

        .menu li{
            padding: 15px;
            text-align: center;
        }

        .menu li a{
            color: white;
            text-decoration: none;
            gap: 10px;
            display: flex;
            align-items: center;  
        }

        .menu li a:hover{
            color:antiquewhite;
        }

        .menu span{
            overflow: hidden;
            
        }
        .logout{
            position: absolute;
            bottom: 20px;
            width: 100%;
        } */
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 20%;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
            background-image: url('../../assets/asset_web/bg3.png');
        }

        li a {
            display: block;
            color: #F5F7F8;
            padding: 16px 16px;
            text-decoration: none;
            text-align: center;
            font-size: 15px;
        }

        /* li a.active {
  
}

li a:hover:not(.active) {
  
} */
        .logo {
            padding: 30px 20px;
            font-size: 20px;
        }

        .about {
            margin-top: 140px;
        }

        .welcome {
            padding-left: 55%;
            padding-top: 15px;

        }

        .user {
            width: 100%;
            background-color: white;
            position: fixed;
            z-index: 1;
        }

        .container {
            width: 70%;
            height: 37%;
            margin-top: 5%;
            margin-left: 3.5%;
            position: absolute;
            background-size: 885px 210px;

        }

        .btn {
            position: relative;
            float: right;
            top: 55%;
            color: white;

        }

        .title {
            position: relative;
            top: 4%;
            left: 1%;
            color: white;
        }

        img {
            width: 20px;
        }
    </style>

</head>

<body>
    <div class="vernav">
        <ul>
            <li><a class="logo" href="#">Dana English Course</a></li>
            <!-- <li><a class="active" href="dashboard.php"><img src="../../assets/asset_web/dash.png"> Dashboard</a></li> -->
            <li><a href="joinedClass.php"><img src="../../assets/asset_web/class.png"> Class</a></li>
            <li><a href="reportSiswa.php"><img src="../../assets/asset_web/Paper.png"> Report</a></li>
            <li><a href="#contact"><img src="../../assets/asset_web/buy.png"> Buy Package</a></li>
            <li><a href="userHoliday.php"><img src="../../assets/asset_web/date.png"> Schedule</a></li>
            <li><a class="about" href="../Login_Logout/logout.php"><img class="out" src="../../assets/asset_web/out.png"> Log Out</a></li>
        </ul>
    </div>

    <!-- <div class="sidebar">
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
                <a href="#"><i class="fa fa-archive"></i><span> Buy Package</span></a>
            </li>
            <li>
                <a href="userHoliday.php"><i class="fa fa-calendar"></i><span> Schedule</span></a>
            </li>
            <li class="logout">
                <a href="../Login_Logout/logout.php"><i class="fa fa-sign-out"></i><span> Log out</span></a>
            </li>
        </ul>
    </div> -->



    <div style="margin-left:20%;padding:0px 16px;">
        <div class="user">
            <h4 class="welcome">WELCOME <?= $username ?></h4>
        </div>
        <div class="container" style="margin-top: 10%;">
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-6">
                    <h4 style="color: black"><b>SESSION 1</b></h4>
                </div>
                <div class="col-6" style="place-self: center;">
                    <!-- <button type="button" class="btn btn-success" hidden>Save</button>
                    <button type="button" class="btn btn-primary" style="margin-right: 2%">Edit</button> -->

                </div>
            </div>


            <table class="table  table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Absence</th>
                        <th scope="col">Date/Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $loopIndex => $row) : ?>
                        <tr>
                            <th scope="row"> <?= $loopIndex + 1 ?></th>
                            <td> <?= $row['Nama_User'] ?></td>
                            <td>
                                <!-- <?= $row['Keterangan'] ?> Tampilkan nilai Keterangan -->
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1_<?= $loopIndex ?>" name="optradio<?= $loopIndex ?>" value="Hadir" <?= $row['Keterangan'] == 'Hadir' ? 'checked' : '' ?> disabled>
                                    <label class="form-check-label" for="radio1_<?= $loopIndex ?>">Hadir</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio2_<?= $loopIndex ?>" name="optradio<?= $loopIndex ?>" value="Izin" <?= $row['Keterangan'] == 'Izin' ? 'checked' : '' ?> disabled>
                                    <label class="form-check-label" for="radio2_<?= $loopIndex ?>">Izin/Sakit</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio3_<?= $loopIndex ?>" name="optradio<?= $loopIndex ?>" value="Alpha" <?= $row['Keterangan'] == 'Alpha' ? 'checked' : '' ?> disabled>
                                    <label class="form-check-label" for="radio3_<?= $loopIndex ?>">Alpha</label>
                                </div>
                            </td>
                            <td>
                                <?= $row['Jam_Absen'] ?>
                            </td>
                            <td>
                                <!-- Tombol Edit -->

                                <button class="btn btn-primary btn-edit" data-index="<?= $loopIndex ?>">Edit</button>
                                <!-- Tombol Simpan -->
                                <input type="hidden" name="id_absen" id="id_absen_<?= $loopIndex ?>" value="<?= $row['Id_Absen'] ?>">
                                <button class="btn btn-success btn-save" data-index="<?= $loopIndex ?>" style="display: none;">Simpan</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Temukan semua tombol Edit dan Simpan
                var btnEdits = document.querySelectorAll('.btn-edit');
                var btnSaves = document.querySelectorAll('.btn-save');

                // Tangani klik tombol Edit
                btnEdits.forEach(function(btnEdit) {
                    btnEdit.addEventListener('click', function() {
                        var index = this.getAttribute('data-index');
                        enableEditMode(index);
                    });
                });

                // Tangani klik tombol Simpan
                btnSaves.forEach(function(btnSave) {
                    btnSave.addEventListener('click', function() {
                        var index = this.getAttribute('data-index');
                        saveChanges(index);
                    });
                });

                function enableEditMode(index) {
                    // Aktifkan radio button sesuai dengan indeks
                    var radios = document.querySelectorAll('[name="optradio' + index + '"]');
                    radios.forEach(function(radio) {
                        radio.removeAttribute('disabled');
                    });

                    // Sembunyikan tombol Edit dan tampilkan tombol Simpan
                    btnEdits[index].style.display = 'none';
                    btnSaves[index].style.display = 'inline-block';
                }

                function saveChanges(index) {
                    var selectedValue = $('input[name="optradio' + index + '"]:checked').val();
                    var idAbsenValue = $('#id_absen_' + index).val();
                    console.log("masuk");
                    // Lakukan operasi penyimpanan ke database menggunakan AJAX
                    $.ajax({
                        url: 'SQL/updateAbsen.php', // Gantilah ini dengan URL ke skrip PHP untuk menyimpan perubahan
                        method: 'POST',
                        data: {
                            idAbsenValue: idAbsenValue,
                            selectedValue: selectedValue
                        },
                        success: function(response) {
                            // Tindakan yang dilakukan setelah permintaan berhasil (jika diperlukan)
                            console.log(response);
                        },
                        error: function(error) {
                            console.error('Error:', error);
                        }
                    });

                    // Nonaktifkan kembali radio button
                    var radios = document.querySelectorAll('[name="optradio' + index + '"]');
                    radios.forEach(function(radio) {
                        radio.setAttribute('disabled', 'disabled');
                    });

                    // Tampilkan kembali tombol Edit dan sembunyikan tombol Simpan
                    btnEdits[index].style.display = 'inline-block';
                    btnSaves[index].style.display = 'none';
                }
            });
        </script>

</body>

</html>