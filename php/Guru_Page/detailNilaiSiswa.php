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
            width: 400px;
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
            border-radius:10px;
        }
        table{
            width:100%;
        }

        td, th{
            width:25%;
            text-align: center;
            vertical-align:middle;
        }
        .btnback a button{
            background: #AEAEAE;
            padding:10px;
            border-radius:10px;
            margin: 20px 10px 20px;

        }
        label{
            float:left;
        }
        img{
            width:476px;
            height:196px;
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
            <div class="btnback">
                <a href="daftarSiswa.php"><button type="button">< Back</button></a>
            </div>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addmodal">Add</button>
        </div>

        

        <?php
            $sql3 = "SELECT * FROM nilai WHERE Id_Siswa = $id";
            $res = mysqli_query($conn,$sql3);
            $res2 = mysqli_fetch_assoc($res);
            $count = mysqli_num_rows($res);
            // echo $count;
            if(isset($_POST['addsubmit'])){
                // $count2 = $count+1;
                $type = $_POST['type'];
                $score = $_POST['score'];
                $notes = $_POST['notes'];

                $sql = "INSERT INTO `nilai`(`Id_Siswa`, `Nilai`, `Tipe`, `Keterangan`) VALUES ('$id','$score','$type','$notes')";
                $res = mysqli_query($conn,$sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            if(isset($_POST['editsubmit'])){
                $sql3 = "SELECT * FROM nilai WHERE Id_Siswa = $id";
                $res = mysqli_query($conn,$sql3);
                $res2 = mysqli_fetch_assoc($res);
                $type = $_POST['type'];
                $score = $_POST['score'];
                $notes = $_POST['notes'];
                $id_nilai = $res2['Id_Nilai'];

                $sql = "UPDATE `nilai` SET `Nilai`='$score',`Tipe`='$type',`Keterangan`='$notes' WHERE `Id_Nilai` = '$id_nilai'";
                $res = mysqli_query($conn,$sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            if(isset($_POST['delete'])){
                $id = $_POST['id_nilai'];
                $sql4 = "DELETE FROM `nilai` WHERE `Id_Nilai` = '$id'";
                $res = mysqli_query($conn,$sql4);
                echo "<meta http-equiv='refresh' content='0'>";
            }

        ?>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Assignment</th>
                    <th>Score</th>
                    <th>Notes</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql4 = "SELECT * FROM nilai WHERE Id_Siswa = $id";
                    $res2 = mysqli_query($conn,$sql4);
                    $count = mysqli_num_rows($res2);
                    if($count > 0){
                        while($row = mysqli_fetch_assoc($res2)){ ?>
                <tr>
                    <td><?php echo $row['Tipe']; ?></td>
                    <td><?php echo $row['Nilai']; ?> </td>
                    <td><?php echo $row['Keterangan']; ?></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id_nilai" value="<?php echo $row['Id_Nilai']; ?>">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $row['Id_Nilai'];?>">Edit</button>
                            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                        </form>   
                        <!-- Modal Edit  -->
                        <div class="modal fade" id="editmodal<?php echo $row['Id_Nilai'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel2">EDIT DATA</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST">
                                            <input type="hidden" name="id_nilai" value="<?php echo $row['Id_Nilai']; ?>">
                                            <div class="form-group">
                                                <label>Assignment Type</label>
                                                <input type="text" name="type" class="form-control" value="<?php echo $row['Tipe']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Score</label>
                                                <input type="text" name="score" class="form-control" value="<?php echo $row['Nilai'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Notes</label>
                                                <textarea class="form-control" name="notes" rows="5"><?php echo $row['Keterangan']; ?></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary" name="editsubmit">Edit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>       
                    </td> 
                </tr>
                <?php } }?>        
            </tbody>
        </table>
        <div class="tabel-nilai">
            <img src="../../assets/asset_web/tabel-nilai.jpg" class="img-fluid" alt="...">
        </div>
    </div>

    
<!-- modal add -->
<div class="modal fade" id="addmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD DATA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Assignment Type</label>
                        <input type="text" name="type" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Notes</label>
                        <textarea class="form-control" name="notes" rows="5"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="addsubmit">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>


        <!-- <script>
            $(document).ready(function (){
                $(#editbutton).on('click',function(){
                    $(#editmodal).modal('show');
                });
            });
        </script> -->
</body>
</html>

