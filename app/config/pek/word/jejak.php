<?php

declare(strict_types=1);

/**
 * Jejak pembelajaran Word (bahagian di /word/), BM. Versi EN: en/jejak.php (id, tahap, pautan SAMA). Skema: docs/REVAMP.md.
 * Setiap modul memaut id seksyen cheatsheet.php, kunci kategori rujukan.php dan id set latihan.php — gerbang menolak yang tiada.
 */
return [
    'tajuk' => 'Belajar Word mengikut susunan',
    'intro' => 'Ikut modul dari atas ke bawah. Setiap modul menunjuk bahagian cheat sheet, kategori rujukan dan set latihan yang berkaitan.',
    'modul' => [
        [
            'id' => 'asas', 'tahap' => 1,
            'tajuk' => 'Asas dan pintasan harian',
            'ringkas' => 'Format teks, perenggan dan senarai dengan papan kekunci, bergerak dan memilih teks tanpa tetikus, kemudian uji pintasan yang paling kerap digunakan.',
            'cheatsheet' => ['shortcuts', 'navigate-select', 'format-shortcuts'], 'rujukan' => ['format'], 'latihan' => ['pintasan', 'dokumen'],
        ],
        [
            'id' => 'styles', 'tahap' => 1,
            'tajuk' => 'Styles dan struktur dokumen',
            'ringkas' => 'Gunakan Heading 1–3 dan ubah suai style sekali untuk seluruh dokumen. Pautkan Multilevel List kepada heading supaya nombor bab berjalan sendiri.',
            'cheatsheet' => ['styles', 'multilevel-headings'], 'rujukan' => ['gaya'], 'latihan' => ['styles-struktur'],
        ],
        [
            'id' => 'dokumen-panjang', 'tahap' => 2,
            'tajuk' => 'Laporan panjang: Isi Kandungan, caption dan medan',
            'ringkas' => 'Bina Table of Contents dan Table of Figures, beri caption pada jadual dan rajah, rujuk silang dengan cross-reference dan kemas kini semua medan dengan F9.',
            'cheatsheet' => ['long-documents', 'captions-crossref', 'fields'], 'rujukan' => ['laporan', 'medan'], 'latihan' => ['laporan-panjang'],
        ],
        [
            'id' => 'halaman', 'tahap' => 2,
            'tajuk' => 'Halaman, seksyen dan nombor halaman',
            'ringkas' => 'Pisahkan dokumen dengan Section Break, tetapkan margin, header dan footer berbeza setiap seksyen, dan tukar nombor roman ke nombor Arab pada bab pertama.',
            'cheatsheet' => ['breaks', 'page-layout', 'thesis-numbering'], 'rujukan' => ['halaman'], 'latihan' => ['halaman-seksyen'],
        ],
        [
            'id' => 'jadual-gambar', 'tahap' => 2,
            'tajuk' => 'Jadual dan gambar',
            'ringkas' => 'Ulang baris tajuk jadual pada setiap halaman, kawal lebar dengan AutoFit, dan letak gambar dengan Wrap Text supaya teks tidak melompat.',
            'cheatsheet' => ['tables', 'pictures'], 'rujukan' => ['jadual'], 'latihan' => [],
        ],
        [
            'id' => 'kolaborasi', 'tahap' => 3,
            'tajuk' => 'Semakan bersama dan Mail Merge',
            'ringkas' => 'Semak draf bersama penyelia dengan Track Changes, komen dan Compare. Hasilkan surat dan label untuk ramai penerima daripada satu senarai dengan Mail Merge.',
            'cheatsheet' => ['review', 'mail-merge'], 'rujukan' => ['semakan', 'mel'], 'latihan' => ['semakan-kolaborasi', 'mail-merge'],
        ],
        [
            'id' => 'tesis', 'tahap' => 3,
            'tajuk' => 'Tesis dari draf hingga PDF',
            'ringkas' => 'Gabungkan semua modul dalam satu tesis: templat, struktur dokumen panjang, semakan aksesibiliti dan eksport PDF dengan bookmark daripada heading.',
            'cheatsheet' => ['templates-pdf', 'accessibility', 'mistakes'], 'rujukan' => ['tesis', 'templat', 'akses', 'fail'], 'latihan' => ['tesis-kerja-sebenar'],
        ],
    ],
];
