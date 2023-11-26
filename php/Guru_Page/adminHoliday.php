<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $description = $_POST['description'];
  

    $sql = "INSERT INTO libur (date,description) VALUES ('$date','$description')";
    $result = mysqli_query($conn, $sql);
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $qry = "DELETE FROM libur WHERE id='$id'";
    $result = mysqli_query($conn,$qry);
}

require_once('connection.php');
$query = "SELECT * FROM libur";
$result = mysqli_query($conn,$query);

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
                <a href="buypackage.php"><i class="fa fa-calendar"></i><span> Schedule</span></a>
            </li>
            <li class="logout">
                <a href="#"><i class="fa fa-sign-out"></i><span> Log out</span></a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Setting Holiday</h2>
            </div>
            <div class="user--info">
                <span>WELCOME </span>
                <span id="namauser"></span>
            </div>
        </div>


        <div class="buy--wrapper"><form action="" method="post">
            <div class="header--title">
                
                <h4>Pick a date : </h4>
                <div class="choose">
                    <input type="date" name="date" id="tanggal" style="background-color:lightgrey; padding: 5px 15px;border-radius: 5px;">
                </div> 
                <h4 class="paytitle">Description : </h4>
                <div class="desc">
                    <input type="text" placeholder="write your description" name="description" id="decs" style="background-color:lightgrey; padding: 5px 15px;border-radius: 5px;">
                </div>
            
            </div>
             <div class="button">
                <button class="button" name="submit" style="background-color:#4287f5; padding: 5px 15px;border-radius: 5px; color:white; margin-top : 20px;">Submit</button>          
            </div>   
            </form> 
        </div>

        <div class="buy--wrapper">
            <div class="header--title">
                <h4>Table List</h4> 
                <div class="table">
                <table>
                    <thead style="padding=10px;">
                        <tr>
                            <th style="width=30%;">Date</th>
                            <th style="width=50%;">Description</th>
                            <th style="width=0%;">Action</th>
                        </tr>
                        <tr>
                            <?php
                            while($row=mysqli_fetch_assoc($result)){
                            ?>  

                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['description'];?></td>
                            
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php $row['id']?>">
                                   <td> <button name="delete" style="background-color:red;color:white; padding: 5px 10px;border-radius: 5px;">Delete</button></td>
                                </form>
                           
                
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