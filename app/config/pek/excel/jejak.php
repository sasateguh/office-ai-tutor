<?php

declare(strict_types=1);

/**
 * Jejak pembelajaran Excel (bahagian di /excel/), BM. Versi EN: en/jejak.php (id, tahap, pautan SAMA; nama fail muat -en.csv).
 * Dua laluan dalam satu senarai: modul 1–3 = asas → pertengahan, modul 4–8 = analisis data (fail CSV di public/muat/excel/,
 * dijana alat/jana-data.py). Skema: docs/REVAMP.md. Gerbang menolak seksyen/kategori/set/fail yang tiada.
 */
return [
    'tajuk' => 'Belajar Excel mengikut susunan',
    'intro' => 'Modul 1 hingga 3 membawa anda dari asas ke tahap pertengahan. Modul 4 hingga 8 ialah laluan analisis data untuk kuliah: muat turun fail CSV dalam modul itu dan ikut langkah dalam Excel sendiri.',
    'modul' => [
        [
            'id' => 'asas', 'tahap' => 1,
            'tajuk' => 'Asas buku kerja dan pintasan harian',
            'ringkas' => 'Kenali buku kerja, lembaran kerja, sel dan julat. Masukkan nombor, teks dan tarikh dengan jenis data yang betul, format nombor, dan gerakkan kursor dengan papan kekunci.',
            'cheatsheet' => ['workbook', 'cells', 'data-types', 'formatting', 'shortcuts'], 'rujukan' => ['math'], 'latihan' => ['basics'],
        ],
        [
            'id' => 'formula', 'tahap' => 1,
            'tajuk' => 'Formula, operator dan rujukan sel',
            'ringkas' => 'Tulis formula dengan operator matematik dan perbandingan, ikut urutan operasi, dan kunci rujukan dengan tanda $ atau F4 supaya formula kekal betul apabila disalin.',
            'cheatsheet' => ['operators', 'order-of-operations', 'comparison', 'typing-operators', 'references', 'f4'], 'rujukan' => ['math', 'logic'], 'latihan' => ['basics'],
        ],
        [
            'id' => 'fungsi', 'tahap' => 2,
            'tajuk' => 'Fungsi logik, carian, teks dan tarikh',
            'ringkas' => 'Gunakan <code>IF</code>, <code>VLOOKUP</code> atau <code>XLOOKUP</code>, fungsi teks dan fungsi tarikh untuk kerja pejabat sebenar. Kenal ralat biasa seperti <code>#N/A</code> dan <code>#VALUE!</code> dan cara membaikinya.',
            'cheatsheet' => ['mistakes'], 'rujukan' => ['logic', 'lookup', 'text', 'date'], 'latihan' => ['intermediate'],
        ],
        [
            'id' => 'jadual-data', 'tahap' => 2,
            'tajuk' => 'Import data, bersihkan dan tukar kepada Excel Table',
            'ringkas' => 'Buka fail jualan kotor, buang ruang lebihan, baris kosong dan pendua, kemudian betulkan tarikh dan jumlah yang tersimpan sebagai teks. Seterusnya buka fail jualan 2026 yang sudah bersih dan tukar julatnya kepada Excel Table supaya formula dan carta membesar sendiri apabila baris ditambah.',
            'cheatsheet' => ['import', 'data-cleaning', 'excel-tables', 'analysis-shortcuts'], 'rujukan' => [], 'latihan' => ['jadual-data'],
            'muat' => [['label' => 'Data jualan kotor (CSV, untuk dibersihkan)', 'fail' => 'jualan-kotor-ms.csv'], ['label' => 'Data jualan 2026 (CSV, 735 baris, untuk Excel Table)', 'fail' => 'jualan-2026-ms.csv']],
        ],
        [
            'id' => 'analisis-formula', 'tahap' => 2,
            'tajuk' => 'Analisis dengan formula bersyarat',
            'ringkas' => 'Jawab soalan seperti "berapa jualan wilayah Utara pada bulan Mac" dengan <code>SUMIFS</code>, <code>COUNTIFS</code> dan <code>AVERAGEIFS</code>, kemudian bandingkan jualan dengan sasaran bulanan menggunakan fungsi carian.',
            'cheatsheet' => ['excel-tables'], 'rujukan' => ['stat', 'math', 'lookup'], 'latihan' => ['analisis-formula'],
            'muat' => [['label' => 'Data jualan 2026 (CSV)', 'fail' => 'jualan-2026-ms.csv'], ['label' => 'Sasaran wilayah 2026 (CSV)', 'fail' => 'sasaran-2026-ms.csv']],
        ],
        [
            'id' => 'pivot', 'tahap' => 2,
            'tajuk' => 'PivotTable',
            'ringkas' => 'Ringkaskan 735 baris jualan ikut wilayah, produk dan bulan dalam beberapa klik. Tukar Sum kepada Count atau Average, kumpulkan tarikh ikut bulan, dan paparkan nilai sebagai peratus jumlah.',
            'cheatsheet' => ['pivottable', 'pivot-values'], 'rujukan' => [], 'latihan' => ['pivot'],
            'muat' => [['label' => 'Data jualan 2026 (CSV)', 'fail' => 'jualan-2026-ms.csv']],
        ],
        [
            'id' => 'carta', 'tahap' => 3,
            'tajuk' => 'Carta, slicer dan timeline',
            'ringkas' => 'Pilih carta yang menjawab soalan: garis untuk trend, bar untuk perbandingan. Kemas paksi dan label, bina PivotChart, kemudian tapis beberapa PivotTable serentak dengan slicer dan timeline.',
            'cheatsheet' => ['chart-choice', 'chart-tools', 'slicers-timeline'], 'rujukan' => [], 'latihan' => ['carta-slicer'],
            'muat' => [['label' => 'Data jualan 2026 (CSV)', 'fail' => 'jualan-2026-ms.csv']],
        ],
        [
            'id' => 'power-query-dashboard', 'tahap' => 3,
            'tajuk' => 'Power Query dan papan pemuka satu helaian',
            'ringkas' => 'Bersihkan fail jualan kotor dengan Power Query sekali, kemudian Refresh setiap kali data baharu tiba. Susun PivotTable, carta dan slicer dalam satu helaian, dan kenal bila sudah tiba masa berpindah ke Power BI.',
            'cheatsheet' => ['power-query', 'dashboard', 'excel-to-power-bi', 'export'], 'rujukan' => [], 'latihan' => ['power-query-dashboard'],
            'muat' => [['label' => 'Data jualan kotor (CSV, untuk Power Query)', 'fail' => 'jualan-kotor-ms.csv'], ['label' => 'Sasaran wilayah 2026 (CSV)', 'fail' => 'sasaran-2026-ms.csv']],
        ],
    ],
];
