<?php
include '../../connection.php';

$query = "SELECT * FROM class";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = array('id' => $row['Id_Guru']);
    }

    header('Content-Type: application/json');
    echo json_encode(count($data));
} else {
    echo json_encode(array('error' => 'No results found.'));
}

$conn->close();
?>
