<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'laporan-panjang'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/laporan-panjang.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Long reports',
    'icon' => 'book-open',
    'tagline' => 'Table of contents, captions, cross-references, and fields',
    'description' => 'Figure numbers, cross-references, footnotes, and the table of contents are fields that Word generates. Practice inserting, updating, and fixing them.',
    'color' => 'amber',
    'questions' => [
        $p('lp1', 'Fields', '🔁', 1, 'You have clicked in the table of contents. Press the shortcut to <strong>update that field</strong>.', ['F9'],
            'One function key only.', '<strong>F9</strong> updates the selected fields. Press Ctrl+A first to update every field in the document.'),
        $p('lp2', 'Fields', '🔁', 2, 'The figure numbers look strange. Press the shortcut to <strong>show the codes of all fields</strong> in the document, such as <code>{ SEQ Figure }</code>.', ['Alt+F9'],
            'The same function key that updates fields, plus one modifier.', '<strong>Alt+F9</strong> toggles the codes of all fields. Shift+F9 toggles only the selected field. Press again to return to the numbers.'),
        $p('lp3', 'Notes', '📝', 2, 'Press the shortcut to <strong>insert a footnote</strong> at the cursor.', ['Ctrl+Alt+F'],
            'F for Footnote, with two modifier keys.', '<strong>Ctrl+Alt+F</strong> = Insert Footnote. Ctrl+Alt+D inserts an endnote.'),
        $p('lp4', 'Fields', '🔁', 3, 'The final copy of the report is ready to send and the number in one field must not change again. Select that field and press the shortcut to <strong>turn it into plain text</strong>.', ['Ctrl+Shift+F9'],
            'The update-field key, plus two modifiers.', '<strong>Ctrl+Shift+F9</strong> (Unlink Field) turns a field into text. The number will no longer update, so use it only on a final copy.'),
        $c('lp5', 'Captions', '🏷️', 1, 'Figures in the report need automatic numbers like <strong>Figure 1, Figure 2</strong>. What is the first step?',
            ['Type "Figure 1" under the picture', 'Right-click the picture → Insert Caption', 'Insert → Text Box', 'Insert → Page Number'], 1,
            'A caption is a numbered field.', '<strong>Insert Caption</strong> (or References → Insert Caption) inserts the number as a field. Numbers are recalculated when a figure is added or moved.'),
        $c('lp6', 'Captions', '🏷️', 2, 'The Insert Caption box offers only the Figure, Table, and Equation labels. Your report in Malay needs the label <strong>Rajah</strong>. What should you do?',
            ['Type Rajah and delete the word Figure', 'Click New Label and create the label Rajah', 'Change the Windows language to Malay', 'Use Table of Figures'], 1,
            'A button in the Insert Caption box itself.', '<strong>New Label</strong> creates your own label, such as Rajah and Jadual. You can then choose that label in Table of Figures and Cross-reference.'),
        $c('lp7', 'Captions', '🏷️', 2, 'The sentence "<em>see Figure 3</em>" must change by itself when that figure becomes Figure 4. Which feature fits?',
            ['A hyperlink to the picture', 'References → Cross-reference → Only label and number', 'A bookmark on the picture', 'Retype it each time'], 1,
            'A reference to the caption, not to the picture.', '<strong>Cross-reference</strong> creates a field that reads the caption number. Choose <strong>Only label and number</strong> so the sentence contains only "Figure 3". Update with F9.'),
        $c('lp8', 'Captions', '🏷️', 2, 'The front matter of a thesis needs a <strong>List of Tables</strong> separate from the List of Figures. How is it built?',
            ['Copy all table captions onto one page', 'References → Insert Table of Figures → Caption label: Table', 'References → Table of Contents → Custom Table of Contents', 'Insert → Table'], 1,
            'One list for one label.', '<strong>Insert Table of Figures</strong> lists the captions for one label. Build it once for figures and once more for tables.'),
        $c('lp9', 'Fields', '🔁', 3, 'After moving a few figures, the caption numbers are right, but the sentence "see Figure 2" and the List of Figures still show the old numbers. What is the fastest fix?',
            ['Ctrl+A, then F9, and choose Update entire table if asked', 'Save as PDF', 'Delete all cross-references and insert them again', 'Close and reopen Word'], 0,
            'Cross-references and lists are fields that do not update on their own.', 'Select the whole document with <strong>Ctrl+A</strong>, then press <strong>F9</strong>. Every field updates at once. Choose Update entire table for the table of contents and the List of Figures.'),
        $susun('lp10', 'Captions', '🏷️', 3, 'Put the steps in order to create captions numbered by chapter, such as <strong>Figure 2.1</strong>, with an accurate list of figures.',
            ['Number the Heading 1 headings with a Multilevel List', 'Select the picture → References → Insert Caption → label Figure',
             'Numbering → select Include chapter number', 'Insert the list of figures with Insert Table of Figures',
             'Before you submit, press Ctrl+A and then F9'],
            'The chapter number in a caption is read from the numbered Heading 1 headings.',
            'Captions by chapter work only when Heading 1 is already numbered with a <strong>Multilevel List</strong>. Then insert captions with <strong>Include chapter number</strong>, build the list, and update every field with Ctrl+A, F9.'),
    ],
];
