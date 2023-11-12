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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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

        }
        .student-info{
            background: #F3F3F3;
            width: 40%;
            border-radius: 10px;
            padding: 20px;
        }
        .student-info table tr td{
            text-align:left;
        }
        .button-container{
            width:100%;
        }
        .button-container .btn{
            /* float: right; */
            color: white;
            margin: 20px 10px 20px;
        }
        .table{
 
        }
        td{
            width:33%;
            text-align: center;
            vertical-align:middle;
        }
        .btnback a button{
            background: #AEAEAE;
            padding:10px;
            border-radius:10px;
            /* margin: 20px 10px 20px; */

        }
    </style>
</head>
<body>
<div class="sidebar">
        <div class="logo">Dana English Course</div>
        <ul class="menu">
            <li>
                <a href="#"><i class="fa fa-tachometer-alt"></i><span> Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-graduation-cap"></i><span> Class</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-book"></i><span> Report</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-archive"></i><span> Buy Package</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar"></i><span> Schedule</span></a>
            </li>
            <li class="logout">
                <a href="#"><i class="fa fa-sign-out"></i><span> Log out</span></a>
            </li>
        </ul>
    </div>

        

    <div class="container">
        <div class="user">
             <h4 class="welcome">WELCOME USER</h4>
        </div>
        <div class="student-info">
            <table>
                <tr>
                    <td>Name</td>
                    <td >:<?=" "?><?=$result2['Nama_Siswa']; ?></td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td >:<?php  
                            $id = $result2['Id_Siswa'];
                            $sql2 = "SELECT * FROM class WHERE Id_Siswa = $id";
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
        
        <div class="button-container d-flex justify-content-end">
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
    </div>

    

    
</body>
</html>