<?php
/**
 * Jejak pembelajaran di halaman subjek (src/Jejak.php, kandungan config/pek/<subjek>/[en/]jejak.php): modul bernombor, setiap
 * satu memaut seksyen cheat sheet, kategori rujukan, set latihan dan fail muat turun. Perlu: $subjekId, $bhs, $bil, $kelasBahagian.
 * Tiada fail jejak = tiada bahagian.
 */
$jejakModul = Jejak::modul($subjekId, $bhs);
if (!$jejakModul) {
    return;
}
$jj = Kandungan::baca($subjekId, 'jejak', $bhs);
$ikonPautan = ['cheatsheet' => 'list', 'rujukan' => 'book-marked', 'latihan' => 'square-check-big', 'muat' => 'download'];
$labelPautan = ['cheatsheet' => t('hal.cheatsheet'), 'rujukan' => t($subjekId === 'excel' ? 'hal.reference.excel' : 'hal.reference.ciri'),
    'latihan' => t('hal.practice'), 'muat' => t('jejak.muat')];
?>
<section id="jejak" class="<?= $kelasBahagian() ?> scroll-mt-16" aria-labelledby="jejak-tajuk">
  <div class="bekas">
    <div class="max-w-2xl" data-muncul>
      <p class="eyebrow-aksen"><?= sprintf('%02d', ++$bil) ?> · <?= te('jejak.eyebrow') ?></p>
      <h2 id="jejak-tajuk" class="tajuk-bahagian"><?= Papar::f($jj['tajuk'] ?? '') ?></h2>
      <?php if (!empty($jj['intro'])): ?>
      <p class="mt-4 text-ink-2 text-[1.0625rem] leading-relaxed"><?= Papar::f($jj['intro']) ?></p>
      <?php endif; ?>
    </div>
    <ol class="mt-12 grid gap-5 md:grid-cols-2" data-muncul>
      <?php foreach ($jejakModul as $i => $m): ?>
      <li id="jejak-<?= Papar::e($m['id']) ?>" class="kad-timbul min-w-0 p-6 sm:p-7 flex flex-col scroll-mt-24">
        <div class="flex items-start gap-4">
          <span class="jubin font-mono font-semibold tabular-nums" aria-hidden="true"><?= sprintf('%02d', $i + 1) ?></span>
          <span class="flex-1 min-w-0">
            <h3 class="text-h3"><span class="sr-only"><?= te('jejak.modul', ['n' => $i + 1]) ?> </span><?= Papar::f($m['tajuk']) ?></h3>
            <span class="block mt-1 text-[0.9375rem] text-ink-2 leading-relaxed"><?= Papar::f($m['ringkas']) ?></span>
          </span>
        </div>
        <div class="mt-6 flex flex-wrap items-center gap-2">
          <span class="lencana-angka"><?= te('js.lat.tahap', ['n' => $m['tahap']]) ?></span>
        </div>
        <div class="mt-6 pt-5 border-t border-line"><ul class="flex flex-col gap-1">
          <?php foreach ($m['pautan'] as [$jenis, $label, $url]): ?>
          <li><a href="<?= Papar::e($url) ?>" class="pautan-jejak group"<?= $jenis === 'muat' ? ' download' : '' ?>>
            <span class="text-accent shrink-0"><?= Papar::ikon($ikonPautan[$jenis]) ?></span>
            <span class="min-w-0 flex-1"><span class="block text-xs text-muted"><?= Papar::e($labelPautan[$jenis]) ?></span><span class="block font-medium text-ink group-hover:text-accent"><?= Papar::f($label) ?></span></span>
            <span class="text-muted shrink-0 transition-transform group-hover:translate-x-1"><?= Papar::ikon($jenis === 'muat' ? 'file-down' : 'arrow-right') ?></span>
          </a></li>
          <?php endforeach; ?>
        </ul></div>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
