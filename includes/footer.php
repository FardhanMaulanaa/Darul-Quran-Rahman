    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php echo SITE_NAME; ?></h3>
                <p>"Orang yang memelihara anak yatim di kalangan umat muslimin, memberikannya makan dan minum, pasti akan Allah masukkan ke dalam surga, kecuali ia melakukan dosa yang tidak bisa diampuni."</p>
            </div>
            <div class="footer-section">
                <h3>Link Cepat</h3>
                <p><a href="#about">Tentang Kami</a></p>
                <p><a href="#programs">Program</a></p>
                <p><a href="#gallery">Galeri</a></p>
                <p><a href="#donation">Donasi</a></p>
                <p><a href="#contact">Kontak</a></p>
            </div>
            <div class="footer-section">
                <h3>Layanan Kami</h3>
                <p>Acara Keagamaan</p>
                <p>Tasyakuran</p>
                <p>Santunan</p>
                <p>Marawis/Hadroh</p>
                <p>Buka Puasa Bersama</p>
            </div>
            <div class="footer-section">
                <h3>Jam Operasional</h3>
                <p>Senin - Jumat: 08:00 - 17:00</p>
                <p>Sabtu: 08:00 - 14:00</p>
                <p>Minggu: Libur</p>
                <p style="margin-top: 1rem;"><strong>Kunjungan:</strong> Dengan perjanjian</p>
            </div>
            <div class="footer-section">
                <h3>Lokasi Kami</h3>
                <div class="map-section">
                    <h3>Peta Lokasi</h3>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1218.748934760381!2d106.82267747819425!3d-6.250786301262314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1c59e82b371%3A0x657573b7d6c2782d!2sAsrama%20Yatim%20Dhuafa%20Darul%20Qur&#39;an%20Rahman!5e1!3m2!1sid!2sid!4v1769494415947!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/<?php echo WHATSAPP; ?>" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scroll to Top Button -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Chat Toggle Button -->
    <div class="chat-toggle-btn" id="chatToggleBtn" onclick="toggleChat()">
        <i class="fas fa-comments"></i>
    </div>

    <!-- Gemini Chat Container -->
    <div id="gemini-chat-container" style="position: fixed; bottom: 20px; right: 20px; width: 350px; font-family: sans-serif; z-index: 10000; box-shadow: 0 5px 25px rgba(0,0,0,0.2); border-radius: 10px; overflow: hidden; display: none; flex-direction: column; background: white;">
        <div style="background: #1a5d1a; color: white; padding: 15px; font-weight: bold; display: flex; justify-content: space-between; align-items: center;">
            <span>Tanya Darul Qur'an (AI)</span>
            <button onclick="toggleChat()" style="background:none; border:none; color:white; cursor:pointer; font-size:20px;">×</button>
        </div>
        <div id="chat-window" style="height: 300px; overflow-y: auto; padding: 15px; display: flex; flex-direction: column; gap: 10px; background: #f9f9f9;">
            <div style="background: #e1f5fe; padding: 10px; border-radius: 10px; align-self: flex-start; font-size: 14px;">
                Assalamu'alaikum! Ada yang bisa saya bantu seputar yayasan?
            </div>
        </div>
        <div style="padding: 10px; border-top: 1px solid #eee; display: flex;">
            <input type="text" id="user-input" placeholder="Ketik pesan..." style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 5px; outline: none;">
            <button onclick="kirimPesan()" style="margin-left: 5px; background: #1a5d1a; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">Kirim</button>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/chat.js"></script>
</body>
</html>
