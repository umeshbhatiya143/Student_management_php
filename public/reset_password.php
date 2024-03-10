<!-- reset_password.php -->
<?php
// Validate token and ensure it hasn't expired...
?>
<form action="reset_password_script.php" method="post">
    <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
    <label for="password">New Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="confirm_password">Confirm New Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <button type="submit">Reset Password</button>
</form>
