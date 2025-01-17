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

        public function createCustomer($id, $name, $address) {
            try {
                $query = "INSERT INTO mahasiswa (id, name, address) VALUES (:id, :name, :address)";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':address', $address);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil ditambahkan'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function readAllUser() {
            $query = "SELECT * FROM mahasiswa";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt;
        }

        public function updateUser() {

        }

        public function deleteUser() {

        }
    }

?>