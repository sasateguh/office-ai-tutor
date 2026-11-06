<?php

declare(strict_types=1);

/**
 * Set latihan 'styles-struktur' (BM). Versi EN: ../en/latihan/styles-struktur.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Styles dan struktur',
    'icon' => 'heading',
    'tagline' => 'Heading, Modify Style dan nombor bab',
    'description' => 'Bina struktur dokumen panjang dengan style, bukan format tangan: aras tajuk, Styles pane, Navigation Pane dan nombor bab 1, 1.1 yang dipaut kepada Heading.',
    'color' => 'purple',
    'questions' => [
        $p('ss1', 'Styles', '🎨', 1, 'Tekan pintasan untuk menjadikan subtajuk ini <strong>Heading 2</strong>.', ['Ctrl+Alt+2'],
            'Sama seperti Heading 1, cuma nombor aras berbeza.', '<strong>Ctrl+Alt+2</strong> = Heading 2. Ctrl+Alt+1 untuk Heading 1 dan Ctrl+Alt+3 untuk Heading 3.'),
        $p('ss2', 'Styles', '🎨', 2, 'Tekan pintasan untuk menjadikan tajuk kecil ini <strong>Heading 3</strong>.', ['Ctrl+Alt+3'],
            'Dua kekunci pengubah dan nombor aras tajuk.', '<strong>Ctrl+Alt+3</strong> = Heading 3. Gunakan aras mengikut urutan: Heading 1, kemudian 2, kemudian 3. Jangan langkau aras.'),
        $p('ss3', 'Styles', '🎨', 2, 'Tekan pintasan untuk membuka <strong>Styles pane</strong>, iaitu senarai penuh style di sisi skrin.', ['Ctrl+Alt+Shift+S'],
            'Tiga kekunci pengubah serentak, dan huruf S untuk Styles.', '<strong>Ctrl+Alt+Shift+S</strong> membuka Styles pane. Ctrl+Shift+S pula membuka kotak Apply Styles untuk menaip nama style.'),
        $c('ss4', 'Styles', '🎨', 1, 'Pensyarah meminta semua teks isi laporan menggunakan <strong>Times New Roman 12</strong>. Apakah cara yang paling kemas?',
            ['Pilih semua teks (Ctrl+A) dan tukar fon', 'Klik kanan style Normal → Modify → tukar fon dan saiz', 'Tukar fon setiap perenggan satu demi satu', 'Tukar fon lalai Windows'], 1,
            'Teks isi menggunakan satu style yang sama.', 'Teks isi menggunakan style <strong>Normal</strong>. Ubah style itu sekali, dan setiap perenggan yang menggunakannya berubah. Ctrl+A juga mengubah tajuk, jadual dan kapsyen.'),
        $c('ss5', 'Styles', '🎨', 2, 'Setiap kali anda menebalkan satu perkataan dalam perenggan, <strong>semua perenggan Normal turut menjadi tebal</strong>. Apakah puncanya?',
            ['Track Changes sedang aktif', 'Pilihan Automatically update ditanda dalam Modify Style', 'Fail rosak dan perlu disimpan semula', 'Format Painter masih aktif'], 1,
            'Lihat bahagian bawah kotak Modify Style.', '<strong>Automatically update</strong> mengemas kini style setiap kali teks diformat dengan tangan. Kosongkan tanda itu dalam Modify Style.'),
        $c('ss6', 'Styles', '🎨', 2, 'Anda sudah memformat satu tajuk dengan rupa yang dikehendaki. Bagaimanakah semua tajuk Heading 1 lain mendapat rupa yang sama?',
            ['Gunakan Format Painter pada setiap tajuk', 'Klik kanan Heading 1 → Update Heading 1 to Match Selection', 'Salin dan tampal tajuk itu', 'Design → Watermark'], 1,
            'Style boleh mengambil rupa daripada teks yang dipilih.', 'Pilih tajuk yang sudah diformat, kemudian klik kanan <strong>Heading 1</strong> dalam Home → Styles → <strong>Update Heading 1 to Match Selection</strong>.'),
        $c('ss7', 'Struktur', '🧭', 2, 'Bab 4 laporan perlu dipindahkan sebelum Bab 3. Apakah cara yang paling selamat?',
            ['Potong dan tampal setiap halaman', 'Seret tajuk Bab 4 di atas Bab 3 dalam Navigation Pane', 'Tukar nombor bab secara manual', 'Simpan setiap bab dalam fail berasingan'], 1,
            'Tajuk Heading dipapar sebagai senarai di sisi skrin (Ctrl+F).', 'Dalam <strong>Navigation Pane</strong>, menyeret satu tajuk memindahkan seluruh bab bersama isinya. Nombor bab berbilang aras dikira semula.'),
        $c('ss8', 'Struktur', '🧭', 1, 'Anda mahu menukar fon dan jarak <strong>semua style</strong> dalam dokumen serentak untuk mencuba rupa lain. Apakah ciri yang sesuai?',
            ['Design → Document Formatting (Style Set)', 'Home → Clear All Formatting', 'Insert → Cover Page', 'View → Read Mode'], 0,
            'Tab Design.', '<strong>Style Set</strong> dalam Design → Document Formatting menukar fon dan jarak setiap style sekali gus. Cuba beberapa set sebelum memformat dengan tangan.'),
        $c('ss9', 'Nombor bab', '🔢', 3, 'Nombor bab 1, 1.1, 1.1.1 dalam tesis anda tidak berubah apabila bab dipindahkan. Apakah yang perlu dibetulkan?',
            ['Taip nombor dengan lebih berhati-hati', 'Pautkan setiap aras Multilevel List kepada style Heading (Link level to style)', 'Gunakan Numbering biasa pada setiap tajuk', 'Tukar tajuk kepada huruf besar'], 1,
            'Nombor yang ditaip ialah teks biasa.', 'Dalam Define New Multilevel List → More, pilih <strong>Link level to style</strong>: aras 1 = Heading 1, aras 2 = Heading 2. Nombor yang dipaut kepada style dikira semula sendiri.'),
        $susun('ss10', 'Nombor bab', '🔢', 3, 'Susun langkah untuk menghasilkan nombor <strong>BAB 1, 1.1, 1.2</strong> yang dipaut kepada style Heading.',
            ['Gunakan Heading 1 pada tajuk bab dan Heading 2 pada subtajuk', 'Klik dalam satu tajuk Heading 1',
             'Home → Multilevel List → Define New Multilevel List → More',
             'Aras 1: Link level to style Heading 1 dan taip BAB sebelum nombor kelabu; aras 2: Link level to style Heading 2',
             'Klik OK dan semak nombor tajuk dalam Navigation Pane'],
            'Style mesti ada dahulu sebelum senarai boleh dipaut kepadanya.',
            'Tajuk perlu mempunyai style Heading dahulu. Kemudian buka <strong>Define New Multilevel List</strong>, pautkan setiap aras kepada style, dan tambah perkataan BAB tanpa memadam nombor kelabu, kerana nombor itu ialah medan.'),
    ],
];
