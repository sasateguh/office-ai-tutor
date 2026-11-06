<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'pivot' — OVERRIDE form: only fields that differ from ../../latihan/pivot.php, merged by question id
 * (id, mode, level, correct_index, accept, and option order come from the Malay file). Listed in ../latihan.php.
 */

// Shared sales grid (totals in the grid file).
$sales = (require __DIR__ . '/../../grid/jualan-suku.php')['en'];

return [
    'name' => 'PivotTables',
    'tagline' => 'Sales summaries without a single formula',
    'description' => 'A PivotTable summarizes thousands of rows when you drag fields into Rows, Columns, Values, and Filters. Practice laying out the data correctly, reading the values a PivotTable will show, Show Values As, date grouping, and Refresh.',
    'questions' => [
        'pv1' => [
            'category' => 'Preparing data',
            'prompt' => 'Before you use <strong>Insert → PivotTable</strong>, how should your data be laid out?',
            'options' => ['Headers in two merged rows so they look neat', 'Subtotals inserted after each month', 'One header row, one type of data per column, no blank rows or columns, no merged cells', 'Each region on its own worksheet'],
            'canonical' => 'One header row, one type of data per column, no blank rows or columns, no merged cells',
            'hint' => 'A PivotTable reads the first row as field names.',
            'explanation' => 'A PivotTable turns the <strong>header row</strong> into field names and every row below it into one record. Merged cells, subtotal rows, and data spread over several worksheets produce blank fields or double-counted totals. Convert the data to an Excel table first so new rows are included.',
        ],
        'pv2' => [
            'category' => 'Field areas',
            'prompt' => 'You want one row for each region with its total sales next to it. Which area do you drag the <strong>Region</strong> field to?',
            'options' => ['Values', 'Rows', 'Filters', 'Columns, then Values'],
            'canonical' => 'Rows',
            'hint' => 'The area that becomes the labels on the left.',
            'explanation' => 'A field in <strong>Rows</strong> becomes the row labels; the Sales field goes to <strong>Values</strong> to be added up. Columns builds a column for each item, and Filters filters the whole PivotTable.',
        ],
        'pv3' => [
            'category' => 'Reading a PivotTable',
            'prompt' => 'A PivotTable is built from this data: <strong>Region</strong> in Rows, <strong>Sum of Sales (RM)</strong> in Values. What is the value on the <strong>South</strong> row?',
            'grid' => $sales,
            'hint' => 'Add up the Sales column for every row where the region is South.',
            'explanation' => 'Three South rows: 400 + 500 + 700 = <strong>1600</strong>. A PivotTable adds up every row that shares the same label, so the order of the rows in the data does not matter.',
        ],
        'pv4' => [
            'category' => 'Reading a PivotTable',
            'prompt' => 'Now <strong>Region</strong> is in Rows, <strong>Product</strong> is in Columns, and <strong>Sum of Sales (RM)</strong> is in Values. What is the value where <strong>South</strong> and <strong>Coffee</strong> meet?',
            'grid' => $sales,
            'hint' => 'Only the rows where the region is South and the product is Coffee.',
            'explanation' => 'South + Coffee = 500 (12 February) + 700 (11 March) = <strong>1200</strong>. That cell equals <code>=SUMIFS(D2:D9,B2:B9,"South",C2:C9,"Coffee")</code>, but the PivotTable calculates every combination at once.',
        ],
        'pv5' => [
            'category' => 'Summarizing values',
            'prompt' => '<strong>Product</strong> is in Rows, and the <strong>Product</strong> field is also dragged to Values. Excel shows <strong>Count of Product</strong>. What is the value on the <strong>Coffee</strong> row?',
            'grid' => $sales,
            'hint' => 'A text field in Values is counted, not added up.',
            'explanation' => 'A text field in Values is summarized with <strong>Count</strong>: the number of Coffee rows = <strong>5</strong>. This is a quick way to count transactions for each item.',
        ],
        'pv6' => [
            'category' => 'Summarizing values',
            'prompt' => 'You drag <strong>Sales (RM)</strong> to Values, but the PivotTable shows <strong>Count of Sales (RM)</strong> instead of Sum. What is the most likely reason?',
            'options' => ['Some cells in the Sales column are stored as text or are blank', 'A PivotTable always counts first and must be changed every time', 'The Sales column is too wide', 'The data has not been sorted by region'],
            'canonical' => 'Some cells in the Sales column are stored as text or are blank',
            'hint' => 'Excel chooses Count when it treats the column as text.',
            'explanation' => 'Number fields are summarized with Sum, but if Excel finds <strong>text or blank cells</strong> in the column, it chooses Count. Fix the source data (for example with <code>VALUE</code> or Text to Columns), refresh, then choose <strong>Value Field Settings → Summarize Values By → Sum</strong>.',
        ],
        'pv7' => [
            'category' => 'Show Values As',
            'prompt' => '<strong>Region</strong> is in Rows, <strong>Sum of Sales (RM)</strong> is in Values, and then <strong>Show Values As → % of Grand Total</strong> is applied. What percentage is on the <strong>North</strong> row?',
            'grid' => $sales,
            'hint' => 'North sales divided by total sales.',
            'explanation' => 'North = 600 + 200 + 600 = 1400; total sales = 4000. 1400 / 4000 = <strong>35%</strong>. Show Values As changes how values are displayed without extra formulas, and the Grand Total becomes 100%.',
        ],
        'pv8' => [
            'category' => 'Refresh',
            'prompt' => 'You add 20 rows of April sales below an ordinary source range (not an Excel table), then select <strong>Refresh</strong>. The PivotTable totals do not change. What is the correct fix?',
            'options' => ['Select Refresh again', 'Rebuild the PivotTable every month', 'Type the April total directly into the PivotTable', 'Convert the data to an Excel table (Insert → Table) and point the PivotTable at that table name with Change Data Source'],
            'canonical' => 'Convert the data to an Excel table (Insert → Table) and point the PivotTable at that table name with Change Data Source',
            'hint' => 'An ordinary source range does not grow by itself.',
            'explanation' => 'An ordinary source range keeps its original address, so new rows below it are not read. Once the source is an <strong>Excel table</strong>, added rows are included and Refresh is enough. <strong>PivotTable Analyze → Change Data Source</strong> changes the source without rebuilding.',
        ],
        'pv9' => [
            'category' => 'Grouping dates',
            'prompt' => '<strong>Date</strong> is in Rows and grouped by <strong>Months</strong>; <strong>Sum of Sales (RM)</strong> is in Values. What is the value on the <strong>Feb</strong> row?',
            'grid' => $sales,
            'hint' => 'Add up the rows dated in February, whatever the region.',
            'explanation' => 'February has three sales: 200 + 500 + 700 = <strong>1400</strong>. Grouping by Months combines every day in the same month. If the data covers more than one year, select <strong>Months</strong> and <strong>Years</strong> so February of two different years is not mixed.',
        ],
        'pv10' => [
            'category' => 'Grouping dates',
            'prompt' => 'The PivotTable already shows every date in Rows. Put the steps in order to summarize it <strong>by month and year</strong>.',
            'langkah' => ['Right-click any date in the PivotTable → Group', 'In the Grouping box, select Months and Years and clear Days', 'Select OK', 'Check the new month labels and the Grand Total, which does not change'],
            'canonical' => 'Right-click any date in the PivotTable → Group → In the Grouping box, select Months and Years and clear Days → Select OK → Check the new month labels and the Grand Total, which does not change',
            'hint' => 'The Grouping box only appears after you choose the Group command.',
            'explanation' => '<strong>Group</strong> opens the Grouping box; Months and Years are chosen there, and they only take effect after <strong>OK</strong>. The Grand Total should be the same as before: grouping only changes how rows are summarized. If Group does not offer Months, at least one value in the date column is stored as text.',
        ],
    ],
];
