<?php

declare(strict_types=1);

/**
 * Pembantu benih latihan dikongsi semua pek subjek (Word, PowerPoint, …): bina soalan dalam bentuk tersimpan
 * (src/Latihan.php) dengan satu baris. pintasan = tekan kombinasi kekunci; pilihan = pilih satu jawapan (indeks betul dari 0);
 * susun = langkah ditulis dalam susunan BETUL (3–7; pelajar melihatnya dikocok ikut id).
 */
require_once __DIR__ . '/../../src/Latihan.php';

return [
    'pintasan' => fn(string $id, string $kat, string $ikon, int $tahap, string $soalan, array $jawapan, string $petunjuk, string $penerangan) => [
        'id' => $id, 'category' => $kat, 'icon' => $ikon, 'level' => $tahap, 'prompt' => $soalan, 'mode' => 'pintasan',
        'grid' => null, 'highlight' => null, 'jawapan' => $jawapan, 'canonical' => $jawapan[0], 'hint' => $petunjuk, 'explanation' => $penerangan,
    ],
    'pilihan' => fn(string $id, string $kat, string $ikon, int $tahap, string $soalan, array $pilihan, int $betul, string $petunjuk, string $penerangan) => [
        'id' => $id, 'category' => $kat, 'icon' => $ikon, 'level' => $tahap, 'prompt' => $soalan, 'mode' => 'choice',
        'grid' => null, 'highlight' => null, 'options' => $pilihan, 'correct_index' => $betul, 'canonical' => $pilihan[$betul],
        'hint' => $petunjuk, 'explanation' => $penerangan,
    ],
    'susun' => fn(string $id, string $kat, string $ikon, int $tahap, string $soalan, array $langkah, string $petunjuk, string $penerangan) => [
        'id' => $id, 'category' => $kat, 'icon' => $ikon, 'level' => $tahap, 'prompt' => $soalan, 'mode' => 'susun',
        'grid' => null, 'highlight' => null, 'langkah' => $langkah, 'canonical' => Latihan::kanonSusun($langkah),
        'hint' => $petunjuk, 'explanation' => $penerangan,
    ],
];
