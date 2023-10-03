<!DOCTYPE html>
<html lang = "en">

<head>

<title>Daftar Harga Kursus</title>
<meta charset="UTF-8".
<meta name="viewport" content="width=device-width, inntial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/boostrap@5.3.0/dist/js/bootstrap.bundle.min.js></script>

<?php
$daftarHarga = [
    ["Beginner", "8 kali pertemuan", "Rpxxx"],
    ["Intermediate", "12 kali pertemuan", "Rpxxx"],
    ["Expert", "16 kali pertemuan", "Rpxxx"]
];
?>

<!-- Tabel Daftar Harga Kursus -->
<table>
    <thead>
        <tr>
            <th>Level</th>
            <th>Jumlah Pertemuan</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($daftarHarga as $kursus) {
            echo "<tr>";
            echo "<td>{$kursus[0]}</td>";
            echo "<td>{$kursus[1]}</td>";
            echo "<td>{$kursus[2]}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

    </body>
    </html>
