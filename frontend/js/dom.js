import { sendAttendanceReport, fetchLastReports, fetchMonthlyWorkHours } from './reportService.js';

// Attaches event listeners to report buttons and calculation button
export function initEventListeners() {
    document.getElementById('inButton').addEventListener('click', () => handleClickReport('in'));
    document.getElementById('outButton').addEventListener('click', () => handleClickReport('out'));
    document.getElementById('calculateButton').addEventListener('click', calculateMonthlyHours);
}

// Handles the report button click, sends report, and reloads table if successful
async function handleClickReport(type) {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    if (!date || !time) {
        alert("נא למלא תאריך ושעה");
        return;
    }

    const response = await sendAttendanceReport(type, date, time);
    if (response?.success) {
        loadReports();
    } else {
        showError(response?.error || "אירעה שגיאה");
    }
}

// Loads and renders the last 20 attendance reports into the table
export async function loadReports() {
    const tbody = document.querySelector('#reports tbody');
    tbody.innerHTML = '';

    const data = await fetchLastReports();

    if (!data || data.length === 0) {
        tbody.innerHTML = '<tr><td colspan="4">אין נתונים</td></tr>';
        return;
    }

    data.forEach(r => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${r.report_type}</td>
            <td>${r.report_date}</td>
            <td>${r.report_time}</td>
            <td>${r.created_at}</td>
        `;
        tbody.appendChild(tr);
    });
}

// Sends month to backend and displays calculated work hours
async function calculateMonthlyHours() {
    const month = document.getElementById('monthInput').value;
    const output = document.getElementById('result');

    const result = await fetchMonthlyWorkHours(month);

    if (result?.error) {
        output.innerText = result.error;
    } else {
        output.innerText = `שעות: ${result.hours}, דקות: ${result.minutes}`;
    }
}

// Shows an error message using a simple alert
export function showError(msg) {
    alert(`⚠ שגיאה: ${msg}`);
}