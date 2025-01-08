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
    die("Koneksi gagal: " . print_r(sqlsrv_errors(), true)); // Mencetak 2 parameter jika true
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $prodi = $_POST["prodi"];

    $query = "EXEC tambahMahasiswa ?, ?, ?, ?, ?";
    $params = array($nim, $nama, $kelas, $jurusan, $prodi);

    if (strlen($nim) == 10) {
        echo "NIM harus terdiri dari 10 karakter.";
    } else {
        $checkQuery = "SELECT COUNT(*) AS jumlah FROM mahasiswa where NIM = ?";
        $checkParams = array($nim);
        $checkStmt = sqlsrv_query($link, $checkQuery, $checkParams);

        if ($checkStmt === false) {
            die("Error checking NIM: " . print_r(sqlsrv_errors(), true));
        }

        $row = sqlsrv_fetch_array($checkStmt, SQLSRV_FETCH_ASSOC);

        if ($row['jumlah'] > 0) {
            echo "NIM sudah terdaftar !!";
        } else {
            $query = "INSERT INTO mahasiswa (NIM, nama, kelas, jurusan, prodi) VALUES (?, ?, ?, ?, ?)";
            $params = array($nim, $nama, $kelas, $jurusan, $prodi);

            $stmt = sqlsrv_query($link, $query, $params);
        }
        
    }
    
    $stmt = sqlsrv_query($link, $query, $params);

    if ($stmt === false) {
        die("Gagal menambahkan data: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: daftarBiodata.php");
    }
}

sqlsrv_close($link);
?>
