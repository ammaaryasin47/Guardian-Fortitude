# GUARDIAN FORTITUDE SECURITY SERVICES

This is a Laravel-based PHP application for **Guardian Fortitude Security Services**. This README provides step-by-step instructions to install, configure, and run the application on your local machine.

---

## Prerequisites

Before you begin, ensure you have the following installed:

1. **Composer** (PHP Dependency Manager):  
   Download and install from [https://getcomposer.org/download/](https://getcomposer.org/download/).

2. **XAMPP** (Local Server Environment):  
   Download and install from [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html).

---

## Installation Steps

Follow these steps to set up and run the application:

### Step 1: Start XAMPP Servers
1. Launch **XAMPP**.
2. Start the **Apache** and **MySQL** servers.

### Step 2: Create and Configure the Database
1. Open your browser and go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Create a new database named **`Guardian_Fortitude`**.
3. Import the provided SQL file into the database.

### Step 3: Set Up the Application
1. Open **Command Prompt (CMD)** or **Terminal**.
2. Navigate to the project directory where the **Guardian Fortitude** files are located.
3. Run the following command to start the Laravel development server:
   ```bash
   php artisan serve

### Step 4: Access the Application
1. Open your preferred web browser.
2. Enter the following URL in the address bar: [http://127.0.0.1:8000/]
You will be directed to the HOME page of the Guardian Fortitude application.

### TROUBLESHOOTING
1. XAMPP Servers Not Starting
Ensure no other applications (like Skype or other web servers) are using ports 80 (Apache) or 3306 (MySQL).
Check the XAMPP control panel for error messages and resolve them accordingly.

2. Database Connection Issues
Verify that the database name in the .env file matches the one created in phpMyAdmin (Guardian_Fortitude).
Ensure the database credentials in the .env file are correct:
DB_DATABASE=Guardian_Fortitude
DB_USERNAME=root
DB_PASSWORD=
If the SQL file fails to import, ensure it is not corrupted and is compatible with your MySQL version.

3. Composer Dependency Issues
If composer install fails, ensure you have the latest version of Composer installed.
Run the following command to clear the Composer cache and retry:
composer clear-cache
composer install

4. Laravel Server Not Starting
Ensure you are in the correct project directory when running php artisan serve.
If the port 8000 is already in use, specify a different port: php artisan serve --port=8080

**Contact On Discord: suppressor_47**
### THIS DOCUMENTATION IS PROVIDED TO YOU THROUGH *D-FUZER® ARMY* BY *SHAIKH AMMAAR*###