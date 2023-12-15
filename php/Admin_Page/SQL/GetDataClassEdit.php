<?php
// edit_data.php
include '../../connection.php';
// Assuming you have a database connection established
// $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');

// Retrieve user data based on the user ID
$classId = $_POST['classId'];
$query = $conn->prepare('SELECT * FROM class JOIN harga ON class.Id_Class = harga.Id_Class WHERE class.Id_Class = ?');
$query->execute([$classId]);
$result = $query->get_result();

// Fetch the data
$classData = $result->fetch_assoc();
// Return the data as JSON
echo json_encode($classData);
?>