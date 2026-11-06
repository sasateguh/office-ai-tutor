<?php

declare(strict_types=1);

/**
 * Set latihan 'reka-slaid' (BM). Versi EN: ../en/latihan/reka-slaid.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Reka slaid',
    'icon' => 'palette',
    'tagline' => 'Tipografi, grid, guides, susunan objek dan gambar',
    'description' => 'Slaid yang mudah dibaca bergantung pada hierarki teks, jajaran dan gambar yang disediakan dengan betul. Latih keputusan reka bentuk dan arahan Picture Format.',
    'color' => 'amber',
    'questions' => [
        $p('rs1', 'Grid dan guides', '📏', 1, 'Tekan pintasan untuk <strong>memapar atau menyorok guides</strong> (garis panduan yang boleh diseret).', ['Alt+F9'],
            'Alt dengan satu kekunci fungsi, satu sebelum Selection Pane.', '<strong>Alt+F9</strong> memapar atau menyorok guides. Objek yang diseret berhampiran guide akan melekat padanya.'),
        $p('rs2', 'Grid dan guides', '📏', 1, 'Tekan pintasan untuk <strong>memapar atau menyorok gridlines</strong> pada slaid.', ['Shift+F9'],
            'Kekunci fungsi yang sama dengan guides, tetapi dengan Shift.', '<strong>Shift+F9</strong> memapar atau menyorok grid. Jarak grid ditetapkan dalam View → Show (anak panah kecil) → Grid and Guides.'),
        $c('rs3', 'Tipografi', '🔤', 1, 'Slaid akan dipapar dalam dewan kuliah. Apakah saiz fon minimum yang munasabah untuk <strong>teks isi</strong>?',
            ['10 pt', '14 pt', '24 pt', '60 pt'], 2,
            'Uji dengan membayangkan pelajar di barisan belakang.', 'Isi sekitar <strong>24 pt</strong> dan tajuk sekitar 36 pt. Teks kecil seperti sumber atau label carta tidak kurang daripada 14 pt. Jika teks tidak muat, ia patut dipecah kepada dua slaid.'),
        $c('rs4', 'Tipografi', '🔤', 2, 'Slaid anda menggunakan empat fon dan lima warna teks untuk membezakan tajuk, isi dan nota. Apakah cara yang lebih jelas?',
            ['Tambah garis bawah pada semua tajuk', 'Gunakan dua fon tema sahaja dan bezakan aras dengan saiz dan ketebalan', 'Gunakan WordArt untuk tajuk', 'Tukar setiap aras kepada warna yang lebih terang'], 1,
            'Hierarki boleh dibina tanpa menambah fon.', 'Fon tema <strong>Headings</strong> dan <strong>Body</strong> sudah cukup. Saiz dan ketebalan membezakan tiga aras (tajuk, isi, nota). Warna yang banyak menyukarkan mata mencari perkara penting.'),
        $c('rs5', 'Susunan', '📐', 2, 'Logo perlu berada <strong>tepat di tengah slaid</strong>, bukan di tengah objek lain. Apakah tetapan Align yang betul?',
            ['Align → Align Selected Objects, kemudian Align Center', 'Align → Align to Slide, kemudian Align Center dan Align Middle', 'Distribute Horizontally', 'Group, kemudian seret ke tengah'], 1,
            'Align mempunyai dua mod rujukan.', 'Dengan <strong>Align to Slide</strong>, objek dijajarkan kepada tepi slaid. Align Selected Objects pula menjajarkan objek sesama sendiri.'),
        $c('rs6', 'Gambar', '🖼️', 2, 'Foto potret kelihatan <strong>terherot</strong> selepas saiznya diubah. Bagaimanakah cara mengubah saiz tanpa herot?',
            ['Seret pemegang di tengah sisi gambar', 'Seret pemegang penjuru (Lock aspect ratio kekal ditanda)', 'Tukar Slide Size', 'Gunakan Artistic Effects'], 1,
            'Pemegang yang mengubah lebar dan tinggi serentak.', 'Pemegang <strong>penjuru</strong> mengekalkan nisbah apabila <strong>Lock aspect ratio</strong> ditanda (Picture Format → Size, anak panah kecil). Pemegang tengah sisi mengubah satu arah sahaja. Untuk membaiki gambar yang sudah herot: Reset Picture & Size.'),
        $c('rs7', 'Gambar', '🖼️', 2, 'Foto profil segi empat perlu dipapar sebagai <strong>bulatan sempurna</strong>. Apakah langkah yang betul?',
            ['Lukis bulatan putih di atas foto', 'Crop → Aspect Ratio → 1:1, kemudian Crop → Crop to Shape → Oval', 'Picture Border → bulat', 'Remove Background'], 1,
            'Bentuk oval pada gambar yang tidak segi empat sama menjadi bujur.', 'Potong dahulu kepada <strong>1:1</strong> supaya lebar sama dengan tinggi. Selepas itu <strong>Crop to Shape → Oval</strong> menghasilkan bulatan, bukan bujur.'),
        $c('rs8', 'Gambar', '💾', 2, 'Fail pembentangan 85 MB kerana banyak foto dari telefon dan tidak boleh dihantar melalui e-mel. Apakah langkah pertama yang patut dicuba?',
            ['Tukar semua slaid kepada PDF', 'Picture Format → Compress Pictures: nyahtanda Apply only to this picture, pilih resolusi lebih rendah dan Delete cropped areas of pictures', 'Padam nota penceramah', 'Simpan sebagai .ppt lama'], 1,
            'Saiz fail biasanya datang daripada resolusi foto.', '<strong>Compress Pictures</strong> mengurangkan resolusi semua gambar dan membuang bahagian yang telah dipotong. Bahagian yang dibuang tidak boleh dipulihkan, jadi simpan salinan asal dahulu.'),
        $c('rs9', 'Gambar', '🖼️', 3, 'Anda mahu memaparkan produk tanpa latar bilik di belakangnya. Remove Background membuang sebahagian produk juga. Apakah yang patut dibuat?',
            ['Batalkan dan gunakan foto lain sahaja', 'Gunakan Mark Areas to Keep dan lukis pada bahagian produk yang hilang, kemudian Keep Changes', 'Tukar Transparency kepada 100%', 'Crop to Shape'], 1,
            'Remove Background boleh dibetulkan dengan tangan.', '<strong>Mark Areas to Keep</strong> mengembalikan bahagian yang tersilap dibuang. <strong>Mark Areas to Remove</strong> membuang bahagian latar yang tertinggal. Tekan <strong>Keep Changes</strong> untuk selesai.'),
        $susun('rs10', 'Tipografi', '🔤', 3, 'Fail daripada rakan menggunakan fon yang tiada di komputer kuliah. Susun langkah untuk <strong>menukar fon itu pada semua slaid</strong> sekali gus.',
            ['Home → Replace (anak panah) → Replace Fonts', 'Pilih fon yang tiada dalam senarai Replace dan fon pengganti dalam senarai With', 'Klik Replace, kemudian Close',
             'Tekan F5 dan semak bahawa teks yang panjang masih muat dalam kotaknya'],
            'Kotak dialog dibuka dahulu. Hasilnya disemak selepas penukaran.',
            '<strong>Replace Fonts</strong> menukar satu fon pada semua slaid sekali gus. Jika slaid menggunakan fon tema, menukar fon tema (Design → Variants → Fonts) juga mencapai hasil yang sama.'),
    ],
];
