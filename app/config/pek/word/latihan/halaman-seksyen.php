<?php

declare(strict_types=1);

/**
 * Set latihan 'halaman-seksyen' (BM). Versi EN: ../en/latihan/halaman-seksyen.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Halaman dan seksyen',
    'icon' => 'ruler',
    'tagline' => 'Section Break, header berbeza dan nombor roman ke Arab',
    'description' => 'Section Break membolehkan setiap bahagian dokumen mempunyai orientasi, margin, header dan nombor halaman sendiri. Latih susun atur tesis dan laporan rasmi.',
    'color' => 'purple',
    'questions' => [
        $p('hs1', 'Halaman', '📐', 2, 'Dokumen anda mempunyai dua lajur. Tekan pintasan untuk <strong>memindahkan teks ke lajur seterusnya</strong> (column break).', ['Ctrl+Shift+Enter'],
            'Pintasan page break, ditambah Shift.', '<strong>Ctrl+Shift+Enter</strong> = Column Break. Ctrl+Enter pula memulakan halaman baharu.'),
        $p('hs2', 'Nombor halaman', '🔢', 2, 'Kursor berada dalam footer. Tekan pintasan untuk <strong>memasukkan medan nombor halaman (PAGE)</strong>.', ['Alt+Shift+P'],
            'P untuk Page, dengan dua kekunci pengubah.', '<strong>Alt+Shift+P</strong> memasukkan medan PAGE. Alt+Shift+D pula memasukkan tarikh hari ini sebagai medan.'),
        $c('hs3', 'Seksyen', '📄', 1, 'Satu bahagian laporan perlu dua lajur, tetapi tajuk di atasnya pada halaman yang sama kekal satu lajur. Apakah jenis break yang sesuai?',
            ['Page Break', 'Section Break (Continuous)', 'Section Break (Next Page)', 'Column Break'], 1,
            'Section baharu tanpa halaman baharu.', '<strong>Continuous</strong> memulakan section baharu pada halaman yang sama, jadi bilangan lajur boleh berubah di tengah halaman.'),
        $c('hs4', 'Seksyen', '📄', 2, 'Anda menukar header Bab 2, tetapi header <strong>halaman awal juga berubah</strong>. Apakah yang perlu dimatikan?',
            ['Different First Page', 'Link to Previous dalam header section Bab 2', 'Show Document Text', 'Different Odd & Even Pages'], 1,
            'Setiap section baharu menyalin header section sebelumnya secara lalai.', 'Matikan <strong>Link to Previous</strong> dalam header section yang baharu. Selepas itu, header setiap section boleh berbeza.'),
        $c('hs5', 'Nombor halaman', '🔢', 2, 'Halaman awal tesis (Abstrak, Penghargaan, Isi Kandungan) perlu bernombor <strong>i, ii, iii</strong>. Di manakah format ini dipilih?',
            ['Insert → Page Number → Format Page Numbers → Number format', 'Home → Numbering', 'Insert → Symbol', 'Layout → Line Numbers'], 0,
            'Format nombor halaman, bukan senarai bernombor.', '<strong>Format Page Numbers</strong> menetapkan format nombor bagi satu section. Halaman awal perlu dalam section sendiri.'),
        $c('hs6', 'Nombor halaman', '🔢', 2, 'Bab 1 bermula pada halaman 6 kerana nombor halaman awal bersambung. Bab 1 sepatutnya bermula pada halaman 1. Apakah yang perlu ditetapkan?',
            ['Format Page Numbers → Start at 1 dalam section Bab 1', 'Padam halaman awal', 'Different First Page', 'Taip 1 dalam footer'], 0,
            'Pilihan selepas Continue from previous section.', 'Dalam section Bab 1, pilih <strong>Start at</strong> 1 dalam Format Page Numbers. Nombor halaman awal tidak terjejas.'),
        $c('hs7', 'Halaman', '📐', 3, 'Tesis akan dijilid di sebelah kiri dan garis panduan universiti meminta ruang tambahan 1 cm untuk jilid. Apakah cara yang betul?',
            ['Tambah 1 cm pada margin kiri setiap halaman dengan Tab', 'Layout → Margins → Custom Margins → Gutter', 'Kecilkan saiz fon', 'Pilih Narrow margins'], 1,
            'Ruang jilid mempunyai medan sendiri dalam kotak margin.', '<strong>Gutter</strong> dalam Custom Margins menambah ruang di sisi jilid tanpa mengubah margin yang lain.'),
        $c('hs8', 'Seksyen', '📄', 3, 'Anda menukar margin untuk satu jadual lebar sahaja, tetapi margin <strong>seluruh dokumen</strong> berubah. Apakah yang terlepas?',
            ['Section Break sebelum dan selepas bahagian itu, kemudian Apply to: This section', 'Track Changes', 'Page Break sebelum jadual', 'Style Normal'], 0,
            'Margin disimpan untuk setiap section.', 'Tanpa section yang berasingan, dokumen hanya mempunyai satu section. Masukkan <strong>Section Break</strong>, kemudian pilih <strong>Apply to: This section</strong> dalam kotak Page Setup.'),
        $susun('hs9', 'Seksyen', '📄', 2, 'Susun langkah untuk menjadikan <strong>satu halaman sahaja</strong> landscape di tengah laporan potret.',
            ['Masukkan Section Break (Next Page) sebelum dan selepas halaman jadual', 'Klik dalam halaman jadual', 'Layout → Orientation → Landscape',
             'Semak dalam Print Preview bahawa halaman sebelum dan selepasnya kekal potret'],
            'Orientasi hanya boleh berbeza untuk section yang berbeza.',
            'Halaman itu perlu menjadi section sendiri dahulu. Kemudian klik di dalamnya dan tukar <strong>Orientation</strong>. Print Preview (Ctrl+P) menunjukkan sama ada perubahan terhad kepada section itu.'),
        $susun('hs10', 'Nombor halaman', '🔢', 3, 'Susun langkah untuk nombor halaman tesis: <strong>i, ii, iii</strong> pada halaman awal dan <strong>1, 2, 3</strong> bermula di Bab 1.',
            ['Letakkan kursor sebelum tajuk Bab 1 → Layout → Breaks → Next Page',
             'Insert → Page Number → Format Page Numbers dalam setiap section: i, ii, iii untuk halaman awal; 1, 2, 3 dan Start at 1 untuk Bab 1',
             'Kemas kini Table of Contents (F9) supaya nombor halamannya mengikut format baharu', 'Semak dalam Print Preview bahawa halaman awal bernombor roman dan Bab 1 bermula pada 1'],
            'Format nombor ditetapkan bagi setiap section, jadi section kedua mesti wujud dahulu.',
            'Pisahkan section dahulu dengan <strong>Next Page</strong>. Selepas itu, setiap section boleh mempunyai format nombor sendiri. Kemas kini Table of Contents selepas format ditukar supaya nombornya sepadan, kemudian semak hasilnya. <strong>Link to Previous</strong> hanya perlu dimatikan jika teks footer kedua-dua section juga perlu berbeza.'),
    ],
];
