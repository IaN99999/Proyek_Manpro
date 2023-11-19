<?php include 'NavbarAdmin.php'; ?>
<div class="container" style="margin-top: 13%;">
    <div class="row">
        <div class="col-6">
            <canvas id="myPieChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script>
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

</script>


</body>

</html>