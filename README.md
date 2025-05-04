### on English:                                                                .אם תגללו למטה, תראו הסבר גם בעברית
# Timewatch - Employee Attendance Reporting System

## 📌 Description

Timewatch is web-based attendance tracking application for employees. It allows users to manually report check-in and check-out times by selecting the date and time. The system supports monthly work hours calculation and prevents overlapping reports.

## 🚀 Features

- Report **check-in** and **check-out** with a manual date and time input.
- View the **last 20 attendance entries**.
- **AJAX-based** submission and table update without page reload.
- **Monthly work hours calculation**.
- **Overlap detection** for invalid reports.
- Clean, responsive UI.

## 📁 Project Structure

- `frontend/`: HTML, CSS, JavaScript (ES Modules)
- `backend/`: PHP with MySQL integration.
- `dataBase/`: SQL script to create the database and tables

## 🎯 Optional Bonuses Implemented

- ✅ Indexes for performance (in `attendance.sql`)
- ✅ Monthly work hour calculation (PHP logic included)
- ✅ Overlap detection for reports

## 🛠️ Installation & Setup

### To clone this application, run the following command on terminal in VSCode:
```
git clone "https://github.com/TziraGreen/AttendanceReporting_ByMalkaGreenwald.git"
```

### Install **XAMPP** or similar local development environment.

### If you would like to run with XAMPP, which is the simplest way for small projects, here is the full guide:
------------------------------------------------------------------------------------------------------------------
#### Step 1: Installing XAMPP:
- Download XAMPP: Visit the official XAMPP website, this is a good link:
    ```
    https://sourceforge.net/projects/xampp/
    ```
   and download the appropriate version for your operating system.
- Installation: Open the downloaded file and follow the instructions to install.

#### Step 2: Starting XAMPP:
- Open the XAMPP Control Panel that you installed.
- Start **Apache** and **MySQL** by clicking the "Start" button next to each of them.

#### Step 3: Accessing phpMyAdmin and Creating the Database:
Open a web browser.
- Enter the address: http://localhost/phpmyadmin.
- Create a new database named timewatch_db.
- Run the provided SQL file to create the attendance table (run the query creation separately from the index creation).

#### Step 4: Copy the project files:
Copy the AttendanceReporting_ByMalkaGreenwald folder that you cloned to the root directory of XAMPP, for example: C:\xampp\htdocs\AttendanceReporting_ByMalkaGreenwald.

#### Step 5: Run the system:
After completing the above steps, open your browser and go to:
```
http://localhost/AttendanceReporting_ByMalkaGreenwald/frontend/
```
There you will see this system:

