<?php
// echo "iwjdiwajdia";
include '../connection.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../User_Page/home.php");
    exit();
}

if (isset($_POST['submit'])) {
    // echo "owjdowajd";
    $email =  $_POST['email'];
    $password =  $_POST['password']; // Hash the input password using SHA-256

    $sql = "SELECT * FROM user WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['Nama_User'];
        // echo "<script>alert('jadi')</script>";
        header("Location: ../User_Page/home.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <link href="../../css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <title>login</title>
    <style>
        .content {
            justify-content: center;
        }

        h1 {
            text-align: center;
            padding-top: 50%;
        }
    </style>

</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-6 column1">
                <div class="div">
                    <h1>Glad to see you back!</h1>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-6 column2">
                <form action="" method="POST" class="login-email">
                    <div class="row content">
                        <div class="col-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <i class="input-group-text fa-solid fa-user" style="color: #053fa3;padding-top: 29%;padding-bottom: 22%;"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" name="email" require>
                            </div>
                        </div>
                    </div>
                    <div class="row content">
                        <div class="col-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <i class="input-group-text fa-solid fa-lock" style="color: #053fa3;padding-top: 29%;padding-bottom: 22%;"></i>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" require>
                            </div>
                        </div>
                    </div>
                    <div class="row content">
                        <button class="btn btn-primary btn-lg" style="width: 71%;background-color: transparent;color: cornflowerblue;" name="submit"><span>LOGIN</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>