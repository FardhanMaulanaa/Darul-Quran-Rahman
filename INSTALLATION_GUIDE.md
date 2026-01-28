# 📚 PANDUAN INSTALASI LENGKAP
## Website Darul Qur'an Rahman - Versi PHP

---

## 🎯 Persiapan Awal

### Software yang Diperlukan:
1. **XAMPP** (Windows) atau **LAMP/MAMP** (Linux/Mac)
   - Download dari: https://www.apachefriends.org/
   - Versi PHP minimal: 7.4

2. **Text Editor** (pilih salah satu):
   - Visual Studio Code (recommended)
   - Sublime Text
   - PHPStorm
   - Notepad++

3. **Browser Modern**:
   - Google Chrome
   - Firefox
   - Edge

---

## 📥 INSTALASI STEP-BY-STEP

### LANGKAH 1: Install XAMPP

1. Download XAMPP dari website resmi
2. Install XAMPP di `C:\xampp` (Windows) atau `/opt/lampp` (Linux)
3. Jalankan XAMPP Control Panel
4. Start **Apache** dan **MySQL**

### LANGKAH 2: Setup Database

#### Opsi A: Menggunakan phpMyAdmin

1. Buka browser, akses: `http://localhost/phpmyadmin`
2. Klik tab **"SQL"**
3. Copy paste isi file `database/database.sql`
4. Klik **"Go"** atau **"Kirim"**
5. Database `darulquran_db` akan otomatis terbuat

#### Opsi B: Menggunakan Command Line

```bash
# Masuk ke MySQL
mysql -u root -p

# Import database
source /path/to/database/database.sql

# atau langsung
mysql -u root -p < database/database.sql
```

### LANGKAH 3: Ekstrak File Website

1. Extract file ZIP website
2. Copy folder `darulquran-website` ke:
   - **Windows**: `C:\xampp\htdocs\`
   - **Linux**: `/opt/lampp/htdocs/`
   - **Mac**: `/Applications/XAMPP/htdocs/`

Hasil akhir struktur folder:
```
C:\xampp\htdocs\darulquran-website\
├── api/
├── assets/
├── config/
├── database/
├── includes/
├── sections/
├── index.php
└── ...
```

### LANGKAH 4: Konfigurasi Database

1. Buka file: `config/config.php`
2. Edit konfigurasi database:

```php
// Sesuaikan dengan setup MySQL Anda
define('DB_HOST', 'localhost');
define('DB_USER', 'root');           // Username MySQL
define('DB_PASS', '');                // Password MySQL (kosong di XAMPP)
define('DB_NAME', 'darulquran_db');
```

3. Save file

### LANGKAH 5: Konfigurasi Gemini AI (Opsional)

Jika ingin mengaktifkan chatbot AI:

1. Dapatkan API Key dari: https://makersuite.google.com/app/apikey
2. Buka file: `assets/js/chat.js`
3. Edit baris:
   ```javascript
   const API_KEY = "PASTE_API_KEY_DISINI";
   ```
4. Save file

### LANGKAH 6: Upload Gambar

Copy folder gambar yang Anda miliki ke:
- `assets/galery/` - untuk gambar galeri
- `assets/logo/` - untuk logo dan ikon bank

Atau gunakan gambar dummy untuk testing.

---

## 🚀 MENJALANKAN WEBSITE

### Akses Website:

1. Pastikan Apache dan MySQL di XAMPP sudah running
2. Buka browser
3. Akses salah satu URL berikut:
   ```
   http://localhost/darulquran-website/
   
   atau
   
   http://127.0.0.1/darulquran-website/
   ```

4. Website akan terbuka dengan tampilan penuh

---

## 🔐 LOGIN ADMIN (Untuk Pengembangan Selanjutnya)

Default credentials:
```
Username: admin
Password: admin123
```

⚠️ **PENTING**: Segera ubah password setelah login pertama kali!

---

## ✅ TESTING FITUR

### Test 1: Hero Slideshow
- Slideshow gambar harus berjalan otomatis setiap 8 detik
- Tombol prev/next harus berfungsi
- Navigation dots harus aktif

### Test 2: Navigation Menu
- Klik menu navigasi, halaman harus smooth scroll
- Di mobile, hamburger menu harus berfungsi

### Test 3: Form Kontak
1. Scroll ke section **Kontak**
2. Isi form dengan data test
3. Klik **"Kirim Pesan"**
4. Harus terbuka WhatsApp Web atau redirect ke app WhatsApp

### Test 4: AI Chatbot
1. Klik tombol chat di kanan bawah
2. Ketik pertanyaan: "Apa itu Darul Qur'an Rahman?"
3. Bot harus merespon (jika API key sudah dikonfigurasi)

### Test 5: Database
1. Buka phpMyAdmin
2. Pilih database `darulquran_db`
3. Cek table `contact_messages` - harus ada data jika form sudah dicoba

---

## 🎨 KUSTOMISASI

### Mengubah Warna Website

Edit file: `assets/css/style.css`

Cari bagian `:root` di awal file:
```css
:root {
    --primary: #1a5f3e;        /* Hijau utama - ubah ini */
    --primary-light: #2d8659;
    --primary-dark: #0f3d27;
    --accent: #d4af37;         /* Emas aksen - ubah ini */
    --accent-light: #f0d98f;
}
```

### Mengubah Informasi Kontak

Edit file: `config/config.php`

```php
define('PHONE', '(021) 7177 1065');
define('WHATSAPP', '6281211117166');
define('ADDRESS', 'Alamat lengkap yayasan');
define('ADMIN_EMAIL', 'email@yayasan.org');
```

### Menambah Program Baru

Edit file: `sections/programs.php`

Tambahkan array baru di variabel `$programs`:
```php
[
    'icon' => 'fa-icon-name',
    'title' => 'Judul Program',
    'description' => 'Deskripsi program'
]
```

Icon reference: https://fontawesome.com/icons

### Mengubah Rekening Bank

Edit file: `config/config.php`

Modifikasi array `$bank_accounts`:
```php
$bank_accounts = [
    [
        'name' => 'Nama Bank',
        'logo' => 'assets/logo/logo-bank.png',
        'account_number' => '1234567890',
        'account_name' => 'Nama Pemilik Rekening'
    ]
];
```

---

## 🐛 TROUBLESHOOTING

### Error: "Database connection failed"

**Solusi:**
1. Cek MySQL sudah running di XAMPP
2. Cek username/password di `config/config.php`
3. Pastikan database `darulquran_db` sudah dibuat

### Error: "404 Not Found"

**Solusi:**
1. Pastikan Apache sudah running
2. Cek path folder: `htdocs/darulquran-website/`
3. Akses dengan URL lengkap: `http://localhost/darulquran-website/`

