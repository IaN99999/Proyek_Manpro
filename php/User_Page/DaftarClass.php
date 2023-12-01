<?php
include "../connection.php";
$jenis = isset($_GET['jenis']) ? $_GET['jenis'] : 'Tidak Ada Jenis';

if (isset($_POST['submit'])) {
    $id_class=$_GET['page'];
    $tanggal = '';
    $BuktiTransfer = $_POST['BuktiTransfer'];
    $ApprovePayment = 'no';
    
    $sql = "INSERT INTO payment (Id_Siswa,Id_Class,Tanggal_Payment,Approve_Payment) VALUES ('','$id_class','$tanggal','$BuktiTransfer','$ApprovePayment')";
    $result = mysqli_query($conn, $sql);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <title>Pendaftaran</title>
</head>

<body style="background-color: darkgrey;">

    <div class="container" style="background-color: aliceblue;margin-top: 3%;padding-bottom: 3%;border-radius: 10px;">
        <form method="post">
            <h1>Pendaftaran Class <?php if (isset($_GET['page'])) {
            $page = $_GET['page'];

            if ($page == 1) {
                echo 'Beginner';
            } elseif ($page == 2) {
                echo 'Intermediate';
            } elseif ($page == 3) {
                echo 'Expert';
            } else {
                echo 'Tidak ada jenis';
            }
        } else {
            echo '<div id="satu"><h1>Halaman Utama</h1></div>';
        }
    ?></h1>

        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <!-- <span>tampat tranfer</span> -->
            </div>
            <div class="col-9">
                <div class="card" style="width: 18rem;">
                    <img src="../../assets/asset_web/bca.jpeg" class="card-img-top" alt="BCA">
                    <div class="card-body">
                        <p class="card-text">Silakan Tranfer Ke Nomor Rekening di Atas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Bukti Tranfer :</span>
            </div>
            <div class="col-9" style="padding-top: 2%;">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="BuktiTransfer">Upload</label>
                    <input type="file" class="form-control" id="BuktiTransfer" name="BuktiTransfer">
                </div>
            </div>
            <div class="col-3" style="text-align-last: right;">
                <button name="submit">Submit</button>
            </div>

        </div>
    </form>
    </div>

</body>

</html>