BCAC501 PHP with MySQL - Lab Assignment 3
==========================================
Department of Computer Application (BCA) - Techno Main Salt Lake
Semester V | Lab Assignment - 3

Covering:
- File Handling (fopen, fwrite, fgets, feof, fclose)
- Form Handling & Server-Side Validation (Sticky Forms, filter_var)
- MySQLi Database Operations (CRUD using Prepared Statements)

Requirements:
- XAMPP (Apache + MySQL)
- PHP 8+ with MySQLi extension enabled

Setup Instructions:
1. Copy this folder into your XAMPP htdocs directory:
   C:\xampp\htdocs\Assignment-3
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open http://localhost/phpmyadmin in your browser.
4. Import database.sql (or create database `lab3_db` and table `students`).
5. If your MySQL credentials differ from root with empty password, update db.php.
6. Run each question by opening:
   http://localhost/Assignment-3/Q1.php

Files Mapping (according to Assignment 3 Tasks):
- Q1.php   : Task 1 - Writing to a Text File (Student Feedback Form -> feedback.txt)
- Q2.php   : Task 2 - Reading a Text File Line by Line (Displays feedback.txt using fgets)
- Q3.php   : Task 3 - Registration Form with Server-Side Validation (Name, Email, Age + Sticky Form)
- Q4.php   : Task 4 - Email Format Validation (filter_var with FILTER_VALIDATE_EMAIL)
- Q5.php   : Task 5 - Connecting to Database (mysqli_connect with lab3_db)
- Q6.php   : Task 6 - Inserting Form Data into Database (Prepared INSERT statement)
- Q7.php   : Task 7 - Displaying Records in HTML Table (with Edit & Delete actions)
- Q8.php   : Task 8 - Updating a Record (Pre-filled form + Prepared UPDATE statement)
- Q9.php   : Task 9 - Deleting a Record (Prepared DELETE statement + Redirect to Q7)
- Q10.php  : Task 10 - Combining File Handling & Database (Activity Log -> activity_log.txt)

Supporting Files:
- db.php        : Shared MySQLi database connection file for Q6 - Q10
- database.sql  : SQL script to create lab3_db and students table
- feedback.txt  : Storage file for feedback (Q1 & Q2)
- README.txt    : Assignment documentation and run guide
