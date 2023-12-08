<?php
include '../connection.php';
$sql = "SELECT harga.session, harga.Price, class.Nama_Class FROM harga INNER JOIN class on harga.Id_Class = class.Id_Class";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Price List</h1>
        <div class="row py-5">
            <?php


            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text bg-secondary px-2 py-1 text-light rounded">Class Type: <?php echo $row['Nama_Class']; ?></p>
                                <p class="card-text">Session per month: <?php echo $row['session']; ?></p>
                                <p class="card-text">Price: <button class="btn btn-sm btn-success">Rp.<?php echo number_format($row['Price']); ?></button> </p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "No price available.";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>