<?php include 'NavbarAdmin.php'; ?>
<?php include '../connection.php'; ?>
<?php
$sql = "SELECT COUNT(*) AS userCount FROM user WHERE jenis_user = 2";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Ambil jumlah user
$userguru = $row['userCount'];

$sql = "SELECT COUNT(*) AS usersiswa FROM user WHERE jenis_user = 1 AND Id_Class != 0";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Ambil jumlah user
$usersiswa = $row['usersiswa'];

$sql = "SELECT COUNT(*) AS jumlahclass FROM class ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Ambil jumlah user
$jumlahclass = $row['jumlahclass'];
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
<div class="container" style="margin-top: 13%;">
    <div class="row" style="justify-content: center;">
        <div class="col-3" style="background-color: #72f5f7;border-radius: 27px;text-align: center;padding-top: 2%;padding-bottom: 2%;margin-right:1%">
            <h3>Teacher</h3>
            <h4><?= $userguru ?></h4>
        </div>
        <div class="col-3" style="background-color: #72a3f7;border-radius: 27px;text-align: center;padding-top: 2%;padding-bottom: 2%;margin-right:1%">
            <h3>Student</h3>
            <h4><?= $usersiswa ?></h4>
        </div>
        <div class="col-3" style="background-color: #fa87f0;border-radius: 27px;text-align: center;padding-top: 2%;padding-bottom: 2%;margin-right:1%">
            <h3>Class</h3>
            <h4><?= $jumlahclass ?></h4>
        </div>

    </div>
    <div class="row" style="margin-top: 1%;justify-content: center;">
        <div class="col-3" style="background-color: #f76a71;border-radius: 27px;text-align: center;padding-top: 2%;padding-bottom: 2%;margin-right:1%">
            <h3>Class</h3>
            <h4><?= $jumlahclass ?></h4>
        </div>
    </div>
</div>

<!-- <script>
    var xmlhttp = new XMLHttpRequest();
    var url = "SQL/GETDATACLASS.php"; // Ganti dengan path yang sesuai

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Parsing data JSON
            var data = JSON.parse(this.responseText);

            // Panggil fungsi untuk membuat chart
            console.log(data);
            createChart(data);
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
    //class, murid , guru
    function createChart(data) {
        // console.log(data.values);
        const chartData = {
            labels: data.labels, // Use the labels from your AJAX response
            datasets: [{
                label: 'class',
                data: [data], // Use the values from your AJAX response
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        new Chart("myPieChart", {
            type: 'doughnut',
            data: chartData,
        });
    }
</script> -->


</body>

</html>