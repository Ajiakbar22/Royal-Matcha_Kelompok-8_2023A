# 📡 Royal Matcha REST API

Welcome to the official **Royal Matcha REST API** — a modern web service built with **Laravel 10** for managing product data, user authentication, and order transactions.

---

## 📑 API Overview

Royal Matcha API menyediakan endpoint untuk:
- 📦 Manajemen Produk (CRUD)
- 👤 Autentikasi User (Login, Register, Logout)
- 🛒 Pemesanan Produk
- 📊 Dashboard Admin (protected routes)

---

## 🚀 Base URL
http://127.0.0.1:8000/api


---

## 📖 API Endpoints

### 📝 Auth

| Method | Endpoint       | Deskripsi       |
|:--------|:----------------|:----------------|
| POST   | /register        | Register user baru |
| POST   | /login           | Login user & dapatkan token |
| POST   | /logout          | Logout & invalidate token |

---

### 📦 Produk

| Method | Endpoint       | Deskripsi       |
|:--------|:----------------|:----------------|
| GET    | /produk          | Ambil semua produk |
| POST   | /produk          | Tambah produk baru |
| GET    | /produk/{id}     | Detail produk berdasarkan ID |
| PUT    | /produk/{id}     | Update data produk |
| DELETE | /produk/{id}     | Hapus produk |

---

### 🛒 Pemesanan

| Method | Endpoint       | Deskripsi       |
|:--------|:----------------|:----------------|
| GET    | /pesanan         | Ambil semua pesanan |
| POST   | /pesanan         | Buat pesanan baru |
| GET    | /pesanan/{id}    | Detail pesanan |
| PUT    | /pesanan/{id}    | Update status pesanan |
| DELETE | /pesanan/{id}    | Hapus pesanan |

---

## 👥 Anggota Kelompok 8

| Nama                        | NIM           |
|:---------------------------|:--------------|
| Dandy Satriawan Wicaksono   | 23091397007    |
| Ramadhan Hilmy Malik        | 23091397009    |
| Aji Kurnia Akbar            | 23091397029    |

---

## 📦 Install & Run

```bash
git clone https://github.com/Ajiakbar22/Royal-Matcha-API.git
cd Royal-Matcha-API
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
