<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Full Screen Two Column Page with Background Image (Bootstrap)</title> 
    <!-- Include Bootstrap CSS --> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> 
    <style> 
        body, html { 
            height: 100%; 
            margin: 0; 
        } 
        .column1 { 
            background-image: url('../../assets/asset_web/bg.png'); /* Replace with the actual path to your image */ 
            background-size: cover; 
            background-position: center; 
            color: white; /* Set text color for better readability */ 
            height: 100%; 
        } 
    </style> 
</head> 
<body> 
    <div class="container-fluid h-100"> 
        <div class="row h-100"> 
            <!-- Column 1 with background image --> 
            <div class="col-md-6 column1"> 
                <!-- Content for the first column goes here --> 
            </div> 
 
            <!-- Column 2 -->
            <div class="col-md-6">
                <h2>Halaman Utama</h2>
                <p>Selamat datang di halaman utama.</p>
                <a href="logout.php">Logout</a>
            </div>
 
        </div> 
    </div> 
 
    <!-- Include Bootstrap JS (Optional) --> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
</body> 
</html>
