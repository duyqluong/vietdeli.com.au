<?php
require_once __DIR__ . '/security_headers.php';
require_once __DIR__ . '/../config/constants.php';
require_once BASE_PATH . '/config/database.php';
require_once BASE_PATH . '/config/Auth.php';
session_start();

// Debug information should come from config.php settings
// Remove these as they're already set in config.php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$auth = new Auth($pdo);

// Check if already logged in
if ($auth->isLoggedIn() && $auth->checkSessionTimeout()) {
    header('Location: dashboard.php');
    exit;
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    
    if ($auth->login($email, $password)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include BASE_PATH . '/head.html'; ?>
    <title>Admin Login - Viet Deli</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-login">
        <h1>Admin Login</h1>
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p><a href="<?php echo SITE_URL; ?>admin/forgot-password.php">Forgot Password?</a></p>
    </div>
</body>
</html> 