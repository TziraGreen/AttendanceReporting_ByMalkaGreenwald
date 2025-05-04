import { initEventListeners, loadReports } from './dom.js';

// Initialize the app by setting up event listeners and loading latest reports
window.addEventListener('DOMContentLoaded', () => {
    initEventListeners();
    loadReports();
});