### Slideshow Tidak Jalan

**Solusi:**
1. Buka Console browser (F12)
2. Cek ada error JavaScript atau tidak
3. Pastikan file `assets/js/main.js` ter-load
4. Cek path gambar di `assets/css/style.css`

### Form Kontak Tidak Tersimpan

**Solusi:**
1. Cek database connection
2. Pastikan table `contact_messages` sudah ada
3. Buka `api/contact.php` dan cek error
4. Enable error display sementara di PHP

### Chat AI Tidak Respon

**Solusi:**
1. Cek API Key Gemini sudah benar
2. Pastikan koneksi internet aktif
3. Buka Console browser, lihat error
4. Test API key di Google AI Studio

### Gambar Tidak Muncul

**Solusi:**
1. Cek path gambar di HTML/CSS
2. Pastikan file gambar ada di folder `assets/`
3. Cek permission folder (chmod 755)
4. Refresh browser dengan Ctrl+F5

---

## 📱 DEPLOYMENT KE HOSTING

### Persiapan:

1. **Pilih Hosting** yang support PHP + MySQL
2. **Export Database** dari localhost:
   - Buka phpMyAdmin
   - Select database `darulquran_db`
   - Klik tab **Export**
   - Download file .sql

### Langkah Upload:

1. **Upload File via FTP/cPanel File Manager**
   - Upload semua file kecuali folder `database/`
   
2. **Import Database**
   - Login ke phpMyAdmin hosting
   - Create database baru
   - Import file .sql yang sudah di-export

3. **Update Konfigurasi**
   - Edit `config/config.php`
   - Ubah DB credentials sesuai hosting
   ```php
   define('DB_HOST', 'localhost');  // atau IP server
   define('DB_USER', 'user_hosting');
   define('DB_PASS', 'password_hosting');
   define('DB_NAME', 'nama_database');
   ```

4. **Setup SSL (HTTPS)**
   - Aktifkan SSL di cPanel
   - Update URL di `config/config.php`
   - Force HTTPS di `.htaccess`

5. **Test Website**
   - Akses: `https://namadomain.com`
   - Test semua fitur
   - Cek form kontak, slideshow, dll

---

## 🔒 KEAMANAN

### Checklist Keamanan:

- [ ] Ubah password admin default
- [ ] Hapus file instalasi/test
- [ ] Set permission folder yang benar
- [ ] Enable HTTPS/SSL
- [ ] Backup database rutin
- [ ] Update PHP ke versi terbaru
- [ ] Protect file config dengan .htaccess
- [ ] Enable error logging, disable display_errors

---

## 📞 BANTUAN & SUPPORT

Jika mengalami kesulitan:

1. **Email**: darulquranrahman@gmail.com
2. **WhatsApp**: +62 812-1111-7166
3. **Dokumentasi**: Baca file README.md

---

## ✨ TIPS & BEST PRACTICES

1. **Backup Rutin**: Backup database dan files setiap minggu
2. **Update Konten**: Update galeri dan berita secara berkala
3. **Monitor Performance**: Gunakan Google Analytics
4. **Optimize Images**: Compress gambar sebelum upload
5. **Test di Multiple Browser**: Chrome, Firefox, Safari, Edge
6. **Mobile Responsive**: Selalu test di mobile device
7. **Security Updates**: Update PHP dan plugins secara rutin

---

**Selamat! Website Anda sudah siap digunakan! 🎉**

---

*Dokumentasi ini dibuat dengan ❤️ untuk Yayasan Darul Qur'an Rahman*
*Last Updated: Januari 2026*
