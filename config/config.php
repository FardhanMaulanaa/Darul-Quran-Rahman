<?php
// Konfigurasi Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'darulquran_db');

// Konfigurasi Website
define('SITE_NAME', 'Darul Qur\'an Rahman');
define('SITE_TAGLINE', 'Asrama Yatim & Dhuafa');
define('SITE_URL', 'http://localhost');
define('ADMIN_EMAIL', 'darulquranrahman@gmail.com');

// Konfigurasi Kontak
define('PHONE', '(021) 7177 1065');
define('WHATSAPP', '6281211117166');
define('ADDRESS', 'Jl. Pondok Jaya IX No.26B, Pela Mampang, Jakarta Selatan 12720');

// Konfigurasi Rekening Bank
$bank_accounts = [
    [
        'name' => 'Bank Syariah Indonesia',
        'logo' => 'assets/logo/logo-BSI.png',
        'account_number' => '78 2228 2282',
        'account_name' => 'Yayasan Darul Qur\'an Rahman'
    ],
    [
        'name' => 'Bank BCA',
        'logo' => 'assets/logo/logo-BCA.png',
        'account_number' => '5520900057',
        'account_name' => 'Yayasan Darul Qur\'an Rahman'
    ],
    [
        'name' => 'Bank Mandiri',
        'logo' => 'assets/logo/logo-MANDIRI.png',
        'account_number' => '102 0010757 414',
        'account_name' => 'Yayasan Darul Qur\'an Rahman'
    ],
    [
        'name' => 'Bank BRI',
        'logo' => 'assets/logo/logo-BRI.png',
        'account_number' => '034101002521309',
        'account_name' => 'Yayasan Darul Qur\'an Rahman'
    ]
];

// Konfigurasi Social Media
$social_media = [
    'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=darulquranrahman.org/',
    'instagram' => 'https://www.instagram.com/pondokyatimjaksel/',
    'twitter' => 'https://x.com/intent/tweet?url=darulquranrahman.org/',
    'youtube' => 'https://www.youtube.com/@AsramaYatimDarulQuranRahman'
];

// Konfigurasi Gemini API
define('GEMINI_API_KEY', 'AIzaSyCECDXdIayeHOVPNrIFDn9eat-OQDXckxc');

// Koneksi Database
function getDBConnection() {
    try {
        $conn = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
            DB_USER,
            DB_PASS
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        error_log("Connection failed: " . $e->getMessage());
        return null;
    }
}

// Session Start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
