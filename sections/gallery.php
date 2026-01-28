<?php
$gallery_items = [
    [
        'image' => 'assets/galery/tasmi\'05Juz.png',
        'title' => 'Kegiatan Tahfidz'
    ],
    [
        'image' => 'assets/galery/tasmi\'juz10.png',
        'title' => 'Kegiatan Tahfidz'
    ],
    [
        'image' => 'assets/galery/MembacaQur\'an.png',
        'title' => 'Kegiatan Pembelajaran'
    ],
    [
        'image' => 'assets/galery/MembacaQur\'an2.png',
        'title' => 'Kegiatan Pembelajaran'
    ],
    [
        'image' => 'assets/galery/lelang.png',
        'title' => 'Kegiatan Lelang'
    ],
    [
        'image' => 'assets/galery/pedulibencana.png',
        'title' => 'Peduli Bencana'
    ],
    [
        'image' => 'assets/galery/bukabersama.png',
        'title' => 'Buka Puasa Bersama'
    ],
    [
        'image' => 'assets/galery/donasi.png',
        'title' => 'Kegiatan Donasi'
    ]
];
?>

<section class="gallery-section" id="gallery">
    <div class="section-title fade-in">
        <h2>Galeri Kegiatan</h2>
        <p>Dokumentasi kegiatan sehari-hari di Asrama Darul Qur'an Rahman</p>
    </div>
    <div class="gallery-grid">
        <?php foreach ($gallery_items as $item): ?>
        <div class="gallery-item fade-in">
            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
            <div class="gallery-overlay">
                <h4><?php echo $item['title']; ?></h4>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
