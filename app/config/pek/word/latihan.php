<?php

declare(strict_types=1);

/**
 * Latihan Word, BM — benih asal (diterbitkan 23 Okt 2026; suntingan seterusnya di Admin → Kandungan). Versi EN: en/latihan.php
 * (id, mode, level, jawapan, correct_index dan susunan pilihan SAMA). Bentuk sama dengan config/pek/excel/latihan.php.
 * Mod 'pintasan': pelajar menekan kombinasi kekunci (atau menaipnya di telefon, cth "Ctrl+B"); 'jawapan' = senarai yang
 * diterima, Ctrl ≡ ⌘ (Mac). Elak pintasan yang pelayar rampas (Ctrl+N/T/W, Ctrl+Shift+N, Ctrl+1..8, F12).
 * `icon` set = nama Lucide; `icon` soalan diabaikan oleh reka bentuk baharu.
 */

// Satu set = satu fail latihan/<set>.php (D74); susunan di sini = susunan di laman, BM DAN EN (en/latihan.php membaca senarai ini, D78).
// Set baharu: cipta fail BM + EN, tambah satu baris di sini sahaja.
return [
    'pintasan' => require __DIR__ . '/latihan/pintasan.php',
    'dokumen' => require __DIR__ . '/latihan/dokumen.php',
    'styles-struktur' => require __DIR__ . '/latihan/styles-struktur.php',
    'laporan-panjang' => require __DIR__ . '/latihan/laporan-panjang.php',
    'halaman-seksyen' => require __DIR__ . '/latihan/halaman-seksyen.php',
    'mail-merge' => require __DIR__ . '/latihan/mail-merge.php',
    'semakan-kolaborasi' => require __DIR__ . '/latihan/semakan-kolaborasi.php',
    'tesis-kerja-sebenar' => require __DIR__ . '/latihan/tesis-kerja-sebenar.php',
];
