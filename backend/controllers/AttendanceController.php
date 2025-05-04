<?php
require_once '../models/AttendanceModel.php';
require_once '../helpers/AttendanceUtils.php';

// This controller handles logic for attendance operations
class AttendanceController {
    private $model;

    // Initializes the model using the provided PDO connection
    public function __construct($pdo) {
        $this->model = new AttendanceModel($pdo);
    }

    // Creates a new attendance report after validation and overlap checking
    public function create($type, $date, $time) {
        try {
            if (!in_array($type, ['in', 'out'])) {
                return ['error' => 'Invalid report type'];
            }
    
            $existing = $this->model->getReportsByDate($date);
            if (isOverlappingReport($existing, $time)) {
                return ['error' => 'Overlapping report'];
            }
    
            $this->model->createReport($type, $date, $time);
            return ['success' => true];
        } catch (Exception $e) {
            return ['error' => 'error: ' . $e->getMessage()];
        }
    }

    // Fetches the last 20 attendance reports
    public function fetchLastReports() {
        try {
            return $this->model->getLastReports();
        } catch (Exception $e) {
            return ['error' => 'error: ' . $e->getMessage()];
        }
    }
    
    // Calculates total monthly working hours for a given month
    public function calculateMonthlyHours($month) {
        try {
            if (!preg_match('/^\d{4}-\d{2}$/', $month)) {
                return ['error' => 'פורמט לא תקין של תאריך!'];
            }
    
            $data = $this->model->getReportsByMonth($month);
            return calculateWorkHours($data);
        } catch (Exception $e) {
            return ['error' => 'error: ' . $e->getMessage()];
        }
    }
    
}
