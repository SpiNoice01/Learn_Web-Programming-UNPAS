Request Method, GET dan POST
# Superglobals in PHP

## 📌 Perbedaan Variabel Lokal dan Superglobal

### 💻 Contoh Kode
Berikut adalah contoh kode untuk memahami perbedaan antara variabel lokal dan superglobal:

```php
<?php
// Variabel lokal hanya berlaku untuk file ini saja
$x = 10;

function tampilkanX()
{
    // Error karena variabel $x di atas tidak dapat diakses di luar fungsi
    echo $x; 
}
tampilkanX();

echo $x . "<br>"; // Output: 10

function tampilkanX2()
{
    global $x; // Menggunakan keyword global untuk mengakses variabel $x
    $y = $x + 2;
    echo $y; // Output: 12
}
tampilkanX2();
?>
```

### 📖 Penjelasan
- **Variabel Lokal**: Hanya dapat diakses di dalam fungsi atau file tempat variabel tersebut dideklarasikan.
- **Variabel Global**: Dapat diakses di seluruh file atau fungsi dengan menggunakan keyword `global`.

---

## 🌟 Apa Itu Variabel Superglobals?

Variabel Superglobals adalah array asosiatif bawaan PHP yang dapat diakses di mana saja, baik di dalam fungsi, kelas, maupun file. Variabel ini bersifat global secara otomatis tanpa perlu dideklarasikan.

### 📝 Daftar Variabel Superglobals
| **Superglobal** | **Deskripsi**                                                                 |
|------------------|-------------------------------------------------------------------------------|
| `$_GET`         | Menyimpan data yang dikirim melalui URL atau form dengan metode GET.         |
| `$_POST`        | Menyimpan data yang dikirim melalui form dengan metode POST.                |
| `$_REQUEST`     | Menyimpan data gabungan dari `$_GET`, `$_POST`, dan `$_COOKIE`.             |
| `$_SESSION`     | Menyimpan data sesi pengguna.                                               |
| `$_COOKIE`      | Menyimpan data cookie.                                                     |
| `$_FILES`       | Menyimpan data file yang diunggah.                                         |
| `$_SERVER`      | Menyimpan informasi server dan lingkungan.                                 |
| `$_ENV`         | Menyimpan variabel lingkungan.                                             |
| `$GLOBALS`      | Menyimpan semua variabel global.                                           |

---

## 🔍 Contoh Penggunaan `$_GET`

### 1️⃣ Secara Langsung di Kode PHP
```php
$_GET["nama"] = "Budi";
echo $_GET["nama"]; // Output: Budi
```

### 2️⃣ Melalui URL
Anda dapat mengirim data melalui URL dengan format query string. Contoh:
```
http://localhost/latihan.php?nama=Budi
```

Kemudian, data dapat diakses menggunakan `$_GET`:
```php
<?php
echo $_GET["nama"]; // Output: Budi
?>
```

### ⚠️ Catatan
- Data yang dikirim melalui `$_GET` terlihat di URL, sehingga tidak cocok untuk data sensitif.
- Gunakan `htmlspecialchars()` untuk mencegah serangan XSS:
   ```php
   $nama = htmlspecialchars($_GET["nama"]);
   echo $nama;
   ```

---

## 📨 Contoh Penggunaan `$_POST`

`$_POST` digunakan untuk mengirim data melalui form HTML. Contoh:

### 🖋️ Form HTML
```html
<form method="POST" action="proses.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <button type="submit">Kirim</button>
</form>
```

### 🖥️ File `proses.php`
```php
<?php
$nama = htmlspecialchars($_POST["nama"]);
echo "Nama yang dikirim: " . $nama;
?>
```

---

## ✅ Menggunakan `isset` untuk Validasi Data

`isset` digunakan untuk mengecek apakah sebuah variabel sudah diinisialisasi atau belum. Contoh:

```php
<?php
// Cek apakah data ada dari Get1.php
if (!isset($_GET["nama"]) || !isset($_GET["umur"])) {
    // Redirect jika data tidak ada
    header("Location: Get1.php");
    exit;
}
?>
```

Kode di atas akan dijalankan jika data tidak ada di `Get1.php`, sehingga pengguna akan diarahkan kembali ke `Get1.php`.

---

## ⚖️ Perbedaan `POST` dan `GET`

| **Metode** | **Keterangan**                                                                 |
|------------|---------------------------------------------------------------------------------|
| **`GET`**  | Data dikirim melalui URL dan terlihat oleh pengguna. Cocok untuk data non-sensitif. |
| **`POST`** | Data dikirim melalui body HTTP dan tidak terlihat di URL. Cocok untuk data sensitif atau besar. |

