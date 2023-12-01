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
    <link rel="stylesheet" href="../../css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

    <div class="sidebar">
        <div class="logo">Dana English Course</div>
        <ul class="menu">
            <li>
                <a href="home2.php"><i class="fa fa-tachometer-alt"></i><span> Dashboard</span></a>
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
                <a href="penjadwalan.php"><i class="fa fa-calendar"></i><span> Schedule</span></a>
            </li>
            <li class="logout">
                <a href="../Login_Logout/logout.php"><i class="fa fa-sign-out"></i><span> Log out</span></a>
            </li>
        </ul>
    </div>
    

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <span>WELCOME </span>
                <span id="namauser"></span>
            </div>
        </div>
        <div class="card--container">
            <h3 class="main--title">Class Offered</h3>
        </div>
        <div class="image--1">
            <div class="image--title1">
                <h1>Beginner</h1>
                <span>Beginner Class 1 Semester</span><br>
                <div class="isi">
                
                <span>Lessons : English Alphabet, Verb to Be, Vowel / Consonants,..</span>
                </div>
                
            </div>
            <div class="button">
                <a href="paymentBeginner.php" style="text-decoration: none;"><button class="button-1" >Join Class</button></a>
            </div>
        </div>

        <div class="image--2">
            <div class="image--title1">
                <h1>Intermediate</h1>
                <span>Beginner Class 1 Semester</span><br>
                <div class="isi">
                
                <span>Lessons : English Alphabet, Verb to Be, Vowel / Consonants,..</span>
                </div>
                
            </div>
            <div class="button">
            <a href="paymentInter.php" style="text-decoration: none;"><button class="button-1" >Join Class</button></a>
            </div>
        </div>

        <div class="image--3">
            <div class="image--title1">
                <h1>Expert</h1>
                <span>Beginner Class 1 Semester</span><br>
                <div class="isi">
                
                <span>Lessons : English Alphabet, Verb to Be, Vowel / Consonants,..</span>
                </div>
                
            </div>
            <div class="button">
            <a href="paymentEx.php" style="text-decoration: none;"><button class="button-1" >Join Class</button></a>
            </div>
        </div>
       
        

        
    </div>
    
    <script>
    let namauser = document.getElementById("namauser");
    namauser.textContent = "<?php echo $_SESSION['username']; ?>"
  </script>

</body>
</html>