<?php
    require_once 'models/adminModel.php';
    require_once 'middleware/sessionAdmin.php';

    class AdminController {
        
        private $adminModel;

        public function __construct() {
            $this->adminModel = new AdminModel();
        }

        public function login() {
            session_start();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $result = $this->adminModel->loginAdmin($email, $password);
                
                if ($result['status'] == 'success') {
                    $_SESSION['admin'] = $result['data'];
                    header('Location: /index.php');
                } else {
                    echo $result['message'];
                }
            }
        }

        public function logout() {
            session_start();
            session_unset();
            session_destroy();
            header('Location: /login.php');
        }
    }


?>