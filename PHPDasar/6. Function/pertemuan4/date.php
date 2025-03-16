<?php 
    echo date("l, d - m - Y") . "<br>";
    echo time() . "<br>";
    echo date("l", time() + 60 * 60 * 24) . "<br>"; // 60 * 60 * 24 = + 1 hari
    echo date("l", mktime(0, 0, 0, 8, 7, 2005)) . "<br>"; // mktime = adalah fungsi untuk membuat waktu
    echo date("l", strtotime("8 july 2005")) . "<br>";
?>