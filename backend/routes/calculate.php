<?php
require_once '../config/db.php';
require_once '../controllers/AttendanceController.php';

// Endpoint to handle monthly hour calculation
try {
    $input = json_decode(file_get_contents('php://input'), true);
    $controller = new AttendanceController($pdo);

    $month = $input['month'] ?? '';
    header('Content-Type: application/json');
    echo json_encode($controller->calculateMonthlyHours($month));
} catch (Exception $e) {
    header('Content-Type: application/json', true, 500);
    echo json_encode(['error' => 'error: ' . $e->getMessage()]);
}
