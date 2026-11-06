<?php

declare(strict_types=1);

/**
 * Set latihan 'visual-data' (BM). Versi EN: ../en/latihan/visual-data.php (struktur sama). Susunan set: ../latihan.php.
 */
['pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Carta dan rajah',
    'icon' => 'chart-column',
    'tagline' => 'Jenis carta, data carta, carta Excel terpaut dan SmartArt',
    'description' => 'Pilih carta yang menjawab soalan audiens, betulkan data di belakangnya, dan tentukan bila SmartArt sesuai atau bila rajah sendiri lebih baik.',
    'color' => 'purple',
    'questions' => [
        $c('vd1', 'Jenis carta', '📈', 1, 'Anda mahu menunjukkan <strong>bilangan pelajar mendaftar setiap bulan</strong> dari Januari hingga Disember. Carta manakah yang paling sesuai?',
            ['Pie', 'Line', 'Doughnut', 'Radar'], 1,
            'Data yang berubah mengikut masa.', 'Carta <strong>Line</strong> menunjukkan arah aliran dari bulan ke bulan. Pie dan Doughnut menunjukkan bahagian daripada satu jumlah, bukan perubahan masa.'),
        $c('vd2', 'Jenis carta', '📊', 1, 'Tinjauan anda mempunyai responden daripada <strong>sembilan fakulti</strong>. Carta manakah yang paling mudah dibandingkan?',
            ['Pie dengan sembilan potongan', 'Bar mendatar, disusun dari terbesar ke terkecil', '3-D Pie', 'Line'], 1,
            'Mata membandingkan panjang dengan lebih tepat daripada sudut.', '<strong>Bar</strong> yang disusun memudahkan perbandingan dan nama fakulti yang panjang muat pada paksi. Pie sukar dibaca bila lebih daripada lima potongan.'),
        $c('vd3', 'Data carta', '🧮', 2, 'Carta dimasukkan dengan Insert → Chart. Seminggu kemudian, satu angka perlu dibetulkan. Di manakah anda menukar datanya?',
            ['Taip angka baharu pada label carta', 'Pilih carta → Chart Design → Edit Data', 'Padam carta dan bina semula', 'Format → Shape Fill'], 1,
            'Data carta PowerPoint disimpan dalam lembaran kecil di belakang carta.', '<strong>Edit Data</strong> membuka lembaran data carta. Ubah nilai dalam sel dan carta dikemas kini serta-merta.'),
        $c('vd4', 'Data carta', '🧮', 2, 'Carta anda menunjukkan bulan sebagai legenda dan fakulti pada paksi, sedangkan anda mahu sebaliknya. Apakah yang perlu ditekan?',
            ['Chart Design → Switch Row/Column (dengan Edit Data dibuka)', 'Change Chart Type → Bar', 'Format Axis → Reverse order', 'Padam legenda'], 0,
            'Baris dan lajur data boleh bertukar peranan.', '<strong>Switch Row/Column</strong> menukar sama ada baris atau lajur menjadi siri. Butang ini kelabu sehingga data carta dibuka dengan Edit Data.'),
        $c('vd5', 'Jenis carta', '📊', 3, 'Satu slaid perlu menunjukkan <strong>hasil jualan (RM ribu)</strong> dan <strong>margin keuntungan (%)</strong> bersama. Margin kelihatan rata di bawah kerana skalanya kecil. Apakah penyelesaiannya?',
            ['Bahagi hasil jualan dengan 1 000', 'Change Chart Type → Combo: jualan sebagai lajur, margin sebagai garis pada Secondary Axis', 'Dua carta pie bersebelahan', 'Padam siri margin'], 1,
            'Dua unit yang berbeza perlukan dua paksi.', 'Carta <strong>Combo</strong> membolehkan setiap siri mempunyai jenis sendiri. <strong>Secondary Axis</strong> memberi siri peratus skala sendiri di sebelah kanan.'),
        $c('vd6', 'Kejelasan carta', '🎯', 2, 'Carta anda menggunakan kesan 3-D, gridline tebal, legenda di bawah dan enam warna. Apakah pembaikan yang paling sesuai?',
            ['Tambah animasi supaya menarik perhatian', 'Gunakan 2-D, buang gridline yang tidak perlu, label data terus pada siri, dan satu warna aksen untuk bar yang ingin ditekankan', 'Besarkan legenda', 'Tukar kepada Doughnut'], 1,
            'Setiap unsur yang tidak membawa maklumat menyukarkan pembacaan.', 'Kesan 3-D mengherotkan ketinggian bar. <strong>Label data</strong> pada siri mengurangkan keperluan melihat legenda, dan <strong>satu warna aksen</strong> menunjukkan perkara yang ingin anda sampaikan.'),
        $c('vd7', 'SmartArt', '🔷', 1, 'Slaid anda mengandungi senarai bertitik lima langkah proses. Apakah cara paling cepat untuk menjadikannya rajah?',
            ['Lukis lima kotak dan anak panah dengan tangan', 'Pilih kotak teks → Home → Convert to SmartArt → pilih layout proses', 'Insert → Chart', 'Insert → Table'], 1,
            'Butang dalam kumpulan Paragraph pada tab Home.', '<strong>Convert to SmartArt</strong> menukar senarai sedia ada kepada rajah. Aras senarai (Tab, Shift+Tab) menjadi aras rajah.'),
        $c('vd8', 'SmartArt', '🔷', 3, 'Rajah SmartArt anda perlu satu kotak diletakkan bebas di luar susun atur dan setiap anak panah dianimasikan berasingan. Apakah langkah yang sesuai, dan apakah kesannya?',
            ['SmartArt Design → Reset Graphic; tiada kesan', 'SmartArt Design → Convert → Convert to Shapes; rajah menjadi bentuk biasa dan tidak boleh ditukar kembali kepada SmartArt', 'Ungroup dua kali; susun atur kekal SmartArt', 'Change Colors; rajah kekal SmartArt'], 1,
            'Selepas penukaran, PowerPoint tidak lagi mengurus susun atur.', '<strong>Convert to Shapes</strong> memberi kawalan penuh ke atas setiap bentuk. Kesannya, teks tidak lagi menyusun semula rajah secara automatik. Gandakan slaid dahulu jika mahu menyimpan versi SmartArt.'),
        $susun('vd9', 'Carta Excel', '🔗', 2, 'Susun langkah untuk memasukkan carta Excel yang <strong>terpaut</strong> dan mengemas kininya selepas data berubah.',
            ['Dalam Excel, pilih carta → Ctrl+C', 'Dalam PowerPoint, Paste Options → Use Destination Theme & Link Data', 'Ubah data dalam buku kerja Excel yang kini dipaut, kemudian simpan', 'Dalam PowerPoint, pilih carta → Chart Design → Refresh Data'],
            'Pautan dibuat semasa menampal. Kemas kini dibuat selepas data berubah.',
            '<strong>Link Data</strong> menyimpan pautan kepada buku kerja Excel. <strong>Refresh Data</strong> menarik nilai terkini. Jika buku kerja dipindah, pautan dibetulkan dalam File → Info → Edit Links to Files.'),
        $c('vd10', 'Kerja sebenar', '🎓', 3, 'Pembentangan dapatan kajian anda ada satu slaid dengan <strong>jadual 40 angka</strong>. Penilai hanya ada satu minit untuk slaid itu. Apakah cara yang paling sesuai?',
            ['Kecilkan fon jadual supaya semua angka muat', 'Tunjukkan satu carta untuk perbandingan utama dengan tajuk berupa dapatan, dan pindahkan jadual penuh ke slaid sandaran', 'Baca semua 40 angka dengan kuat', 'Tambah animasi pada setiap baris jadual'], 1,
            'Audiens perlu tahu apa yang perlu dilihat dalam masa yang singkat.', 'Satu carta dengan tajuk seperti "Fakulti Sains mencatat skor tertinggi" menyampaikan dapatan dengan cepat. <strong>Slaid sandaran</strong> selepas slaid penutup menyimpan jadual penuh untuk soalan penilai.'),
    ],
];
