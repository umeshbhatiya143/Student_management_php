<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user_management/public/assets/css/auth.css">
    <title>Document</title>
</head>

<body>
    <?php include __DIR__ . '/../views/layouts/header.php'; ?>

    <form action="send_reset_link.php" method="post">
        <div class="forgot-password-container">

            <div class="forgot-password">
                <h2>Forgot Password</h2>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Send Reset Link</button>
            </div>
        </div>
    </form>
    <?php include __DIR__ . '/../views/layouts/footer.php'; ?>
</body>

</html>