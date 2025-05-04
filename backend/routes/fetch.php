<?php
require_once '../config/db.php';
require_once '../controllers/AttendanceController.php';

// Endpoint to handle fetch 20 Last reports
try {
    $controller = new AttendanceController($pdo);
    header('Content-Type: application/json');
    echo json_encode($controller->fetchLastReports());
} catch (Exception $e) {
    header('Content-Type: application/json', true, 500);
    echo json_encode(['error' => 'error: ' . $e->getMessage()]);
}
