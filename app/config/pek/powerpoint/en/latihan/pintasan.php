<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'pintasan'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/pintasan.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Essential shortcuts',
    'icon' => 'keyboard',
    'tagline' => 'Shortcuts for building and presenting slides',
    'description' => 'Press the correct key combination. On a phone, type it with +, for example Ctrl+letter. Covers slides, objects, and Slide Show.',
    'color' => 'purple',
    'questions' => [
        $p('p1', 'Slides', '🗂️', 1, 'Press the shortcut to <strong>insert a new slide</strong>.', ['Ctrl+M'],
            'It does the same thing as the New Slide button.', '<strong>Ctrl+M</strong> inserts a new slide after the current one (Home → New Slide).'),
        $p('p2', 'Objects', '📐', 1, 'Press the shortcut to <strong>group</strong> the selected objects.', ['Ctrl+G'],
            'G for Group.', '<strong>Ctrl+G</strong> is Group. <strong>Ctrl+Shift+G</strong> is Ungroup.'),
        $p('p3', 'Objects', '📐', 2, 'Press the shortcut to <strong>ungroup</strong> a group of objects.', ['Ctrl+Shift+G'],
            'The Group shortcut plus one more modifier key.', '<strong>Ctrl+Shift+G</strong> breaks the group apart so you can change each object separately.'),
        $p('p4', 'Objects', '📋', 2, 'Press the shortcut to <strong>open the Selection Pane</strong> and select a buried object.', ['Alt+F10'],
            'Alt plus a function key.', '<strong>Alt+F10</strong> opens the Selection Pane (Home → Arrange → Selection Pane).'),
        $p('p5', 'Presenting', '🎤', 1, 'Press the shortcut to <strong>start the slide show from the first slide</strong>.', ['F5'],
            'A single function key.', '<strong>F5</strong> starts from the beginning. <strong>Shift+F5</strong> starts from the current slide.'),
        $p('p6', 'Presenting', '🎤', 2, 'Press the shortcut to <strong>start from the slide that is open</strong>, not from the beginning.', ['Shift+F5'],
            'The start-from-beginning key plus one modifier.', '<strong>Shift+F5</strong> is useful when you resume a presentation after a Q&amp;A session.'),
        $p('p7', 'Presenting', '🖥️', 2, 'Press the shortcut to <strong>start in Presenter View</strong>, with notes on your screen only.', ['Alt+F5'],
            'Not Shift this time.', '<strong>Alt+F5</strong> starts the slide show in Presenter View.'),
        $p('p8', 'Presenting', '⬛', 2, 'During a presentation, you want the audience to focus on you. Press the key for a <strong>black screen</strong>.', ['B', '.'],
            'The first letter of "Black".', '<strong>B</strong> (or period) shows a black screen. Press it again to return. <strong>W</strong> shows a white screen.'),
        $p('p9', 'Presenting', '🔴', 3, 'During a presentation, press the shortcut for the <strong>laser pointer</strong>.', ['Ctrl+L'],
            'L for Laser.', '<strong>Ctrl+L</strong> turns the mouse pointer into a laser. <strong>Ctrl+P</strong> is the pen and <strong>Ctrl+E</strong> is the eraser.'),
        $p('p10', 'Links', '🔗', 1, 'Press the shortcut to <strong>insert a link</strong> to another slide or a website.', ['Ctrl+K'],
            'The same in Excel, Word, and Outlook.', '<strong>Ctrl+K</strong> opens Insert Hyperlink, including links to another slide in the same file (Place in This Document).'),
    ],
];
