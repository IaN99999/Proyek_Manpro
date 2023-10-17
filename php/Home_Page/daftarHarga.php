<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga Kursus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Harga Kursus Bahasa Inggris</h1>
        <div class="row">
            <?php
            
            $host = "localhost"; 
            $username = "username";
            $password = "password"; 
            $database = "hargakursus"; 
            
            
            $conn = mysqli_connect($host, $username, $password, $database);
            
            
            if (!$conn) {
                die("Koneksi ke database gagal: " . mysqli_connect_error());
            }

            
            $sql = "SELECT * FROM hargakursus";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['id_kelas']; ?></h5>
                            <p class="card-text">Sesi per Bulan: <?php echo $row['sesi_perBulan']; ?></p>
                            <p class="card-text">Harga: <?php echo $row['harga']; ?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            } else {
                echo "Belum ada data harga kursus yang tersedia.";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
