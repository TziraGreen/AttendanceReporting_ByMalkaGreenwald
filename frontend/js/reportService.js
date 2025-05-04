import { postData, getData } from './api.js';

// Sends a new attendance report to the backend via POST
export async function sendAttendanceReport(type, date, time) {
    try {
        const response = await postData('../backend/routes/create.php', { type, date, time });
        return response;
    } catch (error) {
        console.error("Error submitting attendance report:", error);
        throw error;
    }
}

// Fetches the latest 20 attendance reports via GET
export async function fetchLastReports() {
    try {
        const response = await getData('../backend/routes/fetch.php');
        return response;
    } catch (error) {
        console.error("Error fetching last reports:", error);
        throw error;
    }
}

// Sends selected month to backend and receives calculated hours via POST
export async function fetchMonthlyWorkHours(month) {
    try {
        const response = await postData('../backend/routes/calculate.php', { month });
        return response;
    } catch (error) {
        console.error("Error fetching monthly work hours:", error);
        throw error;
    }
}
