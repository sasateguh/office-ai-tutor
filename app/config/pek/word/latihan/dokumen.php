<?php

declare(strict_types=1);

/**
 * Set latihan 'dokumen' (BM). Versi EN: ../en/latihan/dokumen.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Dokumen kemas',
    'icon' => 'file-text',
    'tagline' => 'Styles, halaman, laporan dan Mail Merge',
    'description' => 'Pilih cara yang betul untuk dokumen kerja sebenar: laporan, surat rasmi dan dokumen yang dikongsi.',
    'color' => 'amber',
    'questions' => [
        $c('d1', 'Styles', '🎨', 1, 'Anda mahukan <strong>Table of Contents</strong> automatik. Apakah yang perlu ada pada setiap tajuk bab?',
            ['Bold dan saiz fon 16', 'Style Heading 1 atau Heading 2', 'Nombor di hadapan tajuk', 'Garis bawah'], 1,
            'Table of Contents membaca style, bukan rupa teks.', 'Table of Contents dibina daripada style <strong>Heading 1, 2 dan 3</strong>. Tajuk yang hanya ditebalkan tidak dikenali.'),
        $c('d2', 'Laporan', '📑', 1, 'Anda menambah 3 halaman ke dalam laporan. Nombor halaman dalam <strong>Table of Contents</strong> kini salah. Apakah yang perlu dilakukan?',
            ['Padam Table of Contents dan masukkan semula', 'Taip nombor baharu secara manual', 'Klik Table of Contents → Update Table (atau F9)', 'Simpan dan buka semula fail'], 2,
            'Table of Contents ialah field.', 'Klik dalam Table of Contents → <strong>Update Table</strong> → Update entire table. Tajuk dan nombor halaman dikemas kini serentak.'),
        $c('d3', 'Halaman', '📐', 2, 'Laporan berorientasi potret, tetapi <strong>halaman 5 sahaja</strong> perlu landscape untuk jadual yang lebar. Apakah cara yang betul?',
            ['Putar jadual 90°', 'Section Break (Next Page) sebelum dan selepas halaman 5, kemudian Orientation → Landscape', 'Page Break sebelum halaman 5', 'Simpan halaman 5 dalam fail berasingan'], 1,
            'Orientasi yang berbeza memerlukan section yang berbeza.', '<strong>Section Break</strong> membolehkan setiap section mempunyai orientasi, margin dan header sendiri. Page Break tidak boleh.'),
        $c('d4', 'Halaman', '🔢', 2, 'Halaman kulit laporan <strong>tidak perlu nombor halaman</strong>, tetapi halaman lain perlu. Apakah pilihan yang perlu ditanda?',
            ['Different First Page', 'Different Odd & Even Pages', 'Link to Previous', 'Show Document Text'], 0,
            'Terdapat dalam tab Header & Footer.', '<strong>Different First Page</strong> memberi halaman pertama header dan footer sendiri, yang boleh dibiarkan kosong.'),
        $c('d5', 'Format', '⏎', 1, 'Cara yang paling kemas untuk memberi jarak antara perenggan ialah…',
            ['Tekan Enter dua kali', 'Spacing After pada perenggan (atau dalam style)', 'Tambah baris kosong dengan Space', 'Tukar kepada fon yang lebih besar'], 1,
            'Jarak yang kekal walaupun teks berubah.', '<strong>Spacing After</strong> (Layout → Spacing) memberi jarak tetap tanpa perenggan kosong yang mudah tercicir.'),
        $c('d6', 'Jadual', '🖼️', 2, 'Sebuah jadual panjang merentas 3 halaman. Anda mahu <strong>baris tajuk jadual muncul pada setiap halaman</strong>.',
            ['Salin baris tajuk ke setiap halaman', 'Table Layout → Repeat Header Rows', 'Insert → Header', 'Pecahkan kepada 3 jadual'], 1,
            'Pilih baris tajuk dahulu.', '<strong>Repeat Header Rows</strong> mengulang baris tajuk secara automatik, dan ia kekal betul apabila jadual berubah.'),
        $c('d7', 'Gambar', '🖼️', 2, 'Gambar dalam laporan sering berubah kedudukan apabila teks disunting. Pilihan Wrap Text yang paling stabil untuk laporan ialah…',
            ['Square', 'Behind Text', 'In Line with Text', 'Tight'], 2,
            'Gambar dilayan seperti satu aksara.', '<strong>In Line with Text</strong> menjadikan gambar sebahagian daripada baris teks, jadi ia bergerak bersama perenggannya.'),
        $c('d8', 'Semakan', '✍️', 2, 'Sebelum menghantar versi akhir kepada klien, dokumen masih mengandungi Track Changes dan komen. Apakah langkah yang betul?',
            ['Matikan Track Changes sahaja', 'Accept All Changes, padam komen, kemudian Inspect Document', 'Tukar kepada paparan "No Markup"', 'Simpan sebagai fail .docx baharu'], 1,
            '"No Markup" hanya menyorokkan paparan.', 'Paparan <strong>No Markup</strong> masih menyimpan semua suntingan dalam fail. Accept All Changes, padam komen, kemudian <strong>Inspect Document</strong> untuk membuangnya sepenuhnya.'),
        $c('d9', 'Mail Merge', '✉️', 2, 'Anda perlu menghantar surat yang sama kepada 200 pelanggan. Nama dan alamat mereka dalam Excel. Apakah ciri yang sesuai?',
            ['Salin dan tampal 200 kali', 'Mailings → Start Mail Merge → Letters', 'Insert → Object', 'References → Citation'], 1,
            'Tab Mailings.', '<strong>Mail Merge</strong> mengambil setiap baris dalam Excel dan menjana satu surat untuk setiap pelanggan.'),
        $c('d10', 'Mail Merge', '✉️', 3, 'Dalam Mail Merge, fail Excel penerima mesti…',
            ['Mempunyai baris pertama sebagai tajuk lajur (Nama, Alamat…) tanpa baris kosong', 'Disimpan sebagai PDF', 'Mempunyai satu lajur sahaja', 'Dikunci dengan kata laluan'], 0,
            'Word membaca nama lajur sebagai nama medan.', 'Baris pertama menjadi <strong>Merge Field</strong> (contohnya «Nama»). Baris kosong menghasilkan surat kosong.'),
        $c('d11', 'Simpan', '💾', 1, 'Dokumen akhir perlu dihantar dan <strong>susun aturnya tidak boleh berubah</strong> pada komputer penerima. Apakah format yang paling sesuai?',
            ['.docx', '.txt', 'PDF', '.rtf'], 2,
            'Format yang berfungsi seperti cetakan digital.', '<strong>PDF</strong> mengekalkan fon dan susun atur. Hantar .docx hanya apabila penerima perlu menyunting.'),
        $c('d12', 'Format', '🔤', 1, 'Teks yang ditampal daripada laman web membawa fon dan warna yang tidak sepadan. Apakah cara yang paling cepat?',
            ['Tukar fon satu demi satu', 'Paste → Keep Text Only (atau Ctrl+Space selepas menampal)', 'Taip semula', 'Simpan sebagai PDF'], 1,
            'Tampal tanpa format sumber.', '<strong>Keep Text Only</strong> menampal teks sahaja, jadi format dokumen anda kekal. Dalam Microsoft 365, pintasannya ialah Ctrl+Shift+V.'),
        $susun('d13', 'Laporan', '📑', 2, 'Susun langkah untuk menghasilkan <strong>Table of Contents</strong> automatik yang kekal tepat selepas laporan disunting.',
            ['Gunakan style Heading 1 dan Heading 2 pada setiap tajuk bab dan subbab', 'Letakkan kursor pada halaman kosong selepas halaman kulit',
             'References → Table of Contents → pilih gaya automatik', 'Selepas menyunting, klik kanan Table of Contents → Update Field → Update entire table'],
            'Table of Contents hanya boleh membaca tajuk yang sudah mempunyai style.',
            'Style Heading mesti ada dahulu kerana Table of Contents dibina daripadanya. Kemudian pilih tempat, masukkan jadual dari tab <strong>References</strong>, dan kemas kini dengan <strong>Update Field</strong> setiap kali tajuk atau halaman berubah.'),
    ],
];
