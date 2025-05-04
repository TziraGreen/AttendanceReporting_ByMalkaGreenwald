-- Create a database if it does not exist
CREATE DATABASE IF NOT EXISTS timewatch_db;
USE timewatch_db;

-- Create an attendance table
CREATE TABLE IF NOT EXISTS attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    report_type ENUM('in', 'out') NOT NULL,
    report_date DATE NOT NULL,
    report_time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Creating indexes to improve performance

-- CREATE INDEX idx_report_type_date_time ON attendance(report_type, report_date, report_time);

CREATE INDEX idx_report_date_time ON attendance(report_date, report_time);
