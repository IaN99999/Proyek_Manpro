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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
        <?php 
            while($row = mysqli_fetch_assoc($result)){ 
        ?>     
        <div class="row">
            <div class="col-md-6">
                <div class="student-info">
                    <p>Name: <?php echo $row['Nama_Siswa'];?></p>
                    <p>Class: <?php  
                        $id = $row['Id_Class'];
                        $sql2 = "SELECT * FROM class WHERE Id_Class = $id";
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