<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

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
        } */

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
    </style>

</head>

<body>
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



    <div style="margin-left:20%;padding:0px 16px;">
        <div class="user">
            <h4 class="welcome">WELCOME USER</h4>
        </div>
        <div class="container" style="margin-top: 10%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-6">
                <h4 style="color: black"><b>SESSION 1</b></h4>
            </div>
            <div class="col-6" style="place-self: center;">
                <button type="button" class="btn btn-success" >Save</button>
                <button type="button" class="btn btn-primary" style="margin-right: 2%">Edit</button>
            
            </div>
        </div>           

 
            <table class="table  table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Absence</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Hadir
                                <label class="form-check-label" for="radio1"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Izin/Sakit
                                <label class="form-check-label" for="radio2"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">Alpha
                                <label class="form-check-label"></label>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

</body>

</html>