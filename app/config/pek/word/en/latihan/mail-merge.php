<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'mail-merge'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/mail-merge.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Mail Merge letters and labels',
    'icon' => 'mail',
    'tagline' => 'Letters, labels, and directories from one Excel list',
    'description' => 'Mail Merge combines one document with a list of recipients, so every letter or label gets its own name and address. Practice the Mailings flow from the data source to the finished document.',
    'color' => 'amber',
    'questions' => [
        $c('mm1', 'Data source', '📇', 1, 'You want to send an invitation letter to 120 participants. Their names and addresses are in an Excel file. Where do you start Mail Merge?',
            ['Mailings → Start Mail Merge → Letters', 'Insert → Text Box', 'File → New → Blank document, then copy it 120 times', 'References → Insert Citation'], 0,
            'The tab named after sending mail.', '<strong>Mailings → Start Mail Merge → Letters</strong> makes the current document the main letter. You choose the Excel list in the next step.'),
        $c('mm2', 'Data source', '📇', 1, 'How should the Excel sheet be laid out so Word reads it correctly as a recipient list?',
            ['Row 1 = column headings (Name, Address, Postcode), one row per recipient, all data on one sheet', 'Each recipient on their own sheet', 'Column headings in the last row', 'Merged cells (Merge & Center) for each name'], 0,
            'Word turns the column headings into field names.', 'Word reads the <strong>first row</strong> as field names and every row after it as one recipient. Merged cells and data spread over several sheets make the list hard to select.'),
        $c('mm3', 'Data source', '📇', 2, 'The postcode 05000 in Excel comes out as <strong>5000</strong> in the letter. What should you fix?',
            ['Format the postcode column as Text in Excel before the merge', 'Change the letter font', 'Retype the postcode in every letter', 'Turn off Track Changes'], 0,
            'Excel stores that postcode as a number.', 'Excel drops leading zeros from numbers. Format the postcode column as <strong>Text</strong> so the zero stays and Word receives the same value.'),
        $p('mm4', 'Fields', '🏷️', 2, 'The recipient list is already selected. Press the shortcut to <strong>insert a merge field</strong> (for example, Name) at the cursor.', ['Alt+Shift+F'],
            'F for Field, with two modifier keys.', '<strong>Alt+Shift+F</strong> opens the Insert Merge Field box. The same button is at <strong>Mailings → Insert Merge Field</strong>.'),
        $p('mm5', 'Results', '👁️', 1, 'Press the shortcut to <strong>preview the merge results</strong> so the fields are replaced with real recipient data.', ['Alt+Shift+K'],
            'The Alt+Shift combination for Mailings → Preview Results.', '<strong>Alt+Shift+K</strong> toggles Preview Results. Use the arrows in the Preview Results group to see the next recipient.'),
        $p('mm6', 'Results', '📄', 2, 'The preview looks right. Press the shortcut to <strong>merge all recipients into a new document</strong> you can edit.', ['Alt+Shift+N'],
            'N for a New document.', '<strong>Alt+Shift+N</strong> = Finish & Merge → Edit Individual Documents. The result is one new document with one letter per recipient.'),
        $p('mm7', 'Data source', '📇', 3, 'One recipient’s address is misspelled. Press the shortcut to <strong>open the mail merge data document</strong> and fix it.', ['Alt+Shift+E'],
            'E for Edit data.', '<strong>Alt+Shift+E</strong> opens the data source for editing. For an Excel list, fixing the Excel file itself also works once the list is reloaded.'),
        $c('mm8', 'Fields', '🏷️', 3, 'The Fee field from Excel comes out as <strong>150.5</strong>, but the letter needs <strong>150.50</strong>. What is the right way?',
            ['Add a number format switch to that field (Alt+F9, then \# "0.00" in the field code)', 'Type .50 after the field in the main letter', 'Change the field font', 'Delete the field and type the value yourself'], 0,
            'A merge field can carry a format switch, just like other fields.', 'Show the field code with <strong>Alt+F9</strong>, add the <strong>\# "0.00"</strong> switch after the field name, then press Alt+F9 again. Every letter shows two decimal places without changing Excel.'),
        $susun('mm9', 'Results', '📄', 2, 'The main document is already set to Letters. Put the steps in order to produce personal invitation letters from an Excel list.',
            ['Select Recipients → Use an Existing List → choose the Excel file', 'Insert Merge Field for Name and Address in the main letter',
             'Preview Results, check a few recipients, and fix the main letter if needed', 'Finish & Merge → Edit Individual Documents',
             'Save the new document that holds all the letters as its own file'],
            'Fields can only be inserted after the list is chosen.',
            'The Insert Merge Field button is only active after the <strong>recipient list</strong> is chosen. The preview needs fields, and mistakes must be fixed in the main letter before the merge. <strong>Finish & Merge</strong> creates a new document, and that is the document you save.'),
        $susun('mm10', 'Labels', '🏷️', 3, 'You have already chosen Mailings → Start Mail Merge → Labels and the label product number. Put the steps in order to print <strong>address labels</strong> for every recipient.',
            ['Select Recipients → Use an Existing List', 'Insert an Address Block in the first label and format it',
             'Update Labels so the layout of the first label is copied to every label', 'Finish & Merge → Edit Individual Documents',
             'Print the new document on the label sheets'],
            'Update Labels copies the first label, so the first label must be ready first.',
            'An Address Block needs the recipient list. Fill in the first label first; <strong>Update Labels</strong> copies it to the other labels. Without that step, only the first label has an address. The document you print is the result of <strong>Finish & Merge</strong>.'),
    ],
];
