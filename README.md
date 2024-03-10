# User Management System

This User Management System is a web-based application built with PHP and MySQL. It allows for secure user registration, login, and access to a personalized dashboard. The system implements essential security features, including password hashing and session management, to protect user data.

## Features

- **User Registration**: Allows new users to sign up by providing their full name, email, username, and password.
- **User Login**: Enables users to log in with their credentials to access the dashboard.
- **Dashboard Access**: Authenticated users can view the dashboard after logging in.
- **Secure Password Handling**: Passwords are securely hashed using PHP's password hashing functions before storing in the database.
- **Session Management**: Utilizes PHP sessions to maintain user login states securely.

## Prerequisites

Before installing the User Management System, ensure you have the following:

- PHP 7.4 or later.
- MySQL 5.7 or later.
- Apache or Nginx web server.

## Installation

1. **Clone the Repository**

   Clone the project repository to your web server's document root:

   ```bash
   git clone https://github.com/umeshbhatiya143/Student_management_php.git

## Database Setup

   Import the user_management_db.sql file into your MySQL database. This SQL file includes the necessary tables and structure for the application:

   ```bash
   mysql -u your_username -p your_database_name < path/to/user_management_db.sql
   ```

## Configure Database Connection

Edit the /config/config.php file with your database details:

   ```bash
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'your_database_username');
   define('DB_PASSWORD', 'your_database_password');
   define('DB_NAME', 'user_management_db');
```

## Access the Application

   Open your web browser and navigate to the project URL to start using the User Management System.
    
    ```bash
    http://localhost/user_management/public/


## Usage
- **To Register**: Visit /public/register.php and complete the registration form.
- **To Log In**: Go to /public/login.php and enter your username and password.
- **To View the Dashboard**: After logging in, you'll be automatically redirected to the dashboard at /public/dashboard.php.

## Contact

- **Your Name** - Umesh Kumar Bhatiya
- **Reg No** - 2023IS25
- **Project Link**: https://github.com/umeshbhatiya143/Student_management_php