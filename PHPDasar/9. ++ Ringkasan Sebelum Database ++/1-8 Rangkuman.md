## <h1 style="color: yellow">Video 1</h1>

# <span style="color:teal;">Pre-Requisite</span>

* **HTML & CSS**

---

# <span style="color:teal;">10 Alasan Belajar PHP</span>

1. PHP adalah bahasa pemrograman yang populer dan mudah dipelajari.
2. PHP dapat digunakan untuk membuat halaman web dinamis.
3. PHP gratis.
4. Dukungan komunitas besar.
5. Dokumentasi lengkap.
6. PHP adalah bahasa yang populer.
7. PHP dapat digunakan untuk mengelola database.
8. PHP dirancang khusus untuk pengembangan web.
9. Banyak CMS yang menggunakan PHP.
10. Banyak framework yang menggunakan PHP.

---

# <span style="color:teal;">Yang Akan Dipelajari di PHP Dasar</span>

1. **Client Side Vs Server Side**
2. **Static vs Dinamis**
3. **Persiapan lingkungan pengembangan**
4. **Sintaks PHP**
5. **Array**
6. **Request Method**
7. **Studi Kasus Website Sederhana**
8. **Database**
9. **CRUD (Create, Read, Update, Delete)**
10. **Login dan Register**
11. **Session dan Cookie**
12. **AJAX (Asynchronous JavaScript and XML)**
13. **Upload file**
14. **Reporting**
15. **Web hosting**

---

# <span style="color:teal;">Yang Harus Diinstall</span>

1. **Code Editor**
2. **Web Server**
3. **Web Browser**
4. **Database Server** (MySQL, MariaDB, SQLite)

---

## <span style="color:gold;">Video 2: Sejarah PHP</span>

### <span style="color:lightcoral;">Sejarah PHP</span>

1. PHP dibuat oleh **Rasmus Lerdorf**.
2. PHP awalnya bernama **"Personal Home Page"**.
3. Pada PHP 5, terjadi update signifikan karena mendukung **Object Oriented Programming (OOP)**.

### <span style="color:lightcoral;">Karakteristik Bahasa PHP</span>

1. Ekstensi file harus `.php` (walaupun isinya HTML).
2. Ditulis dalam tag PHP (Delimiter PHP `<?php ?>`).
3. Bisa digunakan bersamaan dengan HTML.
4. Mengikuti sintaks bahasa C.

---

## <span style="color:gold;">Video 3: Client Side vs Server Side Scripting</span>

### <span style="color:lightcoral;">Client Side Scripting</span>

* Script dijalankan di sisi **client (Browser)**.
* Script dijalankan oleh browser (JavaScript).
* Hasil script langsung dirender di browser.
* **Contoh:** JavaScript, jQuery.

### <span style="color:lightcoral;">Server Side Scripting</span>

* Script dijalankan di sisi **server (Web Server)**.
* Script dijalankan oleh web server (PHP, Python, Ruby).
* Hasil script dikirimkan ke browser sebagai respon.
* **Contoh:** PHP, Python, Ruby.

### <span style="color:lightcoral;">Cara Kerja PHP</span>

1. Browser mengirimkan request ke web server.
2. Web server menerima request dan mengolahnya.
3. Web server menjalankan script PHP yang sesuai.
4. Script PHP menghasilkan respon.
5. Respon dikirimkan ke browser oleh web server.
6. Browser menerima respon dan menampilkan hasilnya.

---

## <span style="color:gold;">Persiapan Lingkungan Pengembangan</span>

1. **Download XAMPP**: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)

### <span style="color:lightcoral;">Cara Mengecek Jika XAMPP Berjalan dengan Normal</span>

1. Buka browser.
2. Masuk ke `localhost`.
3. Tampilkan halaman `info.php`.

---

## <span style="color:gold;">Mulai Koding</span>

1. Buat folder di dalam folder `htdocs` di dalam folder `xampp`.
2. Untuk melihat file yang dibuat di dalam folder `htdocs`, masukkan URL `localhost` di browser.

### <span style="color:lightcoral;">Praktik</span>

```php
echo "Hello World";
```

---

## <span style="color:gold;">Step By Step</span>

1. Nyalakan **Apache** di XAMPP.
2. Buat folder baru di `htdocs`.
3. Buat file `index.php` di folder tersebut.

---

## <span style="color:gold;">Pelajaran yang Didapat</span>

### <span style="color:lightcoral;">Laporan Praktikum</span>

Praktikum ini dilakukan untuk mempelajari sintaks PHP dasar. Saya mempelajari cara membuat komentar, menampilkan output, penggabungan sintaks, variabel, aritmatika, penggabungan string, operator assignment, operator perbandingan, identitas, logika, dan lainnya.

Saya juga mempelajari cara menulis kode PHP yang rapi dan terstruktur dengan menggunakan indentasi yang benar dan komentar yang sesuai.

### <span style="color:lightcoral;">Kesulitan</span>

Saya menemukan beberapa kesulitan saat mempelajari sintaks PHP dasar, seperti memahami cara penggunaan operator assignment, operator perbandingan, dan identitas. Namun, setelah mempelajari dengan seksama dan mencoba beberapa contoh, saya bisa memahaminya dengan baik.

