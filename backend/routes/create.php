<?php
require_once '../config/db.php';
require_once '../controllers/AttendanceController.php';

// Endpoint to handle create attendance reporting
try {
    $input = json_decode(file_get_contents('php://input'), true);
    $controller = new AttendanceController($pdo);

    $type = $input['type'] ?? '';
    $date = $input['date'] ?? '';
    $time = $input['time'] ?? '';

    header('Content-Type: application/json');
    echo json_encode($controller->create($type, $date, $time));
} catch (Exception $e) {
    header('Content-Type: application/json', true, 500);
    echo json_encode(['error' => 'error: ' . $e->getMessage()]);
}
