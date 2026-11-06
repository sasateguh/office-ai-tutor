<?php
/**
 * Gambaran subjek cabang bukan Office (cth /ai/): kepala aksen + senarai panduan (tahap, minit, bilangan bab dikira dari pek).
 * Teks = config/pek/<subjek>/utama.php + config/bahasa; senarai = config/pek/<subjek>/panduan.php. Rupa A2: kad panduan beraksen (jubin, tahap, minit, bab, Ubuntu yang diuji).
 */
$e = [Papar::class, 'e'];
$bhs = Bahasa::kod();
$info = Subjek::semua()[$subjekId];
$u = Kandungan::baca($subjekId, 'utama', $bhs);
$senarai = Laluan::panduan($subjekId);
$tajuk = $info['nama'];
$huraian = Papar::polos($u['meta'] ?? ($u['ringkas'] ?? ''));
$widget = false;
$kp = ['ikon' => $info['ikon'], 'eyebrow' => t(($info['cabang'] ?? 'office') === 'ai' ? 'cabang.ai' : 'cabang.office'), 'tajuk' => Papar::f($u['tajuk'] ?? $info['nama']),
    'intro' => Papar::f($u['pengenalan'] ?? ($u['ringkas'] ?? '')), 'angka' => [[count($senarai), t('panduan.senarai')]]];
require __DIR__ . '/_kepala-hal.php';
?>
<section class="bahagian">
  <div class="bekas">
    <h2 class="sr-only"><?= te('panduan.senarai') ?></h2>
    <?php if (!$senarai): ?>
    <p class="text-ink-2"><?= te('panduan.kosong') ?></p>
    <?php else: ?>
    <ul class="grid gap-5 md:grid-cols-2">
      <?php foreach ($senarai as $slug => $p): if (!in_array($slug, Laluan::halaman($subjekId), true)) continue; ?>
      <li class="min-w-0">
        <a href="<?= Laluan::subjek($subjekId, $slug) ?>" class="kad-timbul group h-full p-6 sm:p-7 flex flex-col">
          <span class="hiasan" aria-hidden="true">
            <span class="absolute inset-x-0 top-0 h-1 bg-accent"></span>
            <span class="cahaya absolute -top-24 -right-24 w-64 h-64"></span>
          </span>
          <span class="relative flex items-center gap-3">
            <span class="jubin"><?= Papar::ikon('terminal', 'w-5 h-5') ?></span>
            <span class="eyebrow-aksen"><?= te('panduan.senarai') ?></span>
          </span>
          <h3 class="relative mt-6 text-[1.375rem] font-semibold tracking-tight"><?= Papar::f($p['tajuk'] ?? $slug) ?></h3>
          <p class="relative mt-2 text-[0.9375rem] text-ink-2 leading-relaxed flex-1"><?= Papar::f($p['ringkas'] ?? '') ?></p>
          <ul class="relative mt-6 pt-5 border-t border-line flex flex-wrap gap-x-5 gap-y-2 text-[0.8125rem] text-ink-2">
            <li class="inline-flex items-center gap-1.5"><?= Papar::ikon('chart-column', 'w-3.5 h-3.5 text-accent') ?><?= te('panduan.tahap_n', ['n' => (int) ($p['tahap'] ?? 1)]) ?></li>
            <li class="inline-flex items-center gap-1.5"><?= Papar::ikon('clock', 'w-3.5 h-3.5 text-accent') ?><?= te('panduan.minit_n', ['n' => (int) ($p['minit'] ?? 0)]) ?></li>
            <li class="inline-flex items-center gap-1.5"><?= Papar::ikon('list-ordered', 'w-3.5 h-3.5 text-accent') ?><?= te('panduan.bab_n', ['n' => count($p['bab'] ?? [])]) ?></li>
            <?php if (!empty($p['ubuntu'])): ?><li class="inline-flex items-center gap-1.5"><?= Papar::ikon('server', 'w-3.5 h-3.5 text-accent') ?><?= te('panduan.diuji', ['v' => $p['ubuntu']]) ?></li><?php endif; ?>
          </ul>
          <span class="relative mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-accent"><?= te('panduan.buka') ?><span class="transition-transform group-hover:translate-x-1"><?= Papar::ikon('arrow-right') ?></span></span>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
</section>
