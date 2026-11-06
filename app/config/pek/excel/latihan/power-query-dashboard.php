<?php

declare(strict_types=1);

/**
 * Set latihan 'power-query-dashboard' (BM) — set senario: papan pemuka jualan satu helaian untuk kuliah, dari fail CSV hingga
 * Refresh bulan seterusnya. Versi EN: ../en/latihan/power-query-dashboard.php (bentuk tindih). Susunan set: ../latihan.php.
 */
['pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';

return [
    'name' => 'Power Query dan papan pemuka',
    'icon' => 'database',
    'tagline' => 'Dari fail CSV mentah ke papan pemuka satu helaian',
    'description' => 'Senario kuliah: setiap bulan sistem jualan mengeluarkan fail CSV baharu, dan anda perlu membentangkan papan pemuka satu helaian. Latih Power Query (import, Applied Steps, Unpivot, Append, Merge, Close & Load To) dan susun atur papan pemuka yang dikemas kini dengan Refresh.',
    'color' => 'purple',
    'questions' => [
        $c('pq1', 'Import data', '📥', 1, 'Setiap bulan anda menerima fail CSV jualan dengan lajur yang sama, dan setiap kali anda membersihkannya dengan tangan selama sejam. Apakah cara yang lebih baik?',
            ['Salin tampal fail baharu dan ulang langkah yang sama setiap bulan', 'Data → From Text/CSV → Transform Data, bersihkan dalam Power Query Editor, kemudian Refresh bila fail baharu tiba', 'Tulis semula semua formula setiap bulan', 'Buka CSV dalam Notepad dan betulkan dengan tangan'], 1,
            'Alat yang merekod setiap langkah pembersihan supaya boleh diulang.',
            'Power Query <strong>merekod</strong> setiap langkah pembersihan. Bulan berikutnya, gantikan fail sumber dan klik <strong>Refresh</strong>: langkah yang sama dijalankan semula dalam beberapa saat. Data asal dalam fail CSV tidak diubah.'),
        $c('pq2', 'Applied Steps', '🪜', 1, 'Dalam Power Query Editor, apakah yang dipaparkan dalam senarai <strong>Applied Steps</strong> di panel Query Settings?',
            ['Senarai fail dalam folder', 'Sejarah Undo lembaran kerja', 'Setiap transformasi yang anda buat, mengikut urutan; klik satu langkah untuk melihat data pada tahap itu', 'Formula yang akan dimasukkan ke dalam sel'], 2,
            'Senarai ini ialah resipi yang dijalankan semula setiap Refresh.',
            '<strong>Applied Steps</strong> ialah resipi query: setiap langkah dijalankan semula dari atas ke bawah setiap kali Refresh. Klik satu langkah untuk melihat data pada tahap itu, atau padam langkah yang salah dengan ikon X di sebelahnya. Memadam langkah di tengah boleh merosakkan langkah selepasnya yang bergantung padanya.'),
        $c('pq3', 'Jenis data', '🔤', 2, 'Lajur tarikh dalam CSV ditulis <code>15/03/2026</code> (hari/bulan/tahun), tetapi Power Query membacanya sebagai teks atau menukar hari dan bulan. Apakah pembaikannya?',
            ['Klik kanan tajuk lajur → Change Type → Using Locale, pilih Date dan locale yang memakai hari/bulan/tahun', 'Format sel sebagai Date selepas data dimuat', 'Padam lajur dan taip semula tarikh', 'Tukar fon lajur'], 0,
            'Masalah datang daripada tetapan bahasa dan wilayah, bukan daripada format paparan.',
            '<strong>Change Type → Using Locale</strong> memberitahu Power Query bahawa teks itu ikut susunan hari/bulan/tahun, jadi 03/04 dibaca sebagai 3 April, bukan 4 Mac. Langkah itu direkod dalam Applied Steps dan terpakai pada fail bulan hadapan juga.'),
        $c('pq4', 'Unpivot', '🔁', 2, 'Data sumber mempunyai satu lajur bagi setiap bulan: <code>Wilayah | Jan | Feb | Mac</code>. PivotTable memerlukan satu lajur <em>Bulan</em> dan satu lajur <em>Jualan</em>. Apakah langkah Power Query yang betul?',
            ['Transform → Transpose', 'Home → Remove Columns untuk Feb dan Mac', 'Add Column → Index Column', 'Pilih lajur Wilayah → Transform → Unpivot Other Columns'], 3,
            'Langkah ini menukar lajur menjadi baris.',
            '<strong>Unpivot Other Columns</strong> mengekalkan lajur yang dipilih (Wilayah) dan menukar setiap lajur lain menjadi dua lajur, <strong>Attribute</strong> (nama bulan) dan <strong>Value</strong> (jualan). Pilih "Other Columns" supaya lajur bulan baharu (Apr, Mei) ikut ditukar bila Refresh. Namakan semula kedua-dua lajur itu kepada Bulan dan Jualan.'),
        [
            'id' => 'pq5',
            'category' => 'Unpivot', 'icon' => '🔁', 'level' => 2,
            'prompt' => 'Jadual ini (4 wilayah, 3 lajur bulan) di-Unpivot dengan <strong>Unpivot Other Columns</strong> selepas memilih lajur Wilayah. Berapakah <strong>bilangan baris data</strong> dalam hasilnya (tanpa baris tajuk)?',
            'mode' => 'result',
            'grid' => [['Wilayah', 'Jan', 'Feb', 'Mac'], ['Utara', 600, 200, 600], ['Selatan', 400, 500, 700], ['Tengah', 300, 700, 0], ['Timur', 450, 380, 520]],
            'highlight' => null,
            'accept' => ['/^12$/'],
            'canonical' => '12',
            'hint' => 'Setiap sel bulan menjadi satu baris.',
            'explanation' => '4 wilayah × 3 bulan = <strong>12</strong> baris, setiap satu dengan Wilayah, Attribute (bulan) dan Value (jualan). Sel bernilai 0 tetap menjadi baris kerana ia nilai, bukan sel kosong.',
        ],
        $c('pq6', 'Append dan Merge', '🧲', 2, 'Anda ada dua query, <em>Jualan Jan</em> dan <em>Jualan Feb</em>, dengan lajur yang sama. Anda mahu satu jadual yang <strong>menyusun baris Feb di bawah baris Jan</strong>. Apakah yang digunakan?',
            ['Home → Merge Queries', 'Home → Append Queries', 'Transform → Transpose', 'Home → Group By'], 1,
            'Satu arahan menambah baris; satu lagi menambah lajur dengan memadan kunci.',
            '<strong>Append</strong> menambah baris query kedua di bawah yang pertama; lajur dipadan ikut nama tajuk, jadi tajuk mesti sama ejaan. <strong>Merge</strong> pula menambah lajur dari jadual lain dengan memadan kunci, seperti XLOOKUP.'),
        $c('pq7', 'Append dan Merge', '🧲', 3, 'Query <em>Jualan</em> ada lajur Kod Produk, dan jadual lain <em>Produk</em> memegang Kod dan Kategori. Anda mahu lajur Kategori ditambah pada setiap baris jualan, dan baris jualan yang kodnya tiada dalam jadual Produk <strong>tetap kekal</strong>. Apakah pilihan yang betul?',
            ['Append Queries Produk ke Jualan', 'Merge Queries dengan Join Kind = Inner', 'Merge Queries dengan Jualan di atas, padan lajur Kod, Join Kind = Left Outer, kemudian kembangkan lajur Kategori', 'Salin lajur Kategori dan tampal di sebelah'], 2,
            'Pilih jenis gabungan (Join Kind) yang menyimpan semua baris jadual pertama.',
            '<strong>Left Outer</strong> menyimpan semua baris jadual pertama (Jualan) dan membawa padanan dari jadual kedua; kod yang tiada padanan mendapat null. <strong>Inner</strong> membuang baris tanpa padanan, jadi jumlah jualan anda menjadi kurang tanpa amaran. Selepas Merge, klik ikon kembang pada lajur baharu dan tanda Kategori.'),
        $c('pq8', 'Muat data', '📤', 2, 'Data jualan bersih ada 50 000 baris dan anda hanya perlukan PivotTable ringkasan, bukan semua baris dalam lembaran kerja. Bagaimana query dimuat?',
            ['Home → Close & Load → Close & Load To → PivotTable Report (atau Only Create Connection)', 'Close & Load biasa, kemudian sorok lembaran kerja', 'Salin pratonton Power Query dan tampal', 'Simpan query sebagai fail CSV baharu'], 0,
            'Kotak Import Data memberi beberapa pilihan destinasi.',
            '<strong>Close & Load To</strong> membuka kotak Import Data: Table, PivotTable Report, PivotChart atau <strong>Only Create Connection</strong>. Memuat terus ke PivotTable mengelak 50 000 baris dalam lembaran kerja dan memastikan buku kerja kecil. Refresh tetap menjalankan semula semua langkah.'),
        $c('pq9', 'Papan pemuka', '🖥️', 3, 'Papan pemuka satu helaian untuk dibentang dalam kuliah. Susun atur manakah paling mudah dibaca?',
            ['Sepuluh carta sama besar dalam grid, setiap satu warna berbeza', 'Tiga atau empat kad KPI di atas, dua carta utama di bawahnya, slicer di tepi, satu warna aksen untuk perkara yang penting', 'Semua PivotTable mentah di halaman yang sama dengan carta', 'Carta pai 3-D besar di tengah dengan latar belakang gambar'], 1,
            'Pembaca melihat dari kiri atas ke bawah, dan warna menarik mata.',
            'Letakkan nombor yang paling penting (jumlah jualan, pertumbuhan, wilayah teratas) sebagai <strong>kad KPI</strong> di atas, kemudian carta yang menjawab soalan seterusnya. <strong>Satu warna aksen</strong> menunjukkan apa yang perlu diperhatikan; warna lain kelabu. Simpan PivotTable mentah di sheet berasingan.'),
        $susun('pq10', 'Aliran penuh', '🧭', 3, 'Fail <code>jualan-mac.csv</code> baru tiba dan buku kerja masih kosong. Susun langkah untuk menghasilkan PivotChart dengan slicer daripadanya.',
            ['Data → From Text/CSV → pilih fail → Transform Data', 'Dalam Power Query Editor, tetapkan jenis data setiap lajur dan buang baris kosong', 'Home → Close & Load To → Table dalam lembaran kerja baharu', 'Klik sel dalam jadual yang dimuat → Insert → PivotTable', 'Klik sel dalam PivotTable → PivotTable Analyze → PivotChart, kemudian Insert Slicer untuk Wilayah'],
            'Setiap langkah memakai hasil langkah sebelumnya: fail → query → jadual → PivotTable → carta.',
            'Power Query Editor hanya dibuka selepas fail dipilih; jadual hanya wujud selepas <strong>Close & Load To</strong>; PivotTable memerlukan jadual itu sebagai sumber; PivotChart dan slicer memerlukan PivotTable. Bulan seterusnya, ganti fail dan klik <strong>Data → Refresh All</strong>: semua langkah ini tidak perlu diulang.'),
    ],
];
