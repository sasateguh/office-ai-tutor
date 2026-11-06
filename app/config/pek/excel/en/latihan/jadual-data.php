<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'jadual-data' — OVERRIDE form: only fields that differ from ../../latihan/jadual-data.php, merged by question id
 * (id, mode, level, correct_index, and option order come from the Malay file). Listed in ../latihan.php.
 */
return [
    'name' => 'Cleaning data and Excel tables',
    'tagline' => 'Raw data into a table that is ready for analysis',
    'description' => 'Data from other systems is rarely clean: extra spaces, mixed letter case, numbers stored as text, dates Excel does not recognize, and duplicate rows. Practice text functions, Remove Duplicates, Flash Fill, and Excel tables before you build a PivotTable.',
    'questions' => [
        'jd1' => [
            'category' => 'Text functions',
            'prompt' => 'The name in <code>A2</code> was copied from a registration system and has <strong>double spaces</strong> between words. Write a formula that removes the extra spaces and leaves one space between words.',
            'grid' => [['Original name', 'Clean name'], ['Ali  bin  Abu', '?']],
            'hint' => 'A one-argument function whose name means to cut back.',
            'explanation' => '<code>TRIM</code> removes spaces at the start and end of the text and turns double spaces in the middle into one. The result is <strong>Ali bin Abu</strong>. TRIM does not remove the non-breaking space (character 160) that sometimes comes from web pages.',
        ],
        'jd2' => [
            'category' => 'Text functions',
            'prompt' => 'The name in <code>A2</code> was typed in all capitals. Write a formula that changes it to <strong>a capital letter at the start of each word</strong>.',
            'grid' => [['Original name', 'Tidy name'], ['SITI AMINAH', '?']],
            'hint' => 'There are three case functions: UPPER, LOWER, and one more for proper names.',
            'explanation' => '<code>PROPER</code> capitalizes the first letter of each word and makes the other letters lowercase. The result is <strong>Siti Aminah</strong>. Check the result for names such as "McDonald" or abbreviations such as "UiTM", because PROPER turns them into "Mcdonald" and "Uitm".',
        ],
        'jd3' => [
            'category' => 'Text functions',
            'prompt' => 'The name in <code>A2</code> is in lowercase <strong>and</strong> has double spaces. Write one formula that removes the extra spaces and capitalizes the first letter of each word.',
            'grid' => [['Original name', 'Clean name'], ['ahmad   faiz', '?']],
            'hint' => 'Put one text function inside another.',
            'explanation' => '<code>=PROPER(TRIM(A2))</code> cleans the spaces first, then changes the case. The result is <strong>Ahmad Faiz</strong>. The reverse order, <code>=TRIM(PROPER(A2))</code>, gives the same result.',
        ],
        'jd4' => [
            'category' => 'Numbers stored as text',
            'prompt' => 'The price column was exported as the text <code>RM1250</code>, so SUM returns 0. Write a formula that removes <code>"RM"</code> and converts the remaining text to a <strong>number</strong>.',
            'grid' => [['Price (text)', 'Price (number)'], ['RM1250', '?']],
            'hint' => 'SUBSTITUTE replaces text with empty text <code>""</code>; one more function turns text into a number.',
            'explanation' => '<code>SUBSTITUTE(A2,"RM","")</code> gives the text <code>"1250"</code>. <code>VALUE</code> turns it into the number <strong>1250</strong>, which can be summed. Numbers stored as text are usually left-aligned and marked with a green triangle.',
        ],
        'jd5' => [
            'category' => 'Splitting text',
            'prompt' => 'The branch code in <code>A2</code> starts with a two-letter state code. Write a formula that returns the <strong>first two characters</strong>.',
            'grid' => [['Branch code', 'State'], ['KL-0425', '?']],
            'hint' => 'The function that takes characters from the left of the text.',
            'explanation' => '<code>LEFT(A2,2)</code> returns <strong>KL</strong>. <code>RIGHT</code> takes characters from the right and <code>MID</code> from a given position.',
        ],
        'jd6' => [
            'category' => 'Splitting text',
            'prompt' => 'The last four characters of the code in <code>A2</code> are the branch number. Write a formula that takes those four characters and converts them to a <strong>number</strong>.',
            'grid' => [['Branch code', 'Branch number'], ['KL-0425', '?']],
            'hint' => 'RIGHT returns the text <code>"0425"</code>. Convert that text to a number.',
            'explanation' => '<code>RIGHT(A2,4)</code> gives the text <code>"0425"</code> and <code>VALUE</code> turns it into the number <strong>425</strong>. <code>=VALUE(MID(A2,4,4))</code> is also correct because the number starts at the fourth character.',
        ],
        'jd7' => [
            'category' => 'Duplicate rows',
            'prompt' => 'You select all of this data, go to <strong>Data → Remove Duplicates</strong>, and check the <strong>Code column only</strong>. How many data rows (not counting the header row) remain?',
            'grid' => [['Code', 'Name', 'Class'], ['A101', 'Ali', '1A'], ['A102', 'Siti', '1B'], ['A101', 'Ali', '1A'], ['A103', 'Farid', '1A'], ['A102', 'Siti B.', '1B'], ['A104', 'Mei Ling', '1C']],
            'hint' => 'Count the distinct codes. Names spelled differently do not matter because only the Code column is checked.',
            'explanation' => 'The unique codes are A101, A102, A103, and A104, so <strong>4</strong> rows remain. Excel keeps the first row for each code and deletes the others. If every column is checked, "Siti" and "Siti B." count as different and 5 rows remain. Remove Duplicates deletes data permanently, so copy the original data first.',
        ],
        'jd8' => [
            'category' => 'Excel tables',
            'prompt' => 'You want the sales data to become an <strong>Excel table</strong> so formatting, filters, and formulas follow new rows. What are the correct steps?',
            'options' => ['Click one cell in the data → Insert → Table → make sure My table has headers is checked → OK', 'Select the header row → Home → Merge & Center', 'Select the data → Insert → PivotTable', 'View → Freeze Panes → Freeze Top Row'],
            'canonical' => 'Click one cell in the data → Insert → Table → make sure My table has headers is checked → OK',
            'hint' => 'The button named after what you want to create, on the Insert tab.',
            'explanation' => '<strong>Insert → Table</strong> (Windows shortcut <code>Ctrl+T</code>) turns the range into a table. The first row becomes column headers with filter buttons, and the table grows by itself when you type directly below it. Merge & Center breaks sorting and filtering, and Freeze Panes only freezes the view.',
        ],
        'jd9' => [
            'category' => 'Structured references',
            'prompt' => 'A table named <code>Sales</code> has a column named <code>Amount</code>. What does <code>=SUM(Sales[Amount])</code> add up?',
            'options' => ['Every data row in the Amount column, without the header row and the Total Row', 'The whole worksheet column down to the last row, including the header', 'The Amount cell in the current row only', 'Only the rows that stay visible after a filter'],
            'canonical' => 'Every data row in the Amount column, without the header row and the Total Row',
            'hint' => 'A structured reference with no special item specifier refers to the data part of that column.',
            'explanation' => '<code>Sales[Amount]</code> refers to the <strong>data rows</strong> of the Amount column only. The current row is written <code>[@Amount]</code>, the header <code>Sales[[#Headers],[Amount]]</code>. SUM still counts filtered rows; the Total Row uses <code>SUBTOTAL</code>, which counts visible rows only.',
        ],
        'jd10' => [
            'category' => 'Flash Fill',
            'prompt' => 'Column A holds full names such as <em>Siti Aminah binti Ali</em>. You type <em>Siti</em> in <code>B2</code> as an example and want Excel to fill in the first name for the other rows by following that pattern. What do you use?',
            'hint' => 'The feature that guesses a pattern from the example you type.',
            'explanation' => '<strong>Data → Flash Fill</strong> (Windows shortcut <code>Ctrl+E</code>) reads the example in <code>B2</code> and fills the other rows. The result is fixed values, not formulas, so it does not update when column A changes. Check a few rows because the pattern can be guessed wrong.',
        ],
        'jd11' => [
            'category' => 'Duplicate rows',
            'prompt' => 'Before deleting anything, you want to know <strong>how many times</strong> the student ID in <code>A2</code> appears in the list <code>A2:A7</code>. Write the formula for <code>B2</code>.',
            'grid' => [['Student ID', 'Count'], ['A101', '?'], ['A102', ''], ['A101', ''], ['A103', ''], ['A102', ''], ['A101', '']],
            'hint' => 'A conditional counting function with one criterion. The criterion can be a cell reference.',
            'explanation' => '<code>=COUNTIF(A2:A7,A2)</code> returns <strong>3</strong>. To fill it down, lock the range as <code>$A$2:$A$7</code>. Rows with a result greater than 1 are duplicates to check before you use Remove Duplicates.',
        ],
        'jd12' => [
            'category' => 'Dates stored as text',
            'prompt' => 'A finance system exports dates as the text <code>15.03.2026</code> (day.month.year) and Excel does not recognize it as a date. Write a formula that builds a <strong>real date</strong> with <code>DATE</code>, <code>RIGHT</code>, <code>MID</code>, and <code>LEFT</code>.',
            'grid' => [['Date (text)', 'Real date'], ['15.03.2026', '?']],
            'hint' => 'DATE takes year, month, day. Year = last 4 characters, month = 2 characters starting at position 4, day = first 2 characters.',
            'explanation' => '<code>=DATE(RIGHT(A2,4),MID(A2,4,2),LEFT(A2,2))</code> returns the date <strong>15/03/2026</strong>, which can be sorted, grouped in a PivotTable, and calculated. DATE converts the text <code>"2026"</code>, <code>"03"</code>, and <code>"15"</code> to numbers by itself. For many columns at once, Power Query (Change Type → Using Locale) is another option.',
        ],
        'jd13' => [
            'category' => 'Structured references',
            'prompt' => 'A weekly report adds new rows below the data. The formula <code>=SUM(C2:C50)</code> starts missing row 51 and below. What is the most durable fix?',
            'options' => ['Convert the data to a table named Sales and use <code>=SUM(Sales[Amount])</code>', 'Change the formula to <code>=SUM(C2:C51)</code> every week', 'Type the total by hand after each update', 'Hide the empty rows below the data'],
            'canonical' => 'Convert the data to a table named Sales and use <code>=SUM(Sales[Amount])</code>',
            'hint' => 'Look for the option that never needs editing again as the data grows.',
            'explanation' => 'A table grows by itself when rows are added directly below it, so <code>Sales[Amount]</code> always covers every row without editing the formula. Changing the range every week is easy to forget, and a total typed by hand does not update.',
        ],
    ],
];
