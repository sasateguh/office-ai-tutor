<?php

declare(strict_types=1);

/**
 * Set latihan 'animasi-pembentang' (BM). Versi EN: ../en/latihan/animasi-pembentang.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Animasi dan membentang',
    'icon' => 'play',
    'tagline' => 'Animation Pane, masa animasi, Morph, Presenter View dan kawalan semasa slide show',
    'description' => 'Animasi yang baik menunjukkan satu idea pada satu masa. Latih cara menyusun kesan, menetapkan masa, menggunakan Morph dan mengawal slide show tanpa mencari butang di depan audiens.',
    'color' => 'amber',
    'questions' => [
        $c('ap1', 'Animasi', '🎬', 1, 'Slaid anda ada lima kesan animasi dan anda mahu melihat <strong>susunan semuanya dalam satu senarai</strong>. Apakah yang perlu dibuka?',
            ['Animations → Animation Pane', 'Transitions → Effect Options', 'View → Slide Sorter', 'Home → Arrange'], 0,
            'Panel di sisi kanan, dalam tab yang sama dengan galeri kesan.', '<strong>Animations → Animation Pane</strong> menyenaraikan setiap kesan pada slaid mengikut susunan main. Seret kesan dalam senarai itu untuk menukar susunannya.'),
        $c('ap2', 'Animasi', '🎬', 1, 'Tajuk sudah ada kesan Fade. Anda memilih Zoom dalam galeri Animations untuk menambah kesan kedua, tetapi <strong>Fade hilang</strong>. Apakah yang sepatutnya digunakan?',
            ['Effect Options', 'Animation Painter', 'Add Animation', 'Animation Pane → Play From'], 2,
            'Galeri menggantikan kesan. Ada butang lain untuk menambah.', 'Memilih kesan dalam galeri <strong>menggantikan</strong> kesan sedia ada. <strong>Add Animation</strong> menambah kesan baharu dan mengekalkan yang lama.'),
        $c('ap3', 'Masa', '⏱️', 2, 'Anda mahu gambar muncul <strong>sejurus selepas</strong> tajuk selesai muncul, tanpa klik. Apakah tetapan <strong>Start</strong> yang betul untuk gambar itu?',
            ['On Click', 'With Previous', 'After Previous', 'Delay 00.00'], 2,
            'Kesan bermula bila kesan sebelumnya tamat.', '<strong>After Previous</strong> memulakan kesan sebaik kesan sebelumnya tamat. <strong>With Previous</strong> memainkan kedua-duanya serentak, dan <strong>On Click</strong> menunggu klik.'),
        $p('ap4', 'Animasi', '⌨️', 2, 'Satu bentuk sudah ada animasi yang anda suka. Pilih bentuk itu dan tekan pintasan untuk <strong>menyalin animasinya</strong> (Animation Painter).', ['Alt+Shift+C'],
            'Sama seperti salin format (Ctrl+Shift+C), tetapi Alt menggantikan Ctrl.', '<strong>Alt+Shift+C</strong> menyalin animasi objek yang dipilih. Pilih objek lain dan tekan <strong>Alt+Shift+V</strong> untuk menampalnya.'),
        $c('ap5', 'Animasi', '🎯', 2, 'Slaid kuiz ada kotak soalan dan kotak jawapan. Jawapan mesti muncul <strong>hanya bila anda klik kotak soalan</strong>, bukan pada klik biasa. Apakah caranya?',
            ['Letakkan jawapan pada slaid seterusnya', 'Pilih animasi jawapan → Animations → Trigger → On Click of → kotak soalan', 'Tetapkan Start jawapan kepada After Previous', 'Insert → Action → Hyperlink to: Next Slide'], 1,
            'Pencetus boleh ditetapkan kepada objek tertentu pada slaid.', '<strong>Trigger → On Click of</strong> mengikat kesan kepada klik pada objek yang dipilih. Klik di tempat lain pada slaid tidak memainkannya.'),
        $c('ap6', 'Morph', '🔀', 2, 'Anda mahu gambar rajah membesar dan bergerak ke tengah dengan lancar antara slaid 4 dan slaid 5. Slaid 5 ialah salinan slaid 4 dengan gambar yang sudah dialihkan. <strong>Di manakah</strong> transisi Morph perlu dipakai?',
            ['Pada slaid 4', 'Pada slaid 5', 'Pada kedua-dua slaid', 'Pada Slide Master'], 1,
            'Transisi dimainkan bila slaid itu masuk.', 'Transisi dipakai pada slaid yang <strong>dituju</strong>. Morph pada slaid 5 mengira perbezaan kedudukan dan saiz objek yang sama di slaid 4 dan 5, kemudian menggerakkannya.'),
        $p('ap7', 'Membentang', '⬜', 1, 'Semasa slide show, anda mahu menulis di papan putih bilik kuliah dan tidak mahu slaid mengganggu. Tekan kekunci untuk <strong>skrin putih</strong>.', ['W', ','],
            'Huruf pertama perkataan white.', '<strong>W</strong> (atau koma) memaparkan skrin putih. Tekan sekali lagi untuk kembali ke slaid. <strong>B</strong> memaparkan skrin hitam.'),
        $c('ap8', 'Presenter View', '🖥️', 2, 'Anda memulakan slide show dengan projektor, tetapi <strong>nota anda muncul di skrin projektor</strong> dan audiens nampak slaid pada komputer riba. Apakah pembaikannya?',
            ['Tekan Esc dan sambungkan semula kabel', 'Dalam Presenter View: Display Settings → Swap Presenter View and Slide Show', 'View → Notes Page', 'Slide Show → Hide Slide'], 1,
            'Tetapan paparan ada pada bar di atas Presenter View.', '<strong>Display Settings → Swap Presenter View and Slide Show</strong> menukar skrin mana yang memaparkan nota dan skrin mana yang memaparkan slaid, tanpa menamatkan slide show.'),
        $p('ap9', 'Media', '▶️', 2, 'Slaid anda ada video demo yang dimasukkan dari komputer. Semasa slide show, tekan pintasan untuk <strong>main atau jeda</strong> video itu.', ['Alt+P', 'Ctrl+Space'],
            'Alt dengan huruf pertama play.', '<strong>Alt+P</strong> memainkan atau menjeda video yang dimasukkan dari komputer. <strong>Alt+Q</strong> menghentikannya. Pintasan ini tidak berfungsi untuk video dalam talian.'),
        $c('ap10', 'Masa', '⏱️', 2, 'Anda diberi 10 minit dan mahu tahu <strong>berapa lama setiap slaid</strong> memakan masa semasa berlatih, tanpa merakam suara. Apakah alat yang sesuai?',
            ['Slide Show → Record', 'Slide Show → Rehearse Timings', 'Transitions → Duration', 'Animations → Delay'], 1,
            'Alat ini hanya mengira masa.', '<strong>Rehearse Timings</strong> mengira masa pada setiap slaid semasa anda berlatih dan menawarkan untuk menyimpannya. Jika tidak mahu slaid bergerak sendiri semasa kelas, pilih <strong>Set Up Slide Show → Advance slides → Manually</strong>.'),
        $c('ap11', 'Animasi', '🎬', 3, 'Pensyarah meminta slaid dapatan anda <strong>lebih mudah diikuti</strong>. Slaid itu ada empat poin yang terbang masuk dengan bunyi dan berpusing. Apakah perubahan yang paling sesuai?',
            ['Tambah kesan Emphasis Pulse supaya poin lebih menonjol', 'Gunakan satu kesan ringkas (Appear atau Fade) dan munculkan poin satu demi satu ikut perbincangan', 'Buang semua teks dan gantikan dengan video', 'Gunakan transisi berbeza pada setiap slaid'], 1,
            'Animasi sepatutnya membantu audiens mengikut, bukan menarik perhatian kepada animasi itu sendiri.', 'Satu kesan ringkas yang konsisten, dengan satu poin muncul ketika anda membincangkannya, mengekalkan tumpuan audiens pada isi. Bunyi dan putaran mengalihkan tumpuan dan melambatkan pembentangan.'),
        $susun('ap12', 'Animasi', '📝', 2, 'Susun langkah untuk membuat poin dalam placeholder isi <strong>muncul satu perenggan pada satu masa</strong>.',
            ['Pilih placeholder isi pada slaid', 'Animations → pilih Fade', 'Effect Options → By Paragraph', 'Animations → Preview untuk menyemak susunan'],
            'Effect Options hanya muncul selepas kesan dipakai.',
            'Kesan mesti dipakai pada placeholder dahulu. Kemudian <strong>Effect Options → By Paragraph</strong> memecahkannya kepada satu kesan untuk setiap perenggan, yang boleh disemak dengan <strong>Preview</strong>.'),
        $susun('ap13', 'Morph', '🔀', 3, 'Susun langkah untuk membina kesan <strong>Morph</strong> yang menggerakkan satu carta dari kiri ke tengah slaid.',
            ['Letakkan carta di sebelah kiri slaid pertama', 'Pada panel thumbnail, gandakan slaid itu (Duplicate Slide)', 'Pada slaid salinan, alih dan besarkan carta ke tengah', 'Pilih slaid salinan → Transitions → Morph', 'Pilih slaid pertama → Slide Show → From Current Slide, kemudian klik untuk melihat gerakan'],
            'Slaid kedua mesti wujud dan berbeza sebelum transisi dipakai padanya.',
            'Morph membandingkan objek yang sama pada dua slaid berturutan. Gandakan slaid, ubah kedudukan pada salinan, kemudian pakai Morph pada salinan itu.'),
    ],
];