![image](https://github.com/user-attachments/assets/0519f4d6-127b-49d4-b604-a41c591e4da2)


##### Responsive:

![image](https://github.com/user-attachments/assets/6cad6b7b-d670-4f09-834e-8bd93c2ba3a0)


### Step 6: Using the application:
- Enter date and time → press Enter or Exit.
- The table of the last 20 reports is automatically updated.
- Select a month in the monthly input to display the total monthly working hours for a particular month of the year.

It should look like this for exampleת after you have entered several check-in and check-out times or after you have chosen to display total working hours for a particular month:

![image](https://github.com/user-attachments/assets/c8d8812c-9fff-43d5-9611-4e9c94562202)


##### Responsive:

![image](https://github.com/user-attachments/assets/5cdb8ec2-72ca-4e8b-b9a7-00be140f9e77)


## 🤝 Author

Built by [Malka Greenwald].

---

### בעברית:


# מערכת דיווח נוכחות עובדים - Timewatch

## 📌 תיאור

טיים ווטש היא אפליקציית מעקב נוכחות מבוססת אינטרנט לעובדים. היא מאפשרת למשתמשים לדווח ידנית על זמני כניסה ויציאה על ידי בחירת התאריך והשעה. המערכת תומכת בחישוב שעות עבודה חודשיות ומונעת דוחות חופפים.

## 🚀 מאפיינים

- דוח **יציאה** ו**כניסה** עם הזנת תאריך ושעה ידנית.
- צפייה ב-**20 רישומי הנוכחות האחרונים**.
- הגשה ועדכון טבלה **מבוססי AJAX** ללא טעינת דף מחדש.
- **חישוב שעות עבודה חודשיות**.
- **זיהוי חפיפה** עבור דוחות לא חוקיים.
- ממשק משתמש נקי ורספונסיבי.

## 📁 מבנה הפרויקט

- `frontend/`: קבצי HTML, CSS, JavaScript
- `backend/`: צד שרת ב-PHP + MySQL
- `database/`: קובץ SQL ליצירת הטבלה
## 🎯 בונוסים שבוצעו
- ✅ יצירת אינדקסים
- ✅ חישוב שעות עבודה חודשיות
- ✅ זיהוי דיווחים חופפים

## 🛠️ התקנה והגדרה

### כדי לשכפל יישום זה, הפעל את הפקודה הבאה בטרמינל ב-VSCode:
```
git clone "https://github.com/TziraGreen/AttendanceReporting_ByMalkaGreenwald"
```

### התקן **XAMPP** או סביבת פיתוח מקומית דומה.

### אם תרצו להריץ עם XAMPP, שהיא הדרך הפשוטה ביותר עבור פרויקטים קטנים, הנה המדריך המלא:

#### שלב 1: התקנת XAMPP:
- הורידו את XAMPP: בקרו באתר הרשמי של XAMPP, זה קישור טוב
```
https://sourceforge.net/projects/xampp/
```
 והורידו את הגרסה המתאימה למערכת ההפעלה שלכם.
- התקנה: פתחו את הקובץ שהורדתם ופעלו לפי ההוראות להתקנה.

#### שלב 2: הפעלת XAMPP:
- פתחו את לוח הבקרה של XAMPP שהתקנתם.
- הפעילו את **Apache** ואת **MySQL** על ידי לחיצה על כפתור "התחל" שליד כל אחד מהם.

#### שלב 3: גישה ל-phpMyAdmin ויצירת מסד הנתונים:
פתחו דפדפן אינטרנט.
- הזינו את הכתובת: http://localhost/phpmyadmin.
- צרו מסד נתונים חדש בשם timewatch_db.
- הפעילו את קובץ ה-SQL שסופק כדי ליצור את טבלת הנוכחות (הפעל את יצירת השאילתה בנפרד מיצירת האינדקס).

#### שלב 4: העתק את קבצי הפרויקט:
העתיקו את התיקייה AttendanceReporting_ByMalkaGreenwald ששיבטתם - לספריית השורש של XAMPP לדוגמה: C:\xampp\htdocs\AttendanceReporting_ByMalkaGreenwald.

#### שלב 5: הפעל את המערכת:
לאחר השלמת השלבים לעיל, פתחו את הדפדפן ועברו אל:
```
http://localhost/AttendanceReporting_ByMalkaGreenwald/frontend/
```
שם תראו את המערכת הזו:

![image](https://github.com/user-attachments/assets/9a0ae8ef-b9bd-4855-94bd-46f5f4b69cbe)


##### רספונסיבי:

![image](https://github.com/user-attachments/assets/19bb4fb3-6ec8-4c2d-a277-76b86a27d982)


### שלב 6: שימוש ביישום:
- הזינו תאריך ושעה → לחץ על Enter או Exit.
- טבלת 20 הדוחות האחרונים מתעדכנת אוטומטית.
- בחרו חודש בקלט החודשי כדי להציג את סך שעות העבודה החודשיות עבור חודש מסוים בשנה.

זה אמור להיראות לדוגמא כך לאחר שהזנתם כמה זמני כניסה ויציאה או לאחר שבחרתם בהצגת סך שעות העבודה עבור חודש מסוים:

![image](https://github.com/user-attachments/assets/aef5d13e-e61b-4949-8a52-c8a7c7cea91a)


##### רספונסיבי:

![image](https://github.com/user-attachments/assets/07590ad6-cee2-4666-81b2-e0ab6a4d16a1)

## 🤝 מחבר

נבנה על ידי [מלכה גרינוולד].



---
