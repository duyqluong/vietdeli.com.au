<?php
class Auth {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function login($email, $password) {
        $stmt = $this->pdo->prepare("SELECT id, email, password_hash, role FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password_hash'])) {
            // Clear any existing session data
            session_unset();
            
            // Regenerate session ID
            session_regenerate_id(true);
            
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['admin'] = ($user['role'] === 'admin');
            $_SESSION['last_activity'] = time();
            
            return true;
        }
        return false;
    }
    
    public function createUser($email, $password, $role = 'user') {
        try {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("INSERT INTO users (email, password_hash, role) VALUES (?, ?, ?)");
            return $stmt->execute([$email, $password_hash, $role]);
        } catch (PDOException $e) {
            error_log("Error creating user: " . $e->getMessage());
            return false;
        }
    }
    
    public function isLoggedIn() {
        return isset($_SESSION['user_id']) && isset($_SESSION['admin']) && $_SESSION['admin'] === true;
    }
    
    public function checkSessionTimeout() {
        $timeout = 3600; // 1 hour in seconds
        if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
            session_unset();
            session_destroy();
            return false;
        }
        $_SESSION['last_activity'] = time();
        return true;
    }
}
?> 