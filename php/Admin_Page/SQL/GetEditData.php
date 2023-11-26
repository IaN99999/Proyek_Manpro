<?php
// edit_data.php
include '../../connection.php';
// Assuming you have a database connection established
// $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');

// Retrieve user data based on the user ID
$userId = $_POST['user_id'];
$query = $conn->prepare('SELECT * FROM user WHERE Id_User = ?');
$query->execute([$userId]);
$result = $query->get_result();

// Fetch the data
$userData = $result->fetch_assoc();
// Return the data as JSON
echo json_encode($userData);
?>
