<?php
// Add at the very top of upload.php
error_log("Upload attempt started");
error_log("POST data: " . print_r($_POST, true));
error_log("FILES data: " . print_r($_FILES, true));

require_once __DIR__ . '/../../config/constants.php';
require_once BASE_PATH . '/config/database.php';
require_once '../security_headers.php';
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

// Check if user is logged in
if (!isset($_SESSION['admin'])) {
    echo json_encode(['success' => false, 'error' => 'Unauthorized']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_FILES['image'])) {
    echo json_encode(['success' => false, 'error' => 'No file uploaded']);
    exit;
}

$file = $_FILES['image'];
$maxSize = 5 * 1024 * 1024; // 5MB
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

// Validate file size
if ($file['size'] > $maxSize) {
    echo json_encode(['success' => false, 'error' => 'File size exceeds 5MB limit']);
    exit;
}

// Validate file type
if (!in_array($file['type'], $allowedTypes)) {
    echo json_encode(['success' => false, 'error' => 'Invalid file type']);
    exit;
}

// Create uploads directory if it doesn't exist
$uploadDir = UPLOADS_PATH . '/blog';
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Generate unique filename
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$filename = uniqid() . '.' . $extension;
$uploadPath = $uploadDir . '/' . $filename;

// Add upload attempt debug info
$debug_info = [
    'upload_dir' => $uploadDir,
    'dir_exists' => file_exists($uploadDir),
    'dir_writable' => is_writable($uploadDir),
    'post_data' => $_POST,
    'files_data' => $_FILES
];

if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
    echo json_encode([
        'success' => true,
        'url' => UPLOADS_URL . '/blog/' . $filename,
        'debug' => $debug_info
    ]);
} else {
    echo json_encode([
        'success' => false,
        'error' => 'Failed to save file',
        'debug' => error_get_last()
    ]);
} 