Gunakan metode yang sesuai dengan kebutuhan aplikasi Anda.

---

## 🔐 Project Login Dummy

### 📌 Catatan Menarik dari Kode

#### 1️⃣ **Penggunaan Metode POST**
- **Form Login** menggunakan metode `POST` untuk mengirimkan data `username` dan `password` ke `homepage.php`.
- Metode `POST` dipilih karena data yang dikirim tidak terlihat di URL, sehingga lebih aman dibandingkan `GET` untuk data sensitif seperti kredensial.

#### 2️⃣ **Validasi dengan `isset`**
- Pada `homepage.php`, terdapat validasi awal menggunakan `isset` untuk memastikan bahwa tombol `submit` telah ditekan:
    ```php
    if (!isset($_POST["submit"])) {
            header("Location: login.php");
            exit;
    }
    ```
    Jika tombol tidak ditekan, pengguna akan diarahkan kembali ke halaman login.

#### 3️⃣ **Validasi Input Kosong**
- Kode memeriksa apakah `username` atau `password` kosong menggunakan `empty()`:
    ```php
    if (empty($username) || empty($password)) {
            header("Location: login.php?error=emptyfields");
            exit;
    }
    ```
    Jika salah satu input kosong, pengguna diarahkan kembali ke halaman login dengan parameter error `emptyfields`.

#### 4️⃣ **Penggunaan Superglobal `$_GET` untuk Menampilkan Error**
- Halaman login memanfaatkan `$_GET` untuk menangkap parameter error dan menampilkan pesan kesalahan yang sesuai:
    ```php
    if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
                    echo "<p style='color: red'>Username dan Password harus diisi</p>";
            }
    }
    ```
    Ini menunjukkan bagaimana data dapat dikirim melalui URL menggunakan metode `GET`.

#### 5️⃣ **Keamanan dengan `htmlspecialchars`**
- Pada halaman `homepage.php`, data yang dikirim melalui `$_POST` ditampilkan kembali menggunakan `htmlspecialchars()`:
    ```php
    echo "<p>Username : " . htmlspecialchars($_POST["username"]) . "</p>";
    ```
    Fungsi ini mencegah serangan XSS (Cross-Site Scripting) dengan mengonversi karakter khusus menjadi entitas HTML.

#### 6️⃣ **Redirect untuk Keamanan**
- Jika validasi gagal (misalnya, username atau password salah), pengguna diarahkan kembali ke halaman login dengan parameter error yang relevan:
    ```php
    header("Location: login.php?error=wrongusername");
    exit;
    ```
    Teknik ini memastikan bahwa pengguna tidak dapat mengakses halaman `homepage.php` tanpa login yang valid.

#### 7️⃣ **Hardcoded Credentials**
- Kode menggunakan kredensial hardcoded:
    ```php
    if ($username !== "detomaso") {
            header("Location: login.php?error=wrongusername");
            exit;
    }
    if ($password !== "pantera") {
            header("Location: login.php?error=wrongpassword");
            exit;
    }
    ```
    Ini hanya cocok untuk pembelajaran. Dalam aplikasi nyata, kredensial harus disimpan dengan aman, misalnya di database, dan password harus di-hash.

#### 8️⃣ **Penggunaan Default Value dengan Null Coalescing Operator**
- Variabel `username` dan `password` diinisialisasi dengan nilai default kosong menggunakan operator `??`:
    ```php
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';
    ```
    Ini mencegah error jika salah satu key tidak ada dalam array `$_POST`.

---

### 📝 Kesimpulan
Kode ini memberikan contoh sederhana namun efektif tentang bagaimana menggunakan metode `POST` dan `GET` dalam PHP. Dengan validasi input, penggunaan `isset`, dan pengamanan data menggunakan `htmlspecialchars`, kode ini menunjukkan praktik dasar yang penting dalam pengembangan aplikasi web. 🚀

## 📚 Edukasi Tambahan
- **Keamanan Data**: Selalu gunakan fungsi seperti `htmlspecialchars()` untuk mencegah serangan XSS.
- **Validasi Input**: Pastikan untuk memvalidasi semua input pengguna sebelum memprosesnya.
- **Error Handling**: Berikan pesan error yang informatif namun tidak membocorkan detail sistem.

Dengan memahami konsep Superglobals, Anda dapat membangun aplikasi PHP yang lebih aman dan efisien. 🚀
