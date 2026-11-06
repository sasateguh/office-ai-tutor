<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'dokumen'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/dokumen.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Well-built documents',
    'icon' => 'file-text',
    'tagline' => 'Styles, pages, reports, and Mail Merge',
    'description' => 'Choose the right approach for real work documents: reports, formal letters, and shared documents.',
    'color' => 'amber',
    'questions' => [
        $c('d1', 'Styles', '🎨', 1, 'You want an automatic <strong>table of contents</strong>. What does every chapter heading need?',
            ['Bold and font size 16', 'The Heading 1 or Heading 2 style', 'A number in front of the heading', 'An underline'], 1,
            'The table of contents reads styles, not appearance.', 'The table of contents is built from the <strong>Heading 1, 2, and 3</strong> styles. Headings that are only bold are not recognized.'),
        $c('d2', 'Reports', '📑', 1, 'You added 3 pages to a report. The page numbers in the <strong>table of contents</strong> are now wrong. What should you do?',
            ['Delete the table of contents and insert it again', 'Type the new numbers by hand', 'Click the table of contents → Update Table (or F9)', 'Save and reopen the file'], 2,
            'The table of contents is a field.', 'Click in the table of contents → <strong>Update Table</strong> → Update entire table. Headings and page numbers update together.'),
        $c('d3', 'Pages', '📐', 2, 'A report is in portrait, but <strong>only page 5</strong> must be landscape for a wide table. What is the correct method?',
            ['Rotate the table 90°', 'Section Break (Next Page) before and after page 5, then Orientation → Landscape', 'A page break before page 5', 'Save page 5 in a separate file'], 1,
            'A different orientation needs a different section.', 'A <strong>section break</strong> lets each section have its own orientation, margins, and header. A page break cannot do this.'),
        $c('d4', 'Pages', '🔢', 2, 'The report cover <strong>should have no page number</strong>, but the other pages should. Which option do you select?',
            ['Different First Page', 'Different Odd & Even Pages', 'Link to Previous', 'Show Document Text'], 0,
            'It is on the Header & Footer tab.', '<strong>Different First Page</strong> gives the first page its own header and footer, which can be left empty.'),
        $c('d5', 'Formatting', '⏎', 1, 'The cleanest way to add space between paragraphs is…',
            ['Press Enter twice', 'Spacing After on the paragraph (or in the style)', 'Add a blank line with spaces', 'Switch to a larger font'], 1,
            'Spacing that stays the same when the text changes.', '<strong>Spacing After</strong> (Layout → Spacing) gives consistent spacing without empty paragraphs that are easy to lose.'),
        $c('d6', 'Tables', '🖼️', 2, 'A long table spans 3 pages. You want the <strong>table header row to appear on every page</strong>.',
            ['Copy the header row onto each page', 'Table Layout → Repeat Header Rows', 'Insert → Header', 'Split it into 3 tables'], 1,
            'Select the header row first.', '<strong>Repeat Header Rows</strong> repeats the header row automatically, and it stays correct when the table changes.'),
        $c('d7', 'Pictures', '🖼️', 2, 'Pictures in a report keep moving when the text is edited. The most stable Wrap Text option for reports is…',
            ['Square', 'Behind Text', 'In Line with Text', 'Tight'], 2,
            'The picture is treated like a single character.', '<strong>In Line with Text</strong> makes the picture part of a line of text, so it moves with its paragraph.'),
        $c('d8', 'Review', '✍️', 2, 'Before sending the final version to a client, the document still contains tracked changes and comments. What is the correct step?',
            ['Turn off Track Changes only', 'Accept All Changes, delete the comments, then Inspect Document', 'Switch to the "No Markup" view', 'Save as a new .docx file'], 1,
            '"No Markup" only hides the display.', 'The <strong>No Markup</strong> view still keeps every edit in the file. Accept All Changes, delete the comments, then run <strong>Inspect Document</strong> to remove them completely.'),
        $c('d9', 'Mail Merge', '✉️', 2, 'You need to send the same letter to 200 customers. Their names and addresses are in Excel. Which feature fits?',
            ['Copy and paste 200 times', 'Mailings → Start Mail Merge → Letters', 'Insert → Object', 'References → Citation'], 1,
            'The Mailings tab.', '<strong>Mail Merge</strong> takes each row in Excel and generates one letter per customer.'),
        $c('d10', 'Mail Merge', '✉️', 3, 'In Mail Merge, the Excel recipient file must…',
            ['Have the first row as column headings (Name, Address…) and no blank rows', 'Be saved as a PDF', 'Have only one column', 'Be locked with a password'], 0,
            'Word reads the column names as field names.', 'The first row becomes the <strong>merge fields</strong> (for example «Name»). Blank rows produce blank letters.'),
        $c('d11', 'Saving', '💾', 1, 'A final document must be sent and its <strong>layout must not change</strong> on the recipient\'s computer. Which format fits?',
            ['.docx', '.txt', 'PDF', '.rtf'], 2,
            'A format that works like a digital printout.', '<strong>PDF</strong> preserves fonts and layout. Send .docx only when the recipient needs to edit.'),
        $c('d12', 'Formatting', '🔤', 1, 'Text pasted from a website brings fonts and colors that do not match. What is the quickest fix?',
            ['Change the font one piece at a time', 'Paste → Keep Text Only (or Ctrl+Space after pasting)', 'Retype it', 'Save as PDF'], 1,
            'Paste without the source formatting.', '<strong>Keep Text Only</strong> pastes only the text, so your document formatting stays. In Microsoft 365 the shortcut is Ctrl+Shift+V.'),
        $susun('d13', 'Reports', '📑', 2, 'Put the steps in order to create an automatic <strong>table of contents</strong> that stays accurate after the report is edited.',
            ['Apply the Heading 1 and Heading 2 styles to every chapter and section heading', 'Place the cursor on the blank page after the cover page',
             'References → Table of Contents → choose an automatic style', 'After editing, right-click the table of contents → Update Field → Update entire table'],
            'A table of contents can only read headings that already have a style.',
            'The Heading styles must come first because the table of contents is built from them. Then choose the location, insert the table from the <strong>References</strong> tab, and update it with <strong>Update Field</strong> whenever headings or pages change.'),
    ],
];
