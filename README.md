Laravel-Vite Login and Registration System
This project implements a secure login and registration system using Laravel and Vite. It offers a user-friendly interface and adheres to security best practices.

---

**_You need to have php,composer,node.js and npm in your computer to run this file_**
Prerequisites:

1.PHP (8.2.0)-ensure that in your enviroment variable there is path for php (check using php --version if php is in your computer)

2.Composer visit -https://getcomposer.org/doc/00-intro.md check composer using (composer --version)

3.Node.js(v20.11.0) and npm (10.2.4) (or yarn)-npm is prefereable check them using (npm --version and node --version)

4.Laravel (10.47.0)

---

**_php.ini file configuration _**
1.Enter "php --ini"

2.Enter "php.ini" file with vs code and uncomment these if they are commented -
A.extension=pdo_mysql
B.extension=openssl
C.extension=fileinfo
D.extension=curl
E.extension=gd
F.extension=mbstring

**_Installation when cloned from git repo_**

1.Clone this repository -"https://github.com/mhkhizil/Sunderland_Lravel_Project.git"

2.Run composer install to install Laravel dependencies.

3.Run npm install (or yarn install) to install frontend dependencies.

4.Generate an application key: php artisan key:generate and insert it in .env file

5.Configure your database connection details in .env file(change db_username and db_password).

6.Migrate the database tables: php artisan migrate

---

**_Installation when extracting zipped file(extracting using 7Zip is preferable because you can face "error 0x80010135 " because my folder name and file names are long if you encounter that error use 7zip ) _**

1.Please make sure to extract the zip file on root folder eg.(C:,D: etc) because npm or yarn can get conflicted in nested folders

2.In .env file change db_username and db_password according to your computer and Migrate the database tables using "php artisan migrate"

3. Since your computer does not have the database i inserted in .env file ,it will ask whether you would like to create that db then type yes in your terminal and it will create the db

---

**_Running the Application_**

1. Enter folder "239714387-code(Part-1)" and inside that folder open 2 terminals
   2.Start the development server: "php artisan serve" on one terminal that will give out this link to access the application like this 'http://localhost:8000 (default port)' and on another terminal run "npm run dev" for Vite-specific development server (if you encounter this kind of error "failed to load config from....,Error: ENOENT: no such file or directory," please move the project folder to the root directory and re-type "npm run dev" again because sometime npm can get conflicted)

2.Access the application in your browser by clicking the link that php artisan serve give out:eg. http://localhost:8000 (default port)

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

Note : if you have any difficulty unzipping my project please kindly check out this link on github and clone it for better experience : https://github.com/mhkhizil/Sunderland_Lravel_Project. Hope you follow me with all due respect
