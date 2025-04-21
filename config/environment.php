<?php
class Environment {
    private static $instance = null;
    private $settings;
    
    private function __construct() {
        // Basic settings
        $this->settings = [
            'is_local' => $this->isLocalEnvironment(),
            'base_url' => $this->getBaseUrl(),
            'debug' => true
        ];
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function isLocalEnvironment() {
        return (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || 
                strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false);
    }

    private function getBaseUrl() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        return $protocol . '://' . $_SERVER['HTTP_HOST'] . SITE_URL;
    }

    public function get($key) {
        return $this->settings[$key] ?? null;
    }

    public function getUrl($path = '') {
        return $this->settings['base_url'] . ltrim($path, '/');
    }

    public function setupHeaders() {
        // Common security headers
        header("X-Content-Type-Options: nosniff");
        header("X-XSS-Protection: 1; mode=block");
        
        if ($this->settings['is_local']) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        } else {
            ini_set('display_errors', 0);
            error_reporting(0);
        }
    }
}
?> 