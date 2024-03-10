<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="/user_management/public/assets/css/auth.css">
</head>
<body>
    <?php include __DIR__ . '/../layouts/header.php'; ?>
    
    <div class="login-wrapper">
    <div class="login-container">
        <h2>Create Your Account</h2>
        <form action="register.php" method="post">
        <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" value="<?php echo isset($full_name) ? $full_name : ''; ?>" required>
                <span class="error"><?php echo !empty($full_name_err) ? $full_name_err : ''; ?></span>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
                <span class="error"><?php echo !empty($username_err) ? $username_err : ''; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                <span class="error"><?php echo !empty($email_err) ? $email_err : ''; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span class="error"><?php echo !empty($password_err) ? $password_err : ''; ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <span class="error"><?php echo !empty($confirm_password_err) ? $confirm_password_err : ''; ?></span>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an Account? <a href="login.php" class="btn-link">Login Here</a></p>
    </div>
</div>

    <?php include __DIR__ . '/../layouts/footer.php'; ?>
</body>
</html>
