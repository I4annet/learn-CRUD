<?php
      $servername = "LAPTOP-A03UJBN1\SQLEXPRESS";
      $username = "";
      $password = "";
      $dbname = "belajarsql";

      $connectionOptions = array (
            "Database" => $dbname,
            "UID" => $username,
            "PWD" => $password,
      );

      $link = sqlsrv_connect($servername, $connectionOptions);
      if ($link === false) {
         die("Koneksi gagal: " . print_r(sqlsrv_errors(), true));
      }

      $query = "SELECT * FROM mahasiswa";
      $stmt = sqlsrv_query($link, $query);
         
?>    

<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Daftar Biodata </title>
      <link rel="stylesheet" href="../css/tabelDaftar.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
      <h1> Daftar Biodata </h1>
      <table border="1">
            <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Prodi</th>
                  <th>Aksi</th>
            </tr>
            <?php
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['nim']) . "</td>
                    <td>" . htmlspecialchars($row['nama']) ."</td>
                    <td>" . htmlspecialchars($row['kelas']) . "</td>
                    <td>" . htmlspecialchars($row['jurusan']) . "</td>
                    <td>" . htmlspecialchars($row['prodi']) . "</td>
                    <td>
                        <form action='edit.php' method='get' style='display: inline'>
                        <input type='hidden' name='nim' value='" . htmlspecialchars($row['nim']) . "'>
                        <button type='submit' class='button-edit'>
                        <i class='fa fa-pencil-alt'></i>
                        </button>
                        </form>

                        <form action='delete.php' method='get' style='display: inline'>
                        <input type='hidden' name='nim' value='" . htmlspecialchars($row['nim']) ."'>
                        <button type='submit' class='button-delete'>
                        <i class= 'fa fa-trash-alt'></i>
                        </button>
                        </form>

                    </td>
                  </tr>";
        }

        sqlsrv_close($link); 
        ?>
      </table>
      <div style="margin-right: 40px; margin-top: 10px; text-align: end">
      <a href="/learn-CRUD/pages/index.php">
          <button type="button" class="button-add">
              <i class='fa fa-plus'></i> 
          </button>
      </a>
      </div>
</body>
</html>

