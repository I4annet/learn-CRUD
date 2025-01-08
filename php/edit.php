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
    $query = "SELECT * FROM mahasiswa WHERE NIM = ?";
    $stmt = sqlsrv_query($link, $query, array($nim));
    $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
}

if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    
    $query = "UPDATE mahasiswa SET nama = ?, kelas = ?, jurusan = ?, prodi = ? WHERE NIM = ?";
    $params = array($nama, $kelas, $jurusan, $prodi, $nim);
    $stmt = sqlsrv_query($link, $query, $params);
    
    if ($stmt === false) {
        die("Gagal mengupdate data: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: daftarBiodata.php");
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit - Isi Biodata Diri</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1> Ubah Biodata Diri </h1>
        <form action="" method="POST">

            <label for="nim">NIM:</label>
            <input type="text" name="nim" value="<?php echo $data['nim']; ?>">

            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>

            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"><br>

            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"><br>

            <label for="prodi">Prodi:</label>
            <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>"><br>

            <button type="submit" name="update">Edit</button>
        </form>
    </div>
</body>
</html>