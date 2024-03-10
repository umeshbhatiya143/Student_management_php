<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

// // Assuming Composer's autoloader setup for namespacing
// require_once __DIR__ . '/../../vendor/autoload.php';

// Manually including if not using Composer's autoloader
// require_once __DIR__ . '/../app/Controllers/AuthController.php';
// require_once __DIR__ . '/../config/config.php';

$request = $_SERVER['REQUEST_URI'];

// Parse the base path to adjust the routing as needed
$basePath = '/user_management/public';

// Removing the base path from the request URI
$request = str_replace($basePath, '', $request);

switch ($request) {
    case '/register':
        // Handles displaying the registration form and processing form submissions
        require __DIR__ . '/register.php';
        break;
    case '/login':
        // Handles displaying the login form and processing form submissions
        require __DIR__ . '/login.php';
        break;
    case '/dashboard' || '/':
        // Secure this route to ensure only logged-in users can access it
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header('Location: login.php');
            exit;
        }
        require __DIR__ . '/dashboard.php';
        break;
    case '/logout':
        // Handles user logout
        require __DIR__ . '/logout.php';
        break;
    // Add more routes as needed
    default:
        http_response_code(404);
        require __DIR__ . '/../views/layouts/404.php';
        break;
}
