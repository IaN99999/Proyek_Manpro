<?php 
    include "../connection.php";
    session_start();
    if(!isset($_SESSION['username']) || $_SESSION['nama_jenis_user'] == "Guru"){
        header("../Login_Logout/logout.php");
        exit();
    }
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM `user` WHERE `Id_User` = $id";
    $res = mysqli_query($conn,$sql);
    $res2 = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
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
            color: #fff;
            overflow: hidden;
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
            /* justify-content: center; */
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
            /* justify-content: center; */
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
        }

        
        .welcome{
            text-align: right;
            padding-right: 15px;
            padding-top : 15px;
            text-transform: uppercase;

        }
        .student-info{
            background: #F3F3F3;
            width: 400px;
            border-radius: 10px;
            padding: 20px;
            margin-bottom:40px;
        }
        .student-info table tr td{
            text-align:left;
        }
        table{
            width:100%;
        }
        img{
            width:476px;
            height:196px;
        }
        .btnback a button{
            background: #AEAEAE;
            padding:10px;
            border-radius:10px;
            margin: 20px 10px 20px;

        }
        .table{
            margin-bottom:40px;
        }
        td, th{
            width:33%;
            text-align: center;
            vertical-align:middle;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">Dana English Course</div>
            <ul class="menu">
                <li>
                    <a href="home.php"><i class="fa fa-tachometer-alt"></i><span> Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-graduation-cap"></i><span> Class</span></a>
                </li>
                <li>
                    <a href="reportSiswa.php"><i class="fa fa-book"></i><span> Report</span></a>
                </li>
                <li>
                <a href="absen.php"><i class="fa fa-archive"></i><span> Absen</span></a>
                </li>
                <li>
                    <!-- <a href="schedule.php"><i class="fa fa-calendar"></i><span> Schedule</span></a> -->
                    <a href="penjadwalan.php"><i class="fa fa-calendar"></i><span> Schedule</span></a>
                </li>
                <li class="logout">
                    <a href="../Login_Logout/logout.php"><i class="fa fa-sign-out"></i><span> Log out</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="user">
                <h4 class="welcome">WELCOME <?php echo $username;?></h4>
        </div>
        <div class="student-info">
            <table>
                <tr>
                    <td>Name</td>
                    <td >:<?=" "?><?=$res2['Nama_User']; ?></td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td >:<?php  
                            $id = $res2['Id_User'];
                            $sql2 = "SELECT *
                            FROM `user`
                            JOIN class ON `user`.Id_Class = class.Id_class
                            WHERE `user`.Id_User = $id;
                            ";
                            $res = mysqli_query($conn,$sql2);
                            $res2 = mysqli_fetch_assoc($res);
                            echo " ";
                            echo $res2['Nama_Class'];
                        ?></td>
                </tr>
                <tr>
                    <td>No Pendaftaran</td>
                    <td >: <?=$id; ?></td>
                </tr>
            </table>
        </div>
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Assignment</th>
                    <th>Score</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM nilai WHERE Id_Siswa = $id";
                    $res = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
                    if($count == 0){ ?>
                    <tr><td>Data not found</td></tr>
                <?php }else{
                    while($row = mysqli_fetch_assoc($res)){ ?>
                        <tr>
                            <td><?php echo $row['Tipe']; ?></td>
                            <td><?php echo $row['Nilai']; ?> </td>
                            <td><?php echo $row['Keterangan']; ?></td>
                        </tr>
                <?php }}?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-6" style="float:left;">
                <div class="tabel-nilai">
                    <img src="../../assets/asset_web/tabel-nilai.jpg" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="col-6" >
                <div class="btnback" style="float:right;">
                    <a href="home2.php"><button type="button">< Back</button></a>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>