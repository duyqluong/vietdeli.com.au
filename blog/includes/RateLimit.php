<?php
class RateLimit {
    private const MAX_ATTEMPTS = 5;
    private const LOCKOUT_TIME = 1800; // 30 minutes
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
        $this->setupTable();
    }

    private function setupTable() {
        $this->db->exec('CREATE TABLE IF NOT EXISTS login_attempts (
            ip VARCHAR(45) PRIMARY KEY,
            attempts INT DEFAULT 1,
            last_attempt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )');
    }

    public function checkLimit($ip) {
        $stmt = $this->db->prepare('SELECT * FROM login_attempts WHERE ip = ?');
        $stmt->execute([$ip]);
        $attempt = $stmt->fetch();

        if (!$attempt) {
            return true;
        }

        if (time() - strtotime($attempt['last_attempt']) > self::LOCKOUT_TIME) {
            $this->resetAttempts($ip);
            return true;
        }

        return $attempt['attempts'] < self::MAX_ATTEMPTS;
    }

    public function logAttempt($ip) {
        $stmt = $this->db->prepare('INSERT INTO login_attempts (ip) 
            VALUES (?) ON DUPLICATE KEY UPDATE 
            attempts = attempts + 1,
            last_attempt = CURRENT_TIMESTAMP');
        $stmt->execute([$ip]);
    }

    public function resetAttempts($ip) {
        $stmt = $this->db->prepare('DELETE FROM login_attempts WHERE ip = ?');
        $stmt->execute([$ip]);
    }
} 