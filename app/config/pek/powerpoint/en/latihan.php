<?php

declare(strict_types=1);

/**
 * PowerPoint practice, EN. Same id, mode, level, answers, correct_index, and option order as ../latihan.php.
 */

// One set = one file latihan/<set>.php (D74). Set order has ONE source: the BM list ../latihan.php (D78), so a new set =
// BM + EN files and one line in the BM list only.
$susunan = array_keys(require __DIR__ . '/../latihan.php');
return array_combine($susunan, array_map(fn(string $id): array => require __DIR__ . "/latihan/$id.php", $susunan));
