# Penulisan Ilmiah

## _Aplikasi Informasi dan Pendaftaran Webinar dengan php native_

Struktur Project

```
📦aplikasi-webinar
 ┣ 📂 admin - Halaman khusus admin + login page
 ┃ ┣ 📂assets (admin assets)
 ┃ ┣ 📂partials (admin components)
 ┃ ┃ ┣ 📜footer.php
 ┃ ┃ ┣ 📜header.php
 ┃ ┃ ┣ 📜navbar.php
 ┃ ┃ ┗ 📜sidebar.php
 ┃ ┣ 📜dashboard.php
 ┃ ┣ 📜index.php
 ┃ ┣ 📜registrants.php
 ┃ ┣ 📜tambahwebinar.php
 ┃ ┗ 📜ubahwebinar.php
 ┣ 📂assets (main assets)
 ┃ ┣ 📂css
 ┃ ┗ 📂img
 ┣ 📂db
 ┃ ┗ 🗃️webinar.sql
 ┣ 📂functions
 ┃ ┣ 📜export.php
 ┃ ┣ 📜function.php (fungsi buka tutup webinar)
 ┃ ┣ 📜hapuswebinar.php
 ┃ ┣ 📜index.php - 404 page
 ┃ ┣ 📜keluar.php (logout admin)
 ┃ ┣ 📜regist.php (functions register for user)
 ┃ ┣ 📜tambahwebinar.php
 ┃ ┗ 📜ubahwebinar.php
 ┣ 📂include (main components)
 ┃ ┣ 📜footer.php
 ┃ ┗ 📜header.php
 ┣ 📜.gitignore
 ┣ 📜connection.php - database connection file
 ┣ 📜index.php
 ┣ 📜README.md
 ┣ 📜regist.php
 ┣ 📜registered.php
 ┣ 📜webinar.php
 ┗ 📜webinars.php
```

Aplikasi ini dibuat sebagai tugas penulisan ilmiah saya dengan visual studio code php mysql bootstrap dan beberapa library penunjang lainnya.

- Landing Page
- Form Regist
- ✨Dashboard Admin✨

## Features

- CRUD WEBINAR Event (tambah hapus ubah acara)
- Membuka pendaftaran dan menutup pendaftaran tsb
- mendaftar sebagai peserta
- menampilkan data peserta
- Export documents as Markdown, HTML and PDF (inprogress!)

## Installation

```sh
git clone https://github.com/hansevant/aplikasi-webinar.git
```

For production environments...

```sh
import the database
```
