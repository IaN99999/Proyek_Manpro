<?php
$jenis = isset($_GET['jenis']) ? $_GET['jenis'] : 'Tidak Ada Jenis';
?>
<?php include 'NavbarAdmin.php'; ?>
<?php include '../connection.php'; ?>
<?php

$sql = "SELECT * FROM class_type WHERE Nama_Jenis = '$jenis'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$idtype = $row['Id_Type'];



$sqlgetclass = "SELECT * FROM class WHERE Id_Type = '$idtype'";
$resultgetclass = $conn->query($sqlgetclass);
// $rowgetclass = $resultgetclass->fetch_assoc();
// $idclass = $rowgetclass['Id_Class'];

if ($resultgetclass->num_rows > 0) {
    // Mengonversi hasil ke array asosiatif
    $datagetclass = $resultgetclass->fetch_all(MYSQLI_ASSOC);
} else {
    $datagetclass = array();
}

$queryselectguru = "SELECT * FROM user WHERE Jenis_User = 2";
$resultselectguru = mysqli_query($conn, $queryselectguru);


?>

<div class="container" style="margin-top: 9%;">
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6" style="text-align-last:right">
            <button type="button" class="btn btn-success" id="addbtn" data-bs-toggle="modal" data-bs-target="#myModal">+ADD</button>
        </div>

    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">Nama Class</th>
                <th scope="col">Harga</th>
                <th scope="col">Periode</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo $idtype;

            foreach ($datagetclass as $loopIndex => $row) :
                $idclass = $row['Id_Class'];
                $idguru = $row['Id_Guru'];
                $sqlgetharga = "SELECT * FROM harga WHERE Id_Class = '$idclass'";
                $resultgetharga = $conn->query($sqlgetharga);

                // Periksa apakah kueri berhasil dijalankan
                if ($resultgetharga) {
                    $rowgetharga = $resultgetharga->fetch_assoc();
                    $harga = isset($rowgetharga['Price']) ? $rowgetharga['Price'] : 'N/A';
                } else {
                    // Handle kesalahan jika diperlukan
                    $harga = 'Error fetching price';
                }

                $sqlGetGuru = "SELECT * FROM user WHERE Id_User = '$idguru' AND Jenis_User = '2'";
                $resultGetGuru = $conn->query($sqlGetGuru);

                // Periksa apakah kueri berhasil dijalankan
                if ($resultGetGuru) {
                    $rowGetGuru = $resultGetGuru->fetch_assoc();
                    $namaGuru = isset($rowGetGuru['Nama_User']) ? $rowGetGuru['Nama_User'] : 'N/A';
                } else {
                    // Handle kesalahan jika diperlukan
                    $namaGuru = 'Error fetching teacher';
                }


            ?>
                <tr>
                    <th scope="row"><?= $loopIndex + 1 ?></th>
                    <td><?= $namaGuru ?></td>
                    <td><?= $row['Nama_Class'] ?></td>

                    <td><?= $harga ?></td>

                    <td>
                        <?= $row['Periode'] ?>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="editFunction(<?= $idclass ?>)" data-bs-toggle="modal" data-bs-target="#myModal">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteFunction(<?= $idclass ?>)">Hapus</button>
                    </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Class</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <!-- Modal body.. -->
                <div class="container">
                    <!-- Add a hidden input field to store the idtype value -->
                    <input type="hidden" id="idtype" name="idtype" value="<?= $idtype; ?>">

                    <div class="row" style="align-items: center; margin-top: 1%;">
                        <div class="col-3">
                            <span>Nama Class : </span>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="namaclass" name="namaclass">
                        </div>
                    </div>
                    <div class="row" style="align-items: center; margin-top: 1%;">
                        <div class="col-3">
                            <span>Nama Guru :</span>
                        </div>
                        <div class="col-6">
                            <select class="form-select" id="selectguru" name="selectguru">
                                <?php
                                if (mysqli_num_rows($resultselectguru) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultselectguru)) {
                                        // Menampilkan data sebagai opsi
                                        echo "<option value='" . $row["Id_User"] . "'>" . $row["Nama_User"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>Tidak ada data yang ditemukan.</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row" style="align-items: center; margin-top: 1%;">
                        <div class="col-3">
                            <span>Harga(Rp) :</span>
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control" id="hargaclass" name="hargaclass">
                        </div>
                    </div>

                    <div class="row" style="align-items: center; margin-top: 1%;">
                        <div class="col-3">
                            <span>Periode :</span>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="periodeclass" id="genap" value="Genap">
                                <label class="form-check-label" for="genap">Genap</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="periodeclass" id="ganjil" value="Ganjil">
                                <label class="form-check-label" for="ganjil">Ganjil</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <input type="hidden" name="idclassedit" id="idclassedit">
                <button type="button" class="btn btn-success" onclick="updatedata()" hidden id="updatebtn">update</button>
                <button type="button" class="btn btn-success" onclick="addData()" id="addbtnmodal">ADD</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    let addbtnmodal = document.getElementById('addbtnmodal');
    let updatebtn = document.getElementById('updatebtn');
    let idclassedit = document.getElementById('idclassedit');
    let addbtn = document.getElementById('addbtn');
    addbtn.addEventListener('click', function(){
        addbtnmodal.hidden = false;
        updatebtn.hidden = true;
    });

    function addData() {
        // Get the values from the form fields

   

        var namaclass = $("#namaclass").val();
        var selectguru = $("#selectguru").val();
        var hargaclass = $("#hargaclass").val();
        var periodeclass = $("input[name='periodeclass']:checked").val();
        var idtype = $("#idtype").val();
        // Make an AJAX request to insert data into the tables
        $.ajax({
            type: "POST",
            url: "SQL/insert_dataclass.php", // Replace with the actual server-side script
            data: {
                namaclass: namaclass,
                selectguru: selectguru,
                hargaclass: hargaclass,
                periodeclass: periodeclass,
                idtype: idtype

            },
            success: function(response) {
                // Handle the response from the server (e.g., show a success message)
                alert("Data added successfully!");
                window.location.reload();

            },
            error: function(error) {
                // Handle the error (e.g., show an error message)
                alert("Error adding data. Please try again.");
                window.location.reload();
            }
        });
    }

    function deleteFunction(classId) {
        // Ask for confirmation before deleting
        if (confirm("Are you sure you want to delete this class?")) {
            // Assuming you have a PHP file (delete_data.php) to handle data deletion
            $.ajax({
                type: 'POST',
                url: 'SQL/DELETECLASS.php',
                data: {
                    classId: classId
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
    }

    function editFunction(classId) {
        console.log('Edit button clicked for user with ID: ' + classId);
        idclassedit.value = classId;
        addbtnmodal.hidden = true;
        updatebtn.hidden = false;
        // let Formsubmit = document.getElementById('Formsubmit');
        // Formsubmit.action = "";
        $.ajax({
            type: 'POST',
            url: 'SQL/GetDataClassEdit.php',
            data: {
                classId: classId
            },
            success: function(data) {
                // Assuming the returned data is in JSON format
                var userData = JSON.parse(data);

                // Populate the modal fields
                $('#namaclass').val(userData.Nama_Class);
                $('#selectguru').val(userData.Id_Guru);
                $('#hargaclass').val(userData.Price);

                if (userData.Periode === 'Genap') {
                    $('#genap').prop('checked', true);
                } else if (userData.Periode === 'Ganjil') {
                    $('#ganjil').prop('checked', true);
                }
            }
        });

        // $('#Formsubmit').on('submit', function(event) {
        //     // event.preventDefault();
        //     let Username = document.getElementById("Username");
        //     let Password = document.getElementById("Password");
        //     let Email = document.getElementById("Email");

        //     // Assuming you have a PHP file (update_data.php) to handle data update
        //     $.ajax({
        //         type: 'POST',
        //         url: 'SQL/UpdateDataTeacher.php',
        //         data: {
        //             user_id: userId,
        //             nama: Username.value,
        //             passwordbaru: Password.value,
        //             emailbaru: Email.value,
        //         },
        //         success: function(response) {
        //             // Handle the response after updating data
        //             console.log(response);

        //             // Close the modal
        //             $('#myModal').modal('hide');
        //         }
        //     });
        // });
    }

    function updatedata() {

        var namaclass = $("#namaclass").val();
        var selectguru = $("#selectguru").val();
        var hargaclass = $("#hargaclass").val();
        var idclasseditupdate = $('#idclassedit').val();
        var periodeclass = $("input[name='periodeclass']:checked").val();
        var idtype = $("#idtype").val();
        // Make an AJAX request to insert data into the tables
        $.ajax({
            type: "POST",
            url: "SQL/Updateclass.php", // Replace with the actual server-side script
            data: {
                namaclass: namaclass,
                selectguru: selectguru,
                hargaclass: hargaclass,
                periodeclass: periodeclass,
                // idtype: idtype,
                idclass: idclasseditupdate
            },
            success: function(response) {
                // Handle the response from the server (e.g., show a success message)
                alert("Data update successfully!");
                window.location.reload();

            },
            error: function(error) {
                // Handle the error (e.g., show an error message)
                alert("Error adding data. Please try again.");
                window.location.reload();
            }
        });
    }
</script>
</body>

</html>