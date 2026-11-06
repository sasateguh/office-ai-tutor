<?php
/**
 * Satu panduan cabang AI (/ai/<slug>), rupa A2 (docs/REKA.md): kepala beraksen (tahap, minit, bab, Ubuntu yang diuji, sumber +
 * bukti, kemajuan), senarai bab melekat di desktop (sauh.js menanda bab aktif) / laci <details> melekat di telefon, langkah
 * bernombor bersambung garis dengan label tempat, blok kod di-escape penuh + butang salin (arahan/fail sahaja), kotak semak + awas,
 * tanda "bab selesai" (localStorage, panduan.js) + bab sebelum/seterusnya. Data = config/pek/<subjek>/[en/]panduan.php
 * (skema excel/docs/REVAMP.md §panduan); teks UI = config/bahasa (panduan.*, js.panduan.*).
 */
$e = [Papar::class, 'e'];
$info = Subjek::semua()[$subjekId];
$p = Laluan::panduan($subjekId)[$halaman];
$bab = array_values($p['bab'] ?? []);
$jum = count($bab);
$tajuk = Papar::polos($p['tajuk'] ?? $halaman);
$huraian = Papar::polos($p['ringkas'] ?? '');
$widget = false;
$skrip = ['/assets/js/sauh.js', '/assets/js/panduan.js'];
$gaya = ['/assets/css/panduan.css'];   // komponen pd-* (bukan dalam tw.css: halaman lain tidak memerlukannya)
$sumber = (string) ($p['sumber']['repo'] ?? '');
$kunci = $subjekId . '/' . $halaman;          // kunci kemajuan localStorage (panduan.js)
$labelKod = ['arahan' => ['terminal', 'panduan.kod.arahan'], 'fail' => ['file-text', 'panduan.kod.fail'], 'output' => ['monitor', 'panduan.kod.output']];
$tempat = ['pelayan' => ['server', 'panduan.tempat.pelayan'], 'komputer' => ['laptop', 'panduan.tempat.komputer']];
$senaraiBab = function (string $kelas) use ($bab, $e): void { ?>
    <ol class="<?= $kelas ?>">
      <?php foreach ($bab as $i => $b): ?>
      <li><a href="#<?= $e($b['id']) ?>" data-bab-pautan="<?= $e($b['id']) ?>"><span class="bab-n font-mono text-[0.8125rem] text-muted tabular-nums w-5 shrink-0"><?= $i + 1 ?></span><span class="bab-tanda w-5 shrink-0"><?= Papar::ikon('circle-check', 'w-4 h-4') ?></span><span class="min-w-0"><?= Papar::f($b['tajuk']) ?></span></a></li>
      <?php endforeach; ?>
    </ol>
<?php };
?>
<div data-panduan="<?= $e($kunci) ?>" data-bab-jumlah="<?= $jum ?>">
<section class="relative overflow-hidden border-b border-line bg-accent-soft/30">
  <div class="grid-aksen absolute inset-0 -z-10" aria-hidden="true"></div>
  <div class="cahaya absolute -z-10 -top-48 -right-40 w-[36rem] h-[36rem] pointer-events-none" aria-hidden="true"></div>
  <div class="bekas pt-10 pb-10 sm:pt-14 sm:pb-12">
    <a href="<?= Laluan::subjek($subjekId) ?>" class="eyebrow-aksen hover:underline underline-offset-4"><?= $e(t("cabang." . ($info['cabang'] ?? 'office'))) ?> · <?= te('panduan.senarai') ?></a>
    <div class="mt-6 flex items-start gap-4">
      <span class="jubin jubin-lg shadow-kad hidden sm:grid"><?= Papar::ikon('terminal', 'w-6 h-6') ?></span>
      <h1 class="min-w-0 text-h1 tracking-[-0.03em]"><?= Papar::f($p['tajuk'] ?? $halaman) ?></h1>
    </div>
    <p class="mt-4 text-ink-2 text-[1.0625rem] max-w-[62ch] leading-relaxed"><?= Papar::f($p['ringkas'] ?? '') ?></p>
    <ul class="mt-7 flex flex-wrap gap-2.5 text-[0.8125rem] text-ink-2">
      <li class="inline-flex items-center gap-2 h-9 px-3.5 rounded-lg bg-surface border border-line shadow-kad"><?= Papar::ikon('chart-column', 'w-4 h-4 text-accent') ?><?= te('panduan.tahap_n', ['n' => (int) ($p['tahap'] ?? 1)]) ?></li>
      <li class="inline-flex items-center gap-2 h-9 px-3.5 rounded-lg bg-surface border border-line shadow-kad"><?= Papar::ikon('clock', 'w-4 h-4 text-accent') ?><?= te('panduan.minit_n', ['n' => (int) ($p['minit'] ?? 0)]) ?></li>
      <li class="inline-flex items-center gap-2 h-9 px-3.5 rounded-lg bg-surface border border-line shadow-kad"><?= Papar::ikon('list-ordered', 'w-4 h-4 text-accent') ?><?= te('panduan.bab_n', ['n' => $jum]) ?></li>
      <?php if (!empty($p['ubuntu'])): ?>
      <li class="inline-flex items-center gap-2 h-9 px-3.5 rounded-lg bg-surface border border-line shadow-kad"><?= Papar::ikon('server', 'w-4 h-4 text-accent') ?><?= te('panduan.diuji', ['v' => $p['ubuntu']]) ?></li>
      <?php endif; ?>
    </ul>
    <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-4">
      <?php if ($jum): ?><a href="#<?= $e($bab[0]['id']) ?>" class="btn btn-utama"><?= te('panduan.mula') ?><?= Papar::ikon('arrow-right') ?></a><?php endif; ?>
      <?php if ($sumber !== ''): ?>
      <a class="pautan inline-flex items-center gap-1.5 text-sm" href="<?= $e($sumber) ?>" rel="noopener" target="_blank"><?= te('panduan.sumber') ?><?= Papar::ikon('external-link', 'w-3.5 h-3.5') ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>

