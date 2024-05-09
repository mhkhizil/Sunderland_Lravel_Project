Laravel-Vite Login and Registration System
This project implements a secure login and registration system using Laravel and Vite. It offers a user-friendly interface and adheres to security best practices.

Prerequisites:

PHP (8.2.0)
Laravel (10.47.0)
Composer visit -https://getcomposer.org/doc/00-intro.md
Node.js and npm (or yarn)-npm is prefereable

---

Installation when cloned from git repo:
Clone this repository .
Run composer install to install Laravel dependencies.
Run npm install (or yarn install) to install frontend dependencies.
Generate an application key: php artisan key:generate and insert it in .env file
Configure your database connection details in .env file.
Migrate the database tables: php artisan migrate

---

installation when extracting zipped file(extracting using 7Zip is preferable because you can face "error 0x80010135 " because my folder name and file names are very long if you encounter that error use 7zip or extract the fie on root folder) :
Migrate the database tables: php artisan migrate
Since your computer does not have the database i inserted in .env file ,it will ask whether you would like to create that db then type yes in your terminal and it will create the db

---

Running the Application:

Start the development server: php artisan serve on one terminal that will give out this link to access the application like this 'http://localhost:8000 (default port)' and on other run npm run dev for Vite-specific development server
Access the application in your browser by clicking the link that php artisan serve give out:eg. http://localhost:8000 (default port)

---

Features:
User registration with email
Secure password hashing using Laravel's bcrypt
Login with session management
Several password validations
Client side password strength checker
Authentication routes protected by middleware
Security Considerations:
Password Hashing: Passwords are always hashed and never stored in plain text.
CSRF Protection: Laravel provides built-in CSRF protection. Ensure forms include CSRF tokens.
Input Validation: Validated all user input to prevent SQL injection and other vulnerabilities.
Refer to Laravel documentation for detailed configuration options: https://laravel.com/docs/11.x/readme.
Disclaimer:
This code is provided for educational purposes only.

Note : if you have any difficulty unzipping my project pleae kindly check and this link on github and clone it for better experience : https://github.com/mhkhizil/Sunderland_Lravel_Project. Hope you follow me with all due respect
