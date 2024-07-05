<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$response = [
    'success' => true,
    'message' => 'GET request received successfully~!',
    'data' => [
        'param1' => $_GET['param1'] ?? 'No param1 provided',
        'param2' => $_GET['param2'] ?? 'No param2 provided'
    ]
];

echo json_encode($response);
?>
