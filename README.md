on English:
# Timewatch - Simple Employee Attendance Reporting System

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

## 🛠️ Installation & Setup

1. Install **XAMPP** or similar local development environment.
2. Clone or download this repository.
3. Move the project folder to `htdocs` directory in XAMPP.
4. Import the database:
   - Open **phpMyAdmin**.
   - Create a database named `timewatch_db`.
   - Import the provided `attendance.sql` file.
5. Start **Apache** and **MySQL** from the XAMPP control panel.
6. Access the project at:  
   `http://localhost/[your-folder]/frontend/index.html`

## 🧪 Tested on:

- Chrome, Firefox
- PHP 8+
- MySQL 5.7+

## 🎯 Optional Bonuses Implemented

- ✅ Indexes for performance (in `attendance.sql`)
- ✅ Monthly work hour calculation (PHP logic included)
- ✅ Overlap detection for reports

## 🤝 Author

Built by [Malka Greenwald].

---

בעברית:

# Timewatch - מערכת דיווח נוכחות פשוטה

## 📌 תיאור

מערכת אינטרנטית פשוטה לדיווח כניסה ויציאה של עובדים. מאפשרת להזין תאריך ושעה ידנית, לצפות בדיווחים האחרונים, לחשב שעות חודשיות ולוודא שאין כפילויות בזמן.

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

## 🛠️ התקנה והרצה

1. התקן את **XAMPP** או סביבה דומה.
2. העתק את תיקיית הפרויקט לתיקיית `htdocs`.
3. צור מסד נתונים בשם `timewatch_db` דרך **phpMyAdmin**.
4. יבא את הקובץ `attendance.sql`.
5. הפעל את **Apache** ו-**MySQL** בלוח הבקרה של XAMPP.
6. היכנס לפרויקט:  
   `http://localhost/[שם-התיקייה]/frontend/index.html`

## 🧪 נבדק על:

- דפדפנים: Chrome, Firefox
- PHP 8+
- MySQL 5.7+

## 🎯 בונוסים שבוצעו

- ✅ אינדקסים במסד הנתונים
- ✅ חישוב שעות חודשיות (צד שרת)
- ✅ מניעת דיווחים חופפים

## 🤝 נבנה על ידי

[מלכה גרינוולד]

---