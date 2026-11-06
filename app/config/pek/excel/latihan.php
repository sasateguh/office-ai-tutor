<?php

declare(strict_types=1);

/**
 * Latihan Excel (BM) — beberapa set soalan. Versi EN: en/latihan.php (struktur sama).
 *
 * Structure:
 *   set_id => [
 *     name, icon (nama ikon Lucide), tagline, description, color, questions[]
 *   ]
 *
 * Question fields:
 *   id, category, icon, level (1-3), prompt, mode ('formula'|'choice')
 *   grid (or null), highlight (cell ref or null)
 *   accept (regex list, lowercase no-ws), options[], correct_index
 *   canonical (display answer), hint, explanation
 */

// Satu set = satu fail latihan/<set>.php (D74); susunan di sini = susunan di laman. Set baharu: cipta fail BM + EN, tambah satu baris.
return [
    'basics' => require __DIR__ . '/latihan/basics.php',
    'intermediate' => require __DIR__ . '/latihan/intermediate.php',
    'jadual-data' => require __DIR__ . '/latihan/jadual-data.php',
    'analisis-formula' => require __DIR__ . '/latihan/analisis-formula.php',
    'pivot' => require __DIR__ . '/latihan/pivot.php',
    'carta-slicer' => require __DIR__ . '/latihan/carta-slicer.php',
    'power-query-dashboard' => require __DIR__ . '/latihan/power-query-dashboard.php',
];
