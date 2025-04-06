Database :
# Catatan: Database & MySQL

## 📊 Apa itu Data?
Data adalah representasi fakta di dunia nyata. Contohnya:
- Nama
- Judul Buku
- Nomor KTP
- Harga
- Foto
- Musik
- dan lain-lain.

---

## 🗂️ Menyimpan Data Selain Database
Data dapat disimpan dalam:
- Notepad atau file berbasis teks.
- Spreadsheet seperti Excel.

### ⚠️ Masalah Penyimpanan Non-Database
- Kapasitas terbatas.
- Kecepatan akses lambat.
- Keamanan rendah.
- Duplikasi data.
- dan lain-lain.

### ✅ Solusi
- Skalabilitas.
- Ketersediaan.
- Keamanan (Security).
- Penyimpanan permanen.
- dan lain-lain.

Semua solusi ini dapat ditemukan dalam **Database**.

---

## 🛠️ Apa itu DBMS?
**DBMS (Database Management System)** adalah sistem yang mengelola database. Contoh DBMS:
- Oracle
- MySQL
- SQL Server
- PostgreSQL
- MongoDB

### 📚 Jenis-jenis DBMS
1. **Relational DBMS (RDBMS)** - yang akan kita pelajari.
2. Hierarchical DBMS.
3. Network DBMS.
4. NoSQL DBMS.

---

## 🔗 Relational DBMS (RDBMS)
RDBMS menggunakan tabel-tabel yang saling terhubung melalui relasi. Gambaran tabel mirip seperti tabel di Microsoft Word atau Excel.

### 📌 Istilah Penting
- **Record**: Baris data dalam tabel.
- **Primary Key**: Data unik yang merepresentasikan record, seperti ID atau NIM.

---

## 🧪 Langkah Praktikum

### 1️⃣ Menyalakan MySQL
- Aktifkan MySQL di XAMPP.

### 2️⃣ Menggunakan Command Line
1. Buka CMD, navigasikan ke folder `mysql\bin`.
2. Jalankan perintah:
    ```bash
    mysql -u root -p
    ```
3. Buat database:
    ```sql
    CREATE DATABASE phpdasar;
    ```
4. Gunakan database:
    ```sql
    USE phpdasar;
    ```
5. Buat tabel `mahasiswa`:
    ```sql
    CREATE TABLE mahasiswa (
         id INT PRIMARY KEY AUTO_INCREMENT,
         nama VARCHAR(100),
         nim CHAR(11),
         email VARCHAR(100),
         jurusan VARCHAR(100),
         gambar VARCHAR(100)
    );
    ```
6. Lihat tabel:
    ```sql
    SHOW TABLES;
    ```
7. Lihat struktur tabel:
    ```sql
    DESCRIBE mahasiswa;
    ```
8. Isi data ke tabel:
    ```sql
    INSERT INTO mahasiswa VALUES 
    ('', 'Fadhila Agil', '2211104006', 'fadhilaagil@gmail.com', 'RPL', 'Gambar.jpg');
    ```
9. Tambahkan data lainnya.
10. Cari data tertentu:
     ```sql
     SELECT * FROM mahasiswa WHERE ... = ...;
     ```
11. Perbarui data:
     ```sql
     UPDATE mahasiswa SET jurusan = 'Teknik Informatika' WHERE id = ...;
     ```
12. Hapus data:
     ```sql
     DELETE FROM mahasiswa WHERE id = ...;
     ```
13. Hapus tabel:
     ```sql
     DROP TABLE mahasiswa;
     ```
14. Hapus database:
     ```sql
     DROP DATABASE phpdasar;
     ```

### 3️⃣ Membuat Database via GUI
1. Buka browser dan akses `localhost/phpmyadmin`.
2. Gunakan antarmuka untuk membuat database dan tabel.

---

✨ **Semoga catatan ini membantu dalam memahami dasar-dasar Database & MySQL!** ✨