<?php
//  Ini adalah variable local untuk file ini saja 
$x = 10;

/*
function tampilkanX()
{
    echo $x; // error karena variable $x di atas tidak dapat diakses diluar function
}
tampilkanX();

echo $x . "<br>";
*/

function tampilkanX2()
{
    global $x; // menggunakan keyword global
    $y = $x + 2;
    echo $y;
}
tampilkanX2();
?>