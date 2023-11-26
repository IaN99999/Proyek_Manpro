<?php include 'NavbarAdmin.php'; ?>
<?php include '../connection.php'; ?>
<?php


//select guru buat di tampilin di data
$sql = "SELECT * FROM user WHERE Jenis_User = 2";
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
                <th scope="col">Id_User</th>
                <th scope="col">Teacher</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $loopIndex => $row) : ?>
                <tr>
                    <th scope="row"><?= $loopIndex + 1 ?></th>
                    <td><?= $row['Id_User'] ?></td>
                    <td><?= $row['Nama_User'] ?></td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="editFunction(<?= $row['Id_User'] ?>)" data-bs-toggle="modal" data-bs-target="#myModal">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteFunction(<?= $row['Id_User'] ?>)">Hapus</button>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <form action="SQL/insertTeacher.php" method="post" id="Formsubmit">
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
                                <input type="email" class="form-control" placeholder="Email" name="Email" id="Email">
                            </div>
                        </div>
                        <div class="row" style="align-items: center; padding-top:1%;">
                            <div class="col-3">
                                <span>Password </span>
                            </div>
                            <div class="col-6">
                                <input type="password" class="form-control" placeholder="Password" name="Password" id="Password">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">ADD</button>
                    <!-- <button type=""></button> -->
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </form>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function editFunction(userId) {
        console.log('Edit button clicked for user with ID: ' + userId);
        let Formsubmit = document.getElementById('Formsubmit');
        Formsubmit.action = "";
        $.ajax({
            type: 'POST',
            url: 'SQL/GetEditData.php',
            data: {
                user_id: userId
            },
            success: function(data) {
                // Assuming the returned data is in JSON format
                var userData = JSON.parse(data);

                // Populate the modal fields
                $('#Username').val(userData.Nama_User);
                $('#Password').val(userData.Password);
                $('#Email').val(userData.Email);
            }
        });

        $('#Formsubmit').on('submit', function(event) {
            // event.preventDefault();
            let Username = document.getElementById("Username");
            let Password = document.getElementById("Password");
            let Email = document.getElementById("Email");

            // Assuming you have a PHP file (update_data.php) to handle data update
            $.ajax({
                type: 'POST',
                url: 'SQL/UpdateDataTeacher.php',
                data: {
                    user_id: userId,
                    nama: Username.value,
                    passwordbaru: Password.value,
                    emailbaru: Email.value,
                },
                success: function(response) {
                    // Handle the response after updating data
                    console.log(response);

                    // Close the modal
                    $('#myModal').modal('hide');
                }
            });
        });
    }
    function deleteFunction(userId) {
        // Ask for confirmation before deleting
        if (confirm("Are you sure you want to delete this user?")) {
            // Assuming you have a PHP file (delete_data.php) to handle data deletion
            $.ajax({
                type: 'POST',
                url: 'SQL/DeleteTeacher.php',
                data: { user_id: userId },
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
    }
</script>

</html>