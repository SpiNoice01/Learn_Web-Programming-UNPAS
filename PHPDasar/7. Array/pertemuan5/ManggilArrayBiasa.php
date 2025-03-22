<?php
    $angka = [3, 6, 9, 12];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
        div {
            width: 100px;
            height: 100px;
            background-color: #ADD8E6;
            text-align: center;
            line-height: 100px;
            margin : 3px;
        }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < count($angka); $i++) {  ?>
    <div><?php echo  $angka[$i]; ?></div>
   <?php }?>

   <?php foreach($angka as $a) { ?>
    <div><?php echo $a; ?> </div>
   <?php } ?>
</body>
</html>