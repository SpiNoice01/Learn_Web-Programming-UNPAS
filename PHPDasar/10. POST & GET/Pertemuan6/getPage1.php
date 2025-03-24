<!-- CEK apakah data ada dari Get1.php -->
<?php
if (!isset($_GET["nama"]) || !isset($_GET["umur"])) {
    // Redirect
    header("Location: Get1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul> Mahasiswa
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>Umur : <?= $_GET["umur"]; ?></li>
    </ul>

    <a href="Get1.php">BALIK</a>
</body>

</html>