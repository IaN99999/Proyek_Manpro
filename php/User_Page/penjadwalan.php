<!DOCTYPE html>
<html>
<head>
    <title>Course Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/boostrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- <?php include 'navbar_footer/navbar.php'; ?> -->

    <h1>Jadwal Kursus Bahasa Inggris</h1>

    <div class="jadwal-container">
        <?php
        include '../connection.php';

        $sql = "SELECT jadwal.Id_Jadwal, class.Nama_Class, jadwal.Tanggal_Jadwal FROM jadwal INNER JOIN class ON jadwal.Id_Class = class.Id_Class";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
            <tr>
                <th>ID Jadwal</th>
                <th>Nama Kelas</th>
                <th>Tanggal</th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["Id_Jadwal"]. "</td>
                    <td>" . $row["Nama_Class"]. "</td>
                    <td>" . $row["Tanggal_Jadwal"]. "</td>
                </tr>";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data jadwal.";
        }

        $conn->close();
        ?>
    </div>

    <!-- <?php include 'navbar_footer/footer.php'; ?> -->

</body>
</html>
