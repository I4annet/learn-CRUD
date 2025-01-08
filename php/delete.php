<?php
$servername = "LAPTOP-A03UJBN1\SQLEXPRESS";
$username = "";
$password = "";
$dbname = "belajarsql";

$connectionOptions = array(
    "Database" => $dbname,
    "UID" => $username,
    "PWD" => $password
);

$link = sqlsrv_connect($servername, $connectionOptions);

if ($link === false) {
    die("Koneksi gagal: " . print_r(sqlsrv_errors(), true));
}

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $query = "DELETE FROM mahasiswa WHERE NIM = ?";
    $stmt = sqlsrv_query($link, $query, array($nim));
    
    if ($stmt === false) {
        die("Gagal menghapus data: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: daftarBiodata.php");
    }
}

?>


