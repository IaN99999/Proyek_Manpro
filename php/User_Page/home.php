<?php
// echo "iwjdiwajdia";
include '../connection.php';
session_start();
// echo $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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

    /* li a.active {}

    li a:hover:not(.active) {} */

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

    .one {
      margin-top: 5%;
      background-image: url('../../assets/asset_web/db1.png');
    }

    .two {
      margin-top: 24%;
      background-image: url('../../assets/asset_web/db2.png');
    }

    .three {
      margin-top: 43%;
      margin-bottom: 5%;
      background-image: url('../../assets/asset_web/db3.png');
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
      <li><a class="active" href="dashboard.php"><img src="../../assets/asset_web/dash.png"> Dashboard</a></li>
      <li><a href="#news"><img src="../../assets/asset_web/class.png"> Class</a></li>
      <li><a href="#contact"><img src="../../assets/asset_web/Paper.png"> Report</a></li>
      <li><a href="#contact"><img src="../../assets/asset_web/buy.png"> Buy Package</a></li>
      <li><a href="#contact"><img src="../../assets/asset_web/date.png"> Schedule</a></li>
      <li><a class="about" href="#about"><img class="out" src="../../assets/asset_web/out.png"> Log Out</a></li>
    </ul>
  </div>



  <div style="margin-left:20%;padding:0px 16px;">
    <div class="user">
      <h4 class="welcome">WELCOME <span id="namauser"></span></h4>
    </div>


    <div class="container one">
      <div class="title">
        <h3>Beginner</h3>
      </div>
      <a class="btn btn-primary" href="DaftarClass.php?jenis=Beginner" role="button">Join Class</a>
    </div>

    <div class="container two">
      <div class="title">
        <h3>Intermediate</h3>
      </div>
      <a class="btn btn-primary" href="DaftarClass.php?jenis=Intermediate" role="button">Join Class</a>
    </div>


    <div class="container three">
      <div class="title">
        <h3>Expert</h3>
      </div>
      <a class="btn btn-primary" href="DaftarClass.php?jenis=Expert" role="button">Join Class</a>
    </div>





  </div>
  <script>
    let namauser = document.getElementById("namauser");
    namauser.textContent = "<?php echo $_SESSION['username']; ?>"
  </script>

</body>

</html>