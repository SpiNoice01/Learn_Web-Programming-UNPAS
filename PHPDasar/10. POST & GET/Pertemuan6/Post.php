<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="postPage2.php" method="post">, Ini Unkomentar kalo mau pindah halaman-->
    <form method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <ul><?php
    if (isset($_POST["nama"])) {
        echo "hallo, " . $_POST["nama"];
    } else {
        echo "mohon masukan nama";
    } ?>
    </ul>

</body>

</html>