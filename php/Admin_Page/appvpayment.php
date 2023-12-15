<?php include 'NavbarAdmin.php'; ?>
<?php include '../connection.php'; ?>
<?php
$sql = "SELECT * FROM payment 
JOIN User ON payment.Id_Siswa = User.Id_User
JOIN class ON payment.Id_Class = class.Id_Class";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mengonversi hasil ke array asosiatif
    $datagetpayment = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $datagetpayment = array();
}
// $row = $result->fetch_assoc();
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
    <h1>Aprrove payment</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama siswa</th>
                <th scope="col">Nama class</th>
                <th scope="col">tanggal payment</th>
                <th scope="col">bukti payment</th>
                <th scope="col">approve payment</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo $idtype;
            foreach ($datagetpayment as $loopIndex => $row) :
            ?>
                <tr>
                    <th scope="row"><?= $loopIndex + 1 ?></th>
                    <td><?= $row['Nama_User'] ?></td>
                    <td><?= $row['Nama_Class'] ?></td>
                    <td><?= $row['Tanggal_Payment'] ?></td>
                    <td><a href='SQL/open_image.php?id=<?= $row['Id_Payment'] ?>' target='_blank'>Buka Bukti Payment</a></td>
                    <td><?= $row['Approve_Payment'] ?></td>
                    <td>
                        <button type="button" class="btn btn-success" onclick="ACCfucntion(<?= $row['Id_Payment'] ?>)">ACC</button>
                        <button type="button" class="btn btn-danger" onclick="TolakFucntion(<?= $row['Id_Payment'] ?>)">Tolak</button>
                    </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function ACCfucntion(paymentId) {
        // Ask for confirmation before deleting
        // if (confirm("Are you sure you want to delete this class?")) {
        // Assuming you have a PHP file (delete_data.php) to handle data deletion
        $.ajax({
            type: 'POST',
            url: 'SQL/approve.php',
            data: {
                paymentId: paymentId
            },
            success: function(response) {
                // Handle the response after deleting data
                console.log(response);
                location.reload();
                // Optionally, you can update the UI or reload the page
                // For example, you can remove the deleted row from the table
                // $('#row_' + userId).remove();
            }
        });
    }

    function TolakFucntion(paymentId) {
        // Ask for confirmation before deleting
        // if (confirm("Are you sure you want to delete this class?")) {
        // Assuming you have a PHP file (delete_data.php) to handle data deletion
        $.ajax({
            type: 'POST',
            url: 'SQL/tolakpayment.php',
            data: {
                paymentId: paymentId
            },
            success: function(response) {
                // Handle the response after deleting data
                console.log(response);
                location.reload();
                // Optionally, you can update the UI or reload the page
                // For example, you can remove the deleted row from the table
                // $('#row_' + userId).remove();
            }
        });
        // }
    }
</script>

</body>

</html>