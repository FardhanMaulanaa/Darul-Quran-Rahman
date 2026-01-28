<?php
$programs = [
    [
        'icon' => 'fa-hand-holding-heart',
        'title' => 'Orang Tua Asuh',
        'description' => 'Program pengasuhan anak yatim dengan pembinaan penuh kasih sayang dan perhatian'
    ],
    [
        'icon' => 'fa-book-quran',
        'title' => 'Tahfidz Al-Qur\'an',
        'description' => 'Program menghafal Al-Qur\'an 30 Juz dengan metode pembelajaran yang efektif'
    ],
    [
        'icon' => 'fa-graduation-cap',
        'title' => 'Pendidikan Formal',
        'description' => 'Pendidikan gratis dari SD, SMP, SMA hingga Perguruan Tinggi'
    ],
    [
        'icon' => 'fa-donate',
        'title' => 'Zakat',
        'description' => 'Penyaluran zakat untuk kesejahteraan anak yatim dan dhuafa'
    ],
    [
        'icon' => 'fa-hands-helping',
        'title' => 'Infaq & Sedekah',
        'description' => 'Program sedekah untuk operasional asrama dan kebutuhan anak-anak'
    ],
    [
        'icon' => 'fa-mosque',
        'title' => 'Wakaf',
        'description' => 'Program wakaf untuk pengembangan sarana dan prasarana pendidikan'
    ],
    [
        'icon' => 'fa-utensils',
        'title' => 'Fidyah',
        'description' => 'Penerimaan fidyah untuk kebutuhan makan dan gizi anak-anak asrama'
    ],
    [
        'icon' => 'fa-sun',
        'title' => 'Sedekah Shubuh',
        'description' => 'Program sedekah rutin di waktu shubuh untuk keberkahan rezeki'
    ]
];
?>

<section class="programs-section" id="programs">
    <div class="section-title fade-in">
        <h2>Program Kami</h2>
        <p>Berbagai program untuk mendukung kesejahteraan dan pendidikan anak yatim</p>
    </div>
    <div class="programs-grid">
        <?php foreach ($programs as $program): ?>
        <div class="program-card fade-in">
            <i class="fas <?php echo $program['icon']; ?>"></i>
            <h3><?php echo $program['title']; ?></h3>
            <p><?php echo $program['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
