<?php

declare(strict_types=1);

/**
 * Set latihan 'pivot' (BM). Versi EN: ../en/latihan/pivot.php (bentuk tindih; grid jualan EN sendiri). Susunan set: ../latihan.php.
 * Soalan `result` = nilai yang PivotTable akan papar atas grid soalan (dikira tangan; jumlah semua jualan = 4000).
 */
['pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';

// Grid jualan dikongsi (jumlah dalam fail grid).
$jualan = (require __DIR__ . '/../grid/jualan-suku.php')['ms'];
$hasil = fn(string $id, string $kat, string $ikon, int $tahap, string $soalan, array $accept, string $jawapan, string $petunjuk, string $penerangan) => [
    'id' => $id, 'category' => $kat, 'icon' => $ikon, 'level' => $tahap, 'prompt' => $soalan, 'mode' => 'result',
    'grid' => $jualan, 'highlight' => null, 'accept' => $accept, 'canonical' => $jawapan, 'hint' => $petunjuk, 'explanation' => $penerangan,
];

return [
    'name' => 'PivotTable',
    'icon' => 'grid-3x3',
    'tagline' => 'Ringkasan jualan tanpa satu formula pun',
    'description' => 'PivotTable meringkaskan ribuan baris dengan menyeret medan ke Rows, Columns, Values dan Filters. Latih susunan data yang betul, membaca nilai yang PivotTable akan papar, Show Values As, kumpulan tarikh dan Refresh.',
    'color' => 'purple',
    'questions' => [
        $c('pv1', 'Sedia data', '🧱', 1, 'Sebelum <strong>Insert → PivotTable</strong>, data anda perlu disusun bagaimana?',
            ['Tajuk dalam dua baris bergabung supaya kelihatan kemas', 'Jumlah kecil disisip selepas setiap bulan', 'Satu baris tajuk, setiap lajur satu jenis data, tiada baris atau lajur kosong, tiada sel bergabung', 'Setiap wilayah dalam lembaran kerja sendiri'], 2,
            'PivotTable membaca baris pertama sebagai nama medan.',
            'PivotTable menjadikan <strong>baris tajuk</strong> nama medan dan setiap baris berikutnya satu rekod. Sel bergabung, baris jumlah kecil dan data berselerak dalam beberapa lembaran kerja menghasilkan medan kosong atau jumlah berganda. Tukar data kepada Excel Table dahulu supaya baris baharu ikut masuk.'),
        $c('pv2', 'Kawasan medan', '🧭', 1, 'Anda mahu satu baris bagi setiap wilayah dan jumlah jualan di sebelahnya. Ke kawasan manakah medan <strong>Wilayah</strong> diseret?',
            ['Values', 'Rows', 'Filters', 'Columns, kemudian Values'], 1,
            'Kawasan yang menjadi label di sebelah kiri.',
            'Medan dalam <strong>Rows</strong> menjadi label baris; medan Jualan diseret ke <strong>Values</strong> untuk dijumlahkan. Columns membina lajur bagi setiap item, dan Filters menapis seluruh PivotTable.'),
        $hasil('pv3', 'Membaca PivotTable', '🔎', 1, 'PivotTable dibina daripada data ini: <strong>Wilayah</strong> dalam Rows, <strong>Sum of Jualan (RM)</strong> dalam Values. Apakah nilai pada baris <strong>Selatan</strong>?',
            ['/^(rm)?1,?600(\.0+)?$/'], '1600',
            'Jumlahkan lajur Jualan bagi setiap baris yang wilayahnya Selatan.',
            'Tiga baris Selatan: 400 + 500 + 700 = <strong>1600</strong>. PivotTable menjumlahkan semua baris yang berkongsi label yang sama, jadi susunan baris dalam data tidak penting.'),
        $hasil('pv4', 'Membaca PivotTable', '🔎', 2, 'Kini <strong>Wilayah</strong> dalam Rows, <strong>Produk</strong> dalam Columns dan <strong>Sum of Jualan (RM)</strong> dalam Values. Apakah nilai di persilangan <strong>Selatan</strong> dan <strong>Kopi</strong>?',
            ['/^(rm)?1,?200(\.0+)?$/'], '1200',
            'Hanya baris yang wilayahnya Selatan dan produknya Kopi.',
            'Selatan + Kopi = 500 (12 Februari) + 700 (11 Mac) = <strong>1200</strong>. Sel itu sama dengan <code>=SUMIFS(D2:D9,B2:B9,"Selatan",C2:C9,"Kopi")</code>, tetapi PivotTable mengira setiap persilangan sekali gus.'),
        $hasil('pv5', 'Ringkasan nilai', '🔢', 2, '<strong>Produk</strong> diletak dalam Rows, dan medan <strong>Produk</strong> juga diseret ke Values. Excel memaparkan <strong>Count of Produk</strong>. Apakah nilai pada baris <strong>Kopi</strong>?',
            ['/^5$/'], '5',
            'Medan teks dalam Values dikira, bukan dijumlahkan.',
            'Medan teks dalam Values diringkaskan dengan <strong>Count</strong>: bilangan baris Kopi = <strong>5</strong>. Ini cara pantas mengira bilangan transaksi bagi setiap item.'),
        $c('pv6', 'Ringkasan nilai', '🔢', 2, 'Anda menyeret <strong>Jualan (RM)</strong> ke Values tetapi PivotTable memaparkan <strong>Count of Jualan (RM)</strong>, bukan Sum. Apakah sebab yang paling mungkin?',
            ['Ada sel dalam lajur Jualan yang disimpan sebagai teks atau kosong', 'PivotTable sentiasa mengira dahulu dan perlu ditukar setiap kali', 'Lajur Jualan terlalu lebar', 'Data belum diisih ikut wilayah'], 0,
            'Excel memilih Count apabila ia menganggap lajur itu teks.',
            'Medan nombor diringkaskan dengan Sum, tetapi jika Excel menemui <strong>teks atau sel kosong</strong> dalam lajur itu, ia memilih Count. Baiki data sumber (cth. <code>VALUE</code> atau Text to Columns), Refresh, kemudian pilih <strong>Value Field Settings → Summarize Values By → Sum</strong>.'),
        $hasil('pv7', 'Show Values As', '🥧', 2, '<strong>Wilayah</strong> dalam Rows, <strong>Sum of Jualan (RM)</strong> dalam Values, kemudian <strong>Show Values As → % of Grand Total</strong>. Apakah peratus pada baris <strong>Utara</strong>?',
            ['/^35(\.0+)?%?$/'], '35%',
            'Jualan Utara dibahagi jumlah semua jualan.',
            'Utara = 600 + 200 + 600 = 1400; jumlah semua = 4000. 1400 / 4000 = <strong>35%</strong>. Show Values As mengubah cara nilai dipapar tanpa formula tambahan, dan Grand Total menjadi 100%.'),
        $c('pv8', 'Refresh', '🔄', 2, 'Anda menambah 20 baris jualan April di bawah julat sumber biasa (bukan Excel Table), kemudian <strong>Refresh</strong>. Jumlah PivotTable tidak berubah. Apakah pembaikan yang betul?',
            ['Tekan Refresh sekali lagi', 'Bina semula PivotTable setiap bulan', 'Taip jumlah April terus dalam PivotTable', 'Tukar data kepada Excel Table (Insert → Table) dan tukar sumber PivotTable kepada nama Table itu melalui Change Data Source'], 3,
            'Julat sumber biasa tidak membesar sendiri.',
            'Julat sumber biasa kekal pada alamat asal, jadi baris baharu di bawahnya tidak dibaca. Selepas sumber menjadi <strong>Excel Table</strong>, baris yang ditambah ikut masuk dan Refresh sudah cukup. <strong>PivotTable Analyze → Change Data Source</strong> menukar sumber tanpa membina semula.'),
        $hasil('pv9', 'Kumpulan tarikh', '📅', 3, '<strong>Tarikh</strong> dalam Rows dan dikumpulkan ikut <strong>Months</strong>; <strong>Sum of Jualan (RM)</strong> dalam Values. Apakah nilai pada baris <strong>Feb</strong>?',
            ['/^(rm)?1,?400(\.0+)?$/'], '1400',
            'Jumlahkan baris yang tarikhnya dalam Februari, tanpa mengira wilayah.',
            'Februari ada tiga transaksi: 200 + 500 + 700 = <strong>1400</strong>. Kumpulan Months menggabungkan semua hari dalam bulan yang sama. Jika data merangkumi lebih dari satu tahun, pilih <strong>Months</strong> dan <strong>Years</strong> supaya Februari dua tahun berbeza tidak dicampur.'),
        $susun('pv10', 'Kumpulan tarikh', '📅', 3, 'PivotTable sudah memaparkan setiap tarikh dalam Rows. Susun langkah untuk meringkaskannya <strong>ikut bulan dan tahun</strong>.',
            ['Klik kanan mana-mana tarikh dalam PivotTable → Group', 'Dalam kotak Grouping, pilih Months dan Years, nyahpilih Days', 'Klik OK', 'Semak label bulan baharu dan Grand Total yang tidak berubah'],
            'Kotak Grouping hanya muncul selepas arahan Group dipilih.',
            '<strong>Group</strong> membuka kotak Grouping; pilihan Months dan Years dibuat di situ, dan hanya berkuat kuasa selepas <strong>OK</strong>. Grand Total patut sama seperti sebelum: kumpulan hanya mengubah cara baris diringkaskan. Jika Group tidak menawarkan Months, sekurang-kurangnya satu nilai dalam lajur tarikh disimpan sebagai teks.'),
    ],
];
