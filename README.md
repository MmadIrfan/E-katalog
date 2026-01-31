# E-Katalog

Aplikasi E-Katalog berbasis web menggunakan Laravel untuk mengelola dan menampilkan katalog produk secara digital.

## 📋 Deskripsi

E-Katalog adalah sistem manajemen katalog produk yang komprehensif dengan fitur lengkap untuk menampilkan dan mengelola produk secara online. Aplikasi ini memiliki dua sisi utama: halaman publik untuk pengunjung dan dashboard admin untuk pengelolaan konten. Dibangun dengan Laravel dan dilengkapi dengan interface yang modern menggunakan Tailwind CSS.

## 🚀 Fitur

### 🔐 Dashboard Admin
- **Manajemen Produk** - CRUD produk dengan kategori dan gambar
- **Manajemen Testimonial** - Kelola review dan testimoni pelanggan
- **Manajemen Blog** - Buat dan publikasikan artikel blog
- **Manajemen About** - Update informasi tentang perusahaan
- **Manajemen Contact** - Lihat dan balas pesan dari pengunjung
- **Live Chat Management** - Monitor dan respond chat dari pengunjung
- **Dashboard Analytics** - Statistik dan laporan

### 🌐 Halaman Publik
- **Home** 
  - Popular Section - Produk yang paling diminati
  - Best Seller Section - Produk terlaris
  - Hero section dan call-to-action
- **Products** - Katalog lengkap dengan filter kategori
- **About Us** - Informasi lengkap tentang perusahaan
- **Blog** - Artikel dan konten informatif
- **Contact Us** - Form kontak dan informasi kontak
- **Live Chat** - Fitur chat real-time dengan admin

### ✨ Fitur Umum
- Responsive design untuk semua device
- SEO friendly
- Fast loading dengan optimasi assets
- User authentication & authorization

## 📸 Screenshot

### Halaman Publik
*(Tambahkan screenshot halaman home, products, blog, dll)*

### Dashboard Admin
*(Tambahkan screenshot dashboard admin, manage products, dll)*

## 🛠️ Teknologi yang Digunakan

- **Framework**: Laravel 9.x/10.x
- **Frontend**: 
  - Tailwind CSS
  - Blade Templates
  - JavaScript/Alpine.js
- **Database**: MySQL
- **Build Tool**: Vite
- **Live Chat**: WebSocket/Pusher atau Laravel Echo (sesuaikan)
- **Rich Text Editor**: TinyMCE/CKEditor (untuk blog)

## 📦 Persyaratan Sistem

- PHP >= 8.0
- Composer
- Node.js & NPM
- MySQL/MariaDB
- Web Server (Apache/Nginx)

## 🔧 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/MmadIrfan/E-katalog.git
cd E-katalog
```

### 2. Install Dependencies PHP

```bash
composer install
```

### 3. Install Dependencies JavaScript

```bash
npm install
```

### 4. Konfigurasi Environment

```bash
cp .env.example .env
```

Edit file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ekatalog
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Jalankan Migrasi Database

```bash
php artisan migrate
```

### 7. Jalankan Seeder (Opsional)

Jika terdapat data awal:

```bash
php artisan db:seed
```

### 8. Buat Storage Link

```bash
php artisan storage:link
```

### 9. Setup Live Chat (Opsional)

Jika menggunakan WebSocket untuk live chat:

```bash
# Install Laravel WebSockets (contoh)
composer require beyondcode/laravel-websockets

# Publish config
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider"

# Migrate
php artisan migrate
```

### 10. Build Assets

**Untuk Development:**
```bash
npm run dev
```

**Untuk Production:**
```bash
npm run build
```

### 11. Jalankan Aplikasi

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

**Untuk Live Chat (jika menggunakan WebSocket):**
```bash
# Terminal terpisah
php artisan websockets:serve
```

## 🔐 Akun Default (Admin)

Setelah menjalankan seeder, gunakan akun berikut untuk login ke dashboard admin:

```
URL Admin: http://localhost:8000/admin
Email: admin@ekatalog.com
Password: password
```

**Catatan:** Segera ubah password default setelah login pertama kali untuk keamanan.

*(Sesuaikan dengan konfigurasi seeder Anda)*

## 📁 Struktur Folder

```
E-katalog/
├── app/                    # Logic aplikasi
│   ├── Http/
│   │   ├── Controllers/   # Controllers untuk admin & public
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/            # Model: Product, Blog, Testimonial, etc.
│   └── Services/          # Business logic
├── config/                # File konfigurasi
├── database/              # Database
│   ├── migrations/        # Schema database
│   └── seeders/           # Data awal
├── public/                # Assets publik
│   ├── css/
│   ├── js/
│   └── images/           # Uploaded images
├── resources/             # Views dan assets
│   ├── css/              # Tailwind CSS
│   ├── js/               # JavaScript files
│   └── views/
│       ├── admin/        # Admin dashboard views
│       ├── public/       # Public pages views
│       └── layouts/      # Layout templates
├── routes/                # Routing
│   ├── web.php           # Web routes
│   └── api.php           # API routes (jika ada)
└── storage/               # File storage
    ├── app/
    │   └── public/       # Public uploads
    └── logs/
