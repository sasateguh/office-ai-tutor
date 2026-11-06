<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'power-query-dashboard' — OVERRIDE form: only fields that differ from ../../latihan/power-query-dashboard.php,
 * merged by question id (id, mode, level, correct_index, accept, and option order come from the Malay file). Listed in ../latihan.php.
 */
return [
    'name' => 'Power Query and dashboards',
    'tagline' => 'From a raw CSV file to a one-sheet dashboard',
    'description' => 'A lecture scenario: every month the sales system exports a new CSV file, and you present a one-sheet dashboard. Practice Power Query (import, Applied Steps, Unpivot, Append, Merge, Close & Load To) and a dashboard layout that updates with Refresh.',
    'questions' => [
        'pq1' => [
            'category' => 'Importing data',
            'prompt' => 'Every month you receive a sales CSV file with the same columns, and every time you spend an hour cleaning it by hand. What is a better way?',
            'options' => ['Copy and paste the new file and repeat the same steps every month', 'Data → From Text/CSV → Transform Data, clean it in the Power Query Editor, then Refresh when a new file arrives', 'Rewrite every formula every month', 'Open the CSV in Notepad and fix it by hand'],
            'canonical' => 'Data → From Text/CSV → Transform Data, clean it in the Power Query Editor, then Refresh when a new file arrives',
            'hint' => 'The tool that records each cleaning step so it can be repeated.',
            'explanation' => 'Power Query <strong>records</strong> each cleaning step. Next month, replace the source file and select <strong>Refresh</strong>: the same steps run again in seconds. The original data in the CSV file is not changed.',
        ],
        'pq2' => [
            'category' => 'Applied Steps',
            'prompt' => 'In the Power Query Editor, what does the <strong>Applied Steps</strong> list in the Query Settings pane show?',
            'options' => ['A list of files in the folder', 'The worksheet Undo history', 'Every transformation you made, in order; select a step to see the data at that point', 'Formulas that will be entered into cells'],
            'canonical' => 'Every transformation you made, in order; select a step to see the data at that point',
            'hint' => 'This list is the recipe that runs again on every Refresh.',
            'explanation' => '<strong>Applied Steps</strong> is the query\'s recipe: every step runs again from top to bottom on each Refresh. Select a step to see the data at that point, or delete a wrong step with the X icon beside it. Deleting a step in the middle can break later steps that depend on it.',
        ],
        'pq3' => [
            'category' => 'Data types',
            'prompt' => 'The date column in the CSV is written as <code>15/03/2026</code> (day/month/year), but Power Query reads it as text or swaps the day and month. What is the fix?',
            'options' => ['Right-click the column header → Change Type → Using Locale, choose Date and a locale that uses day/month/year', 'Format the cells as Date after the data is loaded', 'Delete the column and retype the dates', 'Change the column font'],
            'canonical' => 'Right-click the column header → Change Type → Using Locale, choose Date and a locale that uses day/month/year',
            'hint' => 'The problem comes from the language and region setting, not from the display format.',
            'explanation' => '<strong>Change Type → Using Locale</strong> tells Power Query that the text follows day/month/year order, so 03/04 is read as 3 April, not 4 March. The step is recorded in Applied Steps and applies to next month\'s file as well.',
        ],
        'pq4' => [
            'category' => 'Unpivot',
            'prompt' => 'The source data has one column for each month: <code>Region | Jan | Feb | Mar</code>. A PivotTable needs one <em>Month</em> column and one <em>Sales</em> column. What is the correct Power Query step?',
            'options' => ['Transform → Transpose', 'Home → Remove Columns for Feb and Mar', 'Add Column → Index Column', 'Select the Region column → Transform → Unpivot Other Columns'],
            'canonical' => 'Select the Region column → Transform → Unpivot Other Columns',
            'hint' => 'This step turns columns into rows.',
            'explanation' => '<strong>Unpivot Other Columns</strong> keeps the selected column (Region) and turns every other column into two columns, <strong>Attribute</strong> (the month name) and <strong>Value</strong> (the sales). Choose "Other Columns" so new month columns (Apr, May) are also turned into rows on Refresh. Rename the two columns to Month and Sales.',
        ],
        'pq5' => [
            'category' => 'Unpivot',
            'prompt' => 'This table (4 regions, 3 month columns) is unpivoted with <strong>Unpivot Other Columns</strong> after selecting the Region column. How many <strong>data rows</strong> does the result have (not counting the header row)?',
            'grid' => [['Region', 'Jan', 'Feb', 'Mar'], ['North', 600, 200, 600], ['South', 400, 500, 700], ['Central', 300, 700, 0], ['East', 450, 380, 520]],
            'hint' => 'Every month cell becomes one row.',
            'explanation' => '4 regions × 3 months = <strong>12</strong> rows, each with Region, Attribute (month), and Value (sales). A cell holding 0 still becomes a row because it is a value, not an empty cell.',
        ],
        'pq6' => [
            'category' => 'Append and Merge',
            'prompt' => 'You have two queries, <em>Sales Jan</em> and <em>Sales Feb</em>, with the same columns. You want one table that <strong>stacks the Feb rows below the Jan rows</strong>. What do you use?',
            'hint' => 'One command adds rows; another adds columns by matching a key.',
            'explanation' => '<strong>Append</strong> adds the rows of the second query below the first; columns are matched by header name, so the headers must be spelled the same. <strong>Merge</strong> adds columns from another table by matching a key, like XLOOKUP.',
        ],
        'pq7' => [
            'category' => 'Append and Merge',
            'prompt' => 'The <em>Sales</em> query has a Product Code column, and another table, <em>Products</em>, holds the Code and Category. You want the Category column added to every sales row, and sales rows whose code is not in the Products table must <strong>stay</strong>. What is the correct choice?',
            'options' => ['Append Queries Products to Sales', 'Merge Queries with Join Kind = Inner', 'Merge Queries with Sales on top, match the Code column, Join Kind = Left Outer, then expand the Category column', 'Copy the Category column and paste it alongside'],
            'canonical' => 'Merge Queries with Sales on top, match the Code column, Join Kind = Left Outer, then expand the Category column',
            'hint' => 'Choose the join kind that keeps every row of the first table.',
            'explanation' => '<strong>Left Outer</strong> keeps every row of the first table (Sales) and brings in matches from the second; codes without a match get null. <strong>Inner</strong> drops rows without a match, so your sales total shrinks without warning. After the merge, select the expand icon on the new column and check Category.',
        ],
        'pq8' => [
            'category' => 'Loading data',
            'prompt' => 'The clean sales data has 50,000 rows and you only need a summary PivotTable, not every row on a worksheet. How do you load the query?',
            'options' => ['Home → Close & Load → Close & Load To → PivotTable Report (or Only Create Connection)', 'A plain Close & Load, then hide the worksheet', 'Copy the Power Query preview and paste it', 'Save the query as a new CSV file'],
            'canonical' => 'Home → Close & Load → Close & Load To → PivotTable Report (or Only Create Connection)',
            'hint' => 'The Import Data box offers several destinations.',
            'explanation' => '<strong>Close & Load To</strong> opens the Import Data box: Table, PivotTable Report, PivotChart, or <strong>Only Create Connection</strong>. Loading straight into a PivotTable avoids 50,000 rows on a worksheet and keeps the workbook small. Refresh still runs every step again.',
        ],
        'pq9' => [
            'category' => 'Dashboards',
            'prompt' => 'A one-sheet dashboard to present in a lecture. Which layout is easiest to read?',
            'options' => ['Ten charts of equal size in a grid, each a different color', 'Three or four KPI cards at the top, two main charts below them, slicers at the side, one accent color for what matters', 'Every raw PivotTable on the same page as the charts', 'A large 3-D pie chart in the middle with a photo background'],
            'canonical' => 'Three or four KPI cards at the top, two main charts below them, slicers at the side, one accent color for what matters',
            'hint' => 'Readers look from the top left downward, and color draws the eye.',
            'explanation' => 'Put the most important numbers (total sales, growth, top region) as <strong>KPI cards</strong> at the top, then the charts that answer the next question. <strong>One accent color</strong> shows what to look at; everything else is gray. Keep raw PivotTables on a separate sheet.',
        ],
        'pq10' => [
            'category' => 'Full workflow',
            'prompt' => 'The file <code>sales-march.csv</code> has just arrived and the workbook is still empty. Put the steps in order to produce a PivotChart with a slicer from it.',
            'langkah' => ['Data → From Text/CSV → choose the file → Transform Data', 'In the Power Query Editor, set the data type of each column and remove blank rows', 'Home → Close & Load To → Table on a new worksheet', 'Select a cell in the loaded table → Insert → PivotTable', 'Select a cell in the PivotTable → PivotTable Analyze → PivotChart, then Insert Slicer for Region'],
            'canonical' => 'Data → From Text/CSV → choose the file → Transform Data → In the Power Query Editor, set the data type of each column and remove blank rows → Home → Close & Load To → Table on a new worksheet → Select a cell in the loaded table → Insert → PivotTable → Select a cell in the PivotTable → PivotTable Analyze → PivotChart, then Insert Slicer for Region',
            'hint' => 'Each step uses the result of the step before: file → query → table → PivotTable → chart.',
            'explanation' => 'The Power Query Editor only opens after a file is chosen; the table only exists after <strong>Close & Load To</strong>; the PivotTable needs that table as its source; the PivotChart and slicer need the PivotTable. Next month, replace the file and select <strong>Data → Refresh All</strong>: none of these steps has to be repeated.',
        ],
    ],
];
