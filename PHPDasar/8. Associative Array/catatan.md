Ini adalah materi lanjutan dari Array. di "7. Array"
# Catatan Belajar: Associative Array

Pada bagian ini, kita akan belajar tentang **Associative Array** di PHP. Associative Array memungkinkan kita untuk menggunakan **key** sebagai indeks, bukan angka seperti pada array numerik.

---

## Apa yang Sudah Dipelajari

1. **Menampilkan Array Menggunakan Looping**  
    Kita telah belajar cara menampilkan array dengan menggunakan perulangan seperti `foreach`.

2. **Array Dua Dimensi**  
    Kita juga telah mempelajari cara membuat dan menampilkan array dua dimensi.

3. **Array Asosiatif**  
    Materi baru yang kita pelajari adalah **array asosiatif**, di mana indeksnya berupa key yang lebih deskriptif.

---

## Contoh Array Asosiatif

Berikut adalah contoh penggunaan array asosiatif:

```php
$mahasiswa = [
     [
          "nama" => "Andi",
          "nim" => "123456",
          "email" => "andi@example.com",
          "jurusan" => "Informatika"
     ],
     [
          "nama" => "Budi",
          "nim" => "654321",
          "email" => "budi@example.com",
          "jurusan" => "Sistem Informasi"
     ],
     [
          "nama" => "Cici",
          "nim" => "112233",
          "email" => "cici@example.com",
          "jurusan" => "Teknik Elektro"
     ],
];
```

---

## Cara Menampilkan Array Asosiatif

Untuk menampilkan array asosiatif, kita tidak lagi menggunakan indeks numerik, melainkan key dari array tersebut. Contoh kode untuk menampilkan data mahasiswa:

```php
foreach ($mahasiswa as $mhs) {
     echo "Nama: " . $mhs["nama"] . "<br>";
     echo "NIM: " . $mhs["nim"] . "<br>";
     echo "Email: " . $mhs["email"] . "<br>";
     echo "Jurusan: " . $mhs["jurusan"] . "<br><br>";
}
```

Output yang dihasilkan:

```
Nama: Andi
NIM: 123456
Email: andi@example.com
Jurusan: Informatika

Nama: Budi
NIM: 654321
Email: budi@example.com
Jurusan: Sistem Informasi

Nama: Cici
NIM: 112233
Email: cici@example.com
Jurusan: Teknik Elektro
```

---

## Catatan Penting

- **Key pada Associative Array**  
  Key harus unik untuk setiap elemen dalam array. Jika ada key yang sama, nilai terakhir akan menggantikan nilai sebelumnya.

- **Menggunakan `var_dump` atau `print_r`**  
  Untuk debugging, gunakan fungsi `var_dump` atau `print_r` untuk melihat struktur array secara lengkap.

---

## Latihan

Buatlah array asosiatif yang berisi data buku perpustakaan, seperti judul, penulis, tahun terbit, dan genre. Kemudian tampilkan data tersebut menggunakan perulangan.

---

Semoga catatan ini membantu dalam memahami **Associative Array** di PHP. Selamat belajar dan semangat mencoba!