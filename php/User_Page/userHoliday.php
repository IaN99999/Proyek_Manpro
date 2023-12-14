<?php
include "../connection.php";

require_once('../connection.php');
$query = "SELECT * FROM libur";
$result = mysqli_query($conn,$query)

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/buy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
    <style>
        th, td{
            padding: 10px 20px;
        }
        table{
            flex-grow: 3;
            margin-top: 10px;
        }

        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
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
                <a href="joinedClass.php"><i class="fa fa-graduation-cap"></i><span> Class</span></a>
            </li>
            <li>
                <a href="reportSiswa.php"><i class="fa fa-book"></i><span> Report</span></a>
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

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Holiday Schedule</h2>
            </div>
            <div class="user--info">
                <span>WELCOME </span>
                <span id="namauser"></span>
            </div>
        </div>

        <div class="buy--wrapper">
            <div class="header--title">
                <h4>Table List</h4> 
                <div class="table">
                <table>
                    <thead style="padding:10px;">
                        <tr>
                            <th style="width:30%;">Date</th>
                            <th style="width:50%;">Description</th>
        
                        </tr>
                        <tr>
                            <?php
                            while($row=mysqli_fetch_assoc($result)){
                            ?>  

                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['description'];?></td>
                           
                
                            

                        </tr>
                            <?php
                            }
                            ?>
                      
                
                    </thead>
                </table>
                </div>      
            </div>    
        </div>
    

    </div>

    
</body>
</html>