```

## 🎨 Penggunaan

### Untuk Admin

#### Dashboard
1. Login ke dashboard admin di `/admin` atau `/login`
2. Lihat statistik dan overview aplikasi

#### Mengelola Produk
1. Navigasi ke menu "Products"
2. Klik "Tambah Produk" untuk produk baru
3. Isi form: nama, deskripsi, harga, kategori
4. Upload gambar produk
5. Set sebagai "Popular" atau "Best Seller" jika perlu
6. Simpan

#### Mengelola Testimonial
1. Buka menu "Testimonials"
2. Tambah testimoni baru atau edit yang ada
3. Isi nama pelanggan, foto, dan review
4. Set status aktif/tidak aktif
5. Simpan

#### Mengelola Blog
1. Akses menu "Blogs"
2. Klik "Buat Artikel Baru"
3. Tulis judul, konten, dan upload gambar featured
4. Set kategori dan tags
5. Publish atau simpan sebagai draft

#### Mengelola About Us
1. Buka menu "About"
2. Edit konten tentang perusahaan
3. Upload gambar dan update informasi
4. Simpan perubahan

#### Mengelola Contact
1. Menu "Contact" untuk melihat pesan masuk
2. Baca dan balas pesan dari pengunjung
3. Set status pesan (dibaca/belum)

#### Live Chat Management
1. Buka menu "Chats"
2. Lihat daftar chat aktif
3. Klik untuk membuka dan membalas chat
4. Tutup chat yang sudah selesai

### Untuk Pengunjung

#### Menjelajah Produk
1. Kunjungi halaman "Products"
2. Gunakan filter kategori atau search
3. Klik produk untuk detail lengkap

#### Menghubungi
1. Buka halaman "Contact Us"
2. Isi form dengan nama, email, dan pesan
3. Submit form
4. Atau gunakan Live Chat untuk respons cepat

#### Membaca Blog
1. Navigasi ke halaman "Blog"
2. Browse artikel yang tersedia
3. Klik untuk membaca artikel lengkap

## 🐛 Troubleshooting

### Error 500 - Internal Server Error

```bash
# Clear cache
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Set permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### Assets tidak muncul

```bash
# Rebuild assets
npm run build

# Pastikan storage link sudah dibuat
php artisan storage:link
```

### Database connection error

- Pastikan MySQL/MariaDB sudah running
- Cek konfigurasi di file `.env`
- Pastikan database sudah dibuat

### Live Chat tidak berfungsi

```bash
# Pastikan WebSocket server running
php artisan websockets:serve

# Clear config
php artisan config:clear

# Cek di browser console untuk error JavaScript
```

## ❓ FAQ

**Q: Bagaimana cara mengubah logo dan branding?**  
A: Upload logo baru di dashboard admin > Settings, atau edit langsung di `public/images/`

**Q: Bagaimana cara menambah kategori produk?**  
A: Login ke admin dashboard, menu Products > Categories > Add New

**Q: Apakah support multiple bahasa?**  
A: Saat ini belum support multi-language, bisa dikembangkan menggunakan Laravel localization

**Q: Bagaimana cara backup database?**  
A: Gunakan command `php artisan backup:run` atau export manual via phpMyAdmin

**Q: Live chat realtime atau tidak?**  
A: Ya, menggunakan WebSocket untuk komunikasi realtime antara admin dan pengunjung

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Menambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## 📝 Lisensi

Project ini menggunakan lisensi MIT. Lihat file `LICENSE` untuk detail.

## 👨‍💻 Developer

**Muhammad Irfan**
- GitHub: [@MmadIrfan](https://github.com/MmadIrfan)

## 📞 Kontak

Jika ada pertanyaan atau saran, silakan buat issue di repository ini atau hubungi developer.

---

⭐ Jangan lupa beri star jika project ini membantu!
