PHP with MySQL - Lab Assignment 4 (easy version)

Setup:
1. Copy this folder into C:\xampp\htdocs\
2. Start Apache and MySQL in XAMPP.
3. Import setup.sql into phpMyAdmin once.
4. Browse http://localhost/PHP_Lab_Assignment_4/Q1.php
5. Q2 vulnerable demo: use email  ' OR '1'='1' --  (note space after --)
   and password xyz. Then try same in Q2_fixed.php.
6. Q3_XSS.php: enter <script>alert('XSS')</script> locally.
   Q3_CSRF.php: remove the hidden token input with DevTools and submit.
7. Q4.php: choose an existing ID (1, 2 or 3 initially).
8. Q5.php: upload .jpg/.jpeg/.png up to 2MB.

Example outputs (actual output varies):
Q1: Welcome back, Ankita! (session active). On logout returns to form.
Q2 vulnerable: Logged in! (bypass successful)
Q2 fixed: Invalid credentials. (bypass blocked)
Q3 XSS: Before fix alert appears; after fix code prints literally.
Q3 CSRF: Comment submitted safely! / Invalid request -- CSRF token mismatch.
Q4: Connected successfully (PDO); Record(s) found: 3; Record updated/deleted successfully.
Q5: File uploaded successfully! Saved as: uploads/<unique>.jpg (image appears).

Notes:
- The deliberately vulnerable Q2 and XSS-before-fix examples are local teaching demos only.
- The sample users table stores simple passwords to demonstrate SQL injection.
  A real app must use password_hash() and password_verify().
- Source files contain comments as required by the assignment.
- Task 1 'logout' deletes the saved email cookie intentionally.
- Write the output from your own run by hand for submission.
