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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin</title>
</head>
<style>
    header {
        position: absolute;
        background: #ffffff;
        top: 0;
        left: 0;
        padding: 0 100px;
        width: 100%;
        box-sizing: border-box;
    }

    header .logo {
        color: rgb(83, 83, 83);
        height: 60px;
        line-height: 60px;
        font-size: 24px;
        float: left;
        font-weight: bold;
    }

    header nav {
        float: right;
    }

    header nav ul {
        margin: 0;
        padding: 0;
        display: flex;
    }

    header nav ul li {
        list-style: none;
    }

    header nav ul li a {
        color: rgb(83, 83, 83);
        height: 60px;
        line-height: 60px;
        padding: 0 20px;
        text-decoration: none;
        display: block;
    }

    header nav ul li a:hover,
    header nav ul li a.active {
        color: #ffffff;
        background-color: #aaaaaa;
    }

    .menu-toggle {
        color: rgb(94, 94, 94);
        float: right;
        line-height: 50px;
        font-size: 24px;
        cursor: pointer;
        display: none;
    }

    /* responsive */

    @media (max-width: 650px) {
        header {
            padding: 0 20px;
        }

        .menu-toggle {
            display: block;
        }

        header nav {
            position: absolute;
            width: 100%;
            height: calc(100vh - 50px);
            background: #333;
            top: 50px;
            left: -100%;
            transition: 0.5s all;
        }

        header nav.active {
            left: 0;
        }

        header nav ul {
            display: block;
            text-align: center;
        }

        header nav ul li a {
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            color: rgb(255, 255, 255);
        }
    }
</style>

<body>
    <header>
        <div class="logo">Hi `<?php echo $_SESSION['usernameAdmin']; ?>`</div>
        <nav>
            <ul>
                <li><a href="indexAdmin.php">Home</a></li>
                <li><a href="class.php">Class</a></li>
                <li><a href="teacherAdmin.php">Teacher</a></li>
                <li><a href="#contact" style="pointer-events: none;"><span style="color: gray; cursor: not-allowed;">Coming Soon</span></a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </header>
    <script>
        $(document).ready(function() {
            $(".menu-toggle").click(function() {
                $('nav').toggleClass('active');
            })
        })
    </script>