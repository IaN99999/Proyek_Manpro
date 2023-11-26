<?php include 'NavbarAdmin.php'; ?>
<?php include '../connection.php'; ?>
<?php


//select guru buat di tampilin di data
$sql = "SELECT * FROM guru";
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
    <h1>Teacher List</h1>
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6" style="text-align-last: right;">
            <button type="button" class="btn btn-success" id="addbtn" data-bs-toggle="modal" data-bs-target="#myModal">+ADD</button>
            <!-- <button type="button" class="btn btn-warning">Warning</button> -->
        </div>
    </div>
    <table class="table table-striped" style="text-align-last: center;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Teacher</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $loopIndex => $row) : ?>
                <tr>
                    <th scope="row"><?= $loopIndex + 1 ?></th>
                    <td><?= $row['Nama_Guru'] ?></td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Teacher</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <div class="row" style="align-items: center;">
                        <div class="col-3">
                            <span>Nama </span>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Username" name="Username" id="Username">
                        </div>
                    </div>
                    <div class="row" style="align-items: center; padding-top : 1%;">
                        <div class="col-3">
                            <span>Email </span>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Email" name="Email" id="Email">
                        </div>
                    </div>
                    <div class="row" style="align-items: center; padding-top:1%;">
                        <div class="col-3">
                            <span>Password </span>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Password" name="Password" id="Password">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">ADD</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

</body>

</html>