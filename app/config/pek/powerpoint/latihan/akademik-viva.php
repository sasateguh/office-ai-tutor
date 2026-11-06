<?php

declare(strict_types=1);

/**
 * Set latihan 'akademik-viva' (BM). Versi EN: ../en/latihan/akademik-viva.php (struktur sama). Susunan set: ../latihan.php.
 * Senario kerja sebenar: pembentangan projek tahun akhir dan viva.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../_soalan.php';
return [
    'name' => 'Projek tahun akhir dan viva',
    'icon' => 'graduation-cap',
    'tagline' => 'Struktur pembentangan, slaid sandaran, nota, PDF untuk penilai dan video',
    'description' => 'Senario sebenar: anda membentangkan projek tahun akhir dan menjawab soalan panel viva. Latih cara menyusun slaid, menyediakan slaid sandaran, menghantar PDF kepada penilai dan memasukkan video demo yang boleh dimainkan di makmal.',
    'color' => 'purple',
    'questions' => [
        $c('av1', 'Struktur', '🧭', 1, 'Anda ada 15 minit untuk membentangkan projek tahun akhir. Susunan bahagian manakah yang paling mudah diikuti oleh panel?',
            ['Dapatan → metodologi → masalah → kesimpulan', 'Masalah dan objektif → metodologi → dapatan → kesimpulan dan kerja lanjutan', 'Kajian literatur penuh → masalah → dapatan', 'Kesimpulan → lampiran → objektif'], 1,
            'Panel perlu tahu apa masalahnya sebelum menilai cara anda menyelesaikannya.', 'Mulakan dengan masalah dan objektif, terangkan cara, tunjukkan dapatan, kemudian tutup dengan kesimpulan dan kerja lanjutan. Kajian literatur dalam pembentangan cukup dengan beberapa rujukan utama.'),
        $c('av2', 'Slaid sandaran', '🗂️', 2, 'Anda menyediakan slaid sandaran dengan jadual data penuh untuk soalan panel. Slaid itu <strong>tidak patut muncul</strong> semasa pembentangan biasa. Apakah caranya?',
            ['Padam slaid itu dan simpan dalam fail lain', 'Letakkan slaid itu selepas slaid penutup, klik kanan thumbnail → Hide Slide', 'Tukar warna teks kepada putih', 'Kecilkan fon supaya panel tidak perasan'], 1,
            'Slaid tersorok kekal dalam fail tetapi dilangkau semasa slide show.', 'Slaid yang disorok dengan <strong>Hide Slide</strong> dilangkau semasa slide show tetapi masih boleh dibuka bila diperlukan. Letakkannya selepas slaid penutup supaya susunan pembentangan utama tidak terganggu.'),
        $c('av3', 'Slaid sandaran', '🗂️', 3, 'Semasa sesi soal jawab, panel bertanya tentang data yang ada dalam slaid sandaran tersorok. Bagaimanakah anda membukanya dalam Presenter View <strong>tanpa menamatkan slide show</strong>?',
            ['Tekan Esc, cari slaid, kemudian F5', 'Klik See all slides dalam Presenter View, kemudian pilih slaid sandaran itu', 'Tekan Page Down berulang kali', 'Buka fail PDF berasingan'], 1,
            'Presenter View ada butang yang memaparkan semua slaid sebagai thumbnail.', '<strong>See all slides</strong> memaparkan setiap slaid, termasuk yang tersorok. Pilih slaid sandaran, jawab soalan, kemudian kembali ke slaid asal dengan cara yang sama.'),
        $p('av4', 'Persamaan', '⌨️', 2, 'Slaid metodologi perlu persamaan model anda. Klik dalam kotak teks dan tekan pintasan untuk <strong>memasukkan persamaan</strong>.', ['Alt+='],
            'Alt dengan tanda sama dengan.', '<strong>Alt+=</strong> memasukkan kotak persamaan di tempat kursor. Taip persamaan menggunakan tab <strong>Equation</strong> atau notasi linear.'),
        $c('av5', 'Nota', '📝', 1, 'Anda mahu melihat poin yang perlu disebut pada setiap slaid, tetapi panel <strong>hanya nampak slaid</strong>. Di manakah poin itu patut ditulis?',
            ['Dalam kotak teks kecil di sudut slaid', 'Dalam panel Notes di bawah slaid, kemudian bentang dengan Presenter View', 'Dalam komen (Review → New Comment)', 'Dalam slaid tersorok selepas setiap slaid'], 1,
            'Presenter View memaparkan sesuatu yang audiens tidak nampak.', 'Teks dalam panel <strong>Notes</strong> dipapar dalam Presenter View pada skrin anda sahaja. Projektor memaparkan slaid tanpa nota.'),
        $c('av6', 'PDF penilai', '📄', 2, 'Penilai meminta salinan slaid dalam PDF sebelum viva. Kenapakah PDF lebih selamat daripada menghantar fail .pptx?',
            ['PDF lebih kecil dalam semua keadaan', 'Rupa slaid, fon dan susun atur kekal sama pada komputer penilai, dan isinya tidak boleh tersunting secara tidak sengaja', 'PDF memainkan animasi dengan lebih baik', 'PDF menyimpan nota secara automatik'], 1,
            'Fikir tentang komputer lain yang mungkin tiada fon anda.', 'PDF membekukan rupa slaid. Penilai melihat apa yang anda lihat walaupun komputer mereka tiada fon yang sama. Animasi dan video tidak dimainkan dalam PDF, jadi pastikan setiap slaid masih jelas tanpa animasi.'),
        $c('av7', 'PDF penilai', '📄', 2, 'Penyelia mahu PDF yang menunjukkan <strong>slaid bersama nota pembentang</strong> untuk disemak. Apakah caranya?',
            ['File → Export → Create PDF/XPS dengan tetapan lalai', 'File → Print → pilih Notes Pages, pilih pencetak Microsoft Print to PDF → Print', 'View → Notes Page → Save', 'Home → Copy semua nota ke Word'], 1,
            'Halaman nota dicetak, bukan dieksport dengan tetapan biasa.', 'Pilih <strong>Notes Pages</strong> dalam tetapan cetak dan cetak ke <strong>Microsoft Print to PDF</strong>. Setiap halaman PDF memaparkan satu slaid dengan notanya di bawah.'),
        $c('av8', 'Fon', '🔤', 3, 'Slaid anda menggunakan fon yang tidak dipasang pada komputer bilik viva. Bagaimanakah anda memastikan fon itu <strong>tidak diganti</strong> bila fail dibuka di sana?',
            ['Tukar semua teks kepada gambar', 'File → Options → Save → Embed fonts in the file, kemudian simpan', 'Simpan sebagai .potx', 'Design → Variants → Fonts → Calibri'], 1,
            'Tetapan ini ada dalam bahagian Save pada Options.', '<strong>Embed fonts in the file</strong> menyimpan fon dalam fail supaya komputer lain memaparkannya. Sesetengah fon tidak membenarkan pembenaman. Buka fail di komputer lain sebelum hari viva untuk menyemak.'),
        $c('av9', 'Video', '🎥', 2, 'Video demo sistem menjadikan fail anda 400 MB dan sukar dihantar. Apakah cara mengecilkannya <strong>dalam PowerPoint</strong>?',
            ['File → Info → Compress Media → pilih HD (720p) atau Standard (480p)', 'Insert → Video → Online Videos', 'Home → Reset', 'File → Export → Change File Type → .ppsx'], 0,
            'Bahagian Multimedia pada halaman Info.', '<strong>File → Info → Compress Media</strong> memampatkan video dan audio yang dimasukkan. Kualiti lebih rendah bermakna fail lebih kecil. Simpan salinan asal sebelum memampatkan.'),
        $c('av10', 'Latihan', '🎙️', 2, 'Anda mahu maklum balas tentang <strong>kelajuan bercakap dan perkataan pengisi</strong> sebelum viva. Alat manakah dalam PowerPoint yang memberikannya?',
            ['Review → Spelling', 'Slide Show → Rehearse with Coach', 'Slide Show → Hide Slide', 'View → Slide Sorter'], 1,
            'Alat ini mendengar anda berlatih.', '<strong>Rehearse with Coach</strong> (Speaker Coach) memberi laporan tentang kelajuan, perkataan pengisi dan sama ada anda membaca teks slaid. Ia hanya memahami bahasa Inggeris, jadi untuk pembentangan dalam BM gunakan Rehearse Timings dan rakan sebagai pendengar.'),
        $c('av11', 'Sumber', '📚', 3, 'Slaid dapatan anda memaparkan carta daripada kajian lain. Bagaimanakah sumber itu patut ditunjukkan?',
            ['Tidak perlu, kerana semua sumber ada dalam laporan', 'Sitasi ringkas dalam teks kecil di bawah carta, dan senarai rujukan penuh pada slaid rujukan di hujung', 'Tulis URL penuh di tengah carta', 'Sebut secara lisan sahaja'], 1,
            'Panel perlu tahu mana kerja anda dan mana kerja orang lain pada slaid itu sendiri.', 'Sitasi ringkas pada slaid memisahkan data anda daripada data kajian lain. Slaid rujukan di hujung memberi butiran penuh tanpa memenuhkan slaid dapatan.'),
        $c('av12', 'Viva', '🎓', 3, 'Satu jam sebelum viva, anda sampai di bilik dan komputer di situ akan digunakan. Apakah semakan yang <strong>paling penting</strong>?',
            ['Menukar tema supaya lebih menarik', 'Membuka fail dalam slide show pada komputer itu: semak fon, video demo, dan Presenter View pada projektor', 'Menambah animasi pada setiap slaid', 'Menamakan semula fail'], 1,
            'Masalah yang hanya muncul pada komputer lain ialah masalah yang paling sukar dibaiki di depan panel.', 'Fon yang diganti, video yang tidak dimainkan dan nota yang muncul pada projektor ialah masalah biasa pada komputer lain. Semak ketiga-tiganya, dan bawa salinan PDF sebagai sandaran.'),
        $susun('av13', 'Video', '🎥', 3, 'Penilai meminta rakaman pembentangan dengan suara anda sebagai video. Susun langkahnya.',
            ['Slide Show → Record → From Beginning, rakam penerangan untuk setiap slaid', 'File → Export → Create a Video', 'Pilih Full HD (1080p) dan Use Recorded Timings and Narrations', 'Klik Create Video, pilih folder dan simpan'],
            'Pilihan Use Recorded Timings and Narrations hanya bermakna bila rakaman sudah wujud.',
            'Rakam dahulu supaya PowerPoint ada suara dan masa setiap slaid. Kemudian <strong>Create a Video</strong> menggunakan rakaman itu. Full HD sesuai untuk skrin komputer. Kualiti lebih tinggi bermakna fail lebih besar.'),
    ],
];
