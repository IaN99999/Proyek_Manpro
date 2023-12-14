<?php
include '../connection.php';
include "../navbar_footer/sidebar.php";
session_start();

$username = $_SESSION['username'];
// Mengambil data dari tabel


$sql = "SELECT * FROM user WHERE Nama_User = '$username' AND Jenis_User = '2'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$iduser = $row['Id_User'];


$sql = "SELECT *
FROM user
JOIN class ON user.id_class = class.Id_Class
JOIN jadwal ON class.Id_Class = jadwal.Id_Class
WHERE user.Id_User = $iduser;";
$result = $conn->query($sql);

// Memeriksa hasil query
if ($result->num_rows > 0) {
  // Mengonversi hasil ke array asosiatif
  $data = $result->fetch_all(MYSQLI_ASSOC);
} else {
  $data = array();
}

$conn->close();
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Latest compiled JavaScript -->

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
        }
    /* body {
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
    /* .logo {
      padding: 30px 20px;
      font-size: 20px;
    }

    .about {
      margin-top: 140px;
    }

    /* .welcome {
      padding-left: 55%;
      padding-top: 15px;

    }

    .user {
      width: 100%;
      background-color: white;
      position: fixed;
      z-index: 1;
    } */

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
<!-- </head>

<body> -->

  <!-- <div class="vernav">
    <ul>
      <li><a class="logo" href="#">Dana English Course</a></li>
      <li><a class="active" href="dashboard.php"><img src="../../assets/asset_web/dash.png"> Dashboard</a></li>
      <li><a href="#news"><img src="../../assets/asset_web/class.png"> Class</a></li>
      <li><a href="#contact"><img src="../../assets/asset_web/Paper.png"> Report</a></li>
      <li><a href="#contact"><img src="../../assets/asset_web/buy.png"> Buy Package</a></li>
      <li><a href="#contact"><img src="../../assets/asset_web/date.png"> Schedule</a></li>
      <li><a class="about" href="#about"><img class="out" src="../../assets/asset_web/out.png"> Log Out</a></li>
    </ul>
  </div> -->



  <div style="margin-left:20%;padding:0px 16px;">
    <div class="user">
      <h4 class="welcome">WELCOME USER</h4>
    </div>

    <div class="container">
      <div class="row">
        <div class="container" style="background-color:grey;height:max-content">
        <?php foreach ($data as $loopIndex =>$row): ?>
            <div class="card" style="margin: 2%">
            <div class="title">
              <h3 style="color: black; padding-top:4%"><b>PERTEMUAN <?= $loopIndex + 1 ?></b></h3>

              <p style="color:black">DATE/TIME :  <?= $row['Tanggal_Jadwal'] ?>/10.30-13.30</p>
              <p style="color:black">LECTURER : <?= $row['Nama_User'] ?></p>
              <p style="color:black">LESSON : Introduction</p>

              <a class="btn btn-success" style="margin-right:32px; margin-bottom:7px" href="absensicheckguru.php" role="button">Check</a>
            </div>
          </div>
        <?php endforeach; ?>
        
        </div>
      </div>
    </div>
  </div>



</body>

</html>