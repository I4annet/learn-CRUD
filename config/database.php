<?php

function getPDOConnection() {
    $servername = "LAPTOP-A03UJBN1\SQLEXPRESS";
    $username = "";
    $password = "";
    $dbname = "voting";

   try {
        $pdo = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>