<div class="relative">
  <details class="pd-laci" id="laci-bab">
    <summary class="bekas">
      <span class="jubin jubin-sm"><?= Papar::ikon('list-ordered', 'w-4 h-4') ?></span>
      <span class="min-w-0 flex-1">
        <span class="block text-xs text-muted"><?= te('panduan.laci') ?> · <span data-kemajuan-teks><?= te('panduan.kemajuan', ['n' => 0, 'j' => $jum]) ?></span></span>
        <span class="block text-sm font-medium truncate" data-laci-semasa><?= $jum ? Papar::f($bab[0]['tajuk']) : '' ?></span>
      </span>
      <span class="pd-laci-panah text-muted"><?= Papar::ikon('chevron-down') ?></span>
    </summary>
    <nav class="pd-laci-isi" aria-label="<?= te('panduan.laci') ?>">
      <div class="bekas py-4"><?php $senaraiBab('sauh text-[0.9375rem]'); ?></div>
    </nav>
  </details>

  <div class="bekas mt-10 lg:mt-14 grid gap-12 lg:grid-cols-[16rem_minmax(0,1fr)] xl:gap-16">
    <aside class="hidden lg:block min-w-0">
      <nav class="sticky top-24 space-y-6" aria-labelledby="kandungan-panduan">
        <div>
          <p class="text-xs font-medium text-muted"><?= te('panduan.kemajuan_label') ?></p>
          <span class="pd-bar" aria-hidden="true"><i data-kemajuan-bar></i></span>
          <p class="mt-2 text-[0.8125rem] text-ink-2 tabular-nums" data-kemajuan-teks><?= te('panduan.kemajuan', ['n' => 0, 'j' => $jum]) ?></p>
        </div>
        <div>
          <p id="kandungan-panduan" class="eyebrow-aksen mb-3"><?= te('panduan.kandungan') ?></p>
          <div id="toc"><?php $senaraiBab('sauh text-[0.875rem]'); ?></div>
        </div>
        <p class="text-xs text-muted leading-relaxed"><?= te('panduan.simpan_nota') ?></p>
      </nav>
    </aside>

    <div class="min-w-0 space-y-20 [overflow-wrap:anywhere]">
      <?php if (!empty($p['prasyarat'])): ?>
      <section aria-labelledby="prasyarat" class="kad p-6 sm:p-7">
        <h2 id="prasyarat" class="text-h3 flex items-center gap-2.5"><span class="jubin jubin-sm"><?= Papar::ikon('list-checks', 'w-4 h-4') ?></span><?= te('panduan.prasyarat') ?></h2>
        <ul class="mt-4 space-y-2.5 text-ink-2">
          <?php foreach ($p['prasyarat'] as $x): ?><li class="flex gap-3"><span class="mt-1 text-accent shrink-0"><?= Papar::ikon('check') ?></span><span class="min-w-0"><?= Papar::f($x) ?></span></li><?php endforeach; ?>
        </ul>
      </section>
      <?php endif; ?>

      <?php foreach ($bab as $i => $b): $id = $e($b['id']); ?>
      <section id="<?= $id ?>" class="scroll-mt-16 lg:scroll-mt-6" aria-labelledby="bab-<?= $id ?>" data-sauh-bahagian>
        <p class="eyebrow-aksen"><?= te('panduan.bab_ke', ['n' => $i + 1]) ?></p>
        <h2 id="bab-<?= $id ?>" class="tajuk-bahagian mt-3"><?= Papar::f($b['tajuk']) ?></h2>
        <?php if (!empty($b['ringkas'])): ?><p class="mt-4 text-ink-2 text-[1.0625rem] leading-relaxed max-w-[62ch]"><?= Papar::f($b['ringkas']) ?></p><?php endif; ?>

        <ol class="mt-10 space-y-10">
          <?php foreach ($b['langkah'] ?? [] as $j => $l): $jenis = $l['kod_jenis'] ?? 'arahan'; ?>
          <li class="pd-langkah">
            <span class="pd-langkah-n" aria-hidden="true"><?= $j + 1 ?></span>
            <div class="min-w-0 pt-1">
              <h3 class="text-h3"><span class="sr-only"><?= $j + 1 ?>. </span><?= Papar::f($l['tajuk'] ?? '') ?></h3>
              <?php if (isset($tempat[$l['tempat'] ?? ''])): [$ik, $k] = $tempat[$l['tempat']]; ?>
              <p class="mt-2.5"><span class="pd-tempat"><?= Papar::ikon($ik, 'w-3.5 h-3.5') ?><?= te($k) ?></span></p>
              <?php endif; ?>
              <?php if (!empty($l['teks'])): ?><p class="mt-3 text-ink-2 leading-relaxed max-w-[68ch]"><?= Papar::f($l['teks']) ?></p><?php endif; ?>
              <?php if (!empty($l['kod'])): [$ik, $k] = $labelKod[$jenis] ?? $labelKod['arahan']; $kid = 'kod-' . $id . '-' . ($j + 1); ?>
              <div class="pd-kod">
                <div class="pd-kod-bar">
                  <span class="inline-flex items-center gap-2"><?= Papar::ikon($ik, 'w-3.5 h-3.5') ?><?= te($k) ?></span>
                  <?php if ($jenis !== 'output'): ?>
                  <button type="button" class="pd-salin" data-salin-kod="<?= $kid ?>" aria-label="<?= te('panduan.salin_label', ['n' => $j + 1]) ?>"><?= Papar::ikon('copy', 'w-3.5 h-3.5') ?><span data-salin-teks><?= te('panduan.salin') ?></span></button>
                  <?php endif; ?>
                </div>
                <pre tabindex="0"><code id="<?= $kid ?>" data-kod-jenis="<?= $e($jenis) ?>"><?= $e($l['kod']) ?></code></pre>
              </div>
              <?php endif; ?>
            </div>
          </li>
          <?php endforeach; ?>
        </ol>

        <?php if (!empty($b['semak'])): ?>
        <div class="mt-10 pd-semak">
          <p class="font-semibold flex items-center gap-2 text-ink"><span class="text-ok"><?= Papar::ikon('circle-check', 'w-4 h-4') ?></span><?= te('panduan.semak') ?></p>
          <ul class="mt-3 space-y-2 text-ink-2 text-[0.9375rem]"><?php foreach ($b['semak'] as $x): ?><li class="flex gap-2.5"><span class="pd-titik" aria-hidden="true"></span><span class="min-w-0"><?= Papar::f($x) ?></span></li><?php endforeach; ?></ul>
        </div>
        <?php endif; ?>
        <?php if (!empty($b['awas'])): ?>
        <div class="mt-4 pd-awas">
          <p class="font-semibold flex items-center gap-2 text-ink"><span class="text-warn"><?= Papar::ikon('triangle-alert', 'w-4 h-4') ?></span><?= te('panduan.awas') ?></p>
          <ul class="mt-3 space-y-2 text-ink-2 text-[0.9375rem]"><?php foreach ($b['awas'] as $x): ?><li class="flex gap-2.5"><span class="pd-titik" aria-hidden="true"></span><span class="min-w-0"><?= Papar::f($x) ?></span></li><?php endforeach; ?></ul>
        </div>
        <?php endif; ?>

        <div class="mt-10 pt-8 border-t border-line space-y-5">
          <button type="button" class="btn btn-kedua pd-tanda hidden" data-tanda-bab="<?= $id ?>" aria-pressed="false"><?= Papar::ikon('circle-check') ?><?= te('panduan.tanda') ?></button>
          <?php $seb = $bab[$i - 1] ?? null; $set = $bab[$i + 1] ?? null; if ($seb || $set): ?>
          <nav class="grid gap-3 sm:grid-cols-2" aria-label="<?= te('panduan.nav_bab') ?>">
            <?php if ($seb): ?>
            <a href="#<?= $e($seb['id']) ?>" class="kad-timbul min-w-0 p-4 flex items-center gap-3"><span class="text-muted"><?= Papar::ikon('arrow-left') ?></span><span class="min-w-0"><span class="block text-xs text-muted"><?= te('panduan.sebelum') ?></span><span class="block text-sm font-medium"><?= Papar::f($seb['tajuk']) ?></span></span></a>
            <?php else: ?><span class="hidden sm:block" aria-hidden="true"></span><?php endif; ?>
            <?php if ($set): ?>
            <a href="#<?= $e($set['id']) ?>" class="kad-timbul min-w-0 p-4 flex items-center gap-3 sm:justify-end sm:text-right"><span class="min-w-0"><span class="block text-xs text-muted"><?= te('panduan.seterusnya') ?></span><span class="block text-sm font-medium"><?= Papar::f($set['tajuk']) ?></span></span><span class="text-accent"><?= Papar::ikon('arrow-right') ?></span></a>
            <?php endif; ?>
          </nav>
          <?php endif; ?>
        </div>
      </section>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<p class="sr-only" aria-live="polite" data-umum></p>
</div>
