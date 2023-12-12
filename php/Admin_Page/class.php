<?php include 'NavbarAdmin.php'; ?>
<?php include '../connection.php'; ?>
<?php


//select guru buat di tampilin di data
$sql = "SELECT * FROM class_type";
$result = $conn->query($sql);

// Memeriksa hasil query
if ($result->num_rows > 0) {
    // Mengonversi hasil ke array asosiatif
    $data = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $data = array();
}

$conn->close();

?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentLocation = window.location.href;

        var navLinks = document.querySelectorAll("nav ul li a");

        navLinks.forEach(function(link) {
            if (link.href === currentLocation) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    });
</script>

<div class="container" style="margin-top: 9%;">
    <h1>Class List</h1>
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6" style="text-align-last: right;">
            <!-- <button type="button" class="btn btn-warning">Warning</button> -->
        </div>
    </div>
    <table class="table table-striped" style="text-align-last: center;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Class</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $loopIndex => $row) : ?>
                <tr>
                    <th scope="row"><?= $loopIndex + 1 ?></th>
                    <td><?= $row['Nama_Jenis'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="jenisclass.php?jenis=<?= $row['Nama_Jenis'] ?>" role="button">Check</a>
                        <!-- <button type="button" class="btn btn-warning">Check</button> -->
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

</body>

</html>