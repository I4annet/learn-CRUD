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

        public function createCustomer($id, $name, $address, $email, $password, $phone_number) {
            try {
                $query = "INSERT INTO mahasiswa (id, name, address, email, password, phone_number) VALUES (:id, :name, :address, :email, :password, :phone_number)";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stnm->bindParam(':phone_number', $phone_number);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil ditambahkan'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function readAllCustomer() {
            try {
                $query = "SELECT * FROM mahasiswa";
                $stmt = $this->pdo->prepare($query);
                $stmt->execute();
                return $stmt;
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function updateCustomer() {
            try {
                $query = "UPDATE customer SET name = :name, address = :address, email = :email, password = :password, phone_number = :phone_number WHERE id = :id";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':phone_number', $phone_number);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil diupdate'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }
    
        public function deleteCustomer() {
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

        public function loginCustomer($email, $password) {
            try {
                $query = "SELECT * FROM customer WHERE email = :email AND password = :password";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->execute();
                $result = $stmt->fetch();
                if ($result) {
                    return ['status' => 'success', 'data' => $result];
                } else {
                    return ['status' => 'error', 'message' => 'Email atau password salah'];
                }
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }
    }
?>