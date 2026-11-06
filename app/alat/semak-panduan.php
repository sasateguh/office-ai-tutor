<?php

declare(strict_types=1);

/**
 * Skema jenis kandungan 'panduan' (cabang AI; excel/docs/REVAMP.md §panduan). Dipanggil oleh semak-kandungan.php untuk setiap
 * config/pek/<subjek>/panduan.php. Semakan arahan ⊂ repo sumber + prosa tidak disalin = gerbang projek autopilot (perlu rangkaian).
 */

const PANDUAN_TEMPAT = ['pelayan', 'komputer'];
const PANDUAN_KOD_JENIS = ['arahan', 'fail', 'output'];
const PANDUAN_SLUG = '/^[a-z][a-z0-9-]{1,39}$/';
// IP dalam teks/kod: hanya julat dokumentasi RFC 5737 + gelung balik / semua antara muka
const PANDUAN_IP_BENAR = ['203.0.113.', '198.51.100.', '192.0.2.', '127.0.0.1', '0.0.0.0'];

/** @return list<string> masalah (kosong = lulus). $info = baris config/subjek.php subjek itu. */
function semakPanduan(mixed $ms, mixed $en, array $info): array
{
    $x = [];
    if (!is_array($ms) || !is_array($en)) {
        return ['panduan mesti array slug → panduan (BM + EN)'];
    }
    if (array_keys($ms) !== array_keys($en)) {
        $x[] = 'slug panduan ms ≠ en (susunan juga mesti sama)';
    }
    $halaman = $info['halaman'] ?? [];
    foreach (array_keys($ms) as $slug) {
        if (!preg_match(PANDUAN_SLUG, (string) $slug)) {
            $x[] = "slug \"$slug\" mesti [a-z][a-z0-9-]";
        }
        if (!in_array($slug, $halaman, true)) {
            $x[] = "slug \"$slug\" tiada dalam config/subjek.php 'halaman' (halaman tidak boleh dicapai)";
        }
    }
    if (($info['cabang'] ?? 'office') !== 'office') {
        foreach (array_diff($halaman, array_keys($ms)) as $h) {
            $x[] = "halaman \"$h\" didaftar dalam config/subjek.php tetapi tiada panduan";
        }
    }
    foreach ($ms as $slug => $g) {
        $h = $en[$slug] ?? null;
        if (!is_array($g) || !is_array($h)) {
            $x[] = "$slug: panduan BM/EN tiada";
            continue;
        }
        foreach (['ms' => $g, 'en' => $h] as $b => $p) {
            foreach (['tajuk', 'ringkas'] as $k) {
                if (!is_string($p[$k] ?? null) || trim($p[$k]) === '') {
                    $x[] = "$slug ($b): '$k' kosong";
                }
            }
        }
        foreach (['tahap', 'minit', 'ubuntu'] as $k) {
            if (($g[$k] ?? null) !== ($h[$k] ?? null)) {
                $x[] = "$slug: '$k' ms ≠ en";
            }
        }
        if (!in_array($g['tahap'] ?? null, [1, 2, 3], true) || !is_int($g['minit'] ?? null) || $g['minit'] < 1) {
            $x[] = "$slug: tahap mesti 1–3 dan minit integer > 0";
        }
        $sumber = $g['sumber'] ?? null;
        if ($sumber !== ($h['sumber'] ?? null)) {
            $x[] = "$slug: sumber ms ≠ en";
        }
        if (!is_array($sumber) || !preg_match('~^https://github\.com/[\w.-]+/[\w.-]+$~', (string) ($sumber['repo'] ?? ''))
            || !preg_match('/^[0-9a-f]{40}$/', (string) ($sumber['komit'] ?? ''))) {
            $x[] = "$slug: sumber mesti ['repo' => https://github.com/<org>/<repo>, 'komit' => sha 40 aksara]";
        }
        if (count($g['prasyarat'] ?? []) !== count($h['prasyarat'] ?? [])) {
            $x[] = "$slug: bilangan prasyarat ms ≠ en";
        }
        $bm = $g['bab'] ?? [];
        $be = $h['bab'] ?? [];
        if (!is_array($bm) || !array_is_list($bm) || !$bm) {
            $x[] = "$slug: 'bab' mesti senarai tidak kosong";
            continue;
        }
        $ids = array_map(fn($b) => $b['id'] ?? null, $bm);
        if ($ids !== array_map(fn($b) => $b['id'] ?? null, is_array($be) ? $be : [])) {
            $x[] = "$slug: id bab ms ≠ en (susunan juga): " . json_encode($ids);
            continue;
        }
        if (count(array_unique($ids)) !== count($ids) || array_filter($ids, fn($i) => !is_string($i) || !preg_match(PANDUAN_SLUG, $i))) {
            $x[] = "$slug: id bab mesti slug unik [a-z][a-z0-9-]";
        }
        foreach ($bm as $i => $bab) {
            array_push($x, ...semakBab("$slug#{$bab['id']}", $bab, $be[$i]));
        }
        array_push($x, ...semakRujukBab($slug, ['ms' => $g, 'en' => $h], $ids));
    }
    foreach (['ms' => $ms, 'en' => $en] as $b => $d) {
        array_walk_recursive($d, function ($v) use (&$x, $b) {
            if (is_string($v) && preg_match_all('/\b(?:\d{1,3}\.){3}\d{1,3}\b/', $v, $mm)) {
                foreach ($mm[0] as $ip) {
                    $ok = false;
                    foreach (PANDUAN_IP_BENAR as $aw) {
                        $ok = $ok || str_starts_with($ip, $aw);
                    }
                    if (!$ok) {
                        $x[] = "($b) IP $ip bukan julat dokumentasi (203.0.113.x / 198.51.100.x / 192.0.2.x)";
                    }
                }
            }
        });
    }
    return $x;
}

