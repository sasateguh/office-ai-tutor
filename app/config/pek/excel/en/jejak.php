<?php

declare(strict_types=1);

/**
 * Excel learning path (section on /en/excel/), EN. Same id, tahap and links as ../jejak.php (BM); download files use -en.csv.
 * Schema: docs/REVAMP.md.
 */
return [
    'tajuk' => 'Learn Excel in order',
    'intro' => 'Modules 1 to 3 take you from the basics to intermediate level. Modules 4 to 8 are the data analysis path for lectures: download the CSV files in each module and follow the steps in your own copy of Excel.',
    'modul' => [
        [
            'id' => 'asas', 'tahap' => 1,
            'tajuk' => 'Workbook basics and everyday shortcuts',
            'ringkas' => 'Learn how workbooks, worksheets, cells and ranges fit together. Enter numbers, text and dates as the right data type, format numbers, and move around with the keyboard.',
            'cheatsheet' => ['workbook', 'cells', 'data-types', 'formatting', 'shortcuts'], 'rujukan' => ['math'], 'latihan' => ['basics'],
        ],
        [
            'id' => 'formula', 'tahap' => 1,
            'tajuk' => 'Formulas, operators and cell references',
            'ringkas' => 'Write formulas with arithmetic and comparison operators, follow the order of operations, and lock references with $ or F4 so a formula stays correct when you copy it.',
            'cheatsheet' => ['operators', 'order-of-operations', 'comparison', 'typing-operators', 'references', 'f4'], 'rujukan' => ['math', 'logic'], 'latihan' => ['basics'],
        ],
        [
            'id' => 'fungsi', 'tahap' => 2,
            'tajuk' => 'Logical, lookup, text and date functions',
            'ringkas' => 'Use <code>IF</code>, <code>VLOOKUP</code> or <code>XLOOKUP</code>, text functions and date functions for real office work. Recognize common errors such as <code>#N/A</code> and <code>#VALUE!</code> and how to fix them.',
            'cheatsheet' => ['mistakes'], 'rujukan' => ['logic', 'lookup', 'text', 'date'], 'latihan' => ['intermediate'],
        ],
        [
            'id' => 'jadual-data', 'tahap' => 2,
            'tajuk' => 'Import data, clean it and convert it to an Excel table',
            'ringkas' => 'Open the messy sales file, remove extra spaces, blank rows and duplicates, then fix dates and amounts stored as text. Next, open the clean 2026 sales file and convert its range to an Excel table so formulas and charts grow on their own when rows are added.',
            'cheatsheet' => ['import', 'data-cleaning', 'excel-tables', 'analysis-shortcuts'], 'rujukan' => [], 'latihan' => ['jadual-data'],
            'muat' => [['label' => 'Messy sales data (CSV, to clean)', 'fail' => 'jualan-kotor-en.csv'], ['label' => 'Sales data 2026 (CSV, 735 rows, for the Excel table)', 'fail' => 'jualan-2026-en.csv']],
        ],
        [
            'id' => 'analisis-formula', 'tahap' => 2,
            'tajuk' => 'Analysis with conditional formulas',
            'ringkas' => 'Answer questions such as "what were North region sales in March" with <code>SUMIFS</code>, <code>COUNTIFS</code> and <code>AVERAGEIFS</code>, then compare sales against monthly targets with a lookup function.',
            'cheatsheet' => ['excel-tables'], 'rujukan' => ['stat', 'math', 'lookup'], 'latihan' => ['analisis-formula'],
            'muat' => [['label' => 'Sales data 2026 (CSV)', 'fail' => 'jualan-2026-en.csv'], ['label' => 'Region targets 2026 (CSV)', 'fail' => 'sasaran-2026-en.csv']],
        ],
        [
            'id' => 'pivot', 'tahap' => 2,
            'tajuk' => 'PivotTables',
            'ringkas' => 'Summarize 735 sales rows by region, product and month in a few clicks. Switch Sum to Count or Average, group dates by month, and show values as a percentage of the total.',
            'cheatsheet' => ['pivottable', 'pivot-values'], 'rujukan' => [], 'latihan' => ['pivot'],
            'muat' => [['label' => 'Sales data 2026 (CSV)', 'fail' => 'jualan-2026-en.csv']],
        ],
        [
            'id' => 'carta', 'tahap' => 3,
            'tajuk' => 'Charts, slicers and timelines',
            'ringkas' => 'Pick the chart that answers the question: line for trends, bar for comparisons. Tidy axes and labels, build a PivotChart, then filter several PivotTables at once with slicers and a timeline.',
            'cheatsheet' => ['chart-choice', 'chart-tools', 'slicers-timeline'], 'rujukan' => [], 'latihan' => ['carta-slicer'],
            'muat' => [['label' => 'Sales data 2026 (CSV)', 'fail' => 'jualan-2026-en.csv']],
        ],
        [
            'id' => 'power-query-dashboard', 'tahap' => 3,
            'tajuk' => 'Power Query and a one-sheet dashboard',
            'ringkas' => 'Clean the messy sales file with Power Query once, then Refresh each time new data arrives. Arrange PivotTables, charts and slicers on one sheet, and recognize when it is time to move to Power BI.',
            'cheatsheet' => ['power-query', 'dashboard', 'excel-to-power-bi', 'export'], 'rujukan' => [], 'latihan' => ['power-query-dashboard'],
            'muat' => [['label' => 'Messy sales data (CSV, for Power Query)', 'fail' => 'jualan-kotor-en.csv'], ['label' => 'Region targets 2026 (CSV)', 'fail' => 'sasaran-2026-en.csv']],
        ],
    ],
];
