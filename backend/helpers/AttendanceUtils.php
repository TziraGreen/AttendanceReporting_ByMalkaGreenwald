<?php

// Checks if the given report time overlaps with an existing 'in-out' 
function isOverlappingReport($reports, $time) {
    $timeTimestamp = strtotime($time);

    for ($i = 0; $i < count($reports) - 1; $i += 2) {
        $reportTimeIn = strtotime($reports[$i]['report_time']); 
        $reportTimeOut = strtotime($reports[$i + 1]['report_time']); 

        if ($reportTimeIn === $timeTimestamp || $reportTimeOut === $timeTimestamp) {
            return true; 
        }

        if ($reports[$i]['report_type'] === 'in' && $reports[$i + 1]['report_type'] === 'out') {
            $start = $reports[$i]['report_time'];
            $end   = $reports[$i + 1]['report_time'];
            if ($time >= $start && $time <= $end) return true;
        }
    }
        
    return false;
}

// Calculates total worked hours and minutes from a list of attendance 
function calculateWorkHours($rows) {
    $totalSeconds = 0;
    $pendingInTimes = [];
    
    foreach ($rows as $row) {
        if ($row['report_type'] === 'in') {
            $pendingInTimes[$row['report_date']] = $row['report_time'];
        } 
        elseif ($row['report_type'] === 'out' && isset($pendingInTimes[$row['report_date']])) {
            $totalSeconds += calculateTimeDifference($row, $pendingInTimes);
            unset($pendingInTimes[$row['report_date']]);
        }
    }
    
    return [
        "hours" => floor($totalSeconds / 3600),
        "minutes" => floor(($totalSeconds % 3600) / 60)
    ];
}

// Calculates time difference in seconds between an 'in' and 'out' record
function calculateTimeDifference($row, $pendingInTimes) {
    $inTime = strtotime($row['report_date'] . ' ' . $pendingInTimes[$row['report_date']]);
    $outTime = strtotime($row['report_date'] . ' ' . $row['report_time']);
    return $outTime > $inTime ? $outTime - $inTime : 0;
}
