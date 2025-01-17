<?php   
require_once 'config/database.php';
    class CustomerModel {
        
        private $pdo;

        public function __construct() {
            $this->pdo = $this->getPDOConnection();
        }

        private function getPDOConnection() 
        {
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
            try {
                $query = "SELECT * FROM mahasiswa";
                $stmt = $this->pdo->prepare($query);
                $stmt->execute();
                return $stmt;
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function updateUser() {
            try {
                $query = "UPDATE customer SET name = :name, address = :address WHERE id = :id";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':address', $address);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil diupdate'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }
    
        public function deleteUser() {
            try {
                $query = "DELETE FROM customer WHERE id = :id";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil dihapus'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }
    }
?>