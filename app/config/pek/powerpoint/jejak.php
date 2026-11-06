<?php

declare(strict_types=1);

/**
 * Jejak pembelajaran PowerPoint (bahagian di /powerpoint/), BM. Versi EN: en/jejak.php (id, tahap, pautan SAMA). Skema: docs/REVAMP.md.
 * Setiap modul memaut id seksyen cheatsheet.php, kunci kategori rujukan.php dan id set latihan.php — gerbang menolak yang tiada.
 */
return [
    'tajuk' => 'Belajar PowerPoint mengikut susunan',
    'intro' => 'Ikut modul dari atas ke bawah. Setiap modul menunjuk bahagian cheat sheet, kategori rujukan dan set latihan yang berkaitan.',
    'modul' => [
        [
            'id' => 'asas', 'tahap' => 1,
            'tajuk' => 'Asas dan pintasan harian',
            'ringkas' => 'Tambah slaid, pilih layout, format teks dan gerakkan objek dengan papan kekunci, kemudian uji pintasan yang paling kerap digunakan.',
            'cheatsheet' => ['shortcut', 'edit-text', 'objects'], 'rujukan' => ['slaid'], 'latihan' => ['pintasan', 'slaid'],
        ],
        [
            'id' => 'master', 'tahap' => 1,
            'tajuk' => 'Slide Master, layout dan tema',
            'ringkas' => 'Tetapkan fon, warna dan logo sekali dalam Slide Master supaya setiap slaid seragam. Bina layout sendiri dengan placeholder dan pilih saiz slaid sebelum mula.',
            'cheatsheet' => ['master', 'themes'], 'rujukan' => ['master'], 'latihan' => ['master-layout'],
        ],
        [
            'id' => 'reka', 'tahap' => 2,
            'tajuk' => 'Reka slaid: susunan, tipografi dan gambar',
            'ringkas' => 'Jajarkan objek dengan Align dan guides, kekalkan satu idea bagi setiap slaid dengan hierarki teks yang jelas, dan kemas gambar dengan crop, Remove Background dan Compress Pictures.',
            'cheatsheet' => ['arrange', 'typography', 'images', 'icons-svg'], 'rujukan' => ['objek', 'media'], 'latihan' => ['reka-slaid'],
        ],
        [
            'id' => 'data', 'tahap' => 2,
            'tajuk' => 'Carta, jadual dan rajah',
            'ringkas' => 'Bawa carta dari Excel dan pilih sama ada dipaut atau dibenam. Putuskan bila SmartArt sesuai dan bila rajah sendiri lebih jelas.',
            'cheatsheet' => ['charts', 'smartart'], 'rujukan' => ['carta'], 'latihan' => ['visual-data'],
        ],
        [
            'id' => 'bentang', 'tahap' => 2,
            'tajuk' => 'Animasi dan membentang',
            'ringkas' => 'Gunakan animasi untuk mendedahkan isi satu demi satu, susun masa dalam Animation Pane, dan bentang dengan Presenter View, nota dan Rehearse Timings.',
            'cheatsheet' => ['animation', 'presenter-view'], 'rujukan' => ['gerak', 'bentang'], 'latihan' => ['animasi-pembentang'],
        ],
        [
            'id' => 'eksport', 'tahap' => 3,
            'tajuk' => 'Eksport, video dan aksesibiliti',
            'ringkas' => 'Hasilkan PDF dengan nota, eksport video MP4 pada resolusi yang sesuai, kecilkan saiz fail, dan semak alt text serta reading order sebelum berkongsi.',
            'cheatsheet' => ['export'], 'rujukan' => ['fail', 'rakam', 'akses'], 'latihan' => [],
        ],
        [
            'id' => 'viva', 'tahap' => 3,
            'tajuk' => 'Pembentangan projek akhir dan viva',
            'ringkas' => 'Gabungkan semua modul dalam satu pembentangan projek tahun akhir: struktur slaid, slaid sandaran untuk soalan penilai, nombor slaid dan PDF untuk panel.',
            'cheatsheet' => ['academic', 'mistakes'], 'rujukan' => ['akademik'], 'latihan' => ['akademik-viva'],
        ],
    ],
];
