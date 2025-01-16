<?php

function getConnection() {
    $servername = "LAPTOP-A03UJBN1\SQLEXPRESS";
    $username = "";
    $password = "";
    $dbname = "voting";

   try {
        $conn = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>