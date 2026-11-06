<?php

declare(strict_types=1);

/**
 * Word practice, EN. Same structure as ../latihan.php (BM): id, mode, level, answers, correct_index, and option order are identical.
 * 'pintasan' mode: the learner presses the key combination (or types it on a phone, e.g. "Ctrl+B"); Ctrl ≡ ⌘ (Mac).
 */

// One set = one file latihan/<set>.php (D74). Set order has ONE source: the BM list ../latihan.php (D78), so a new set =
// BM + EN files and one line in the BM list only.
$susunan = array_keys(require __DIR__ . '/../latihan.php');
return array_combine($susunan, array_map(fn(string $id): array => require __DIR__ . "/latihan/$id.php", $susunan));