### <span style="color:lightcoral;">Kesimpulan</span>

Saya sangat terbantu dengan adanya contoh-contoh yang diberikan dalam praktikum ini. Contoh-contoh tersebut sangat membantu saya memahami sintaks PHP dasar dengan lebih baik.

Saya berharap dengan mempelajari sintaks PHP dasar ini, saya dapat membuat program yang lebih baik dan lebih efektif dalam menyelesaikan masalah.

---

### <span style="color:lightcoral;">Contoh Kode PHP Dasar</span>

```php
<?php
echo "Selamat Datang";

// 📝1. Komentar
// Ini adalah komentar

// 📝2. Komentar Multiline
/*
    Ini adalah komentar multiline
*/

// 📝3. Standar Output
/*
    echo, print, print_r, var_dump
*/

// 📝4. Penggabungan Sintaks
/*
    1. HTML di dalam PHP
    2. PHP di dalam HTML
 */

// 📝5. Variabel & Interpolasi
$nama = "Budi";
echo $nama;
echo "<br>";
echo "Halo Nama Saya $nama";
echo "<br>";
echo 'Halo nama saya $nama';

// 📝6. Aritmatika
echo "<hr>";
$x = 10;
$y = 20;
echo $x + $y;

// 📝7. Penggabungan String
echo "<hr>";
$namadepan = "Budi";
$namabelakang = "Santoso";
echo $namadepan . " " . $namabelakang;

// 📝8. Operator Assignment
echo "<hr>";
$x = 10;
$x += 5;
echo $x;

// 📝9. Operator Perbandingan
echo "<hr>";
$x = 10;
$y = 20;
echo $x < $y;

// 📝10. Identitas
echo "<hr>";
$x = 10;
$y = "10";
var_dump($x === $y);

// 📝11. Logika
echo "<hr>";
$x = 10;
$y = 20;
echo $x < $y && $x < 15;
?>
```

---

## <span style="color:gold;">Video 5: Control Flow</span>

### <span style="color:lightcoral;">Control Flow</span>

Control flow atau struktur kendali adalah bagaimana alur ketika program kita dibaca dengan interpreter PHP.

### <span style="color:lightcoral;">Akan Dipelajari</span>

1. **Pengulangan**
    * Gunanya untuk mengulang blok kode secara berulang.
    * **For**, **While**, **Do While**, **Foreach**.

2. **Pengkondisian**
    * **If & Else**, **Elseif**, **Ternary**, **Switch**.

---

### <span style="color:lightcoral;">Roadmap Materi Kali Ini</span>

1. **Pengulangan**
    * Diterapkan dalam membuat tabel pada HTML.
2. **Pengkondisian**
    * If Else.
    * Diterapkan pada tabel, di mana jika hasil perkalian di tabel genap akan berwarna.

---

## <span style="color:gold;">Video 6: Function</span>

### <span style="color:lightcoral;">Apa Itu Function?</span>

Function di PHP adalah kumpulan kode yang dapat dipanggil kembali untuk melakukan tugas tertentu. Function biasanya berisi parameter dan dapat mengembalikan nilai (return value).

---

### <span style="color:lightcoral;">Built-in Function</span>

PHP menyediakan banyak fungsi bawaan. Dokumentasi lengkapnya dapat ditemukan di [PHP Manual](https://www.php.net/manual/en/funcref.php).

#### <span style="color:lightcoral;">Contoh Built-in Functions</span>

1. **Date/Time Functions**
    - `date()` - Mengembalikan tanggal atau waktu dalam format tertentu.
    - `time()` - Mengembalikan waktu saat ini dalam bentuk timestamp.

2. **String Functions**
    - `strlen()` - Menghitung panjang string.
    - `explode()` - Memecah string menjadi array berdasarkan delimiter.

3. **Utility Functions**
    - `var_dump()` - Menampilkan informasi tentang variabel.
    - `isset()` - Mengecek apakah suatu variabel sudah diatur.

---

### <span style="color:lightcoral;">User-Defined Function</span>

Selain fungsi bawaan, kita juga dapat membuat fungsi sendiri.

Contoh:
```php
function salam($nama) {
    return "Halo, $nama!";
}

echo salam("Budi");
```

---

## <span style="color:gold;">Video 7: Array</span>

### <span style="color:lightcoral;">Pengertian Array</span>

- **Array** adalah variabel yang dapat menyimpan banyak nilai.
- Elemen dalam array bisa memiliki tipe data yang berbeda.

### <span style="color:lightcoral;">Cara Membuat Array</span>

```php
$hari = ["Senin", "Selasa", "Rabu"];
$bulan = ["Januari", "Februari", "Maret"];
```

### <span style="color:lightcoral;">Menampilkan Isi Array</span>

```php
var_dump($hari);
print_r($bulan);
```

### <span style="color:lightcoral;">Perulangan dalam Array</span>

```php
foreach ($hari as $h) {
    echo $h . " ";
}
```

---

## <span style="color:teal;">Kesimpulan</span>

Dengan memahami konsep ini, kamu bisa mengelola dan menampilkan data dalam PHP dengan lebih efisien!
```
