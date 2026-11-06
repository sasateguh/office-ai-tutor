// Panduan cabang AI (src/papar/panduan.php): butang salin blok kod (umum aria-live), tanda "bab selesai" dalam localStorage
// (kunci panduan:<subjek>/<slug> → senarai id bab), bar + teks kemajuan, laci bab telefon (<details>: tutup bila pautan
// dipilih / Esc / klik di luar; tajuk bab semasa diikut dari aria-current sauh.js). Teks = window.LAMAN.T (config/bahasa js.*).
(function () {
    const akar = document.querySelector('[data-panduan]');
    if (!akar) return;
    const T = (window.LAMAN && window.LAMAN.T) || {};
    const tr = (k, v) => String(T[k] || k).replace(/\{(\w+)\}/g, (_, n) => (v && n in v ? v[n] : ''));
    const umum = akar.querySelector('[data-umum]');
    const sebut = (teks) => { if (!umum) return; umum.textContent = ''; setTimeout(() => { umum.textContent = teks; }, 30); };

    // salin: teks <code> sebenar (bukan HTML), jadi entiti/aksara khas disalin seperti yang dilihat
    async function salin(teks) {
        try { await navigator.clipboard.writeText(teks); return true; } catch (e) {}
        const t = document.createElement('textarea');
        t.value = teks; t.setAttribute('readonly', ''); t.className = 'sr-only';
        document.body.appendChild(t); t.select();
        let ok = false;
        try { ok = document.execCommand('copy'); } catch (e) {}
        t.remove();
        return ok;
    }
    akar.addEventListener('click', async (e) => {
        const b = e.target.closest('[data-salin-kod]');
        if (!b) return;
        const elKod = document.getElementById(b.getAttribute('data-salin-kod'));
        const label = b.querySelector('[data-salin-teks]');
        if (!elKod) return;
        if (!(await salin(elKod.textContent))) { sebut(tr('js.panduan.gagal_salin')); return; }
        b.classList.add('disalin');
        if (label) label.textContent = tr('js.disalin');
        sebut(tr('js.panduan.disalin'));
        clearTimeout(b._t);
        b._t = setTimeout(() => { b.classList.remove('disalin'); if (label) label.textContent = tr('js.salin'); }, 1600);
    });

    // kemajuan
    const KUNCI = 'panduan:' + akar.getAttribute('data-panduan');
    const jumlah = Number(akar.getAttribute('data-bab-jumlah')) || 0;
    const sah = new Set([...akar.querySelectorAll('[data-tanda-bab]')].map((b) => b.getAttribute('data-tanda-bab')));
    let siap;
    try { siap = new Set((JSON.parse(localStorage.getItem(KUNCI) || '[]') || []).filter((id) => sah.has(id))); } catch (e) { siap = new Set(); }
    function lukis() {
        const n = siap.size;
        akar.querySelectorAll('[data-kemajuan-teks]').forEach((el) => { el.textContent = tr('js.panduan.kemajuan', { n, j: jumlah }); });
        akar.querySelectorAll('[data-kemajuan-bar]').forEach((el) => { el.style.setProperty('--isi', String(jumlah ? n / jumlah : 0)); });
        akar.querySelectorAll('[data-bab-pautan]').forEach((a) => { a.toggleAttribute('data-siap', siap.has(a.getAttribute('data-bab-pautan'))); });
        akar.querySelectorAll('[data-tanda-bab]').forEach((b) => { b.setAttribute('aria-pressed', String(siap.has(b.getAttribute('data-tanda-bab')))); });
    }
    akar.querySelectorAll('[data-tanda-bab]').forEach((b) => {
        b.classList.remove('hidden');
        b.addEventListener('click', () => {
            const id = b.getAttribute('data-tanda-bab');
            const ya = !siap.has(id);
            if (ya) siap.add(id); else siap.delete(id);
            try { localStorage.setItem(KUNCI, JSON.stringify([...siap])); } catch (e) {}
            lukis();
            sebut(tr(ya ? 'js.panduan.tanda_ya' : 'js.panduan.tanda_tak'));
        });
    });
    lukis();

    // laci bab (telefon)
    const laci = document.getElementById('laci-bab');
    if (laci) {
        const ringkas = laci.querySelector('summary');
        const semasa = laci.querySelector('[data-laci-semasa]');
        const tutup = (fokus) => { if (!laci.open) return; laci.open = false; if (fokus) ringkas.focus(); };
        laci.addEventListener('click', (e) => { if (e.target.closest('a[href^="#"]')) tutup(false); });
        document.addEventListener('click', (e) => { if (!laci.contains(e.target)) tutup(false); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && laci.open) tutup(true); });
        const toc = document.getElementById('toc');
        if (toc && semasa) {
            const ikut = () => {
                const a = toc.querySelector('a[aria-current="true"]');
                if (!a) return;
                const id = a.getAttribute('data-bab-pautan');
                semasa.textContent = a.lastElementChild.textContent;
                laci.querySelectorAll('[data-bab-pautan]').forEach((x) => {
                    if (x.getAttribute('data-bab-pautan') === id) x.setAttribute('aria-current', 'true'); else x.removeAttribute('aria-current');
                });
            };
            new MutationObserver(ikut).observe(toc, { subtree: true, attributes: true, attributeFilter: ['aria-current'] });
            ikut();
        }
    }
})();
