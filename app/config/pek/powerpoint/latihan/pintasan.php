<?php

declare(strict_types=1);

/**
 * Set latihan 'pintasan' (BM). Versi EN: ../en/latihan/pintasan.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Pintasan utama',
    'icon' => 'keyboard',
    'tagline' => 'Pintasan untuk membina dan membentang slaid',
    'description' => 'Tekan kombinasi kekunci yang betul. Di telefon, taip kombinasinya dengan tanda +, contohnya Ctrl+huruf. Meliputi slaid, objek dan Slide Show.',
    'color' => 'purple',
    'questions' => [
        $p('p1', 'Slaid', '🗂️', 1, 'Tekan pintasan untuk <strong>memasukkan slaid baharu</strong>.', ['Ctrl+M'],
            'Kekunci yang sama dengan butang New Slide.', '<strong>Ctrl+M</strong> memasukkan slaid baharu selepas slaid semasa (Home → New Slide).'),
        $p('p2', 'Objek', '📐', 1, 'Tekan pintasan untuk <strong>mengumpulkan (group)</strong> objek yang dipilih.', ['Ctrl+G'],
            'G untuk Group.', '<strong>Ctrl+G</strong> ialah Group. <strong>Ctrl+Shift+G</strong> ialah Ungroup.'),
        $p('p3', 'Objek', '📐', 2, 'Tekan pintasan untuk <strong>meleraikan (ungroup)</strong> kumpulan objek.', ['Ctrl+Shift+G'],
            'Pintasan Group dengan satu kekunci pengubah tambahan.', '<strong>Ctrl+Shift+G</strong> meleraikan kumpulan supaya setiap objek boleh diubah secara berasingan.'),
        $p('p4', 'Objek', '📋', 2, 'Tekan pintasan untuk <strong>membuka Selection Pane</strong> dan memilih objek yang tertimbus.', ['Alt+F10'],
            'Alt dengan satu kekunci fungsi.', '<strong>Alt+F10</strong> membuka Selection Pane (Home → Arrange → Selection Pane).'),
        $p('p5', 'Membentang', '🎤', 1, 'Tekan pintasan untuk <strong>memulakan Slide Show dari slaid pertama</strong>.', ['F5'],
            'Satu kekunci fungsi.', '<strong>F5</strong> bermula dari awal. <strong>Shift+F5</strong> bermula dari slaid semasa.'),
        $p('p6', 'Membentang', '🎤', 2, 'Tekan pintasan untuk <strong>bermula dari slaid yang sedang dibuka</strong>, bukan dari awal.', ['Shift+F5'],
            'Kekunci untuk bermula dari awal, ditambah satu kekunci pengubah.', '<strong>Shift+F5</strong> berguna apabila menyambung pembentangan selepas sesi soal jawab.'),
        $p('p7', 'Membentang', '🖥️', 2, 'Tekan pintasan untuk <strong>bermula dalam Presenter View</strong>, dengan nota di skrin anda sahaja.', ['Alt+F5'],
            'Kali ini bukan Shift.', '<strong>Alt+F5</strong> memulakan Slide Show dalam Presenter View.'),
        $p('p8', 'Membentang', '⬛', 2, 'Semasa membentang, anda mahu audiens memberi tumpuan kepada anda. Tekan kekunci untuk <strong>skrin hitam</strong>.', ['B', '.'],
            'Huruf pertama perkataan "Black".', '<strong>B</strong> (atau titik) memaparkan skrin hitam. Tekan sekali lagi untuk kembali. <strong>W</strong> memaparkan skrin putih.'),
        $p('p9', 'Membentang', '🔴', 3, 'Semasa membentang, tekan pintasan untuk <strong>penunjuk laser</strong>.', ['Ctrl+L'],
            'L untuk Laser.', '<strong>Ctrl+L</strong> menukar penuding tetikus kepada laser. <strong>Ctrl+P</strong> ialah pen dan <strong>Ctrl+E</strong> ialah pemadam.'),
        $p('p10', 'Pautan', '🔗', 1, 'Tekan pintasan untuk <strong>memasukkan pautan</strong> ke slaid lain atau ke laman web.', ['Ctrl+K'],
            'Sama dalam Excel, Word dan Outlook.', '<strong>Ctrl+K</strong> membuka Insert Hyperlink, termasuk pautan ke slaid lain dalam fail yang sama (Place in This Document).'),
    ],
];
