<?php
require_once 'config/config.php';
?>

<section class="contact-section" id="contact">
    <div class="section-title fade-in">
        <h2>Hubungi Kami</h2>
        <p>Kami siap menjawab pertanyaan dan melayani kebutuhan Anda</p>
    </div>
    <div class="contact-container">
        <div class="contact-info fade-in">
            <h3>Informasi Kontak</h3>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <strong>Alamat</strong>
                    <p><?php echo ADDRESS; ?></p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <div>
                    <strong>Telepon</strong>
                    <p><?php echo PHONE; ?></p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fas fa-mobile-alt"></i>
                <div>
                    <strong>WhatsApp</strong>
                    <p>0<?php echo substr(WHATSAPP, 2); ?></p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <strong>Email</strong>
                    <p><?php echo ADMIN_EMAIL; ?></p>
                </div>
            </div>
            <div class="social-links">
                <?php foreach ($social_media as $platform => $url): ?>
                <a href="<?php echo $url; ?>" target="_blank">
                    <i class="fab fa-<?php echo $platform; ?>"></i>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="contact-form fade-in">
            <h3>Kirim Pesan</h3>
            <form id="contactForm">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="form-group">
                    <label>Subjek</label>
                    <input type="text" name="subject" id="subject" placeholder="Subjek pesan" required>
                </div>
                <div class="form-group">
                    <label>Pesan</label>
                    <textarea name="message" id="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>
