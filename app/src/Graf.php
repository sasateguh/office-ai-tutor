<?php

declare(strict_types=1);

/**
 * JSON-LD halaman utama (~/jenama/SPEK-graf-produk.md): WebSite + WebApplication merujuk entiti induk tetap dalam
 * config/laman.php `induk` (rujukan @id sahaja untuk pengasas; satu node Organization ringkas). Tiada offers, rating,
 * ulasan, alamat, telefon atau e-mel. `induk.org.@id` kosong (repo awam) = tiada blok.
 */
final class Graf
{
    /** `<script type="application/ld+json">` untuk halaman utama bahasa $bahasa, atau '' bila induk tidak ditetapkan. */
    public static function utama(array $laman, string $bahasa, string $huraian): string
    {
        $org = $laman['induk']['org'] ?? [];
        if (($org['@id'] ?? '') === '') {
            return '';
        }
        $rujukOrg = ['@id' => $org['@id']];
        $rumah = $laman['url'] . Laluan::utama($bahasa);
        $graf = [
            [
                '@type' => 'WebSite',
                '@id' => $rumah . '#website',
                'url' => $rumah,
                'name' => $laman['jenama'],
                'inLanguage' => $bahasa,
                'publisher' => $rujukOrg,
            ],
            [
                '@type' => 'WebApplication',
                '@id' => $rumah . '#app',
                'name' => $laman['jenama'],
                'url' => $rumah,
                'description' => $huraian,
                'applicationCategory' => 'EducationalApplication',
                'operatingSystem' => 'Web',
                'inLanguage' => $bahasa,
                'publisher' => $rujukOrg,
                'provider' => $rujukOrg,
            ],
            ['@type' => 'Organization'] + array_intersect_key($org, array_flip(['@id', 'name', 'legalName', 'url'])),
        ];
        $pengasas = $laman['induk']['pengasas']['@id'] ?? '';
        if ($pengasas !== '') {
            $graf[1]['creator'] = ['@id' => $pengasas];
        }
        $json = json_encode(['@context' => 'https://schema.org', '@graph' => $graf],
            JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return '<script type="application/ld+json">' . $json . "</script>\n";
    }
}
