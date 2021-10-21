<?php
// dipanggil function
require'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["tambah"])){
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0){
        echo"
        <script>
        alert('data telah berhasil ditambah');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo"
        <script>
        alert('data telah gagal ditambah');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM:</label>
                <input type="teks" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">NIM:</label>
                <input type="teks" name="nama" id="nama" required>
            </li>
            <li>
                 <label for="email">Email:</label>
                <input type="teks" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan:</label>
                <input type="teks" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="teks" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
</body>
</html>