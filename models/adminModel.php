<?php
require_once 'config/database.php';

   class AdminModel {
        private $pdo;

        public function __construct() {
            $this->pdo = $this->getPDOConnection();
        }

        private function getPDOConnection() 
        {
            return getPDOConnection();
        }

        public function createAdmin($id, $name, $email, $password) {
            try {
                $query = "INSERT INTO admin (id, name, email, password) VALUES (:id, :name, :email, :password)";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil ditambahkan'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function readAllAdmin() {
            try {
                $query = "SELECT * FROM admin";
                $stmt = $this->pdo->prepare($query);
                $stmt->execute();
                return $stmt;
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function updateAdmin() {
            try {
                $query = "UPDATE admin SET name = :name, email = :email, password = :password WHERE id = :id";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil diupdate'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function deleteAdmin($id) {
            try {
                $query = "DELETE FROM admin WHERE id = :id";
                $stmt = $this->pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return ['status' => 'success', 'message' => 'Data berhasil dihapus'];
            } catch (PDOException $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }

        public function loginAdmin($email, $password) {
            try {
                $query = "SELECT * FROM admin WHERE email = :email AND password = :password";
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