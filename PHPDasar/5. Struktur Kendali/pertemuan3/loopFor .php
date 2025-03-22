<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
        </tr>
        <tr>
            <td>John</td>
            <td>18101170001</td>
            <td>IF-41-05</td>
            <td>Teknik Informatika</td>
            <td>2018</td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>18101170002</td>
            <td>IF-41-05</td>
            <td>Teknik Informatika</td>
            <td>2018</td>
        </tr>
        <tr>
            <td>Bob</td>
            <td>18101170003</td>
            <td>IF-41-05</td>
            <td>Teknik Informatika</td>
            <td>2018</td>
        </tr>
    </table> -->

    <!-- <table border="1">
       <?php
    //    for ( $i = 1; $i <= 5; $i++ ) {
    //     echo "<tr>";
    //     for ( $j = 1; $j <= 5; $j++ ) {
    //         echo "<td> $i x $j = " . $i * $j . "</td>";
    //     }
    //     echo "</tr>";
    //    }
       ?>
    </table> -->

    <table border="1">
        <?php
        
        for ( $i = 0; $i <= 5; $i++ ) { ?>
            <tr>
                <?php for ( $j = 0; $j <= 5; $j++ ) { ?>
                    <td <?php
                        $ij = $i * $j; 
                        if ($ij % 2 == 0) echo "style='background-color: blue'"; 
                        else echo "style='background-color: #ADD8E6'"; 
                            ?>> <?php echo "$i x $j = " . $ij; ?> 
                            </td>
                <?php } ?>
            </tr>
        <?php }
        ?>
    </table>

</body>
</html>