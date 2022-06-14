# Penulisan Ilmiah

## _Aplikasi Informasi dan Pendaftaran Webinar dengan php native_

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Struktur Folder

```
📦aplikasi-webinar
 ┣ 📂 admin - Halaman khusus admin + login page
 ┃ ┣ 📂assets
 ┃ ┣ 📂partials
 ┃ ┗ 📜users.js
 ┣ 📂prisma - Prisma files (migrations, seeds, schema, model)
 ┃ ┣ 📂migrations
 ┃ ┃ ┣ 📂20220509072107_init
 ┃ ┃ ┃ ┗ 📜migration.sql
 ┃ ┃ ┗ 📜migration_lock.toml
 ┃ ┣ 📜schema.prisma
 ┃ ┗ 📜seed.js
 ┣ 📂routes - Routes for the API
 ┃ ┗ 📜users.js
 ┣ 📜.env.example
 ┣ 📜.gitignore
 ┣ 📜index.js - Server & Main files
 ┣ 📜README.md
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
