<?php   
require_once 'config/database.php';
    class userModel {
        
        private $pdo;

        public function __construct() {
            $this->pdo = $this->getPDOConnection();
        }

        private function getPDOConnection() {
            return getPDOConnection();
        }

        public function createUser()
    }

?>