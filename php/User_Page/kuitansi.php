<? php
include '../connection.php';

$sql = "SELECET * FROM MANPRO";
$result = mysqli_query($connection, $query); ?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/boostrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../css/joined.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </head>

    <body>
        <div class = "sidebar">
            <div class = "logo">Dana English Course</div>
            <ul class = "menu" p-0>
                <li>
                    <a href="home2.php"><i class = "fa fa-tachometer-alt"></i><span>
                    Dashboard</span></a>
                </li>
                <li>
                    <a href="joinedClass.php"><i class = "fa fa-graduation-cap"></i><span> Class</span></a>
                </li>
                <li>
                    <a href="#"><i class = "fa fa-book"></i><span></span> Report</a>
                </li>
                <li>
                    <a href="#"><i class = "fa fa-archive"><span> Buy Package</span></i></a>
                </li>
                <li>
                    <a href="#"><i class = "fa fa-usd"><span> Check Receipt</span></i></a>
                </li>
                <li>
                    <a href="buypackage.php"><i class = "fa fa-calendar"></i><span>Schedule</span></a>
                </li>
                <li>
                    <a href="#"><i class = "fa fa-sign-out"></i><span> Log Out</span></a>
                </li>
            </ul>
        </div>

        <div class = "main--content">
            <div class = "header--wrapper">
                <div class = "header--title">
                    <span>Primary</span>
                    <h2>Dashboard</h2>
                </div>
                <div class = "user--info">
                    <span>WELCOME </span>
                    <span id = "namauser"></span>
                </div>
            </div>

            <div class = "mt-5">
                <div class = "table-responsive">
                    <table class = "table table-dark table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope = "col">Purpose</th>
                                <th scope = "col">Total</th>
                                <th scope = "col">Payment Date</th>
                                <th scope = "col">Payment Method</th>
                                <th scope = "col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                echo "<tr>";
                                    echo "<td>" . $row['Tujuan'] . "</td>";
                                    echo "<td>" . $row['Total_Pembayaran'] . "</td>";
                                    echo "<td>" . $row['Tanggal_Pembayaran'] . "</td>";
                                    echo "<td>" . $row['Metode_Pembayaran'] . "</td>";
                                    echo "<td>" . ($row['Status'] ? 'PAID' : 'UNPAID') . "</td>";
                            <?php } ?>
                            mysqli_close($connection);
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>