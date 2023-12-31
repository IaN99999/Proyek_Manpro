<?php
    if (isset($_POST['join'])){
         header("Location: DaftarClass.php?page=1");
         exit();
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/buy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
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
                <a href="userHoliday.php"><i class="fa fa-calendar"></i><span> Schedule</span></a>
            </li>
            <li class="logout">
                <a href="../Login_Logout/logout.php"><i class="fa fa-sign-out"></i><span> Log out</span></a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Buy Package</h2>
            </div>
            <div class="user--info">
                <span>WELCOME </span>
                <span id="namauser"></span>
            </div>
        </div>
        
        <div class="image--1">
            <div class="image--title1">
                <h1>Beginner</h1>
                <span>Beginner Class 1 Semester</span><br>
                <div class="isi">
                <span>Lessons : English Alphabet, Verb to Be, Vowel / Consonants,..</span>
                </div>
            </div>
        </div>

        <div class="buy--wrapper">
            <div class="header--title">
                <h2>Buy Package</h2>
                <h4>Session : </h4>
                <div class="choose">
                <select name="session" id="session">
                    <option value="1">Tuesday, 16:30-18:30 & Thursday, 16:30-18:30</option>
                    <option value="2">Wednesday, 16:30-18:30 & Friday, 16:30-18:30</option>
                    <option value="3">Monday, 16:30-18:30 & Saturday, 16:30-18:30</option>
                </select>
                </div> 
                <h4 class="paytitle">Payment Detail : </h4>
                <div class="list">
                    <ul>
                    <li>Beginner Class 1 Semester</li>
                    <li>Book</li>
                </ul>
                </div>
                <h4 class="pricetitle">Price :</h4>
                <h4 class="pay">Payment Method : </h4>
               
            </div>
            <div class="payment">
            <span>Rp. 1.350.000</span><br>
            <select name="paymentmethod" id="">
                <option value="1">Mandiri</option>
                <option value="2">BCA</option>
            </select>
          
        </div>    
        
        <form method="post">
            <div class="button">
                 <a href="DaftarClass.php?page=1" class="button" name="join">Join Class</a>
            </div>
      
        </form>
      
       
    

    </div>

    
</body>
</html>