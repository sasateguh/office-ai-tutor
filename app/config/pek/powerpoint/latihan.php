<?php

declare(strict_types=1);

/**
 * Latihan PowerPoint, BM (suntingan seterusnya di Admin → Kandungan). Versi EN: en/latihan.php (id, mod, tahap, jawapan,
 * correct_index dan susunan pilihan SAMA). Pintasan disahkan dengan halaman Microsoft (23 Okt 2026).
 * Elak pintasan yang dirampas pelayar (Ctrl+N/T/W, Ctrl+1..8).
 */

// Satu set = satu fail latihan/<set>.php (D74); susunan di sini = susunan di laman, BM DAN EN (en/latihan.php membaca senarai ini, D78).
// Set baharu: cipta fail BM + EN, tambah satu baris di sini sahaja.
return [
    'pintasan' => require __DIR__ . '/latihan/pintasan.php',
    'slaid' => require __DIR__ . '/latihan/slaid.php',
    'master-layout' => require __DIR__ . '/latihan/master-layout.php',
    'reka-slaid' => require __DIR__ . '/latihan/reka-slaid.php',
    'visual-data' => require __DIR__ . '/latihan/visual-data.php',
    'animasi-pembentang' => require __DIR__ . '/latihan/animasi-pembentang.php',
    'akademik-viva' => require __DIR__ . '/latihan/akademik-viva.php',
];
