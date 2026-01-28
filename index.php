<?php
// Konfigurasi dasar
define('SITE_TITLE', 'Darul Qur\'an Rahman - Asrama Yatim & Dhuafa');
define('SITE_URL', 'http://localhost');

// Include header
include 'includes/header.php';
?>

<!-- Hero Section with Smooth Slideshow -->
<section class="hero" id="home">
    <div class="hero-slideshow" id="heroSlideshow">
        <div class="hero-slide active"></div>
        <div class="hero-slide"></div>
        <div class="hero-slide"></div>
        <div class="hero-slide"></div>
        <div class="hero-slide"></div>
        <div class="hero-slide"></div>
        <div class="hero-slide"></div>
    </div>

    <!-- Hero Controls -->
    <div class="hero-control prev" id="heroPrev">
        <i class="fas fa-chevron-left"></i>
    </div>
    <div class="hero-control next" id="heroNext">
        <i class="fas fa-chevron-right"></i>
    </div>

    <!-- Hero Navigation Dots -->
    <div class="hero-nav" id="heroNav"></div>

    <div class="hero-content">
        <h1>Darul Qur'an Rahman</h1>
        <p class="subtitle">Asrama Yatim & Dhuafa</p>
        <p class="location"><i class="fas fa-map-marker-alt"></i> Jl. Pondok Jaya IX No.26B, Pela Mampang, Jakarta Selatan</p>
        <div class="cta-buttons">
            <a href="#donation" class="btn btn-primary">Donasi Sekarang</a>
            <a href="#about" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
        </div>
    </div>
</section>

<!-- Hadith Section -->
<?php include 'sections/hadith.php'; ?>

<!-- About Section -->
<?php include 'sections/about.php'; ?>

<!-- Vision Mission Section -->
<?php include 'sections/vision-mission.php'; ?>

<!-- Programs Section -->
<?php include 'sections/programs.php'; ?>

<!-- Gallery Section -->
<?php include 'sections/gallery.php'; ?>

<!-- Donation Section -->
<?php include 'sections/donation.php'; ?>

<!-- Contact Section -->
<?php include 'sections/contact.php'; ?>

<?php
// Include footer
include 'includes/footer.php';
?>
