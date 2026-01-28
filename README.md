# Website Darul Qur'an Rahman - PHP Version

Website resmi Yayasan Darul Qur'an Rahman (Asrama Yatim & Dhuafa) yang dibangun dengan PHP, MySQL, JavaScript, dan CSS.

## 📋 Fitur Utama

- **Hero Slideshow**: Slideshow gambar dengan transisi smooth dan kontrol navigasi
- **Informasi Lengkap**: Tentang yayasan, visi-misi, program-program
- **Galeri Foto**: Dokumentasi kegiatan dengan hover effect
- **Donasi**: Informasi rekening bank dan QRIS
- **Kontak Form**: Form kontak yang tersimpan di database
- **AI Chatbot**: Integrasi dengan Gemini AI untuk menjawab pertanyaan pengunjung
- **Responsive Design**: Tampilan optimal di semua perangkat
- **WhatsApp Integration**: Tombol floating WhatsApp dan form kontak ke WhatsApp

## 🚀 Teknologi yang Digunakan

- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+ / MariaDB
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **AI**: Google Gemini API
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Inter, Montserrat, Scheherazade New)

## 📁 Struktur Folder

```
darulquran-website/
├── api/
│   └── contact.php              # API endpoint untuk form kontak
├── assets/
│   ├── css/
│   │   └── style.css           # Stylesheet utama
│   ├── js/
│   │   ├── main.js             # JavaScript utama
│   │   └── chat.js             # Gemini AI chatbot
│   ├── galery/                 # Folder untuk gambar galeri
│   └── logo/                   # Folder untuk logo dan ikon
├── config/
│   └── config.php              # Konfigurasi database dan konstanta
├── database/
│   └── database.sql            # Schema database
├── includes/
│   ├── header.php              # Header template
│   └── footer.php              # Footer template
├── sections/
│   ├── hadith.php              # Section hadits
│   ├── about.php               # Section tentang kami
│   ├── vision-mission.php      # Section visi misi
│   ├── programs.php            # Section program
│   ├── gallery.php             # Section galeri
│   ├── donation.php            # Section donasi
│   └── contact.php             # Section kontak
├── index.php                   # Halaman utama
└── README.md                   # Dokumentasi
```

## 🔧 Instalasi

### 1. Requirements
- PHP 7.4 atau lebih tinggi
- MySQL 5.7+ atau MariaDB
- Web Server (Apache/Nginx)
- Composer (opsional)

### 2. Setup Database

```bash
# Login ke MySQL
mysql -u root -p

# Import database
mysql -u root -p < database/database.sql
```

Atau melalui phpMyAdmin:
1. Buat database baru bernama `darulquran_db`
2. Import file `database/database.sql`

### 3. Konfigurasi

Edit file `config/config.php`:

```php
// Sesuaikan dengan konfigurasi database Anda
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password_anda');
define('DB_NAME', 'darulquran_db');

// Sesuaikan Gemini API Key (opsional)
define('GEMINI_API_KEY', 'YOUR_GEMINI_API_KEY');
```

### 4. Upload File

Upload semua file ke root directory web server Anda (misalnya: `htdocs`, `public_html`, atau `www`).

### 5. Set Permissions

```bash
chmod -R 755 assets/
chmod -R 755 uploads/  # Jika ada folder uploads
```

### 6. Akses Website

Buka browser dan akses:
```
http://localhost/darulquran-website/
```

## 🔑 Default Login Admin

**Username**: admin  
**Password**: admin123

⚠️ **Penting**: Segera ubah password default setelah login pertama kali!

## 📝 Konfigurasi Gemini AI

1. Dapatkan API Key dari [Google AI Studio](https://makersuite.google.com/app/apikey)
2. Edit file `assets/js/chat.js`:
   ```javascript
   const API_KEY = "YOUR_GEMINI_API_KEY_HERE";
   ```
3. Atau edit di `config/config.php`:
   ```php
   define('GEMINI_API_KEY', 'YOUR_GEMINI_API_KEY_HERE');
   ```

## 🎨 Kustomisasi

### Mengubah Warna Theme

Edit variabel CSS di `assets/css/style.css`:

```css
:root {
    --primary: #1a5f3e;        /* Warna hijau utama */
    --primary-light: #2d8659;  /* Hijau terang */
    --primary-dark: #0f3d27;   /* Hijau gelap */
    --accent: #d4af37;         /* Warna emas aksen */
    --accent-light: #f0d98f;   /* Emas terang */
}
```

### Menambah/Mengubah Program

Edit file `sections/programs.php` untuk menambah atau mengubah daftar program.

### Menambah Gambar Galeri

1. Upload gambar ke folder `assets/galery/`
2. Edit file `sections/gallery.php` dan tambahkan item baru:

```php
[
    'image' => 'assets/galery/nama_file.png',
    'title' => 'Judul Gambar'
]
```

## 📧 Konfigurasi Email

Untuk mengaktifkan notifikasi email dari form kontak, edit file `api/contact.php`:

1. Uncomment baris:
   ```php
   mail($to, $email_subject, $email_body, $headers);
   ```

2. Pastikan PHP mail() function sudah dikonfigurasi di server Anda.

## 🔒 Keamanan

- Semua input user di-sanitize menggunakan `htmlspecialchars()`
- Password admin di-hash menggunakan bcrypt
- Prepared statements untuk query database (mencegah SQL injection)
- CORS headers sudah dikonfigurasi
- Session management untuk admin area

## 📱 Responsive Breakpoints

- Desktop: > 768px
- Tablet: 768px
- Mobile: < 768px

## 🐛 Troubleshooting

### Database Connection Error
- Periksa konfigurasi di `config/config.php`
- Pastikan MySQL service berjalan
- Cek username dan password database

### Slideshow Tidak Berfungsi
- Pastikan file JavaScript di-load dengan benar
- Cek console browser untuk error
- Pastikan path gambar di CSS benar

### Chat AI Tidak Merespon
- Periksa API Key Gemini sudah benar
- Cek koneksi internet
- Lihat console browser untuk error

### Form Kontak Tidak Tersimpan
- Periksa koneksi database
- Pastikan table `contact_messages` sudah dibuat
- Cek error log PHP

## 📊 Database Tables

### contact_messages
Menyimpan pesan dari form kontak

### donations
Menyimpan data donasi (untuk pengembangan fitur donasi)

### gallery
Menyimpan data galeri foto

### programs
Menyimpan data program yayasan

### admin_users
Menyimpan data admin untuk login

### newsletter_subscribers
Menyimpan subscriber newsletter (untuk fitur newsletter)

### chat_history
Menyimpan history chat AI (opsional)

## 🚀 Pengembangan Selanjutnya

- [ ] Admin panel untuk manage konten
- [ ] Sistem donasi online terintegrasi payment gateway
- [ ] Newsletter system
- [ ] Blog/artikel section
- [ ] Multi-language support
- [ ] PWA (Progressive Web App)
- [ ] Advanced analytics

## 📞 Support

Jika ada pertanyaan atau masalah, silakan hubungi:
- Email: darulquranrahman@gmail.com
- WhatsApp: +62 812-1111-7166
- Website: [darulquranrahman.org](http://darulquranrahman.org)

## 📄 License

© 2026 Darul Qur'an Rahman. All rights reserved.

---

**Dibuat dengan ❤️ untuk Yayasan Darul Qur'an Rahman**
