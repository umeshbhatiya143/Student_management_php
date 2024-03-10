<?php
require 'config/config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Ensure the email exists in the database
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $token = bin2hex(random_bytes(50)); // Generate a random token
        $expires = date("Y-m-d H:i:s", strtotime('+1 hour')); // Token expires in 1 hour

        // Update user's reset token and its expiration
        $updateSql = "UPDATE users SET reset_token = ?, reset_token_expires = ? WHERE email = ?";
        $updateStmt = $mysqli->prepare($updateSql);
        $updateStmt->bind_param("sss", $token, $expires, $email);
        $updateStmt->execute();

        // Send reset link to the user's email
        $resetLink = "http://yourdomain.com/reset_password.php?token=" . $token;
        $subject = "Password Reset";
        $message = "Please click on the following link to reset your password: " . $resetLink;
        $headers = 'From: noreply@yourdomain.com' . "\r\n" .
            'Reply-To: noreply@yourdomain.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($email, $subject, $message, $headers);

        echo "A password reset link has been sent to your email.";
    } else {
        echo "No account found with that email.";
    }

    $stmt->close();
    $updateStmt->close();
    $mysqli->close();
}
?>
