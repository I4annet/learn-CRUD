<?php
    function ensureAdminAuthenticated() {
        if (!isset($_SESSION['admin'])) {
            header('Location: /login.php');
            exit();
        }
    }    

?>