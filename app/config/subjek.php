<?php

declare(strict_types=1);

/**
 * Pendaftaran subjek (docs/PELAN.md). Satu baris = satu subjek; kandungannya dalam config/pek/<id>/.
 * status lalai: 'hidup' (awam) / 'draf' (tersorok — 404 kepada awam, pratonton untuk admin yang log masuk, tiada dalam
 * nav/sitemap). Admin menerbitkan/menyorok tanpa kod: pilihan disimpan dalam data/kandungan/status.json dan menang.
 * URL: [/en]/<id>/<halaman> (src/Laluan.php; penghala public/laman.php).
 * Subjek baharu = satu baris di sini + folder config/pek/<id>/ (utama, cheatsheet, rujukan, latihan, prompt) — tiada kod.
 * 'cabang' = kumpulan subjek (label = config/bahasa 'cabang.<id>'): 'office' (Excel/Word/PowerPoint) | 'ai'. Subjek cabang AI
 * memegang panduan (config/pek/<id>/panduan.php): setiap slug panduan = satu halaman dalam 'halaman' (templat 'panduan').
 */
// 'ikon' = nama Lucide (src/Ikon.php); 'halaman' = halaman subjek mengikut susunan nav (src/Laluan.php::templat).
return [
    'excel' => ['nama' => 'Excel', 'ikon' => 'file-spreadsheet', 'status' => 'hidup', 'cabang' => 'office',
                'halaman' => ['cheatsheet', 'formulas', 'reference', 'practice', 'playground', 'tutor']],
    'word' => ['nama' => 'Word', 'ikon' => 'file-text', 'status' => 'hidup', 'cabang' => 'office',
               'halaman' => ['cheatsheet', 'reference', 'practice', 'tutor']],
    'powerpoint' => ['nama' => 'PowerPoint', 'ikon' => 'presentation', 'status' => 'hidup', 'cabang' => 'office',
                     'halaman' => ['cheatsheet', 'reference', 'practice', 'tutor']],
];
