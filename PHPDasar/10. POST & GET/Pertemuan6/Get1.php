<?php
$mahasiswa = [
    [
        "nama" => "Budi",
        "umur" => 20
    ],
    [
        "nama" => "Dibut",
        "umur" => 25
    ],
    [
        "nama" => "Abdi",
        "umur" => 19
    ]
]
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetTEst</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <a
                    href="getPage1.php?nama=<?= ($mhs['nama']); ?>&umur=<?= ($mhs['umur']); ?>"><?= $mhs["nama"]; ?></a>
            </li>
            <li>Umur : <?= $mhs["umur"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>