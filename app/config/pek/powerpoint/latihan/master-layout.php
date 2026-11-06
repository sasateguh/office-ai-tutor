<?php

declare(strict_types=1);

/**
 * Set latihan 'master-layout' (BM). Versi EN: ../en/latihan/master-layout.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Master dan layout',
    'icon' => 'layers',
    'tagline' => 'Slide Master, layout, placeholder, tema dan templat .potx',
    'description' => 'Slide Master menyimpan rupa semua slaid di satu tempat. Latih cara membina layout sendiri, membetulkan slaid yang lari daripada master dan menyimpan templat untuk orang lain.',
    'color' => 'purple',
    'questions' => [
        $c('ml1', 'Slide Master', '🎨', 1, 'Di manakah anda membuka paparan untuk menyunting <strong>Slide Master</strong>?',
            ['Design → Format Background', 'View → Slide Master', 'Home → Layout', 'Insert → Header & Footer'], 1,
            'Slide Master ialah satu paparan, sama seperti Normal dan Slide Sorter.', '<strong>View → Slide Master</strong> membuka master dan semua layout di bawahnya. Tekan <strong>Close Master View</strong> untuk kembali ke slaid.'),
        $c('ml2', 'Slide Master', '🎨', 1, 'Dalam paparan Slide Master, thumbnail <strong>paling besar di atas</strong> dan thumbnail kecil di bawahnya berbeza. Apakah perbezaannya?',
            ['Thumbnail atas = slaid pertama; yang lain = slaid seterusnya', 'Thumbnail atas = master (semua layout mewarisinya); yang kecil = layout, setiap satu untuk slaid yang menggunakannya', 'Kedua-duanya sama, cuma saiz berbeza', 'Thumbnail kecil hanya untuk cetakan'], 1,
            'Satu induk, beberapa anak.', 'Perubahan pada <strong>master</strong> (thumbnail atas) mengalir ke semua layout. Perubahan pada satu <strong>layout</strong> hanya menjejaskan slaid yang menggunakan layout itu.'),
        $p('ml3', 'Placeholder', '⌨️', 2, 'Anda sedang menaip dalam placeholder tajuk. Tekan pintasan untuk <strong>pergi ke placeholder seterusnya</strong> tanpa tetikus.', ['Ctrl+Enter'],
            'Kekunci yang biasa memulakan baris baharu, dengan Ctrl.', '<strong>Ctrl+Enter</strong> pergi ke placeholder tajuk atau isi seterusnya. Jika ia placeholder terakhir, PowerPoint memasukkan slaid baharu dengan layout yang sama.'),
        $c('ml4', 'Layout', '📐', 2, 'Seseorang telah mengalihkan dan mewarnakan placeholder pada satu slaid, jadi slaid itu tidak lagi sepadan dengan layout. Apakah cara paling cepat untuk memulihkannya?',
            ['Padam slaid dan taip semula', 'Home → Reset', 'Design → Themes → pilih tema lain', 'Ctrl+Z berulang kali'], 1,
            'Butang di sebelah Layout dalam tab Home.', '<strong>Home → Reset</strong> mengembalikan kedudukan, saiz dan format placeholder kepada tetapan layout. Teks yang ditaip tidak hilang.'),
        $c('ml5', 'Placeholder', '🖼️', 2, 'Setiap slaid profil pensyarah perlu foto di <strong>kedudukan dan saiz yang sama</strong>. Apakah cara yang paling sesuai?',
            ['Masukkan foto pada setiap slaid dan ukur kedudukan dengan pembaris', 'Dalam Slide Master, pilih layout → Insert Placeholder → Picture, kemudian lukis kotaknya', 'Letakkan foto pada master', 'Gunakan Crop pada setiap foto'], 1,
            'Kotak kosong yang menunggu gambar, disediakan pada layout.', '<strong>Picture placeholder</strong> pada layout menetapkan tempat dan saiz. Foto yang dimasukkan ke dalamnya dipotong supaya muat dalam kotak itu.'),
        $c('ml6', 'Slide Master', '🔢', 2, 'Placeholder nombor slaid ada pada Slide Master, tetapi <strong>nombor tidak muncul</strong> pada slaid. Apakah langkah yang terlepas?',
            ['Taip nombor pada setiap slaid', 'Insert → Header & Footer → tandakan Slide number → Apply to All', 'View → Notes Page', 'Design → Slide Size'], 1,
            'Placeholder sahaja tidak cukup. Ia perlu dihidupkan.', 'Nombor slaid, tarikh dan footer dipapar hanya bila dihidupkan dalam <strong>Insert → Header & Footer</strong>. Tandakan <strong>Don’t show on title slide</strong> jika slaid tajuk tidak perlu nombor.'),
        $c('ml7', 'Slide Master', '🎨', 3, 'Anda membina master kedua untuk slaid lampiran. Selepas menukar tema, master itu <strong>hilang</strong> kerana tiada slaid menggunakannya. Bagaimanakah cara mengelakkannya?',
            ['Simpan fail sebagai PDF', 'Pilih master itu dalam paparan Slide Master → Preserve', 'Kunci fail dengan kata laluan', 'Salin master ke fail lain'], 1,
            'Ikon pin dalam tab Slide Master.', 'PowerPoint boleh membuang master yang tidak digunakan. <strong>Preserve</strong> menyimpannya walaupun tiada slaid yang menggunakannya pada masa itu.'),
        $c('ml8', 'Templat', '💾', 3, 'Jabatan anda mahu semua pensyarah bermula dengan master, layout dan warna yang sama. Apakah format fail yang patut dikongsi?',
            ['.pptx yang mengandungi slaid contoh', '.potx (PowerPoint Template)', '.pdf', '.ppsx (PowerPoint Show)'], 1,
            'Fail yang dibuka sebagai salinan baharu.', 'Simpan dengan <strong>File → Save As → PowerPoint Template (*.potx)</strong>. Membuka templat menghasilkan persembahan baharu, jadi fail asal tidak tertindih.'),
        $susun('ml9', 'Layout', '📐', 2, 'Susun langkah untuk membina <strong>layout baharu dengan placeholder gambar</strong> dan memakainya pada slaid.',
            ['View → Slide Master', 'Slide Master → Insert Layout', 'Insert Placeholder → Picture, kemudian lukis kotaknya pada layout baharu', 'Close Master View',
             'Pilih slaid → Home → Layout → pilih layout baharu'],
            'Layout mesti wujud sebelum placeholder boleh dilukis di dalamnya.',
            'Buka paparan master, cipta layout, letakkan placeholder di dalamnya, kemudian tutup paparan master. Layout baharu muncul dalam senarai <strong>Home → Layout</strong> selepas itu.'),
        $susun('ml10', 'Tema', '🎨', 3, 'Susun langkah untuk menukar <strong>warna aksen tema</strong> kepada warna jenama universiti supaya carta dan SmartArt ikut sama.',
            ['Design → Variants → anak panah More → Colors → Customize Colors', 'Tetapkan Accent 1 kepada kod warna jenama', 'Namakan skema warna dan klik Save',
             'Semak carta dan SmartArt: warnanya kini ikut Accent 1'],
            'Skema warna disimpan selepas warnanya ditetapkan.',
            'Warna tema dipakai oleh carta, SmartArt dan bentuk. Tukar <strong>Accent 1</strong> sekali dan semua objek yang menggunakan warna tema berubah. Warna yang dipilih dengan tangan pada objek tidak berubah.'),
    ],
];
