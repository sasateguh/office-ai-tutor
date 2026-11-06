<?php

declare(strict_types=1);

/**
 * Set latihan 'laporan-panjang' (BM). Versi EN: ../en/latihan/laporan-panjang.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Laporan panjang',
    'icon' => 'book-open',
    'tagline' => 'Table of Contents, kapsyen, cross-reference dan medan',
    'description' => 'Nombor rajah, rujukan silang, nota kaki dan Table of Contents dijana oleh Word sebagai medan. Latih cara memasukkan, mengemas kini dan membetulkannya.',
    'color' => 'amber',
    'questions' => [
        $p('lp1', 'Medan', '🔁', 1, 'Anda sudah klik dalam Table of Contents. Tekan pintasan untuk <strong>mengemas kini medan</strong> itu.', ['F9'],
            'Satu kekunci fungsi sahaja.', '<strong>F9</strong> mengemas kini medan yang dipilih. Tekan Ctrl+A dahulu untuk mengemas kini semua medan dalam dokumen.'),
        $p('lp2', 'Medan', '🔁', 2, 'Nombor rajah kelihatan pelik. Tekan pintasan untuk <strong>memaparkan kod semua medan</strong> dalam dokumen, contohnya <code>{ SEQ Rajah }</code>.', ['Alt+F9'],
            'Kekunci fungsi yang sama dengan kemas kini medan, ditambah satu pengubah.', '<strong>Alt+F9</strong> menogol kod semua medan. Shift+F9 menogol medan yang dipilih sahaja. Tekan sekali lagi untuk kembali kepada nombor.'),
        $p('lp3', 'Nota', '📝', 2, 'Tekan pintasan untuk <strong>memasukkan nota kaki (footnote)</strong> pada kedudukan kursor.', ['Ctrl+Alt+F'],
            'F untuk Footnote, dengan dua kekunci pengubah.', '<strong>Ctrl+Alt+F</strong> = Insert Footnote. Ctrl+Alt+D pula memasukkan nota hujung (endnote).'),
        $p('lp4', 'Medan', '🔁', 3, 'Salinan akhir laporan perlu dihantar dan nombor dalam satu medan tidak boleh berubah lagi. Pilih medan itu dan tekan pintasan untuk <strong>menukarnya kepada teks biasa</strong>.', ['Ctrl+Shift+F9'],
            'Kekunci kemas kini medan, ditambah dua pengubah.', '<strong>Ctrl+Shift+F9</strong> (Unlink Field) menukar medan kepada teks. Nombor tidak akan dikemas kini lagi, jadi gunakannya pada salinan akhir sahaja.'),
        $c('lp5', 'Kapsyen', '🏷️', 1, 'Rajah dalam laporan perlu bernombor <strong>Rajah 1, Rajah 2</strong> secara automatik. Apakah langkah pertama?',
            ['Taip "Rajah 1" di bawah gambar', 'Klik kanan gambar → Insert Caption', 'Insert → Text Box', 'Insert → Page Number'], 1,
            'Kapsyen ialah medan bernombor.', '<strong>Insert Caption</strong> (atau References → Insert Caption) memasukkan nombor sebagai medan. Nombor dikira semula apabila rajah ditambah atau dipindah.'),
        $c('lp6', 'Kapsyen', '🏷️', 2, 'Kotak Insert Caption hanya menawarkan label Figure, Table dan Equation. Laporan anda dalam BM perlukan label <strong>Rajah</strong>. Apakah yang perlu dibuat?',
            ['Taip Rajah dan padam perkataan Figure', 'Klik New Label dan cipta label Rajah', 'Tukar bahasa Windows kepada BM', 'Gunakan Table of Figures'], 1,
            'Butang dalam kotak Insert Caption itu sendiri.', '<strong>New Label</strong> mencipta label sendiri seperti Rajah dan Jadual. Label itu kemudiannya boleh dipilih dalam Table of Figures dan Cross-reference.'),
        $c('lp7', 'Kapsyen', '🏷️', 2, 'Ayat "<em>lihat Rajah 3</em>" perlu berubah sendiri apabila rajah itu menjadi Rajah 4. Apakah ciri yang sesuai?',
            ['Hyperlink kepada gambar', 'References → Cross-reference → Only label and number', 'Bookmark pada gambar', 'Taip semula setiap kali'], 1,
            'Rujukan kepada kapsyen, bukan kepada gambar.', '<strong>Cross-reference</strong> menghasilkan medan yang membaca nombor kapsyen. Pilih <strong>Only label and number</strong> supaya ayat hanya mengandungi "Rajah 3". Kemas kini dengan F9.'),
        $c('lp8', 'Kapsyen', '🏷️', 2, 'Halaman awal tesis memerlukan <strong>Senarai Jadual</strong> yang berasingan daripada Senarai Rajah. Bagaimanakah ia dibina?',
            ['Salin semua kapsyen jadual ke satu halaman', 'References → Insert Table of Figures → Caption label: Jadual', 'References → Table of Contents → Custom Table of Contents', 'Insert → Table'], 1,
            'Satu senarai untuk satu label.', '<strong>Insert Table of Figures</strong> menyenaraikan kapsyen bagi satu label. Bina sekali untuk Rajah dan sekali lagi untuk Jadual.'),
        $c('lp9', 'Medan', '🔁', 3, 'Selepas beberapa rajah dipindahkan, nombor dalam kapsyen betul, tetapi ayat "lihat Rajah 2" dan Senarai Rajah masih menunjukkan nombor lama. Apakah cara yang paling cepat?',
            ['Ctrl+A, kemudian F9, dan pilih Update entire table jika ditanya', 'Simpan sebagai PDF', 'Padam semua cross-reference dan masukkan semula', 'Tutup dan buka semula Word'], 0,
            'Cross-reference dan senarai ialah medan yang tidak dikemas kini sendiri.', 'Pilih seluruh dokumen dengan <strong>Ctrl+A</strong>, kemudian tekan <strong>F9</strong>. Semua medan dikemas kini serentak. Pilih Update entire table untuk Table of Contents dan Senarai Rajah.'),
        $susun('lp10', 'Kapsyen', '🏷️', 3, 'Susun langkah untuk menghasilkan kapsyen bernombor ikut bab, seperti <strong>Rajah 2.1</strong>, dengan senarai rajah yang tepat.',
            ['Nomborkan tajuk Heading 1 dengan Multilevel List', 'Pilih gambar → References → Insert Caption → label Rajah',
             'Numbering → tanda Include chapter number', 'Masukkan senarai rajah dengan Insert Table of Figures',
             'Sebelum menghantar, tekan Ctrl+A kemudian F9'],
            'Nombor bab dalam kapsyen dibaca daripada tajuk Heading 1 yang bernombor.',
            'Kapsyen ikut bab hanya berfungsi apabila Heading 1 sudah bernombor dengan <strong>Multilevel List</strong>. Kemudian masukkan kapsyen dengan <strong>Include chapter number</strong>, bina senarai, dan kemas kini semua medan dengan Ctrl+A, F9.'),
    ],
];
