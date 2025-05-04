### on English:
# Timewatch - Employee Attendance Reporting System

## 📌 Description

Timewatch is a lightweight web-based attendance tracking application for employees. It allows users to manually report check-in and check-out times by selecting the date and time. The system supports monthly work hours calculation and prevents overlapping reports.

## 🚀 Features

- Report **check-in** and **check-out** with a manual date and time input.
- View the **last 20 attendance entries**.
- **AJAX-based** submission and table update without page reload.
- **Monthly work hours calculation**.
- **Overlap detection** for invalid reports.
- Clean, responsive UI.

## 📁 Project Structure

- `frontend/`: HTML, CSS, JavaScript (ES Modules)
- `backend/`: PHP MVC with MySQL integration.
- `dataBase/`: SQL script to create the database and tables

- ## 🎯 Optional Bonuses Implemented

- ✅ Indexes for performance (in `attendance.sql`)
- ✅ Monthly work hour calculation (PHP logic included)
- ✅ Overlap detection for reports

## 🛠️ Installation & Setup

1. ### To clone this application, run the following command on terminal in VSCode:
```
git clone "https://github.com/TziraGreen/AttendanceReporting_ByMalkaGreenwald"
```

2. ### Install **XAMPP** or similar local development environment.
   - #### If you would like to run with XAMPP, which is the simplest way for small projects, here is the full guide:
   - ### Step 1: Installing XAMPP:
- Download XAMPP: Visit the official XAMPP website, this is a good link:
https://sourceforge.net/projects/xampp/ and download the appropriate version
for your operating system.
- Installation: Open the downloaded file and follow the instructions to install.

- ### Step 2: Starting XAMPP:
- Open the XAMPP Control Panel that you installed.
- Start Apache and MySQL by clicking the "Start" button next to each of them.

- ### Step 3: Accessing phpMyAdmin and Creating the Database:
Open a web browser.
- Enter the address: http://localhost/phpmyadmin.
- Create a new database named timewatch_db.
- Run the provided SQL file to create the attendance table (run the query creation separately from the index creation).

- ### Step 4: Copy the project files:
Copy the AttendanceReporting_ByMalkaGreenwald folder that you cloned to the root directory of XAMPP for example: C:\xampp\htdocs\AttendanceReporting_ByMalkaGreenwald.

- ### Step 5: Run the system:
After completing the above steps, open your browser and go to:
http://localhost/Timewatch_project/client/index.html
http://localhost/AttendanceReporting_ByMalkaGreenwald/frontend/
There you will see this system:

Image

Responsiveness:

Image

### Step 6: Using the application:
- Enter date and time → press Enter or Exit.
- The table of the last 20 reports is automatically updated.
- Select a month in the monthly input to display the total monthly working hours for a particular month of the year.

It could look like this for example:

Image 
   








5. Start **Apache** and **MySQL** from the XAMPP control panel.
6. Access the project at:  
   `http://localhost/[your-folder]/frontend/index.html`

## 🤝 Author

Built by [Malka Greenwald].

---

### בעברית:

# מערכת דיווח נוכחות עובד - Timewatch

## 📌 תיאור

מערכת אינטרנטית לדיווח כניסה ויציאה של עובדים. מאפשרת להזין תאריך ושעה ידנית, לצפות בדיווחים האחרונים, לחשב שעות חודשיות ולוודא שאין כפילויות בזמן.

## 🚀 תכונות

- דיווח **כניסה** / **יציאה** ידני לפי תאריך ושעה.
- הצגת **20 הדיווחים האחרונים**.
- שליחה והתעדכנות **באמצעות AJAX** ללא רענון עמוד.
- **חישוב שעות חודשיות** על בסיס דיווחים תקפים.
- **זיהוי דיווחים חופפים** למניעת כפילויות.
- ממשק רספונסיבי ונעים לשימוש.

## 📁 מבנה הפרויקט

- `frontend/`: קבצי HTML, CSS, JavaScript
- `backend/`: צד שרת ב-PHP + MySQL
- `database/`: קובץ SQL ליצירת הטבלה
- ## 🎯 בונוסים שבוצעו

- ✅ יצירת אינדקסים
- ✅ חישוב שעות עבודה חודשיות
- ✅ זיהוי דיווחים חופפים

## 🛠️ התקנה והרצה


1. התקן את **XAMPP** או סביבה דומה.
2. 
   - באם אתה בוחר להריץ בסביבת XAMPP:
3. העתק את תיקיית הפרויקט לתיקיית `htdocs`.
4. צור מסד נתונים בשם `timewatch_db` דרך **phpMyAdmin**.
5. יבא את הקובץ `attendance.sql`.
6. הפעל את **Apache** ו-**MySQL** בלוח הבקרה של XAMPP.
7. היכנס לפרויקט:  
   `http://localhost/[שם-התיקייה]/frontend/index.html`



## 🤝 נבנה על ידי

[מלכה גרינוולד]

---
