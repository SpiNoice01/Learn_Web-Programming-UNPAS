<?php
$mahasiswa = [
    ["nama" => "Andi", "nim" => "123456", "email" => "andi@example.com", "jurusan" => "Informatika"],
    ["nama" => "Budi", "nim" => "654321", "email" => "budi@example.com", "jurusan" => "Sistem Informasi"],
    ["nama" => "Cici", "nim" => "112233", "email" => "cici@example.com", "jurusan" => "Teknik Elektro"],
];

//  Array Associative
//  Keynya adalah string yang kita buat sendiri

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>