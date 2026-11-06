<?php

declare(strict_types=1);

/**
 * Grid jualan suku pertama dikongsi set latihan 'pivot' dan 'carta-slicer' (BM + EN, nombor sama):
 * A = Tarikh, B = Wilayah, C = Produk, D = Jualan (RM); baris 2–9.
 * Jumlah: Utara 1400, Selatan 1600, Tengah 1000 (semua 4000); Jan 1300, Feb 1400, Mac 1300; Kopi 5 transaksi.
 */
$baris = [
    ['08/01/2026', 0, 0, 600], ['15/01/2026', 1, 1, 400], ['22/01/2026', 2, 0, 300], ['05/02/2026', 0, 1, 200],
    ['12/02/2026', 1, 0, 500], ['19/02/2026', 2, 1, 700], ['04/03/2026', 0, 0, 600], ['11/03/2026', 1, 0, 700],
];
$bina = fn(array $tajuk, array $wilayah, array $produk) => array_merge([$tajuk],
    array_map(fn($r) => [$r[0], $wilayah[$r[1]], $produk[$r[2]], $r[3]], $baris));
return [
    'ms' => $bina(['Tarikh', 'Wilayah', 'Produk', 'Jualan (RM)'], ['Utara', 'Selatan', 'Tengah'], ['Kopi', 'Teh']),
    'en' => $bina(['Date', 'Region', 'Product', 'Sales (RM)'], ['North', 'South', 'Central'], ['Coffee', 'Tea']),
];
