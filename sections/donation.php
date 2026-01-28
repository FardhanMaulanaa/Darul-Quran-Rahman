<?php
require_once 'config/config.php';
?>

<section class="donation-section" id="donation">
    <div class="donation-container">
        <h2 class="fade-in">Salurkan Donasi Anda</h2>
        <p class="fade-in">Bantu wujudkan cita-cita anak-anak yatim dhuafa penghafal Qur'an. Setiap donasi Anda akan menjadi amal jariyah yang pahalanya mengalir hingga hari kiamat.</p>

        <div class="bank-accounts">
            <?php foreach ($bank_accounts as $bank): ?>
            <div class="bank-card fade-in">
                <h4>
                    <img src="<?php echo $bank['logo']; ?>" alt="<?php echo $bank['name']; ?>" style="width: 40px; height: 40px; margin-right: 10px;">
                    <?php echo $bank['name']; ?>
                </h4>
                <div class="account-number"><?php echo $bank['account_number']; ?></div>
                <p class="account-name">a.n. <?php echo $bank['account_name']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="qris-section fade-in">
            <h4>Atau Scan QRIS</h4>
            <div style="background: white; padding: 2rem; border-radius: 10px; display: inline-block;">
                <img src="assets/logo/QR.png" alt="QRIS Code" style="width: 250px; height: 250px;">
            </div>
        </div>
    </div>
</section>
