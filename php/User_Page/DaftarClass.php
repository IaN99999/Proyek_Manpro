<?php
$jenis = isset($_GET['jenis']) ? $_GET['jenis'] : 'Tidak Ada Jenis';
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
        <h1>Pendaftaran Class <?php echo $jenis; ?></h1>

        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Nama :</span>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="NamaPendaftar">
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Tempat/Tanggal Lahir :</span>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="TempatLahir">
            </div>
            <div class="col-1" style="text-align-last: center;">
                <span>/</span>
            </div>
            <div class="col-4">
                <input type="date" class="form-control" id="TanggalLahir">
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>
                    Pekerjaan :
                </span>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="Pekerjaan">
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Nomor HP :</span>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="NomorHP">
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Alamat :</span>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="alamat">
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Email :</span>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" id="EmailPendaftar">
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Umur :</span>
            </div>
            <div class="col-9">
                <input type="number" class="form-control" id="Umur">
            </div>
        </div>
        <div class="row" style="place-items: center;padding-top: 1%;">
            <div class="col-3" style="text-align-last: right;">
                <span>Jenis Kelamin :</span>
            </div>
            <div class="col-9">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="JenisKelamin" id="inlineRadio1" value="L">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="JeinisKelamin" id="inlineRadio2" value="P">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
        </div>
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
                    <input type="file" class="form-control" id="BuktiTransfer">
                </div>
            </div>
        </div>
    </div>
</body>

</html>