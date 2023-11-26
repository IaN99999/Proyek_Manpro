<?php
// echo "iwjdiwajdia";
include '../connection.php';
session_start();

// if (isset($_SESSION['usernameAdmin'])) {
//     header("Location: ../Admin_Page/indexAdmin.php");
//     exit();
// }

if (isset($_POST['submit'])) {
    // echo "owjdowajd";
    $email =  $_POST['Emailadmin'];
    $password =  $_POST['passwordAdmin']; // Hash the input password using SHA-256

    $sql = "SELECT * FROM admin WHERE Email='$email' OR UserName = '$email' AND Password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['usernameAdmin'] = $row['UserName'];
        echo "<script>alert('jadi')</script>";
        header("Location: ../Admin_Page/indexAdmin.php");
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
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>

</head>

<body>
    <section class="vh-10000 gradient-custom">
        <div class="container py-5 h-10000">
            <div class="row d-flex justify-content-center align-items-center h-10000">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <form action="" method="POST" class="login-Admin">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login Admin</h2>
                                    <p class="text-white-50 mb-5">Please enter your Email and Password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="Emailadmin" class="form-control form-control-lg" name="Emailadmin" placeholder="Email" />
                                        <label class="form-label" for="Emailadmin">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="passwordAdmin" name="passwordAdmin" class="form-control form-control-lg" placeholder="Password" />
                                        <label class="form-label" for="passwordAdmin">Password</label>
                                    </div>

                                    <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit"  name="submit">Login</button>

                                    <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div> -->

                                </div>

                                <div>
                                    <!-- <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a> -->
                                    </p>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>