<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'tesis-kerja-sebenar'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/tesis-kerja-sebenar.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Thesis: from draft to PDF',
    'icon' => 'graduation-cap',
    'tagline' => 'One university thesis, from a rough draft to a PDF for the examiners',
    'description' => 'A real work scenario: a rough draft with mixed formatting is moved into the university template, structured, referenced, checked, and exported as a PDF. Each question is one decision in that process.',
    'color' => 'amber',
    'questions' => [
        $c('tk1', 'Template', '📐', 1, 'The faculty gives you a thesis template file (<strong>.dotx</strong>). How do you start your thesis from that template?',
            ['Double-click the .dotx file so Word opens a new document based on it', 'Open the .dotx with File → Open and type the thesis straight into it', 'Copy the logo from the template into a blank document', 'Change the file extension to .docx'], 0,
            'A template is a mould, not a working document.', 'Double-clicking a <strong>.dotx</strong> creates a new document that carries the template’s styles, margins, and header, while the original template stays clean. Typing straight into the .dotx changes the template itself.'),
        $c('tk2', 'Template', '📋', 2, 'You paste text from a rough draft full of mixed fonts and sizes. Which paste option lets the template styles control how the text looks?',
            ['Keep Text Only', 'Keep Source Formatting', 'Picture', 'Paste Special → Paste link'], 0,
            'The option that drops all the original formatting.', '<strong>Keep Text Only</strong> pastes the text alone, so it follows the template’s paragraph style. Keep Source Formatting brings the mixed formatting from the draft.'),
        $c('tk3', 'Structure', '🏗️', 3, 'In the draft, 40 chapter headings were typed in bold 14 pt with no style. What is the fastest way to give them all the <strong>Heading 1</strong> style?',
            ['Click one heading → Home → Select → Select All Text With Similar Formatting → Heading 1', 'Click each heading one by one', 'Find and Replace the word "Chapter"', 'Change the Normal style to bold 14 pt'], 0,
            'Word can select all text with the same formatting.', '<strong>Select All Text With Similar Formatting</strong> selects every bold 14 pt heading at once. One click on Heading 1 then gives them all the same style.'),
        $p('tk4', 'References', '📝', 2, 'The faculty asks for <strong>endnotes</strong>, not footnotes. Press the shortcut to insert an endnote at the cursor.', ['Ctrl+Alt+D'],
            'Not Ctrl+Alt+F (footnote); the letter is next to F on the keyboard.', '<strong>Ctrl+Alt+D</strong> inserts an endnote. Endnotes are collected at the end of the document or section, and their numbers update by themselves.'),
        $p('tk5', 'References', '📝', 3, 'The thesis needs an index of terms. Select a term, then press the shortcut to <strong>mark it as an index entry</strong> (Mark Entry).', ['Alt+Shift+X'],
            'X like a cross mark, with Alt and Shift.', '<strong>Alt+Shift+X</strong> opens the Mark Index Entry box. After every term is marked, References → Insert Index builds the index at the end of the thesis.'),
        $c('tk6', 'References', '📚', 2, 'A week before submission, your supervisor asks you to change the reference style from APA to IEEE. Every citation was inserted with Insert Citation. What do you do?',
            ['References → Style → IEEE; the citations and bibliography change by themselves', 'Retype every citation', 'Delete the bibliography and rewrite it', 'Change the bibliography font'], 0,
            'Citations inserted by Word are fields.', 'Citations and a bibliography built with <strong>Insert Citation</strong> follow the <strong>Style</strong> choice. One change switches them all. Citations typed by hand must be changed one by one.'),
        $c('tk7', 'Final check', '♿', 2, 'Before the thesis goes to the university repository, you want to find pictures without alt text and tables without a header row. Which tool is it?',
            ['Review → Check Accessibility', 'Review → Spelling & Grammar', 'View → Navigation Pane', 'References → Update Table'], 0,
            'The tool that checks whether a screen reader can read the document.', '<strong>Check Accessibility</strong> lists issues such as missing alt text and tables without a header row, and you can fix each issue straight from that pane.'),
        $c('tk8', 'PDF', '📕', 3, 'The examiners want the thesis PDF to have <strong>a bookmark for each chapter</strong> at the side of the PDF reader. What is the right setting?',
            ['Save As → PDF → Options → Create bookmarks using: Headings', 'Insert → Bookmark on every page', 'Print to a PDF printer', 'Save as .docx and let the examiners convert it'], 0,
            'A setting in the Options box when saving as PDF.', '<strong>Create bookmarks using: Headings</strong> builds PDF bookmarks from the Heading styles. It needs headings that use Heading styles.'),
        $c('tk9', 'Final check', '🧹', 3, 'The file will go to an external examiner. You want to make sure <strong>your supervisor’s comments and personal information</strong> are not left in the file. Which tool is it?',
            ['File → Info → Check for Issues → Inspect Document', 'Review → No Markup', 'Ctrl+A then Delete', 'File → Info → Mark as Final'], 0,
            'No Markup only hides; it does not remove.', '<strong>Inspect Document</strong> finds and removes comments, tracked changes, and personal information such as the author name. No Markup and Mark as Final remove nothing.'),
        $susun('tk10', 'PDF', '📕', 3, 'Heading styles are already applied to every heading, the table of contents is inserted and every field is updated (Ctrl+A, F9). Put the steps in order to save the thesis as a PDF with chapter bookmarks.',
            ['File → Save As → Browse to open the Save As dialog box', 'In the Save as type list, choose PDF (*.pdf)',
             'Click Options, tick Create bookmarks using: Headings, then OK', 'Click Save to produce the PDF'],
            'The Options button only appears after the PDF file type is chosen.',
            'Each step depends on the one before it: the <strong>Save as type</strong> list is inside the Save As dialog box, the <strong>Options</strong> button only appears once PDF is chosen, and the bookmark setting must be ticked before <strong>Save</strong> because the PDF is written as soon as that button is pressed. Chapter bookmarks come from headings that use a Heading style.'),
    ],
];
