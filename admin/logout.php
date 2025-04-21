<?php
require_once '../security_headers.php';
require_once '../auth_check.php';
session_start();
session_destroy();
header('Location: index.php');
exit; 