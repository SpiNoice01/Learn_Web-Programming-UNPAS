<?php 
// Membuat array Lawas
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
$bulan = [
    ["Januari", "Februari", "Maret"],
    ["April", "Mei", "Juni"],
    ["Juli", "Agustus", "September"],
    ["Oktober", "November", "Desember"]
];
$arr = [123, "tulisan", false];

// Menampilkan array
// var_dump($hari);
// echo "<br>";
// echo "<br>";
// print_r($bulan);

// // Menampilkan 1 elemen pada array
// echo "<br>";
// echo "<hr>";
// echo $arr[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 60px;
            height: 60px;
            background-color: #BADA55;
            text-align: center;
            line-height: 60px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($hari); $i++) { ?>
    <div class="kotak">
    <?php echo $hari[$i]; ?>
    </div>
    <?php } ?>

    <div class="clear"></div>
    
    <?php for($i = 0; $i < count($hari); $i++) { ?>
    <div class="kotak">
    <?php echo $bulan[1][1]; ?>
    </div>
    <?php } ?>
</body>
</html>