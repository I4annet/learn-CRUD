<?php
    function ensureCustomerAuthenticated() {
        if (!isset($_SESSION['customer'])) {
            header('Location: /login.php');
            exit();
        }
    }

?>