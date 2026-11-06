<?php

declare(strict_types=1);

/**
 * Word learning path (section on /en/word/), EN. Same id, tahap and links as ../jejak.php (BM). Schema: docs/REVAMP.md.
 */
return [
    'tajuk' => 'Learn Word in order',
    'intro' => 'Work through the modules from top to bottom. Each module points to the matching cheat sheet section, reference category and practice set.',
    'modul' => [
        [
            'id' => 'asas', 'tahap' => 1,
            'tajuk' => 'Basics and everyday shortcuts',
            'ringkas' => 'Format text, paragraphs and lists from the keyboard, move around and select text without the mouse, then test yourself on the shortcuts you use most.',
            'cheatsheet' => ['shortcuts', 'navigate-select', 'format-shortcuts'], 'rujukan' => ['format'], 'latihan' => ['pintasan', 'dokumen'],
        ],
        [
            'id' => 'styles', 'tahap' => 1,
            'tajuk' => 'Styles and document structure',
            'ringkas' => 'Use Heading 1–3 and modify a style once for the whole document. Link a multilevel list to the headings so chapter numbers follow on their own.',
            'cheatsheet' => ['styles', 'multilevel-headings'], 'rujukan' => ['gaya'], 'latihan' => ['styles-struktur'],
        ],
        [
            'id' => 'dokumen-panjang', 'tahap' => 2,
            'tajuk' => 'Long reports: table of contents, captions and fields',
            'ringkas' => 'Build a table of contents and a table of figures, caption your tables and figures, refer to them with cross-references and update every field with F9.',
            'cheatsheet' => ['long-documents', 'captions-crossref', 'fields'], 'rujukan' => ['laporan', 'medan'], 'latihan' => ['laporan-panjang'],
        ],
        [
            'id' => 'halaman', 'tahap' => 2,
            'tajuk' => 'Pages, sections and page numbers',
            'ringkas' => 'Split the document with section breaks, set margins and a different header and footer for each section, and switch from Roman to Arabic page numbers at chapter one.',
            'cheatsheet' => ['breaks', 'page-layout', 'thesis-numbering'], 'rujukan' => ['halaman'], 'latihan' => ['halaman-seksyen'],
        ],
        [
            'id' => 'jadual-gambar', 'tahap' => 2,
            'tajuk' => 'Tables and pictures',
            'ringkas' => 'Repeat a table header row on every page, control column widths with AutoFit, and place pictures with Wrap Text so the text stays put.',
            'cheatsheet' => ['tables', 'pictures'], 'rujukan' => ['jadual'], 'latihan' => [],
        ],
        [
            'id' => 'kolaborasi', 'tahap' => 3,
            'tajuk' => 'Reviewing together and Mail Merge',
            'ringkas' => 'Review a draft with your supervisor using Track Changes, comments and Compare. Produce letters and labels for many recipients from one list with Mail Merge.',
            'cheatsheet' => ['review', 'mail-merge'], 'rujukan' => ['semakan', 'mel'], 'latihan' => ['semakan-kolaborasi', 'mail-merge'],
        ],
        [
            'id' => 'tesis', 'tahap' => 3,
            'tajuk' => 'A thesis from draft to PDF',
            'ringkas' => 'Bring every module together in one thesis: a template, long-document structure, an accessibility check and a PDF export with bookmarks from the headings.',
            'cheatsheet' => ['templates-pdf', 'accessibility', 'mistakes'], 'rujukan' => ['tesis', 'templat', 'akses', 'fail'], 'latihan' => ['tesis-kerja-sebenar'],
        ],
    ],
];
