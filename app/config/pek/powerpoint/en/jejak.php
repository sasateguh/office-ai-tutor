<?php

declare(strict_types=1);

/**
 * PowerPoint learning path (section on /en/powerpoint/), EN. Same id, tahap and links as ../jejak.php (BM). Schema: docs/REVAMP.md.
 */
return [
    'tajuk' => 'Learn PowerPoint in order',
    'intro' => 'Work through the modules from top to bottom. Each module points to the matching cheat sheet section, reference category and practice set.',
    'modul' => [
        [
            'id' => 'asas', 'tahap' => 1,
            'tajuk' => 'Basics and everyday shortcuts',
            'ringkas' => 'Add slides, pick a layout, format text and move objects from the keyboard, then test yourself on the shortcuts you use most.',
            'cheatsheet' => ['shortcut', 'edit-text', 'objects'], 'rujukan' => ['slaid'], 'latihan' => ['pintasan', 'slaid'],
        ],
        [
            'id' => 'master', 'tahap' => 1,
            'tajuk' => 'Slide Master, layouts, and themes',
            'ringkas' => 'Set fonts, colors and the logo once in Slide Master so every slide matches. Build your own layouts with placeholders and choose the slide size before you start.',
            'cheatsheet' => ['master', 'themes'], 'rujukan' => ['master'], 'latihan' => ['master-layout'],
        ],
        [
            'id' => 'reka', 'tahap' => 2,
            'tajuk' => 'Slide design: layout, typography, and pictures',
            'ringkas' => 'Line up objects with Align and guides, keep one idea per slide with a clear text hierarchy, and tidy pictures with crop, Remove Background, and Compress Pictures.',
            'cheatsheet' => ['arrange', 'typography', 'images', 'icons-svg'], 'rujukan' => ['objek', 'media'], 'latihan' => ['reka-slaid'],
        ],
        [
            'id' => 'data', 'tahap' => 2,
            'tajuk' => 'Charts, tables, and diagrams',
            'ringkas' => 'Bring charts in from Excel and decide whether to link or embed them. Know when SmartArt fits and when your own diagram is clearer.',
            'cheatsheet' => ['charts', 'smartart'], 'rujukan' => ['carta'], 'latihan' => ['visual-data'],
        ],
        [
            'id' => 'bentang', 'tahap' => 2,
            'tajuk' => 'Animation and presenting',
            'ringkas' => 'Use animation to reveal content one point at a time, set timing in the Animation Pane, and present with Presenter View, notes, and Rehearse Timings.',
            'cheatsheet' => ['animation', 'presenter-view'], 'rujukan' => ['gerak', 'bentang'], 'latihan' => ['animasi-pembentang'],
        ],
        [
            'id' => 'eksport', 'tahap' => 3,
            'tajuk' => 'Export, video, and accessibility',
            'ringkas' => 'Make a PDF with notes, export an MP4 video at a suitable resolution, reduce file size, and check alt text and reading order before you share.',
            'cheatsheet' => ['export'], 'rujukan' => ['fail', 'rakam', 'akses'], 'latihan' => [],
        ],
        [
            'id' => 'viva', 'tahap' => 3,
            'tajuk' => 'Final-year project presentation and viva',
            'ringkas' => 'Bring every module together in one final-year project presentation: slide structure, backup slides for examiner questions, slide numbers, and a PDF for the panel.',
            'cheatsheet' => ['academic', 'mistakes'], 'rujukan' => ['akademik'], 'latihan' => ['akademik-viva'],
        ],
    ],
];
