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

        /* li a.active {
  
}

li a:hover:not(.active) {
  
} */
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