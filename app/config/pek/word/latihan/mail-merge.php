<?php

declare(strict_types=1);

/**
 * Set latihan 'mail-merge' (BM). Versi EN: ../en/latihan/mail-merge.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Surat dan label Mail Merge',
    'icon' => 'mail',
    'tagline' => 'Surat, label dan direktori daripada satu senarai Excel',
    'description' => 'Mail Merge menggabungkan satu dokumen dengan senarai penerima, jadi setiap surat atau label mendapat nama dan alamat sendiri. Latih aliran Mailings dari sumber data hingga dokumen siap.',
    'color' => 'amber',
    'questions' => [
        $c('mm1', 'Sumber data', '📇', 1, 'Anda mahu menghantar surat jemputan kepada 120 peserta. Nama dan alamat mereka berada dalam fail Excel. Di manakah Mail Merge dimulakan?',
            ['Mailings → Start Mail Merge → Letters', 'Insert → Text Box', 'File → New → Blank document, kemudian salin 120 kali', 'References → Insert Citation'], 0,
            'Tab yang namanya tentang surat-menyurat.', '<strong>Mailings → Start Mail Merge → Letters</strong> menjadikan dokumen semasa sebagai surat induk. Senarai Excel dipilih dalam langkah seterusnya.'),
        $c('mm2', 'Sumber data', '📇', 1, 'Bagaimanakah lembaran kerja Excel patut disusun supaya Word membacanya dengan betul sebagai senarai penerima?',
            ['Baris pertama = tajuk lajur (Nama, Alamat, Poskod), satu baris bagi setiap penerima, semua data dalam satu lembaran kerja', 'Setiap penerima dalam lembaran kerja sendiri', 'Tajuk lajur di baris terakhir', 'Sel digabungkan (Merge & Center) untuk setiap nama'], 0,
            'Word menjadikan tajuk lajur sebagai nama medan.', 'Word membaca <strong>baris pertama</strong> sebagai nama medan dan setiap baris berikutnya sebagai seorang penerima. Sel bergabung dan data yang berselerak dalam beberapa lembaran kerja menyukarkan pemilihan senarai.'),
        $c('mm3', 'Sumber data', '📇', 2, 'Poskod 05000 dalam Excel keluar sebagai <strong>5000</strong> dalam surat. Apakah yang perlu dibaiki?',
            ['Format lajur poskod sebagai Text dalam Excel sebelum merge', 'Tukar fon surat', 'Taip semula poskod dalam setiap surat', 'Matikan Track Changes'], 0,
            'Excel menyimpan poskod itu sebagai nombor.', 'Excel membuang sifar di hadapan nombor. Format lajur poskod sebagai <strong>Text</strong> supaya sifar itu kekal dan Word menerima nilai yang sama.'),
        $p('mm4', 'Medan', '🏷️', 2, 'Senarai penerima sudah dipilih. Tekan pintasan untuk <strong>memasukkan medan merge</strong> (cth. Nama) di kedudukan kursor.', ['Alt+Shift+F'],
            'F untuk Field, dengan dua kekunci pengubah.', '<strong>Alt+Shift+F</strong> membuka kotak Insert Merge Field. Butang yang sama ada di <strong>Mailings → Insert Merge Field</strong>.'),
        $p('mm5', 'Hasil', '👁️', 1, 'Tekan pintasan untuk <strong>pratonton hasil merge</strong> supaya medan diganti dengan data penerima sebenar.', ['Alt+Shift+K'],
            'Kombinasi Alt+Shift yang sama dengan Mailings → Preview Results.', '<strong>Alt+Shift+K</strong> menogol Preview Results. Gunakan anak panah dalam kumpulan Preview Results untuk melihat penerima seterusnya.'),
        $p('mm6', 'Hasil', '📄', 2, 'Pratonton kelihatan betul. Tekan pintasan untuk <strong>menggabungkan semua penerima ke dalam dokumen baharu</strong> yang boleh disunting.', ['Alt+Shift+N'],
            'N untuk dokumen baharu (New).', '<strong>Alt+Shift+N</strong> = Finish & Merge → Edit Individual Documents. Hasilnya satu dokumen baharu dengan satu surat bagi setiap penerima.'),
        $p('mm7', 'Sumber data', '📇', 3, 'Satu alamat penerima salah eja. Tekan pintasan untuk <strong>membuka dokumen data mail merge</strong> dan membaikinya.', ['Alt+Shift+E'],
            'E untuk Edit data.', '<strong>Alt+Shift+E</strong> membuka sumber data untuk disunting. Untuk senarai Excel, membaiki fail Excel itu sendiri juga berkesan selepas senarai dimuat semula.'),
        $c('mm8', 'Medan', '🏷️', 3, 'Medan Yuran dari Excel keluar sebagai <strong>150.5</strong> sedangkan surat perlu <strong>150.50</strong>. Apakah cara yang betul?',
            ['Tambah suis format nombor pada medan itu (Alt+F9, kemudian \# "0.00" dalam kod medan)', 'Taip .50 selepas medan dalam surat induk', 'Ubah fon medan', 'Padam medan dan taip nilai sendiri'], 0,
            'Medan merge boleh membawa suis format, sama seperti medan lain.', 'Paparkan kod medan dengan <strong>Alt+F9</strong>, tambah suis <strong>\# "0.00"</strong> selepas nama medan, kemudian Alt+F9 semula. Setiap surat memaparkan dua tempat perpuluhan tanpa mengubah Excel.'),
        $susun('mm9', 'Hasil', '📄', 2, 'Surat induk sudah ditetapkan sebagai Letters. Susun langkah untuk menghasilkan surat jemputan peribadi daripada senarai Excel.',
            ['Select Recipients → Use an Existing List → pilih fail Excel', 'Insert Merge Field untuk Nama dan Alamat dalam surat induk',
             'Preview Results, semak beberapa penerima dan baiki surat induk jika perlu', 'Finish & Merge → Edit Individual Documents',
             'Simpan dokumen baharu yang mengandungi semua surat sebagai fail sendiri'],
            'Medan hanya boleh dimasukkan selepas senarai dipilih.',
            'Butang Insert Merge Field hanya aktif selepas <strong>senarai penerima</strong> dipilih. Pratonton memerlukan medan, dan kesilapan mesti dibaiki dalam surat induk sebelum merge. <strong>Finish & Merge</strong> mencipta dokumen baharu, dan dokumen itulah yang disimpan.'),
        $susun('mm10', 'Label', '🏷️', 3, 'Anda sudah memilih Mailings → Start Mail Merge → Labels dan nombor produk label. Susun langkah untuk mencetak <strong>label alamat</strong> bagi semua penerima.',
            ['Select Recipients → Use an Existing List', 'Masukkan Address Block dalam label pertama dan formatkannya',
             'Update Labels supaya susun atur label pertama disalin ke semua label', 'Finish & Merge → Edit Individual Documents',
             'Cetak dokumen baharu itu pada helaian label'],
            'Update Labels menyalin label pertama, jadi label pertama mesti siap dahulu.',
            'Address Block memerlukan senarai penerima. Label pertama diisi dahulu; <strong>Update Labels</strong> menyalinnya ke label lain. Tanpa langkah itu, hanya label pertama yang mempunyai alamat. Dokumen yang dicetak ialah hasil <strong>Finish & Merge</strong>.'),
    ],
];