/** @return list<string> */
function semakBab(string $rel, array $ms, array $en): array
{
    $x = [];
    foreach (['ms' => $ms, 'en' => $en] as $b => $bab) {
        if (!is_string($bab['tajuk'] ?? null) || trim($bab['tajuk']) === '') {
            $x[] = "$rel ($b): tajuk bab kosong";
        }
    }
    foreach (['semak', 'awas'] as $k) {
        if (count($ms[$k] ?? []) !== count($en[$k] ?? [])) {
            $x[] = "$rel: bilangan '$k' ms ≠ en";
        }
    }
    $lm = $ms['langkah'] ?? [];
    $le = $en['langkah'] ?? [];
    if (!is_array($lm) || !$lm || count($lm) !== count(is_array($le) ? $le : [])) {
        return [...$x, "$rel: langkah kosong atau bilangan ms ≠ en"];
    }
    foreach ($lm as $j => $l) {
        $n = $j + 1;
        $e = $le[$j];
        foreach (['kod', 'kod_jenis', 'tempat'] as $k) {
            if (($l[$k] ?? null) !== ($e[$k] ?? null)) {
                $x[] = "$rel langkah $n: '$k' ms ≠ en (mesti sama tepat)";
            }
        }
        foreach (['ms' => $l, 'en' => $e] as $b => $s) {
            if (!is_string($s['tajuk'] ?? null) || trim($s['tajuk']) === '') {
                $x[] = "$rel langkah $n ($b): tajuk kosong";
            }
            if (trim((string) ($s['teks'] ?? '')) === '' && trim((string) ($s['kod'] ?? '')) === '') {
                $x[] = "$rel langkah $n ($b): tiada teks dan tiada kod";
            }
        }
        if (isset($l['tempat']) && !in_array($l['tempat'], PANDUAN_TEMPAT, true)) {
            $x[] = "$rel langkah $n: tempat mesti " . implode('|', PANDUAN_TEMPAT);
        }
        $adaKod = trim((string) ($l['kod'] ?? '')) !== '';
        if ($adaKod !== isset($l['kod_jenis']) || ($adaKod && !in_array($l['kod_jenis'], PANDUAN_KOD_JENIS, true))) {
            $x[] = "$rel langkah $n: kod perlu kod_jenis " . implode('|', PANDUAN_KOD_JENIS) . ' (dan sebaliknya)';
        }
        if ($adaKod && in_array($l['kod_jenis'], ['arahan', 'fail'], true) && !isset($l['tempat'])) {
            $x[] = "$rel langkah $n: arahan/fail perlu 'tempat' (di mana ia dijalankan)";
        }
    }
    return $x;
}

/**
 * Rujukan bab dalam prosa = `{bab:<id>}` (nombor dikira semasa paparan, Kandungan::rujukBab; D116). Nombor literal "bab 3" /
 * "chapter 3" ditolak: ia tersasar bila bab ditambah, dan A3 tersilap memakai nombor repo sumber (pengenalan = bab 1 di sini).
 * @return list<string>
 */
function semakRujukBab(string $slug, array $bahasa, array $ids): array
{
    $x = [];
    foreach ($bahasa as $b => $p) {
        $jalan = function (mixed $v, int|string $k, string $lal) use (&$jalan, &$x, $b, $slug, $ids): void {
            if (is_array($v)) {
                foreach ($v as $kk => $vv) {
                    $jalan($vv, $kk, "$lal.$kk");
                }
                return;
            }
            if (!is_string($v) || $k === 'kod') {
                return;
            }
            if (preg_match('/\\b(?:bab|chapters?)\\s+\\d/iu', strip_tags($v), $m)) {
                $x[] = "$slug ($b) $lal: nombor bab literal \"{$m[0]}\" — tulis {bab:<id>}";
            }
            preg_match_all('/\\{bab:([^}]*)\\}/', $v, $mm);
            foreach (array_diff($mm[1], $ids) as $t) {
                $x[] = "$slug ($b) $lal: {bab:$t} tiada dalam id bab";
            }
        };
        $jalan($p, '', '');
    }
    return $x;
}
