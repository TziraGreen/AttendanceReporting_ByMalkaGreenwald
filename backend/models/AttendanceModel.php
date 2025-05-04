<?php

// This class handles all database operations related to attendance reports
class AttendanceModel {
    private $pdo;

    // Constructor receives PDO instance for DB access
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Fetches the last attendance reports ordered by date and time descending
    public function getLastReports($limit = 20) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM attendance ORDER BY report_date DESC, report_time DESC LIMIT ?");
            $stmt->bindValue(1, $limit, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            throw new Exception('Error fetching recent reports: ' . $e->getMessage());
        }
    }

    // Retrieves all reports for a specific month
    public function getReportsByMonth($month) {
        try {
            $stmt = $this->pdo->prepare("SELECT report_date, report_type, report_time FROM attendance 
                                          WHERE DATE_FORMAT(report_date, '%Y-%m') = ?
                                          ORDER BY report_date ASC, report_time ASC");
            $stmt->execute([$month]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            throw new Exception('Error fetching reports by month: ' . $e->getMessage());
        }
    }

    // Gets all reports for a specific date, ordered by time ascending
    public function getReportsByDate($date) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM attendance WHERE report_date = ? ORDER BY report_time ASC");
            $stmt->execute([$date]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            throw new Exception('Error fetching reports by date: ' . $e->getMessage());
        }
    }

    // Inserts a new attendance report into the database
    public function createReport($type, $date, $time) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO attendance (report_type, report_date, report_time) VALUES (?, ?, ?)");
            return $stmt->execute([$type, $date, $time]);
        } catch (Exception $e) {
            throw new Exception('Error creating report: ' . $e->getMessage());
        }
    }
}
