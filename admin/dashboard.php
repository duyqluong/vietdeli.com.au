<?php
require_once 'security_headers.php';
require_once 'auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/vietdeli/' : '/'; ?>">
    <?php include '../head.html'; ?>
    <title>Admin Dashboard - Viet Deli</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-panel">
        <h1>Admin Dashboard</h1>
        <nav class="admin-nav">
            <a href="admin/blog/" class="admin-button">Blog Management</a>
            <a href="admin/logout.php" class="admin-button logout">Logout</a>
        </nav>
    </div>
</body>
</html> 