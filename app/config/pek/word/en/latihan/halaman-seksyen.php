<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'halaman-seksyen'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/halaman-seksyen.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Pages and sections',
    'icon' => 'ruler',
    'tagline' => 'Section breaks, different headers, and Roman to Arabic numbers',
    'description' => 'A section break lets each part of a document have its own orientation, margins, header, and page numbers. Practice the layout of a thesis and a formal report.',
    'color' => 'purple',
    'questions' => [
        $p('hs1', 'Pages', '📐', 2, 'Your document has two columns. Press the shortcut to <strong>move text to the next column</strong> (column break).', ['Ctrl+Shift+Enter'],
            'The page break shortcut, plus Shift.', '<strong>Ctrl+Shift+Enter</strong> = Column Break. Ctrl+Enter starts a new page.'),
        $p('hs2', 'Page numbers', '🔢', 2, 'The cursor is in the footer. Press the shortcut to <strong>insert a page number field (PAGE)</strong>.', ['Alt+Shift+P'],
            'P for Page, with two modifier keys.', '<strong>Alt+Shift+P</strong> inserts a PAGE field. Alt+Shift+D inserts today’s date as a field.'),
        $c('hs3', 'Sections', '📄', 1, 'One part of a report needs two columns, but the heading above it on the same page stays in one column. Which break fits?',
            ['Page Break', 'Section Break (Continuous)', 'Section Break (Next Page)', 'Column Break'], 1,
            'A new section without a new page.', '<strong>Continuous</strong> starts a new section on the same page, so the number of columns can change in the middle of a page.'),
        $c('hs4', 'Sections', '📄', 2, 'You change the Chapter 2 header, but the header of the <strong>front matter changes too</strong>. What should you turn off?',
            ['Different First Page', 'Link to Previous in the header of the Chapter 2 section', 'Show Document Text', 'Different Odd & Even Pages'], 1,
            'Each new section copies the header of the previous section by default.', 'Turn off <strong>Link to Previous</strong> in the header of the new section. After that, each section can have a different header.'),
        $c('hs5', 'Page numbers', '🔢', 2, 'The front matter of a thesis (Abstract, Acknowledgements, Table of Contents) needs page numbers <strong>i, ii, iii</strong>. Where do you choose this format?',
            ['Insert → Page Number → Format Page Numbers → Number format', 'Home → Numbering', 'Insert → Symbol', 'Layout → Line Numbers'], 0,
            'The page number format, not a numbered list.', '<strong>Format Page Numbers</strong> sets the number format for one section. The front matter needs its own section.'),
        $c('hs6', 'Page numbers', '🔢', 2, 'Chapter 1 starts on page 6 because the front matter numbers continue. Chapter 1 should start on page 1. What should you set?',
            ['Format Page Numbers → Start at 1 in the Chapter 1 section', 'Delete the front matter', 'Different First Page', 'Type 1 in the footer'], 0,
            'The option after Continue from previous section.', 'In the Chapter 1 section, choose <strong>Start at</strong> 1 in Format Page Numbers. The front matter numbers are not affected.'),
        $c('hs7', 'Pages', '📐', 3, 'The thesis will be bound on the left and the university guidelines ask for an extra 1 cm for binding. What is the right way?',
            ['Add 1 cm to the left margin of each page with Tab', 'Layout → Margins → Custom Margins → Gutter', 'Make the font smaller', 'Choose Narrow margins'], 1,
            'Binding space has its own box in the margins dialog.', '<strong>Gutter</strong> in Custom Margins adds space on the binding side without changing the other margins.'),
        $c('hs8', 'Sections', '📄', 3, 'You change the margins for one wide table only, but the margins of the <strong>whole document</strong> change. What was missed?',
            ['Section breaks before and after that part, then Apply to: This section', 'Track Changes', 'A page break before the table', 'The Normal style'], 0,
            'Margins are stored for each section.', 'Without separate sections, the document has only one section. Insert a <strong>section break</strong>, then choose <strong>Apply to: This section</strong> in the Page Setup box.'),
        $susun('hs9', 'Sections', '📄', 2, 'Put the steps in order to make <strong>one page only</strong> landscape in the middle of a portrait report.',
            ['Insert a Section Break (Next Page) before and after the table page', 'Click in the table page', 'Layout → Orientation → Landscape',
             'Check in Print Preview that the pages before and after it stay portrait'],
            'Orientation can differ only between different sections.',
            'That page must become its own section first. Then click in it and change the <strong>Orientation</strong>. Print Preview (Ctrl+P) shows whether the change is limited to that section.'),
        $susun('hs10', 'Page numbers', '🔢', 3, 'Put the steps in order for thesis page numbers: <strong>i, ii, iii</strong> in the front matter and <strong>1, 2, 3</strong> starting at Chapter 1.',
            ['Place the cursor before the Chapter 1 heading → Layout → Breaks → Next Page',
             'Insert → Page Number → Format Page Numbers in each section: i, ii, iii for the front matter; 1, 2, 3 and Start at 1 for Chapter 1',
             'Update the table of contents (F9) so its page numbers follow the new format', 'Check in Print Preview that the front matter uses Roman numerals and Chapter 1 starts at 1'],
            'The number format is set per section, so the second section must exist first.',
            'Split the sections first with <strong>Next Page</strong>. After that, each section can have its own number format. Update the table of contents after the format changes so its numbers match, then check the result. You only need to turn off <strong>Link to Previous</strong> when the footer text of the two sections must also differ.'),
    ],
];
