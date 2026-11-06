<?php

declare(strict_types=1);

/**
 * Set latihan 'carta-slicer' (BM). Versi EN: ../en/latihan/carta-slicer.php (bentuk tindih; grid EN sendiri). Susunan set: ../latihan.php.
 */
['pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';

// Grid jualan dikongsi (jumlah dalam fail grid).
$jualan = (require __DIR__ . '/../grid/jualan-suku.php')['ms'];

return [
    'name' => 'Carta, slicer dan timeline',
    'icon' => 'trending-up',
    'tagline' => 'Pilih carta ikut soalan, tapis dengan satu klik',
    'description' => 'Carta yang betul bergantung pada soalan yang dijawab: perbandingan, aliran masa atau dua ukuran berbeza skala. Latih memilih jenis carta, PivotChart, slicer yang mengawal beberapa PivotTable, dan timeline untuk tarikh.',
    'color' => 'amber',
    'questions' => [
        $c('cs1', 'Pilih carta', '📊', 1, 'Pensyarah meminta anda <strong>membandingkan jumlah jualan lima wilayah</strong> bagi bulan Mac. Carta manakah paling sesuai?',
            ['Carta garis', 'Carta lajur berkelompok (Clustered Column) atau bar', 'Carta pai dengan lima kepingan dan label 3-D', 'Carta serakan (Scatter)'], 1,
            'Perbandingan antara kategori dibaca paling mudah melalui panjang palang.',
            'Mata membandingkan <strong>panjang palang</strong> dengan tepat, jadi carta lajur atau bar sesuai untuk kategori. Carta garis untuk aliran masa, carta serakan untuk hubungan dua nombor, dan pai 3-D memesongkan saiz kepingan.'),
        $c('cs2', 'Pilih carta', '📈', 1, 'Anda mahu menunjukkan <strong>aliran jualan bulanan</strong> dari Januari hingga Disember. Carta manakah paling sesuai?',
            ['Carta garis dengan bulan pada paksi mendatar', 'Carta pai dengan 12 kepingan', 'Carta bar mendatar diisih dari besar ke kecil', 'Carta radar'], 0,
            'Masa bergerak dari kiri ke kanan.',
            '<strong>Carta garis</strong> menunjukkan naik turun dari satu bulan ke bulan berikutnya. Mengisih bulan ikut nilai memusnahkan urutan masa, dan pai dengan 12 kepingan tidak dapat dibaca.'),
        $c('cs3', 'Pilih carta', '📉', 2, 'Satu carta perlu memaparkan <strong>Unit dijual</strong> (10–40) dan <strong>Jualan (RM)</strong> (400–20 000) bagi setiap bulan. Dalam carta lajur biasa, lajur Unit hampir tidak kelihatan. Apakah penyelesaian yang betul?',
            ['Dua siri lajur pada satu paksi', 'Carta donut (Doughnut)', 'Carta Combo: Jualan sebagai lajur, Unit sebagai garis pada Secondary Axis', 'Bahagikan Jualan dengan 1000 secara manual dalam data sumber'], 2,
            'Dua ukuran dengan skala berbeza perlukan dua paksi.',
            '<strong>Insert → Combo</strong> (atau Change Chart Type → Combo) membenarkan setiap siri jenis carta sendiri; tanda <strong>Secondary Axis</strong> untuk Unit supaya ia mempunyai skala di sebelah kanan. Labelkan kedua-dua paksi supaya pembaca tahu garis mana untuk paksi mana.'),
        $c('cs4', 'Cipta carta', '⚡', 2, 'Julat data sudah dipilih. Anda mahu carta lalai dicipta <strong>terus dalam lembaran kerja yang sama</strong>, bukan dalam sheet carta berasingan. Apakah yang ditekan?',
            ['F11', 'Alt+F1', 'Ctrl+T', 'Ctrl+Alt+F5'], 1,
            'Satu kekunci fungsi mencipta sheet carta berasingan; yang lain mencipta carta terbenam.',
            '<strong>Alt+F1</strong> mencipta carta terbenam dalam lembaran kerja semasa; <strong>F11</strong> mencipta carta dalam sheet carta baharu. Carta lalai belum tentu jenis yang betul, jadi semak dengan <strong>Insert → Recommended Charts</strong> bila ragu.'),
        $c('cs5', 'PivotChart', '🔗', 2, 'Anda membina <strong>PivotChart</strong> daripada PivotTable, kemudian menapis PivotTable kepada wilayah Utara sahaja. Apakah yang berlaku kepada PivotChart?',
            ['Ia kekal menunjukkan semua wilayah sehingga dibina semula', 'Ia dipadam', 'Ia bertukar menjadi carta biasa', 'Ia turut menunjukkan Utara sahaja kerana ia terikat pada PivotTable yang sama'], 3,
            'PivotChart dan PivotTable berkongsi medan dan penapis yang sama.',
            'PivotChart <strong>mengikut</strong> PivotTable sumbernya: penapis, susunan medan dan Refresh berubah bersama. Cipta dengan <strong>PivotTable Analyze → PivotChart</strong> semasa sel dalam PivotTable dipilih.'),
        $c('cs6', 'Slicer', '🎚️', 2, 'Slicer Wilayah sudah dimasukkan. Anda mahu memilih <strong>Utara dan Tengah</strong> sekali gus. Apakah caranya?',
            ['Klik Utara, kemudian Ctrl+klik Tengah (atau hidupkan butang Multi-Select pada slicer)', 'Klik dua kali pada Utara', 'Masukkan slicer kedua untuk Tengah', 'Taip "Utara, Tengah" dalam slicer'], 0,
            'Sama seperti memilih beberapa fail dalam File Explorer.',
            '<strong>Ctrl+klik</strong> menambah item kepada pilihan; butang <strong>Multi-Select</strong> di kepala slicer membuat setiap klik menogol satu item. Butang <strong>Clear Filter</strong> memulihkan semua item.'),
        [
            'id' => 'cs7',
            'category' => 'Slicer', 'icon' => '🎚️', 'level' => 2,
            'prompt' => 'PivotTable daripada data ini memaparkan <strong>Sum of Jualan (RM)</strong> ikut Produk. Slicer Wilayah ditapis kepada <strong>Utara dan Tengah</strong>. Apakah nilai <strong>Grand Total</strong>?',
            'mode' => 'result',
            'grid' => $jualan,
            'highlight' => null,
            'accept' => ['/^(rm)?2,?400(\.0+)?$/'],
            'canonical' => '2400',
            'hint' => 'Abaikan semua baris Selatan, kemudian jumlahkan baris yang tinggal.',
            'explanation' => 'Utara 1400 + Tengah 1000 = <strong>2400</strong>. Slicer menapis data sebelum diringkaskan, jadi Grand Total hanya mengira wilayah yang dipilih. Selatan (1600) tidak dikira.',
        ],
        $c('cs8', 'Slicer', '🧩', 3, 'Papan pemuka anda ada dua PivotTable (jualan ikut wilayah dan ikut produk) daripada sumber yang sama. Satu slicer Bulan sepatutnya menapis <strong>kedua-duanya</strong>. Apakah langkahnya?',
            ['Salin slicer dan tampal di sebelah PivotTable kedua', 'Masukkan dua slicer Bulan dan klik kedua-duanya setiap kali', 'Pilih slicer → Slicer → Report Connections → tanda kedua-dua PivotTable', 'Gabungkan dua PivotTable menjadi satu'], 2,
            'Satu slicer boleh disambung kepada beberapa PivotTable yang berkongsi sumber.',
            '<strong>Report Connections</strong> menyenaraikan PivotTable yang berkongsi sumber data; tanda yang perlu ditapis bersama. Satu klik pada slicer kemudian mengubah kedua-dua jadual dan carta yang terikat padanya.'),
        $c('cs9', 'Timeline', '🗓️', 2, 'Anda mahu penapis tarikh yang boleh ditukar antara <strong>tahun, suku, bulan dan hari</strong> untuk PivotTable. Apakah yang dimasukkan?',
            ['Insert → Slicer untuk medan Tarikh, kemudian klik setiap hari', 'Insert → Timeline, pilih medan tarikh', 'Data → Filter pada lajur tarikh sumber', 'Lajur Bulan ditaip tangan dalam PivotTable'], 1,
            'Penapis khas untuk medan tarikh, dengan pemilih aras masa.',
            '<strong>Timeline</strong> hanya untuk medan tarikh PivotTable. Pemilih aras di sudut kanannya bertukar antara Years, Quarters, Months dan Days, dan seret pemegang untuk julat seperti Februari hingga Mac. Lajur tarikh mesti tarikh sebenar, bukan teks.'),
        $susun('cs10', 'Format carta', '🏷️', 3, 'Julat bulan dan jualan (A1:B13, dengan tajuk) belum mempunyai carta. Susun langkah untuk menghasilkan carta garis dengan <strong>tajuk paksi menegak "Jualan (RM)"</strong>.',
            ['Pilih julat A1:B13 termasuk baris tajuk', 'Insert → Recommended Charts → pilih Line → OK', 'Klik carta, kemudian butang Chart Elements (+) → tanda Axis Titles', 'Klik tajuk paksi menegak dan taip Jualan (RM)'],
            'Butang Chart Elements hanya muncul bila carta dipilih, dan tajuk paksi hanya boleh ditaip selepas ia wujud.',
            'Carta dibina daripada julat yang <strong>dipilih</strong>, jadi data dipilih dahulu. Butang <strong>Chart Elements (+)</strong> muncul di sebelah carta yang dipilih; menanda <strong>Axis Titles</strong> menambah kotak tajuk yang kemudian ditaip. Tajuk paksi dengan unit (RM) menjimatkan satu soalan daripada pembaca.'),
    ],
];
