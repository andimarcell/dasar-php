# 🐘 PHP Learning Journey - Dasar hingga Studi Kasus

Selamat datang di repositori jurnal belajar pemrograman **PHP (Hypertext Preprocessor)** saya! Repositori ini dibuat sebagai wadah untuk mencatat progres belajar, menyimpan kode latihan, serta mendokumentasikan implementasi studi kasus nyata.

Kurikulum belajar ini mencakup pemahaman sintaksis dasar, struktur kontrol, penanganan data formulir (*form handling*), manipulasi file, hingga ditutup dengan pembuatan aplikasi **CRUD ToDo List** berbasis penyimpanan file JSON.

---

## 🗺️ Alur Belajar & Progres (Roadmap)

Gunakan daftar centang di bawah ini untuk memantau progres materi yang telah dipelajari dan diselesaikan (*tick off*):

### 📌 Modul 1: Pengenalan & Sintaksis Dasar
- [ ] Apa itu PHP
- [ ] Instalasi XAMPP dan Laragon di Windows
- [ ] Hello World & Sintaksis Dasar
- [ ] Komentar di PHP
- [ ] Variabel & Konstanta
- [ ] Mix HTML & PHP (Templating Sederhana)
- [ ] Tipe Data: Integer dan Float
- [ ] Manipulasi String
- [ ] Tipe Data: Null dan Boolean

### 📌 Modul 2: Struktur Data Array
- [ ] Konsep Array Dasar
- [ ] Array Asosiatif (Key-Value)
- [ ] Array Multidimensi
- [ ] Fungsi dan Operasi Array Bawaan
- [ ] Date Time Sederhana

### 📌 Modul 3: Penanganan Formulir (Form Handling) & Validasi
- [ ] Membuat Form HTML
- [ ] Query String (Global Variable `$_GET`)
- [ ] Global Variable `$_POST`
- [ ] Parsing Array `$_GET` dan `$_POST`
- [ ] Sistem Upload File ke Server
- [ ] Validasi Input Formulir (Security Check)

### 📌 Modul 4: Struktur Kontrol & Perulangan (Control Flow)
- [ ] Percabangan: `If-Else`
- [ ] Percabangan: `If-Elseif-Else`
- [ ] Percabangan: `If` Bersarang
- [ ] Percabangan: `Switch Case`
- [ ] Pengecekan Kondisi Ganda (Logical Operators)
- [ ] Ternary Operator
- [ ] Perulangan: `For` Loop
- [ ] Perulangan: `For` pada Array
- [ ] Perulangan: `While` Loop
- [ ] Perulangan: `Foreach` (Array Pointer)
- [ ] Kendali Perulangan: `Break` & `Continue`
- [ ] Implementasi: Menampilkan Data Array ke Tabel HTML

### 📌 Modul 5: Fungsi (Function) & Modularisasi Kode
- [ ] Membuat Fungsi dan Parameter
- [ ] Cakupan Variabel (Scope Variable)
- [ ] Mengembalikan Nilai (`return` value)
- [ ] Parameter Referensi (Passing by Reference)
- [ ] Modularisasi Kode: `Include` dan `Require`

### 📌 Modul 6: Manipulasi File (File System & JSON)
- [ ] Menulis dan Membaca File Lokal
- [ ] Menyimpan File Dalam Format Serialize dan JSON

### 🏆 Modul 7: Studi Kasus Akhir — Aplikasi ToDo List (Tanpa Database)
- [ ] Membuat Template UI - Studi Kasus Aplikasi ToDo List
- [ ] Menambahkan Data - Studi Kasus Aplikasi ToDo List
- [ ] Menampilkan Data - Studi Kasus Aplikasi ToDo List
- [ ] Update Data - Studi Kasus Aplikasi ToDo List
- [ ] Hapus Data - Studi Kasus Aplikasi ToDo List

---

## 🛠️ Lingkungan Pengembangan (Development Environment)

*   **Web Server:** Laragon / XAMPP (Apache)
*   **PHP Version:** PHP 8.x (Terbaru)
*   **Editor:** Visual Studio Code

---

## 🚀 Cara Menjalankan Kode Latihan Lokal

1.  Pastikan Web Server (Laragon atau XAMPP) kamu sudah berjalan (*Active*).
2.  Kloning repositori ini ke dalam folder root server kamu (`htdocs` untuk XAMPP, atau `www` untuk Laragon):
    ```bash
    git clone https://github.com/andimarcell/nama-repo-php-kamu.git
    ```
3.  Buka browser lalu akses melalui alamat:
    -   `http://localhost/nama-repo-php-kamu/`