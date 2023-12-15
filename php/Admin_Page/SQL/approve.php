<?php
include '../../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form has fields like 'Id_User', 'Nama_User', 'Password', 'Email'
    $paymentId = $_POST['paymentId'];
    // echo $paymentId;
    // $nama_user = $_POST['nama'];
    // $password = $_POST['passwordbaru'];
    // $email = $_POST['emailbaru'];
    $selectStmt = $conn->prepare('SELECT * FROM payment WHERE Id_Payment = ?');
    $selectStmt->bind_param('i', $paymentId);
    $selectStmt->execute();
    $result = $selectStmt->get_result();
    $row = $result->fetch_assoc();
    $iduser = $row['Id_Siswa'];
    $idclass =  $row['Id_Class'];
    // echo $idclass;

    $stmtTable1 = $conn->prepare('UPDATE user SET Id_Class = ? WHERE Id_User = ?');
    $stmtTable1->bind_param('si', $idclass, $iduser);
    // $newValueTable1 = "new value"; // Ganti dengan nilai baru yang sesuai

    // Eksekusi pernyataan UPDATE pada tabel pertama
    $stmtTable1->execute();


    // Assuming you have a prepared statement to update data
    $approveStatus = "YES";
    $stmt = $conn->prepare('UPDATE payment SET Approve_Payment = ? WHERE Id_Payment = ?');
    $stmt->bind_param('si', $approveStatus, $paymentId);

    // Execute the statement
    if ($stmt->execute()) {
        $response = ['status' => 'success', 'message' => 'Data updated successfully.'];
    } else {
        $response = ['status' => 'error', 'message' => 'Error updating data.'];
    }

    // Return the response as JSON
    echo json_encode($response);
} else {
    // Handle invalid requests
    $response = ['status' => 'error', 'message' => 'Invalid request.'];
    echo json_encode($response);
}
