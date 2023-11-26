<?php
include '../../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form has fields like 'Id_User', 'Nama_User', 'Password', 'Email'
    $id_user = $_POST['user_id'];
    $nama_user = $_POST['nama'];
    $password = $_POST['passwordbaru'];
    $email = $_POST['emailbaru'];

    // Assuming you have a prepared statement to update data
    $stmt = $conn->prepare('UPDATE user SET Nama_User=?, Password=?, Email=? WHERE Id_User=?');
    $stmt->bind_param('sssi', $nama_user, $password, $email, $id_user);

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
?>
