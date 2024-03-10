<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user_management/public/assets/css/main.css">
    <title>Document</title>
</head>
<body>

<?php include __DIR__ . '/layouts/header.php'; ?>

<div class="dashboard-container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <p>This is your dashboard.</p>

    
    <p>
        <a href="logout.php" class="btn-logout">Log Out</a>
    </p>
</div>

<?php include __DIR__ . '/layouts/footer.php'; ?>
    
</body>
</html>