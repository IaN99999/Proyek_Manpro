<?php
include '../../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your table has a column Id_User
    $userId = $_POST['user_id'];

    // Assuming you have a prepared statement to delete data
    $stmt = $conn->prepare('DELETE FROM user WHERE Id_User = ?');
    $stmt->bind_param('i', $userId);

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
