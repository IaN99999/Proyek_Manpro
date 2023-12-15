<?php
include '../connection.php';
// include "../navbar_footer/sidebar.php";
session_start();

$username = $_SESSION['username'];
// Mengambil data dari tabel
$iduser = $_SESSION['id'];

// $sql2 = "SELECT * FROM class WHERE  Id_Guru = $iduser";
// $result2 = $conn->query($sql);
// $row2 = $result2->fetch_assoc();
// $iduser = $row2['Id_Class'];


// echo $iduser
$sql = "SELECT *
FROM class join class_type ON class.Id_Type = class_type.Id_Type
WHERE class.Id_Guru = $iduser;";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->

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
        }

        
        .welcome{
            text-align: right;
            padding-right: 15px;
            padding-top : 15px;

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

    /* 
    .sidebar {
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
      background-image: url("../assets/asset_web/bg3.png");
    } */
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
      <h4 class="welcome">WELCOME USER</h4>
    </div>

    <div class="container">
      <div class="row">
        <!-- <button type="button" class="btn btn-success" onclick="ADDFucntion()">ADD Pertemuan</button> -->
        <div class="container" style="background-color:grey;height:max-content">
          <?php foreach ($data as $loopIndex => $row) : ?>
            <div class="card" style="margin: 2%">
              <div class="title">
                <h3 style="color: black; padding-top:4%"><b>Class <?= $row['Nama_Class'] ?></b></h3>

                <p style="color:black">Periode : <?= $row['Periode'] ?></p>
                <p style="color:black">tingkat :  <?= $row['Nama_Jenis'] ?></p>

                <a class="btn btn-success" style="margin-right:32px; margin-bottom:7px" href="absensiguru.php?id=<?= $row['Id_Class'] ?>" role="button">Check</a>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>

</body>

</html>