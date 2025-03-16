# Belajar Array di PHP

## Pengertian Array
- **Array** adalah variabel yang dapat menyimpan banyak nilai.
- Elemen dalam array bisa memiliki tipe data yang berbeda.
- Array terdiri dari pasangan **key** dan **value**, di mana **key** adalah indeks yang dimulai dari angka 0.

## Cara Membuat Array di PHP

```php
$hari = ["Senin", "Selasa", "Rabu"];
$bulan = ["Januari", "Februari", "Maret"];
$warna = array("Merah", "Kuning", "Hijau");
```
- Array dapat dibuat menggunakan **square brackets `[]`** atau **fungsi `array()`**.

## Menampilkan Isi Array

### Menggunakan `var_dump()` dan `print_r()`
```php
var_dump($hari);
print_r($bulan);
```
- `var_dump()` memberikan informasi detail termasuk tipe data dan jumlah elemen.
- `print_r()` hanya menampilkan isi array dalam format yang lebih sederhana.

### Mengakses Elemen Array
```php
echo $bulan[1]; // Output: Februari
echo $warna[2]; // Output: Hijau
echo $hari[0]; // Output: Senin
```
- Gunakan indeks numerik untuk mengakses nilai dalam array.

## Perulangan dalam Array

### Menggunakan `for`
```php
$angka = [3, 6, 9, 12];
for ($i = 0; $i < count($angka); $i++) {
    echo $angka[$i] . " ";
}
```
- `count($array)` digunakan untuk mendapatkan jumlah elemen dalam array.
- `for` digunakan untuk menampilkan elemen array satu per satu.

### Menggunakan `foreach`
```php
foreach ($angka as $a) {
    echo $a . " ";
}
```
- `foreach` lebih ringkas dibandingkan `for` karena langsung mengiterasi elemen dalam array.

## Array Multidimensi
```php
$data_siswa = [
    ["Siswa 1", "Siswa 2", "Siswa 3", "Siswa 4", "Siswa 5"],
    ["Alamat 1", "Alamat 2", "Alamat 3", "Alamat 4", "Alamat 5"]
];
```
- Array multidimensi adalah array yang berisi array lain di dalamnya.
- Digunakan untuk menyimpan data yang memiliki hubungan, seperti nama siswa dan alamatnya.

### Menampilkan Array Multidimensi
```php
foreach($data_siswa as $siswa) {
    echo "<ul>";
    foreach ($siswa as $info) {
        echo "<li>$info</li>";
    }
    echo "</ul>";
}
```
- Menggunakan `foreach` untuk menampilkan setiap elemen dalam array multidimensi.

## Kesimpulan
- **Array** berguna untuk menyimpan banyak data dalam satu variabel.
- **Indeks array** dimulai dari 0.
- **Looping (`for` dan `foreach`)** digunakan untuk mengiterasi array.
- **Array multidimensi** memungkinkan penyimpanan data lebih kompleks.

Dengan memahami konsep ini, kamu bisa mengelola dan menampilkan data dalam PHP dengan lebih efisien!

