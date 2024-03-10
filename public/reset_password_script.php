<?php
require 'config/config.php'; // Database connection

// Ensure the request is POST for security
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $token = $_POST['token'];

    if ($new_password != $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Validate token
    $sql = "SELECT id, reset_token_expires FROM users WHERE reset_token = ? AND reset_token_expires > NOW()";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id, $expires);
            $stmt->fetch();

            // Token is valid, update the password
            $updateSql = "UPDATE users SET password = ?, reset_token = NULL, reset_token_expires = NULL WHERE id = ?";
            if ($updateStmt = $mysqli->prepare($updateSql)) {
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                $updateStmt->bind_param("si", $new_password_hash, $user_id);

                if ($updateStmt->execute()) {
                    echo "Your password has been updated successfully.";
                    // Optionally, redirect the user to the login page
                    // header("Location: login.php");
                    exit;
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
                $updateStmt->close();
            }
        } else {
            echo "Invalid or expired password reset token.";
        }
        $stmt->close();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
    
    $mysqli->close();
}
?>
