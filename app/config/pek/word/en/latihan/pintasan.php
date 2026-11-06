<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'pintasan'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/pintasan.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Everyday shortcuts',
    'icon' => 'keyboard',
    'tagline' => 'Shortcuts you use every day in Word',
    'description' => 'Press the correct key combination. On a phone, type the answer with +, for example Ctrl+letter. Covers formatting, headings, page breaks, and review.',
    'color' => 'purple',
    'questions' => [
        $p('p1', 'Formatting', '🔤', 1, 'Press the shortcut to make the selected text <strong>bold</strong>.', ['Ctrl+B'],
            'B for Bold.', '<strong>Ctrl+B</strong> toggles bold. Press it again to remove it. Mac: ⌘+B.'),
        $p('p2', 'Formatting', '🔤', 1, 'Press the shortcut to <strong>center</strong> the paragraph.', ['Ctrl+E'],
            'Not C, because C is for Copy. The second letter of "cEnter".', '<strong>Ctrl+E</strong> = Center. Left: Ctrl+L, right: Ctrl+R, justify: Ctrl+J.'),
        $p('p3', 'Pages', '📐', 1, 'Press the shortcut to <strong>start a new page</strong> (page break) instead of pressing Enter repeatedly.', ['Ctrl+Enter'],
            'Ctrl plus the key you normally press for a new line.', '<strong>Ctrl+Enter</strong> inserts a page break. Text above can grow without disturbing the layout of the following pages.'),
        $p('p4', 'Formatting', '🔤', 2, 'Press the shortcut for <strong>a new line within the same paragraph</strong> (line break), such as an address in a letter.', ['Shift+Enter'],
            'Not Ctrl this time.', '<strong>Shift+Enter</strong> = line break: a new line without paragraph spacing. Useful for addresses and signature blocks.'),
        $p('p5', 'Styles', '🎨', 2, 'Press the shortcut to make this heading <strong>Heading 1</strong>.', ['Ctrl+Alt+1'],
            'Two modifier keys plus the heading level.', '<strong>Ctrl+Alt+1</strong> = Heading 1 (Ctrl+Alt+2 for Heading 2). Headings that use a Heading style appear in the table of contents and the Navigation Pane.'),
        $p('p6', 'Formatting', '🔤', 2, 'Text was typed in ALL CAPS by accident. Press the shortcut to <strong>change case</strong> without retyping.', ['Shift+F3'],
            'A function key in the top row of the keyboard.', '<strong>Shift+F3</strong> cycles between lowercase, UPPERCASE, and Capitalize Each Word.'),
        $p('p7', 'Formatting', '🖌️', 2, 'Press the shortcut to <strong>copy the formatting</strong> of text (not the text itself).', ['Ctrl+Alt+C', 'Ctrl+Shift+C'],
            'The usual Copy plus one more modifier key.', 'Microsoft 365: <strong>Ctrl+Alt+C</strong> copies formatting and <strong>Ctrl+Alt+V</strong> pastes it (the same as Format Painter). Word 2019 and earlier: Ctrl+Shift+C and Ctrl+Shift+V.'),
        $p('p8', 'Formatting', '🧽', 2, 'Press the shortcut to <strong>remove all manual character formatting</strong> from the selected text.', ['Ctrl+Space'],
            'The longest key on the keyboard. (On a Mac, ⌘+Space opens Spotlight, so type the answer.)', '<strong>Ctrl+Space</strong> removes manual character formatting (bold, color, size) and returns to the formatting of the paragraph style.'),
        $p('p9', 'Review', '✍️', 2, 'Press the shortcut to <strong>turn on Track Changes</strong>.', ['Ctrl+Shift+E'],
            'E for "Edits".', '<strong>Ctrl+Shift+E</strong> toggles Track Changes (Review → Track Changes).'),
        $p('p10', 'Review', '💬', 3, 'Press the shortcut to <strong>add a comment</strong> to the selected text.', ['Ctrl+Alt+M'],
            'M for "Memo", with two modifier keys. (On a Mac, the system uses this combination, so type the answer.)', '<strong>Ctrl+Alt+M</strong> = New Comment (Review → New Comment).'),
        $p('p11', 'Links', '🔗', 1, 'Press the shortcut to <strong>insert a hyperlink</strong>.', ['Ctrl+K'],
            'The same letter is used in Excel and PowerPoint.', '<strong>Ctrl+K</strong> opens the Insert Link dialog.'),
        $p('p12', 'Review', '🔎', 1, 'Press the shortcut to <strong>check spelling and grammar</strong> (Editor).', ['F7'],
            'A single function key.', '<strong>F7</strong> opens Editor (Spelling & Grammar).'),
    ],
];
