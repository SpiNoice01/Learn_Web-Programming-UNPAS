<?php
echo "Selamat Datang";

// 📝1. Ini adalah komentar
// Ini adalah Komentar

// 📝2. Komentar Multiline
/*
    Ini adalah komentar multiline
    Ini juga komentar multiline
    Ini juga komentar multiline
*/

// 📝3. Standar Output
/*
    echo, sama saja dengan print
    print_r, untuk menampilkan array
    var_dump, untuk menampilkan tipe data
*/

// 📝4. Penggabungan Sintax
/*
    1. Html Didalam PHP
    2. PHP Didalam Html
 */

 // 📝5. Penulisan Variabel & Interpolasi
$nama = " Budi";
echo $nama;
echo "<br>";
echo "Halo Nama Saya $nama";
echo "<br>";
echo 'halo nama saya $nama';

// 📝6. Aritmatika
echo "<hr>";
$x = 10;
$y = 20;
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";

// 📝7. Penggabungan String / concatenation / concat
echo "<hr>";
$namadepan = "Budi";
$namabelakang = "Santoso";
echo $namadepan . " " . $namabelakang;
echo "<br>";

// 📝8. Operator Assignment
// =, +=, -=, *=, /=, %=, .=
echo "<hr>";
$x = 10;
echo $x;
echo "<br>";
$x += 5;
echo $x;
echo "<br>";
$x -= 5;
echo $x;
echo "<br>";
$x *= 5;
echo $x;
echo "<br>";
$x /= 5;
echo $x;
echo "<br>";
$x %= 5;
echo $x;
echo "<br>";

// 📝9. Operator Perbandingan
// <, >, <=, >=, ==, !=
echo "<hr>";
$x = 10;
$y = 20;
echo $x < $y;
echo "<br>";
echo $x > $y;
echo "<br>";
echo $x <= $y;
echo "<br>";
echo $x >= $y;
echo "<br>";
echo $x == $y;
echo "<br>";
echo $x != $y;

// 📝10. Identitas
// ===, !==
echo "<hr>";
$x = 10;
$y = "10";
var_dump ($x === $y);
echo "<br>";
echo $x !== $y;

// 📝11. Logika
// &&, ||, !
echo "<hr>";
$x = 10;
$y = 20;
echo $x < $y && $x < 15;
echo "<br>";


// ℹ️. Diluar Coding.
/*
    f12, untuk melihat kode di browser
    kutip 1, kutip 2. sama saja. 
*/



?>