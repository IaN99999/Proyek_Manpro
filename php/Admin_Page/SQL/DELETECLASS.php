<?php
include '../../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your table has a column Id_User
    $classId = $_POST['classId'];

    // Assuming you have a prepared statement to delete data
    $stmt = $conn->prepare('DELETE harga,class FROM harga JOIN class ON harga.Id_Class = class.Id_Class  WHERE class.Id_Class = ?');
    $stmt->bind_param('i', $classId);

    // Execute the statement
    if ($stmt->execute()) {
        $response = ['status' => 'success', 'message' => 'User deleted successfully.'];
    } else {
        $response = ['status' => 'error', 'message' => 'Error deleting user.'];
    }

    // Return the response as JSON
    echo json_encode($response);
} else {
    // Handle invalid requests
    $response = ['status' => 'error', 'message' => 'Invalid request.'];
    echo json_encode($response);
}
?>
