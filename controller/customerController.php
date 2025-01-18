<?php
    require_once 'models/customerModel.php';
    require_once 'middleware/sessionCustomer.php';
    class CustomerController {
        
        private $customerModel;

        public function __construct() {
            $this->customerModel = new CustomerModel();
        }

        public function login() {
            session_start();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $result = $this->customerModel->loginCustomer($email, $password);
                
                if ($result['status'] == 'success') {
                    $_SESSION['customer'] = $result['data'];
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