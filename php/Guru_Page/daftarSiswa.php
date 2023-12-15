<?php
include "connection.php";
include "../navbar_footer/sidebar.php";
session_start();
// if(!isset($_SESSION['username'] || $_SESSION['nama_jenis_user'] == "Murid")){
//     header("../Login_Logout/login.php");
//     exit();
// }
$username = $_SESSION['username'];
$id = $_SESSION['id'];
// echo $id;
$sql = "SELECT * FROM class WHERE Id_Guru = $id";
$result = mysqli_query($conn, $sql);
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

    * {
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

    /* .sidebar {
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
    } */

    .menu {
        height: 88%;
        position: relative;
        list-style: none;
        padding-top: 35px;
        text-align: center;
        padding-left: 0px;
    }

    .logo {
        font-size: 18px;
        height: 80px;
        padding: 20px;
        text-align: center;
        overflow: initial;

    }

    .menu li {
        padding: 15px;
        text-align: center;
    }

    .menu li a {
        color: white;
        text-decoration: none;
        gap: 10px;
        display: flex;
        align-items: center;
    }

    .menu li a:hover {
        color: antiquewhite;
    }

    .menu span {
        overflow: hidden;

    }

    .logout {
        position: absolute;
        bottom: 20px;
        width: 100%;
    }


    .welcome {
        text-align: right;
        padding-right: 15px;
        padding-top: 15px;

    }

    .check {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: end;
    }

    .row {
        padding: 20px;
        margin: 30px 20px 30px;
        background: #f3f3f3;
    }

    .btn {
        background: #5aff72;
    }
</style>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>

    <style>     
        .welcome{
            text-align: right;
            padding-right: 15px;
            padding-top : 15px;
            text-transform: uppercase;


        }
        .check{
            width:100%;
            height:100%;
            display: flex;
            align-items: center;
            justify-content: end;
        }
        .row{
            padding:20px;
            margin:30px 20px 30px;
            background: #f3f3f3;
        }
        .btn{
            background: #5aff72;
        }
    </style>
</head>
<body> -->
<!-- <div class="sidebar">
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
                <a href="../Login_Logout/logout.php"><i class="fa fa-sign-out"></i><span> Log out</span></a>
            </li>
        </ul>
    </div> -->
<div class="container">
    <div class="user">
        <h4 class="welcome">WELCOME <?php echo $username; ?></h4>
    </div>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $id_class = $row['Id_Class'];
        $sql3 = "SELECT * FROM user WHERE Id_Class = $id_class";
        $result4 = mysqli_query($conn, $sql3);
        while ($row2 = mysqli_fetch_assoc($result4)) {
    ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="student-info">
                        <p>Name: <?php echo $row2['Nama_User']; ?></p>
                        <p>Class: <?php
                                    echo $row['Nama_Class'];
                                    ?></p>
                        <p>No Pendaftaran: <?php echo $row2['Id_User']; ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="check">
                        <a href="detailNilaiSiswa.php?id=<?= $row2['Id_User']; ?>">
                            <button type="button" class="btn">Check</button>
                        </a>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>
</body>

</html>