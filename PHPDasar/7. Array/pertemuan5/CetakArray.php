<?php 
    $data_siswa = [
        ["Siswa 1", "Siswa 2", "Siswa 3", "Siswa 4", "Siswa 5"], 
    ["Alamat 1", "Alamat 2", "Alamat 3", "Alamat 4", "Alamat 5"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($data_siswa as $siswa) { ?>
    <ul>
        <li><?php echo $siswa[0]; ?></li>
        <li><?php echo $siswa[1]; ?></li>
        <li><?php echo $siswa[2]; ?></li>
        <li><?php echo $siswa[3]; ?></li>
        <li><?php echo $siswa[4]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>