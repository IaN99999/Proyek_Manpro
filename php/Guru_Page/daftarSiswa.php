<?php 
    include "connection.php";
    $sql = "SELECT * FROM siswa";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

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
        .container{
            width:75%;
            margin-top: 5%;
            margin-left: 20px;
            margin-right: 20px;
            position: absolute;
            background: #c3c1c1;
            overflow:auto;
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

    <div class="container">
        <?php 
            while($row = mysqli_fetch_assoc($result)){ 
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="student-info">
                    <p>Name: <?php echo $row['Nama_Siswa'];?></p>
                    <p>Class: <?php  
                        $id = $row['Id_Siswa'];
                        $sql2 = "SELECT * FROM class WHERE Id_Siswa = $id";
                        $res = mysqli_query($conn,$sql2);
                        $result2 = mysqli_fetch_assoc($res);
                        echo $result2['Nama_Class'];
                    ?></p>
                    <p>No Pendaftaran: <?php echo $row['Id_Siswa'];?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="check">
                    <a href="detailNilaiSiswa.php?id=<?= $row['Id_Siswa']; ?>">
                        <button type="button" class="btn">Check</button>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>