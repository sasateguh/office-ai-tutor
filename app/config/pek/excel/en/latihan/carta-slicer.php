<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'carta-slicer' — OVERRIDE form: only fields that differ from ../../latihan/carta-slicer.php, merged by question
 * id (id, mode, level, correct_index, accept, and option order come from the Malay file). Listed in ../latihan.php.
 */

// Shared sales grid (totals in the grid file).
$sales = (require __DIR__ . '/../../grid/jualan-suku.php')['en'];

return [
    'name' => 'Charts, slicers, and timelines',
    'tagline' => 'Choose the chart for the question, filter with one click',
    'description' => 'The right chart depends on the question it answers: a comparison, a trend over time, or two measures on different scales. Practice choosing a chart type, PivotCharts, a slicer that controls several PivotTables, and timelines for dates.',
    'questions' => [
        'cs1' => [
            'category' => 'Choosing a chart',
            'prompt' => 'Your lecturer asks you to <strong>compare total sales for five regions</strong> in March. Which chart is the most suitable?',
            'options' => ['A line chart', 'A clustered column or bar chart', 'A pie chart with five slices and 3-D labels', 'A scatter chart'],
            'canonical' => 'A clustered column or bar chart',
            'hint' => 'Comparisons between categories are easiest to read from bar length.',
            'explanation' => 'The eye compares <strong>bar length</strong> accurately, so a column or bar chart suits categories. A line chart is for trends over time, a scatter chart for the relationship between two numbers, and a 3-D pie distorts slice sizes.',
        ],
        'cs2' => [
            'category' => 'Choosing a chart',
            'prompt' => 'You want to show the <strong>monthly sales trend</strong> from January to December. Which chart is the most suitable?',
            'options' => ['A line chart with the months on the horizontal axis', 'A pie chart with 12 slices', 'A horizontal bar chart sorted from largest to smallest', 'A radar chart'],
            'canonical' => 'A line chart with the months on the horizontal axis',
            'hint' => 'Time moves from left to right.',
            'explanation' => 'A <strong>line chart</strong> shows the rise and fall from one month to the next. Sorting months by value destroys the order of time, and a pie with 12 slices cannot be read.',
        ],
        'cs3' => [
            'category' => 'Choosing a chart',
            'prompt' => 'One chart must show <strong>Units sold</strong> (10–40) and <strong>Sales (RM)</strong> (400–20,000) for each month. In an ordinary column chart, the Units columns are barely visible. What is the correct solution?',
            'options' => ['Two column series on one axis', 'A doughnut chart', 'A Combo chart: Sales as columns, Units as a line on the Secondary Axis', 'Divide Sales by 1000 by hand in the source data'],
            'canonical' => 'A Combo chart: Sales as columns, Units as a line on the Secondary Axis',
            'hint' => 'Two measures on different scales need two axes.',
            'explanation' => '<strong>Insert → Combo</strong> (or Change Chart Type → Combo) lets each series have its own chart type; check <strong>Secondary Axis</strong> for Units so it gets its own scale on the right. Label both axes so readers know which line belongs to which axis.',
        ],
        'cs4' => [
            'category' => 'Creating a chart',
            'prompt' => 'The data range is already selected. You want a default chart created <strong>right on the same worksheet</strong>, not on a separate chart sheet. What do you press?',
            'hint' => 'One function key creates a separate chart sheet; another combination creates an embedded chart.',
            'explanation' => '<strong>Alt+F1</strong> creates an embedded chart on the current worksheet; <strong>F11</strong> creates a chart on a new chart sheet. The default chart is not always the right type, so check <strong>Insert → Recommended Charts</strong> when in doubt.',
        ],
        'cs5' => [
            'category' => 'PivotCharts',
            'prompt' => 'You build a <strong>PivotChart</strong> from a PivotTable, then filter the PivotTable to the North region only. What happens to the PivotChart?',
            'options' => ['It keeps showing all regions until it is rebuilt', 'It is deleted', 'It turns into an ordinary chart', 'It also shows North only, because it is tied to the same PivotTable'],
            'canonical' => 'It also shows North only, because it is tied to the same PivotTable',
            'hint' => 'A PivotChart and its PivotTable share the same fields and filters.',
            'explanation' => 'A PivotChart <strong>follows</strong> its source PivotTable: filters, field layout, and Refresh change together. Create one with <strong>PivotTable Analyze → PivotChart</strong> while a cell in the PivotTable is selected.',
        ],
        'cs6' => [
            'category' => 'Slicers',
            'prompt' => 'A Region slicer is already inserted. You want to select <strong>North and Central</strong> at the same time. How?',
            'options' => ['Select North, then Ctrl+click Central (or turn on the slicer\'s Multi-Select button)', 'Double-click North', 'Insert a second slicer for Central', 'Type "North, Central" into the slicer'],
            'canonical' => 'Select North, then Ctrl+click Central (or turn on the slicer\'s Multi-Select button)',
            'hint' => 'The same way you select several files in File Explorer.',
            'explanation' => '<strong>Ctrl+click</strong> adds an item to the selection; the <strong>Multi-Select</strong> button in the slicer header makes each click toggle one item. The <strong>Clear Filter</strong> button brings back all items.',
        ],
        'cs7' => [
            'category' => 'Slicers',
            'prompt' => 'A PivotTable from this data shows <strong>Sum of Sales (RM)</strong> by Product. The Region slicer is filtered to <strong>North and Central</strong>. What is the <strong>Grand Total</strong>?',
            'grid' => $sales,
            'hint' => 'Ignore every South row, then add up the rows that remain.',
            'explanation' => 'North 1400 + Central 1000 = <strong>2400</strong>. A slicer filters the data before it is summarized, so the Grand Total only counts the selected regions. South (1600) is not counted.',
        ],
        'cs8' => [
            'category' => 'Slicers',
            'prompt' => 'Your dashboard has two PivotTables (sales by region and by product) from the same source. One Month slicer should filter <strong>both</strong>. What are the steps?',
            'options' => ['Copy the slicer and paste it next to the second PivotTable', 'Insert two Month slicers and select both every time', 'Select the slicer → Slicer → Report Connections → check both PivotTables', 'Combine the two PivotTables into one'],
            'canonical' => 'Select the slicer → Slicer → Report Connections → check both PivotTables',
            'hint' => 'One slicer can connect to several PivotTables that share a source.',
            'explanation' => '<strong>Report Connections</strong> lists the PivotTables that share the data source; check the ones to filter together. One click on the slicer then changes both tables and the charts tied to them.',
        ],
        'cs9' => [
            'category' => 'Timelines',
            'prompt' => 'You want a date filter for a PivotTable that can switch between <strong>years, quarters, months, and days</strong>. What do you insert?',
            'options' => ['Insert → Slicer for the Date field, then select each day', 'Insert → Timeline, then choose the date field', 'Data → Filter on the source date column', 'A Month column typed by hand into the PivotTable'],
            'canonical' => 'Insert → Timeline, then choose the date field',
            'hint' => 'A filter made for date fields, with a time-level picker.',
            'explanation' => 'A <strong>Timeline</strong> works only with PivotTable date fields. The level picker in its corner switches between Years, Quarters, Months, and Days, and you drag its handles for a range such as February to March. The date column must hold real dates, not text.',
        ],
        'cs10' => [
            'category' => 'Formatting charts',
            'prompt' => 'The month and sales range (A1:B13, with headers) has no chart yet. Put the steps in order to produce a line chart with the <strong>vertical axis title "Sales (RM)"</strong>.',
            'langkah' => ['Select the range A1:B13, including the header row', 'Insert → Recommended Charts → choose Line → OK', 'Select the chart, then the Chart Elements (+) button → check Axis Titles', 'Select the vertical axis title and type Sales (RM)'],
            'canonical' => 'Select the range A1:B13, including the header row → Insert → Recommended Charts → choose Line → OK → Select the chart, then the Chart Elements (+) button → check Axis Titles → Select the vertical axis title and type Sales (RM)',
            'hint' => 'The Chart Elements button only appears when the chart is selected, and you can only type an axis title after it exists.',
            'explanation' => 'A chart is built from the <strong>selected</strong> range, so the data is selected first. The <strong>Chart Elements (+)</strong> button appears next to a selected chart; checking <strong>Axis Titles</strong> adds title boxes that you then type into. An axis title with the unit (RM) saves the reader one question.',
        ],
    ],
];
