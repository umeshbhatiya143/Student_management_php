<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user_management/public/assets/css/auth.css">
    <title>Document</title>
</head>
<body>
<?php include __DIR__ . '/../layouts/header.php'; ?>

<div class="login-wrapper">
    <div class="login-container">
        <h2>Login to Your Account</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <p><a href="forgot-password.php" class="btn-link">Forgot Password?</a></p>
            <button type="submit">Log In</button>
        </form>
        <p>Create an Account? <a href="register.php" class="btn-link">Register Here</a></p>
       
    </div>
</div>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
</body>
</html>
