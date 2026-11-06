<?php

declare(strict_types=1);

/**
 * Set latihan 'tesis-kerja-sebenar' (BM). Versi EN: ../en/latihan/tesis-kerja-sebenar.php (struktur sama). Susunan set: ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Tesis: dari draf ke PDF',
    'icon' => 'graduation-cap',
    'tagline' => 'Satu tesis universiti, dari draf kasar hingga PDF untuk penilai',
    'description' => 'Senario kerja sebenar: draf kasar dengan format bercampur dipindah ke templat universiti, distruktur, dirujuk, disemak dan dieksport sebagai PDF. Setiap soalan ialah satu keputusan dalam proses itu.',
    'color' => 'amber',
    'questions' => [
        $c('tk1', 'Templat', '📐', 1, 'Fakulti memberi fail templat tesis <strong>.dotx</strong>. Bagaimanakah anda memulakan tesis berdasarkan templat itu?',
            ['Dwiklik fail .dotx supaya Word membuka dokumen baharu berdasarkannya', 'Buka .dotx dengan File → Open dan taip tesis terus di dalamnya', 'Salin logo dari templat ke dokumen kosong', 'Tukar sambungan fail kepada .docx'], 0,
            'Templat ialah acuan, bukan dokumen kerja.', 'Dwiklik <strong>.dotx</strong> mencipta dokumen baharu yang membawa styles, margin dan header templat, manakala templat asal kekal bersih. Menaip terus dalam .dotx mengubah templat itu sendiri.'),
        $c('tk2', 'Templat', '📋', 2, 'Anda menampal teks dari draf kasar yang penuh dengan fon dan saiz bercampur. Pilihan tampal manakah membiarkan styles templat mengawal rupa teks?',
            ['Keep Text Only', 'Keep Source Formatting', 'Picture', 'Paste Special → Paste link'], 0,
            'Pilihan yang membuang semua format asal.', '<strong>Keep Text Only</strong> menampal teks sahaja, jadi teks itu mengikut style perenggan templat. Keep Source Formatting membawa format bercampur dari draf.'),
        $c('tk3', 'Struktur', '🏗️', 3, 'Dalam draf, 40 tajuk bab ditaip tebal 14 pt tanpa style. Apakah cara terpantas untuk memberi semuanya style <strong>Heading 1</strong>?',
            ['Klik satu tajuk → Home → Select → Select All Text With Similar Formatting → Heading 1', 'Klik setiap tajuk satu demi satu', 'Find and Replace perkataan "Bab"', 'Ubah style Normal menjadi tebal 14 pt'], 0,
            'Word boleh memilih semua teks yang formatnya sama.', '<strong>Select All Text With Similar Formatting</strong> memilih setiap tajuk tebal 14 pt sekali gus. Satu klik pada Heading 1 kemudian memberi semuanya style yang sama.'),
        $p('tk4', 'Rujukan', '📝', 2, 'Fakulti meminta <strong>nota hujung (endnote)</strong>, bukan nota kaki. Tekan pintasan untuk memasukkan endnote di kedudukan kursor.', ['Ctrl+Alt+D'],
            'Bukan Ctrl+Alt+F (nota kaki); hurufnya di sebelah F pada papan kekunci.', '<strong>Ctrl+Alt+D</strong> memasukkan endnote. Nota hujung dikumpul di akhir dokumen atau section, dan nombornya dikemas kini sendiri.'),
        $p('tk5', 'Rujukan', '📝', 3, 'Tesis memerlukan indeks istilah. Pilih satu istilah, kemudian tekan pintasan untuk <strong>menandakannya sebagai entri indeks</strong> (Mark Entry).', ['Alt+Shift+X'],
            'X seperti tanda pangkah, dengan Alt dan Shift.', '<strong>Alt+Shift+X</strong> membuka kotak Mark Index Entry. Selepas semua istilah ditanda, References → Insert Index membina indeks di akhir tesis.'),
        $c('tk6', 'Rujukan', '📚', 2, 'Seminggu sebelum hantar, penyelia meminta gaya rujukan ditukar dari APA ke IEEE. Semua sitasi dimasukkan dengan Insert Citation. Apakah langkahnya?',
            ['References → Style → IEEE; sitasi dan bibliografi berubah sendiri', 'Taip semula setiap sitasi', 'Padam bibliografi dan tulis semula', 'Tukar fon bibliografi'], 0,
            'Sitasi yang dimasukkan oleh Word ialah medan.', 'Sitasi dan bibliografi yang dibina dengan <strong>Insert Citation</strong> mengikut pilihan <strong>Style</strong>. Satu tukar menukar semuanya. Sitasi yang ditaip dengan tangan perlu ditukar satu demi satu.'),
        $c('tk7', 'Semakan akhir', '♿', 2, 'Sebelum tesis dihantar ke repositori universiti, anda mahu mencari gambar tanpa alt text dan jadual tanpa baris tajuk. Apakah alatnya?',
            ['Review → Check Accessibility', 'Review → Spelling & Grammar', 'View → Navigation Pane', 'References → Update Table'], 0,
            'Alat yang memeriksa sama ada pembaca skrin boleh membaca dokumen.', '<strong>Check Accessibility</strong> menyenaraikan isu seperti alt text yang tiada dan jadual tanpa header row, dan setiap isu boleh dibaiki terus dari panel itu.'),
        $c('tk8', 'PDF', '📕', 3, 'Penilai mahu PDF tesis mempunyai <strong>bookmark untuk setiap bab</strong> di sisi pembaca PDF. Apakah tetapan yang betul?',
            ['Save As → PDF → Options → Create bookmarks using: Headings', 'Insert → Bookmark pada setiap halaman', 'Cetak ke pencetak PDF', 'Simpan sebagai .docx dan biarkan penilai menukarnya'], 0,
            'Tetapan dalam kotak Options semasa menyimpan sebagai PDF.', '<strong>Create bookmarks using: Headings</strong> membina bookmark PDF daripada style Heading. Ia memerlukan tajuk yang menggunakan Heading styles.'),
        $c('tk9', 'Semakan akhir', '🧹', 3, 'Fail akan dihantar kepada penilai luar. Anda mahu memastikan <strong>komen penyelia dan maklumat peribadi</strong> tidak tertinggal dalam fail. Apakah alatnya?',
            ['File → Info → Check for Issues → Inspect Document', 'Review → No Markup', 'Ctrl+A kemudian Delete', 'File → Info → Mark as Final'], 0,
            'No Markup hanya menyembunyikan, bukan membuang.', '<strong>Inspect Document</strong> mencari dan membuang komen, perubahan berjejak dan maklumat peribadi seperti nama pengarang. No Markup dan Mark as Final tidak membuang apa-apa.'),
        $susun('tk10', 'PDF', '📕', 3, 'Style Heading sudah dikenakan pada semua tajuk, Isi Kandungan sudah dimasukkan dan semua medan sudah dikemas kini (Ctrl+A, F9). Susun langkah untuk menyimpan tesis sebagai PDF dengan bookmark bab.',
            ['File → Save As → Browse untuk membuka kotak dialog Save As', 'Pada senarai Save as type, pilih PDF (*.pdf)',
             'Klik Options, tandakan Create bookmarks using: Headings, kemudian OK', 'Klik Save untuk menghasilkan PDF'],
            'Butang Options hanya muncul selepas jenis fail PDF dipilih.',
            'Setiap langkah bergantung pada langkah sebelumnya: senarai <strong>Save as type</strong> berada dalam kotak dialog Save As, butang <strong>Options</strong> hanya muncul selepas PDF dipilih, dan tetapan bookmark mesti ditandakan sebelum <strong>Save</strong> kerana PDF ditulis sebaik butang itu ditekan. Bookmark bab diambil daripada tajuk yang memakai style Heading.'),
    ],
];
