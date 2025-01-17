<?php
    require_once 'models/customerModel.php';
    class UserController {
        
        private $customerModel;

        public function __construct() {
            $this->customerModel = new CustomerModel();
        }
    }
?>