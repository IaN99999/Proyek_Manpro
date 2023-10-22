<?php
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE Id_Siswa = $id";
    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
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
        .logo{
            padding: 30px 20px;
            font-size: 20px;
        }
        .about{
            margin-top: 140px;
        }
        .welcome{
            padding-left : 55%;
            padding-top : 15px;

        }
        .user{
            width: 100%;
            background-color: white;
            position: fixed;
            z-index: 1;
        }
        .student-info{
            width:400px;
            padding:20px;
            margin-top: 5%;
            margin-left: 30px;
            margin-right: 20px;
            position: absolute;
            background: #f3f3f3;
        }
        .button-container{
            margin-top: 13%;
            width:75%;
            position: absolute;
            display: inline;
        }
        .button-container .btn{
            float: right;
            color: white;
            margin: 20px 10px 0;
            width: 140px;
        }
        .table{
            width:75%;
            margin-top:20%;
            position:absolute;
            overflow:auto;
            table-layout: fixed;
        }
        td{
            width:33%;
            text-align: center;
            vertical-align:middle;
        }
        .btnback{
            width:75%;
            margin-top:45%;
            position:absolute;
        }
        a{

            float: right;
        }
    </style>
</head>
<body>
    <div class="vernav">
            <ul>
                <li><a class="logo" href="#">BrandName</a></li>
                <li><a class="active" href="dashboard.php"><img src="../../assets/asset_web/dash.png"> Dashboard</a></li>
                <li><a href="#news"><img src="../../assets/asset_web/class.png"> Class</a></li>
                <li><a href="#contact"><img src="../../assets/asset_web/Paper.png"> Report</a></li>
                <li><a href="#contact"><img src="../../assets/asset_web/date.png"> Schedule</a></li>
                <li><a class="about" href="#about"><img class="out" src="../../assets/asset_web/out.png"> Log Out</a></li>
            </ul>
    </div>

    <div style="margin-left:20%;padding:0px 16px;">
        <div class="user">
        <h4 class="welcome">WELCOME USER</h4>
    </div>

    <div class="student-info">
        <p>Nama: <?= $result2['Nama_Siswa']; ?></p>
        <p>Class: <?php if($result2['Id_Class'] == 1){
                        echo "Beginner";
                    }else if($result2['Id_Class'] == 2){
                        echo "Intermediate";
                    }else if($result2['Id_Class'] == 3){
                        echo "Expert";
                    } ?></p>
        <p>No Pendaftaran: <?= $id; ?></p>
    </div>

    <div class="button-container">
        <button type="button" class="btn" style="background:#5ab0ff;">Save</button>
        <button type="button" class="btn" style="background:#002d66;">Edit</button>
    </div>

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Tugas</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="3">Tugas</td>
                <td>tes</td>
                <td>tes</td>
            </tr>
            <tr>
                <td>tes</td>
                <td>tes</td>
            </tr>
            <tr>
                <td>tes</td>
                <td>tes</td>
            </tr>
            <tr>
                <td rowspan="3">TES</td>
                <td>tes</td>
                <td>tes</td>
            </tr>
            <tr>
                <td>tes</td>
                <td>tes</td>
            </tr>
            <tr>
                <td>tes</td>
                <td>tes</td>
            </tr>
        </tbody>
    </table>

    <div class="btnback">
        <a href="daftarSiswa.php"><button type="button">< Kembali</button></a>
    </div>
</body>
</html>