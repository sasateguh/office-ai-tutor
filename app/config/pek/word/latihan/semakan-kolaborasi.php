<?php

declare(strict_types=1);

/**
 * Set latihan 'semakan-kolaborasi' (BM). Versi EN: ../en/latihan/semakan-kolaborasi.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Semakan dan kolaborasi',
    'icon' => 'message-square',
    'tagline' => 'Track Changes, komen, Compare dan menyunting bersama',
    'description' => 'Dokumen kumpulan dan draf yang disemak penyelia melalui beberapa tangan. Latih cara menjejak perubahan, membalas komen, membandingkan versi dan menyunting satu fail bersama.',
    'color' => 'purple',
    'questions' => [
        $c('sk1', 'Track Changes', '✍️', 1, 'Penyelia mahu melihat setiap perubahan yang anda buat pada draf bab. Apakah yang perlu dihidupkan <strong>sebelum</strong> anda mula menyunting?',
            ['Review → Track Changes', 'View → Read Mode', 'File → Info → Protect Document', 'Review → Spelling & Grammar'], 0,
            'Perubahan hanya dijejak selepas ciri ini dihidupkan.', '<strong>Track Changes</strong> merekod sisipan, pemadaman dan perubahan format mulai saat ia dihidupkan. Suntingan sebelum itu tidak direkod.'),
        $c('sk2', 'Track Changes', '✍️', 1, 'Dokumen penuh dengan tanda merah. Anda mahu <strong>melihat rupa dokumen jika semua perubahan diterima</strong>, tanpa menerimanya. Pilih paparan dalam Display for Review:',
            ['Simple Markup', 'All Markup', 'No Markup', 'Original'], 2,
            'Paparan yang menyembunyikan semua tanda.', '<strong>No Markup</strong> menunjukkan dokumen seolah-olah semua perubahan diterima. Perubahan masih wujud; ia hanya disembunyikan daripada paparan.'),
        $p('sk3', 'Track Changes', '📋', 2, 'Reviewing Pane terbuka di sisi skrin dan mengambil ruang. Tekan pintasan untuk <strong>menutup Reviewing Pane</strong>.', ['Alt+Shift+C'],
            'C untuk Close, dengan dua kekunci pengubah.', '<strong>Alt+Shift+C</strong> menutup Reviewing Pane. Buka semula melalui Review → Reviewing Pane.'),
        $c('sk4', 'Banding', '🔍', 2, 'Penyelia menyunting salinan draf anda <strong>tanpa</strong> Track Changes dan memulangkannya. Bagaimanakah anda melihat apa yang diubah?',
            ['Review → Compare → Compare, pilih draf asal dan salinan penyelia', 'Baca kedua-dua fail baris demi baris', 'Review → Track Changes dalam salinan penyelia', 'View → Side by Side sahaja'], 0,
            'Word boleh mencari perbezaan dua fail dan memaparkannya sebagai perubahan.', '<strong>Compare</strong> mencipta dokumen ketiga yang menunjukkan setiap perbezaan sebagai perubahan berjejak. Menghidupkan Track Changes sekarang tidak merekod suntingan yang sudah berlaku.'),
        $c('sk5', 'Banding', '🔍', 2, 'Tiga ahli kumpulan masing-masing memulangkan salinan sendiri dengan Track Changes. Anda mahu <strong>semua perubahan mereka dalam satu dokumen</strong>. Apakah pilihannya?',
            ['Review → Compare → Combine', 'Salin dan tampal ketiga-tiga fail ke dalam satu dokumen', 'Review → Accept → Accept All Changes dalam setiap fail', 'Insert → Object → Text from File'], 0,
            'Pilihan kedua dalam butang Compare.', '<strong>Combine</strong> menggabungkan perubahan beberapa penyemak ke dalam satu dokumen, dan setiap perubahan kekal bernama penyemaknya.'),
        $c('sk6', 'Komen', '💬', 2, 'Satu komen bertanya tentang rujukan yang anda sudah baiki. Anda mahu menandakannya selesai tetapi <strong>kekalkan rekod perbualan</strong>. Apakah tindakannya?',
            ['Resolve komen itu', 'Delete komen itu', 'Reject perubahan berdekatan', 'Sembunyikan komen dengan No Markup'], 0,
            'Tindakan ini boleh dibuka semula.', '<strong>Resolve</strong> menandakan bebenang komen selesai dan menyimpannya. Delete membuang komen dan balasannya sekali.'),
        $c('sk7', 'Komen', '💬', 3, 'Dokumen kumpulan disimpan dalam OneDrive sekolah. Anda mahu seorang ahli <strong>mendapat pemberitahuan</strong> tentang komen anda. Apakah caranya?',
            ['Taip @ dan nama ahli itu dalam komen', 'Tulis nama ahli itu dengan huruf tebal', 'Warnakan komen dengan Highlight', 'Hantar fail sebagai lampiran e-mel'], 0,
            'Satu simbol sebelum nama orang.', '<strong>@mention</strong> dalam komen menghantar e-mel kepada orang itu dengan pautan ke komen tersebut. Ia memerlukan fail dalam OneDrive atau SharePoint dan akaun kerja atau sekolah.'),
        $c('sk8', 'Kongsi', '👥', 3, 'Empat ahli kumpulan mahu menyunting laporan yang sama <strong>pada masa yang sama</strong>, tanpa menghantar salinan melalui e-mel. Apakah susunan yang betul?',
            ['Simpan fail .docx dalam OneDrive atau SharePoint, kemudian Share kepada ahli', 'Setiap ahli menyimpan salinan dalam komputer sendiri', 'Simpan sebagai PDF dan kongsi', 'Hidupkan Mark as Final'], 0,
            'Menyunting bersama memerlukan satu fail di awan.', 'Apabila fail berada dalam <strong>OneDrive atau SharePoint</strong> dan dikongsi, semua orang menyunting fail yang sama dan melihat kedudukan orang lain. Salinan dalam komputer masing-masing perlu digabung semula kemudian.'),
        $c('sk9', 'Track Changes', '🔒', 3, 'Anda menghantar draf kepada rakan untuk disemak dan mahu memastikan mereka <strong>tidak boleh mematikan Track Changes</strong>. Apakah pilihannya?',
            ['Review → Track Changes → Lock Tracking dengan kata laluan', 'File → Info → Mark as Final', 'Restrict Editing → Filling in forms', 'Simpan sebagai PDF'], 0,
            'Pilihan dalam menu butang Track Changes sendiri.', '<strong>Lock Tracking</strong> mengunci Track Changes dalam keadaan hidup sehingga kata laluan dimasukkan. Penyemak masih boleh menyunting, tetapi setiap suntingan direkod.'),
        $susun('sk10', 'Banding', '🔍', 2, 'Susun langkah untuk menyemak suntingan penyelia yang dibuat <strong>tanpa</strong> Track Changes.',
            ['Review → Compare → Compare', 'Pilih draf anda sebagai Original document dan salinan penyelia sebagai Revised document, kemudian OK',
             'Dalam dokumen perbandingan yang dibuka, gunakan Next untuk Accept atau Reject setiap perubahan', 'Simpan dokumen perbandingan itu dengan nama fail baharu'],
            'Perubahan hanya boleh diterima selepas dokumen perbandingan wujud.',
            'Kotak <strong>Compare</strong> meminta dua fail, kemudian Word mencipta dokumen ketiga. Perubahan diterima atau ditolak di dalam dokumen itu, dan dokumen itulah yang disimpan sebagai versi baharu.'),
    ],
];
