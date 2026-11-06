<?php

declare(strict_types=1);

require_once __DIR__ . '/Kandungan.php';
require_once __DIR__ . '/Fungsi.php';

/**
 * Jejak pembelajaran satu subjek (config/pek/<subjek>/[en/]jejak.php, docs/REVAMP.md): modul bernombor yang memaut seksyen
 * cheat sheet (#<id>), kategori rujukan (?cat=<kunci>), set latihan (practice#<set>) dan fail muat turun (public/muat/<subjek>/).
 * Satu sumber untuk paparan (src/papar/_jejak.php) dan gerbang (alat/semak-kandungan.php): rujukan yang tiada = masalah.
 */
final class Jejak
{
    public const TAHAP = [1, 2, 3];

    /** Sasaran yang wujud dalam kandungan semasa: ['cheatsheet' => [id => label], 'rujukan' => [kunci => label], 'latihan' => [set => nama]] */
    public static function sasaran(string $s, string $b): array
    {
        $cs = Kandungan::baca($s, 'cheatsheet', $b);
        $rujukan = [];
        if ($s === 'excel') {
            foreach (Fungsi::KATEGORI as $k) {
                $rujukan[$k] = function_exists('t') ? t("fn.kat.$k") : $k;
            }
        } else {
            foreach (Kandungan::baca($s, 'rujukan', $b)['kategori'] ?? [] as $k => $kat) {
                $rujukan[$k] = (string) ($kat[0] ?? $k);
            }
        }
        return [
            'cheatsheet' => array_column($cs['bahagian'] ?? [], 'tajuk', 'id'),
            'rujukan' => $rujukan,
            'latihan' => array_map(fn($x) => (string) ($x['name'] ?? ''), Kandungan::baca($s, 'latihan', $b)),
        ];
    }

    public static function failMuat(string $s, string $fail): string
    {
        return __DIR__ . "/../public/muat/$s/$fail";
    }

    /** @return list<string> masalah (kosong = sah). Bentuk + setiap rujukan wujud. */
    public static function masalah(string $s, mixed $j, string $b): array
    {
        if (!is_array($j) || !is_string($j['tajuk'] ?? null) || !is_array($j['modul'] ?? null) || !$j['modul']) {
            return ['perlu tajuk + modul[] tidak kosong'];
        }
        $ada = self::sasaran($s, $b);
        $out = [];
        $id = [];
        foreach ($j['modul'] as $i => $m) {
            $nama = is_array($m) ? (string) ($m['id'] ?? "#$i") : "#$i";
            if (!is_array($m) || !preg_match('/^[a-z0-9-]{2,40}$/', (string) ($m['id'] ?? '')) || trim((string) ($m['tajuk'] ?? '')) === ''
                || trim((string) ($m['ringkas'] ?? '')) === '' || !in_array($m['tahap'] ?? null, self::TAHAP, true)) {
                $out[] = "modul $nama: perlu id (slug), tajuk, ringkas, tahap 1–3";
                continue;
            }
            if (isset($id[$m['id']])) {
                $out[] = "modul $nama: id berulang";
            }
            $id[$m['id']] = true;
            $pautan = 0;
            foreach (['cheatsheet', 'rujukan', 'latihan'] as $jenis) {
                foreach ((array) ($m[$jenis] ?? []) as $x) {
                    $pautan++;
                    if (!is_string($x) || !array_key_exists($x, $ada[$jenis])) {
                        $out[] = "modul $nama: $jenis \"" . (is_string($x) ? $x : gettype($x)) . '" tiada';
                    }
                }
            }
            foreach ((array) ($m['muat'] ?? []) as $f) {
                $pautan++;
                $fail = (string) ($f['fail'] ?? '');
                if (trim((string) ($f['label'] ?? '')) === '' || !preg_match('/^[a-z0-9][a-z0-9._-]{0,80}$/', $fail) || !is_file(self::failMuat($s, $fail))) {
                    $out[] = "modul $nama: muat \"$fail\" perlu label + fail wujud di public/muat/$s/";
                }
            }
            if ($pautan === 0) {
                $out[] = "modul $nama: tiada pautan (cheatsheet/rujukan/latihan/muat)";
            }
        }
        return $out;
    }

    /** Bentuk yang mesti SAMA BM/EN (teks boleh berbeza; nama fail muat boleh berbeza ikut bahasa). */
    public static function rangka(array $j): array
    {
        return array_map(fn($m) => [$m['id'] ?? null, $m['tahap'] ?? null, $m['cheatsheet'] ?? [], $m['rujukan'] ?? [], $m['latihan'] ?? [],
            count($m['muat'] ?? [])], $j['modul'] ?? []);
    }

    /**
     * Modul untuk paparan: setiap pautan diselesaikan kepada [jenis, label, url]; rujukan yang tiada dilangkau (suntingan admin
     * yang rosak tidak memecahkan halaman — gerbang menolaknya dalam benih).
     * @return list<array{id:string,tajuk:string,ringkas:string,tahap:int,pautan:list<array{0:string,1:string,2:string}>}>
     */
    public static function modul(string $s, string $b): array
    {
        $j = Kandungan::baca($s, 'jejak', $b);
        if (!is_array($j) || empty($j['modul'])) {
            return [];
        }
        $ada = self::sasaran($s, $b);
        $hal = ['cheatsheet' => 'cheatsheet', 'rujukan' => 'reference', 'latihan' => 'practice'];
        $out = [];
        foreach ($j['modul'] as $m) {
            if (!is_array($m) || empty($m['id'])) {
                continue;
            }
            $p = [];
            foreach ($hal as $jenis => $h) {
                foreach ((array) ($m[$jenis] ?? []) as $x) {
                    if (is_string($x) && array_key_exists($x, $ada[$jenis])) {
                        $p[] = [$jenis, $ada[$jenis][$x], Laluan::subjek($s, $h, $b) . ($jenis === 'rujukan' ? '?cat=' . rawurlencode($x) : '#' . rawurlencode($x))];
                    }
                }
            }
            foreach ((array) ($m['muat'] ?? []) as $f) {
                $fail = (string) ($f['fail'] ?? '');
                if (preg_match('/^[a-z0-9][a-z0-9._-]{0,80}$/', $fail) && is_file(self::failMuat($s, $fail))) {
                    $p[] = ['muat', (string) ($f['label'] ?? $fail), "/muat/$s/$fail"];
                }
            }
            $out[] = ['id' => (string) $m['id'], 'tajuk' => (string) ($m['tajuk'] ?? ''), 'ringkas' => (string) ($m['ringkas'] ?? ''),
                'tahap' => (int) ($m['tahap'] ?? 1), 'pautan' => $p];
        }
        return $out;
    }
}
