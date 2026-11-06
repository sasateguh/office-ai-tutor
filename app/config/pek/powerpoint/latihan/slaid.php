<?php

declare(strict_types=1);

/**
 * Set latihan 'slaid' (BM). Versi EN: ../en/latihan/slaid.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Slaid kemas',
    'icon' => 'layout-template',
    'tagline' => 'Slide Master, susunan objek, carta dan membentang',
    'description' => 'Pilih cara yang betul untuk pembentangan kerja yang seragam, kemas dan mudah dikemas kini.',
    'color' => 'amber',
    'questions' => [
        $c('s1', 'Slide Master', '🎨', 1, 'Logo syarikat perlu ada pada <strong>setiap slaid</strong>. Apakah cara yang paling sesuai?',
            ['Salin dan tampal logo ke setiap slaid', 'Letakkan logo pada Slide Master (View → Slide Master)', 'Jadikan logo gambar latar slaid pertama', 'Insert → Header & Footer'], 1,
            'Satu tempat untuk semua slaid.', 'Logo pada <strong>Slide Master</strong> muncul pada semua slaid dan tidak terusik semasa menyunting. Jika disalin ke setiap slaid, 30 slaid bermakna 30 logo yang perlu dikemas kini.'),
        $c('s2', 'Slide Master', '🎨', 2, 'Pengurus anda meminta fon semua tajuk dalam 40 slaid ditukar. Apakah cara yang paling cepat?',
            ['Pilih setiap tajuk satu demi satu', 'Ubah fon tajuk di Slide Master (atau Design → Variants → Fonts)', 'Find and Replace', 'Format Painter pada setiap slaid'], 1,
            'Ubah pada induknya.', 'Fon tajuk yang ditetapkan di <strong>Slide Master</strong> atau fon tema berubah serentak pada semua slaid yang menggunakan layout tersebut.'),
        $c('s3', 'Susunan', '📐', 1, 'Tiga kotak perlu mempunyai <strong>jarak yang sama</strong> antara satu sama lain.',
            ['Seret dan anggar dengan mata', 'Align → Distribute Horizontally', 'Group, kemudian Center', 'Tukar saiz kotak'], 1,
            'Ciri ini ada dalam menu Align.', '<strong>Distribute Horizontally</strong> menyamakan jarak antara objek yang dipilih.'),
        $c('s4', 'Susunan', '📋', 2, 'Satu bentuk tertimbus di bawah gambar dan tidak boleh diklik. Bagaimanakah cara memilihnya?',
            ['Padam gambar dahulu', 'Selection Pane (Alt+F10) → klik nama bentuk itu', 'Ctrl+A', 'Undo berulang kali'], 1,
            'Ada senarai yang memaparkan semua objek.', '<strong>Selection Pane</strong> menyenaraikan setiap objek pada slaid. Anda boleh memilih, menyorok atau menyusun lapisannya.'),
        $c('s5', 'Carta', '📊', 2, 'Carta jualan daripada Excel perlu <strong>sentiasa terkini</strong> apabila data Excel berubah.',
            ['Ambil tangkapan skrin carta', 'Paste → Use Destination Theme & Link Data', 'Paste → Picture', 'Taip semula angka'], 1,
            'Pilihan tampal yang mengandungi perkataan "Link".', '<strong>Link Data</strong> memautkan carta kepada fail Excel. Kemas kini dengan Chart Design → Refresh Data.'),
        $c('s6', 'Animasi', '✨', 2, 'Apakah perbezaan antara <strong>Transition</strong> dan <strong>Animation</strong>?',
            ['Kedua-duanya sama', 'Transition = antara slaid; Animation = objek di dalam slaid', 'Transition = objek; Animation = slaid', 'Transition hanya untuk video'], 1,
            'Kedua-duanya berada dalam tab yang berlainan.', '<strong>Transition</strong> berlaku ketika bertukar slaid. <strong>Animation</strong> menggerakkan objek di dalam satu slaid.'),
        $c('s7', 'Animasi', '✨', 3, 'Anda mahu sebuah kotak bergerak dengan lancar dari kiri slaid 3 ke kanan slaid 4. Ciri manakah yang paling sesuai?',
            ['Animation → Fly In', 'Gandakan slaid, alihkan kotak, kemudian Transitions → Morph', 'Motion Path pada setiap kotak', 'Hyperlink'], 1,
            'Satu jenis transition dalam Microsoft 365.', '<strong>Morph</strong> menganimasikan perbezaan antara dua slaid yang hampir sama. Anda tidak perlu melukis laluan animasi.'),
        $c('s8', 'Membentang', '🖥️', 1, 'Anda mahu melihat <strong>nota penceramah dan slaid seterusnya</strong>, sementara audiens hanya nampak slaid.',
            ['Reading View', 'Presenter View', 'Slide Sorter', 'Outline View'], 1,
            'Slide Show → Use …', '<strong>Presenter View</strong> (Alt+F5) memaparkan nota, pemasa dan slaid seterusnya di skrin anda sahaja.'),
        $c('s9', 'Reka bentuk', '🎨', 1, 'Slaid anda penuh dengan perenggan panjang. Apakah nasihat yang paling sesuai?',
            ['Kecilkan fon supaya muat', 'Satu idea bagi setiap slaid; perincian dalam Speaker Notes', 'Tambah animasi pada setiap baris', 'Gunakan dua lajur teks'], 1,
            'Audiens sepatutnya mendengar, bukan membaca.', 'Pastikan teks pada slaid ringkas. Letakkan perincian dalam <strong>Speaker Notes</strong> untuk rujukan anda.'),
        $c('s10', 'Kongsi', '💾', 2, 'Fail .pptx menggunakan fon khas jenama dan akan dibuka di komputer pelanggan. Apakah langkah yang betul?',
            ['Tiada langkah diperlukan kerana fon ikut fail', 'File → Options → Save → Embed fonts in the file (atau hantar PDF)', 'Tukar Slide Size kepada 4:3', 'Compress Pictures'], 1,
            'Fon perlu dibawa bersama fail.', 'Tanpa <strong>Embed fonts</strong>, komputer penerima menggantikan fon dan susun atur boleh berubah. PDF pula mengunci rupa slaid.'),
    ],
];
