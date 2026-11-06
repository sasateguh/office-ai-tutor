<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'styles-struktur'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/styles-struktur.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Styles and structure',
    'icon' => 'heading',
    'tagline' => 'Headings, Modify Style, and chapter numbers',
    'description' => 'Build the structure of a long document with styles, not manual formatting: heading levels, the Styles pane, the Navigation Pane, and 1, 1.1 chapter numbers linked to headings.',
    'color' => 'purple',
    'questions' => [
        $p('ss1', 'Styles', '🎨', 1, 'Press the shortcut to make this subheading <strong>Heading 2</strong>.', ['Ctrl+Alt+2'],
            'The same as Heading 1, with a different level number.', '<strong>Ctrl+Alt+2</strong> = Heading 2. Ctrl+Alt+1 applies Heading 1 and Ctrl+Alt+3 applies Heading 3.'),
        $p('ss2', 'Styles', '🎨', 2, 'Press the shortcut to make this minor heading <strong>Heading 3</strong>.', ['Ctrl+Alt+3'],
            'Two modifier keys and the heading level number.', '<strong>Ctrl+Alt+3</strong> = Heading 3. Use levels in order: Heading 1, then 2, then 3. Do not skip a level.'),
        $p('ss3', 'Styles', '🎨', 2, 'Press the shortcut to open the <strong>Styles pane</strong>, the full list of styles at the side of the screen.', ['Ctrl+Alt+Shift+S'],
            'Three modifier keys at once, and S for Styles.', '<strong>Ctrl+Alt+Shift+S</strong> opens the Styles pane. Ctrl+Shift+S opens the Apply Styles box, where you type a style name.'),
        $c('ss4', 'Styles', '🎨', 1, 'Your lecturer wants all body text in the report in <strong>Times New Roman 12</strong>. What is the cleanest way?',
            ['Select all text (Ctrl+A) and change the font', 'Right-click the Normal style → Modify → change the font and size', 'Change the font of each paragraph one by one', 'Change the Windows default font'], 1,
            'Body text uses one shared style.', 'Body text uses the <strong>Normal</strong> style. Change that style once and every paragraph that uses it changes. Ctrl+A also changes headings, tables, and captions.'),
        $c('ss5', 'Styles', '🎨', 2, 'Every time you bold one word in a paragraph, <strong>all Normal paragraphs become bold too</strong>. What is the cause?',
            ['Track Changes is on', 'Automatically update is selected in Modify Style', 'The file is damaged and must be saved again', 'Format Painter is still active'], 1,
            'Look at the bottom of the Modify Style box.', '<strong>Automatically update</strong> updates the style every time you format text by hand. Clear that check box in Modify Style.'),
        $c('ss6', 'Styles', '🎨', 2, 'You have formatted one heading the way you want. How do all the other Heading 1 headings get the same look?',
            ['Use Format Painter on each heading', 'Right-click Heading 1 → Update Heading 1 to Match Selection', 'Copy and paste that heading', 'Design → Watermark'], 1,
            'A style can take its look from the selected text.', 'Select the formatted heading, then right-click <strong>Heading 1</strong> in Home → Styles → <strong>Update Heading 1 to Match Selection</strong>.'),
        $c('ss7', 'Structure', '🧭', 2, 'Chapter 4 of the report needs to move before Chapter 3. What is the safest way?',
            ['Cut and paste each page', 'Drag the Chapter 4 heading above Chapter 3 in the Navigation Pane', 'Change the chapter numbers by hand', 'Save each chapter in a separate file'], 1,
            'Heading styles appear as a list at the side of the screen (Ctrl+F).', 'In the <strong>Navigation Pane</strong>, dragging a heading moves the whole chapter with its content. Multilevel chapter numbers are recalculated.'),
        $c('ss8', 'Structure', '🧭', 1, 'You want to change the fonts and spacing of <strong>every style</strong> in the document at once to try a different look. Which feature fits?',
            ['Design → Document Formatting (Style Set)', 'Home → Clear All Formatting', 'Insert → Cover Page', 'View → Read Mode'], 0,
            'The Design tab.', 'A <strong>Style Set</strong> in Design → Document Formatting changes the fonts and spacing of every style in one step. Try a few sets before formatting by hand.'),
        $c('ss9', 'Chapter numbers', '🔢', 3, 'The 1, 1.1, 1.1.1 chapter numbers in your thesis do not change when a chapter moves. What needs fixing?',
            ['Type the numbers more carefully', 'Link each Multilevel List level to a Heading style (Link level to style)', 'Use plain Numbering on each heading', 'Change the headings to capital letters'], 1,
            'Typed numbers are plain text.', 'In Define New Multilevel List → More, choose <strong>Link level to style</strong>: level 1 = Heading 1, level 2 = Heading 2. Numbers linked to styles recalculate themselves.'),
        $susun('ss10', 'Chapter numbers', '🔢', 3, 'Put the steps in order to create <strong>CHAPTER 1, 1.1, 1.2</strong> numbers linked to the Heading styles.',
            ['Apply Heading 1 to chapter titles and Heading 2 to subheadings', 'Click in one Heading 1 heading',
             'Home → Multilevel List → Define New Multilevel List → More',
             'Level 1: Link level to style Heading 1 and type CHAPTER before the gray number; level 2: Link level to style Heading 2',
             'Click OK and check the heading numbers in the Navigation Pane'],
            'The styles must exist before a list can be linked to them.',
            'Headings need their Heading styles first. Then open <strong>Define New Multilevel List</strong>, link each level to a style, and add the word CHAPTER without deleting the gray number, because that number is a field.'),
    ],
];
