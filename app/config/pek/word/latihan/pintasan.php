<?php

declare(strict_types=1);

/**
 * Set latihan 'pintasan' (BM). Versi EN: ../en/latihan/pintasan.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Pintasan harian',
    'icon' => 'keyboard',
    'tagline' => 'Pintasan yang digunakan setiap hari dalam Word',
    'description' => 'Tekan kombinasi kekunci yang betul. Di telefon, taip jawapan dengan tanda +, contohnya Ctrl+huruf. Meliputi format, heading, page break dan semakan.',
    'color' => 'purple',
    'questions' => [
        $p('p1', 'Format', '🔤', 1, 'Tekan pintasan untuk <strong>menebalkan (bold)</strong> teks yang dipilih.', ['Ctrl+B'],
            'B untuk Bold.', '<strong>Ctrl+B</strong> menogol bold. Tekan sekali lagi untuk membuangnya. Mac: ⌘+B.'),
        $p('p2', 'Format', '🔤', 1, 'Tekan pintasan untuk <strong>menengahkan (center)</strong> perenggan.', ['Ctrl+E'],
            'Bukan C, kerana C digunakan untuk Copy. Huruf kedua dalam "cEnter".', '<strong>Ctrl+E</strong> = Center. Kiri: Ctrl+L, kanan: Ctrl+R, justify: Ctrl+J.'),
        $p('p3', 'Halaman', '📐', 1, 'Tekan pintasan untuk <strong>memulakan halaman baharu</strong> (page break) tanpa menekan Enter berkali-kali.', ['Ctrl+Enter'],
            'Ctrl bersama kekunci yang biasa anda tekan untuk baris baharu.', '<strong>Ctrl+Enter</strong> memasukkan Page Break. Teks di atas boleh bertambah tanpa merosakkan susunan halaman seterusnya.'),
        $p('p4', 'Format', '🔤', 2, 'Tekan pintasan untuk <strong>baris baharu dalam perenggan yang sama</strong> (line break), contohnya alamat dalam surat.', ['Shift+Enter'],
            'Kali ini bukan Ctrl.', '<strong>Shift+Enter</strong> = Line Break: baris baharu tanpa jarak perenggan. Sesuai untuk alamat dan blok tandatangan.'),
        $p('p5', 'Styles', '🎨', 2, 'Tekan pintasan untuk menjadikan tajuk ini <strong>Heading 1</strong>.', ['Ctrl+Alt+1'],
            'Dua kekunci pengubah dan nombor aras tajuk.', '<strong>Ctrl+Alt+1</strong> = Heading 1 (Ctrl+Alt+2 untuk Heading 2). Tajuk yang menggunakan style Heading muncul dalam Table of Contents dan Navigation Pane.'),
        $p('p6', 'Format', '🔤', 2, 'Teks tertaip dalam HURUF BESAR secara tidak sengaja. Tekan pintasan untuk <strong>menukar huruf (change case)</strong> tanpa menaip semula.', ['Shift+F3'],
            'Kekunci fungsi di baris atas papan kekunci.', '<strong>Shift+F3</strong> bertukar antara huruf kecil, HURUF BESAR dan Capitalize Each Word.'),
        $p('p7', 'Format', '🖌️', 2, 'Tekan pintasan untuk <strong>menyalin format</strong> teks (bukan teksnya).', ['Ctrl+Alt+C', 'Ctrl+Shift+C'],
            'Copy biasa dengan satu kekunci pengubah lagi.', 'Microsoft 365: <strong>Ctrl+Alt+C</strong> menyalin format dan <strong>Ctrl+Alt+V</strong> menampalnya (sama seperti Format Painter). Word 2019 dan lebih lama: Ctrl+Shift+C dan Ctrl+Shift+V.'),
        $p('p8', 'Format', '🧽', 2, 'Tekan pintasan untuk <strong>membuang semua format huruf manual</strong> pada teks yang dipilih.', ['Ctrl+Space'],
            'Kekunci paling panjang di papan kekunci. (Di Mac, ⌘+Space membuka Spotlight, jadi taip jawapan.)', '<strong>Ctrl+Space</strong> membuang format huruf manual (bold, warna, saiz) dan kembali kepada format style perenggan.'),
        $p('p9', 'Semakan', '✍️', 2, 'Tekan pintasan untuk <strong>menghidupkan Track Changes</strong>.', ['Ctrl+Shift+E'],
            'E untuk "Edits".', '<strong>Ctrl+Shift+E</strong> menogol Track Changes (Review → Track Changes).'),
        $p('p10', 'Semakan', '💬', 3, 'Tekan pintasan untuk <strong>menambah komen</strong> pada teks yang dipilih.', ['Ctrl+Alt+M'],
            'M untuk "Memo", dengan dua kekunci pengubah. (Di Mac, sistem menggunakan kombinasi ini, jadi taip jawapan.)', '<strong>Ctrl+Alt+M</strong> = New Comment (Review → New Comment).'),
        $p('p11', 'Pautan', '🔗', 1, 'Tekan pintasan untuk <strong>memasukkan hyperlink</strong>.', ['Ctrl+K'],
            'Huruf yang sama digunakan dalam Excel dan PowerPoint.', '<strong>Ctrl+K</strong> membuka dialog Insert Link.'),
        $p('p12', 'Semakan', '🔎', 1, 'Tekan pintasan untuk <strong>menyemak ejaan dan tatabahasa</strong> (Editor).', ['F7'],
            'Satu kekunci fungsi sahaja.', '<strong>F7</strong> membuka Editor (Spelling & Grammar).'),
    ],
];
