<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'analisis-formula' — OVERRIDE form: only fields that differ from ../../latihan/analisis-formula.php, merged by
 * question id. The English sales grid has the same numbers and dates as the Malay one; only the text differs. Listed in ../latihan.php.
 */

// Shared sales data: A = Date, B = Region, C = Product, D = Units, E = Sales (RM); rows 2–9.
$sales = [
    ['Date', 'Region', 'Product', 'Units', 'Sales (RM)'],
    ['05/01/2026', 'North', 'Coffee', 12, 480],
    ['18/01/2026', 'South', 'Tea', 20, 400],
    ['27/01/2026', 'North', 'Tea', 8, 160],
    ['03/02/2026', 'Central', 'Coffee', 15, 600],
    ['14/02/2026', 'South', 'Coffee', 10, 400],
    ['25/02/2026', 'North', 'Coffee', 18, 720],
    ['09/03/2026', 'Central', 'Tea', 25, 500],
    ['21/03/2026', 'South', 'Coffee', 6, 240],
];
$with = fn(string $col = 'E') => array_merge($sales, [['Result →', '', '', $col === 'D' ? '?' : '', $col === 'E' ? '?' : '']]);

return [
    'name' => 'Data analysis with formulas',
    'tagline' => 'Conditional totals, counts, and lookups on sales data',
    'description' => 'One three-month sales table, many questions from a manager: how much did this region sell, what was the highest single sale, what were February sales. Practice SUMIFS, COUNTIFS, AVERAGEIFS, MAXIFS, MINIFS, XLOOKUP, TEXT, and EOMONTH before moving on to PivotTables.',
    'questions' => [
        'af1' => [
            'category' => 'Conditional totals',
            'prompt' => 'Write a <strong>SUMIFS</strong> formula for total sales in region <code>"North"</code>.',
            'grid' => $with(),
            'accept' => ['/^=sumifs\(e2:e9,b2:b9,"north"\)$/', '/^=sumif\(b2:b9,"north",e2:e9\)$/'],
            'canonical' => '=SUMIFS(E2:E9,B2:B9,"North")',
            'hint' => 'SUMIFS starts with the range to add: <code>=SUMIFS(sum_range, criteria_range1, criteria1)</code>.',
            'explanation' => 'North sales = 480 + 160 + 720 = <strong>1360</strong>. SUMIF is also correct for one condition, but SUMIFS takes more conditions easily and its argument order matches AVERAGEIFS, MAXIFS, and MINIFS.',
        ],
        'af2' => [
            'category' => 'Conditional totals',
            'prompt' => 'Write a <strong>SUMIFS</strong> formula for total sales of <code>"Coffee"</code> in region <code>"North"</code> only.',
            'grid' => $with(),
            'accept' => ['/^=sumifs\(e2:e9,b2:b9,"north",c2:c9,"coffee"\)$/', '/^=sumifs\(e2:e9,c2:c9,"coffee",b2:b9,"north"\)$/'],
            'canonical' => '=SUMIFS(E2:E9,B2:B9,"North",C2:C9,"Coffee")',
            'hint' => 'Add a second <code>criteria_range2, criteria2</code> pair after the first pair.',
            'explanation' => 'Only rows that meet both conditions count: 480 + 720 = <strong>1200</strong>. The order of the condition pairs does not change the result.',
        ],
        'af3' => [
            'category' => 'Conditional counts',
            'prompt' => 'Write a <strong>COUNTIFS</strong> formula for the number of <code>"Coffee"</code> transactions that sold <strong>at least 10 units</strong>.',
            'grid' => $with('D'),
            'accept' => ['/^=countifs\(c2:c9,"coffee",d2:d9,">=10"\)$/', '/^=countifs\(d2:d9,">=10",c2:c9,"coffee"\)$/'],
            'canonical' => '=COUNTIFS(C2:C9,"Coffee",D2:D9,">=10")',
            'hint' => 'Comparison criteria are written as text in quotation marks, for example <code>"&gt;=10"</code>.',
            'explanation' => 'Coffee transactions with 12, 15, 10, and 18 units count; the 6-unit transaction does not. The result is <strong>4</strong>. <code>"&gt;=10"</code> includes 10, while <code>"&gt;10"</code> does not.',
        ],
        'af4' => [
            'category' => 'Conditional averages',
            'prompt' => 'Write an <strong>AVERAGEIFS</strong> formula for the average sales per transaction in region <code>"Central"</code>.',
            'grid' => $with(),
            'accept' => ['/^=averageifs\(e2:e9,b2:b9,"central"\)$/', '/^=averageif\(b2:b9,"central",e2:e9\)$/'],
            'canonical' => '=AVERAGEIFS(E2:E9,B2:B9,"Central")',
            'hint' => 'Same shape as SUMIFS: the range to average first, then the criteria range and criterion.',
            'explanation' => 'Central has two transactions: (600 + 500) / 2 = <strong>550</strong>. If no rows meet the condition, AVERAGEIFS returns <code>#DIV/0!</code>.',
        ],
        'af5' => [
            'category' => 'Conditional maximum and minimum',
            'prompt' => 'Write a <strong>MAXIFS</strong> formula for the <strong>highest</strong> sales in a single <code>"Coffee"</code> transaction.',
            'grid' => $with(),
            'accept' => ['/^=maxifs\(e2:e9,c2:c9,"coffee"\)$/'],
            'canonical' => '=MAXIFS(E2:E9,C2:C9,"Coffee")',
            'hint' => '<code>=MAXIFS(max_range, criteria_range1, criteria1)</code>. MAXIFS is in Microsoft 365 and Excel 2019 or later.',
            'explanation' => 'Coffee transactions: 480, 600, 400, 720, and 240. The highest is <strong>720</strong>. Before MAXIFS existed, people wrote a MAX(IF(...)) array formula.',
        ],
        'af6' => [
            'category' => 'Conditional maximum and minimum',
            'prompt' => 'Write a <strong>MINIFS</strong> formula for the <strong>fewest</strong> units in a single <code>"Tea"</code> transaction.',
            'grid' => $with('D'),
            'accept' => ['/^=minifs\(d2:d9,c2:c9,"tea"\)$/'],
            'canonical' => '=MINIFS(D2:D9,C2:C9,"Tea")',
            'hint' => 'This time the range to find the minimum in is the Units column, not Sales.',
            'explanation' => 'Tea transactions sold 20, 8, and 25 units. The fewest is <strong>8</strong>. The first MINIFS range is the column whose value is returned.',
        ],
        'af7' => [
            'category' => 'Date ranges',
            'prompt' => 'Write a <strong>SUMIFS</strong> formula for total sales in <strong>February 2026</strong>. Use two conditions on the Date column: from <code>DATE(2026,2,1)</code> to <code>DATE(2026,2,28)</code>.',
            'grid' => $with(),
            'hint' => 'A comparison operator in quotation marks is joined to the date with <code>&amp;</code>: <code>"&gt;="&amp;DATE(2026,2,1)</code>. The Date column appears twice.',
            'explanation' => 'The transactions on 3, 14, and 25 February count: 600 + 400 + 720 = <strong>1720</strong>. The end date can also be written <code>EOMONTH(DATE(2026,2,1),0)</code> so the formula works for 30- or 31-day months and leap years.',
        ],
        'af8' => [
            'category' => 'Lookup',
            'prompt' => 'The manager wants the sales of the <strong>last transaction</strong> in region <code>"South"</code>. The data is sorted by date. Write an <strong>XLOOKUP</strong> formula that searches from the bottom up, with <code>"None"</code> if there is no match.',
            'grid' => $with(),
            'accept' => ['/^=xlookup\("south",b2:b9,e2:e9,"none",0,-1\)$/'],
            'canonical' => '=XLOOKUP("South",B2:B9,E2:E9,"None",0,-1)',
            'hint' => 'Fourth argument = if not found, fifth = <code>0</code> (exact match), sixth = <code>-1</code> (search from the last item).',
            'explanation' => 'Without the sixth argument, XLOOKUP returns the first match (400 on 18 January). With <code>-1</code> it starts from the last row and returns <strong>240</strong> (21 March).',
        ],
        'af9' => [
            'category' => 'Lookup',
            'prompt' => 'Write an <strong>XLOOKUP</strong> formula for the unit price of the product whose code is in <code>B7</code>. If the code is not in the list, show <code>"None"</code>.',
            'grid' => [['Code', 'Product', 'Price'], ['K-01', 'Coffee', 40], ['K-02', 'Tea', 20], ['K-03', 'Chocolate', 25], ['K-04', 'Juice', 15], ['', '', ''], ['Find →', 'K-03', '?']],
            'accept' => ['/^=xlookup\(b7,a2:a5,c2:c5,"none"\)$/', '/^=xlookup\(b7,a2:a5,c2:c5,"none",0\)$/'],
            'canonical' => '=XLOOKUP(B7,A2:A5,C2:C5,"None")',
            'hint' => '<code>=XLOOKUP(lookup_value, lookup_array, return_array, if_not_found)</code>. The value to find is cell B7.',
            'explanation' => 'Code K-03 is found and its price is <strong>25</strong>. If B7 changes to a code that is not listed, the formula shows "None" instead of <code>#N/A</code>. Exact match is the XLOOKUP default.',
        ],
        'af10' => [
            'category' => 'Dates for reports',
            'prompt' => 'To group sales by month, write a <strong>TEXT</strong> formula that turns the date in <code>A2</code> into a month label such as <code>Jan 2026</code>.',
            'grid' => [['Date', 'Month'], ['05/01/2026', '?']],
            'hint' => 'Format codes: <code>mmm</code> = short month name, <code>yyyy</code> = four-digit year.',
            'explanation' => '<code>=TEXT(A2,"mmm yyyy")</code> returns <strong>Jan 2026</strong>. The result is text, so use it for labels and grouping, not for date calculations. Month names follow the Windows language setting.',
        ],
        'af11' => [
            'category' => 'Dates for reports',
            'prompt' => 'An invoice is due on the <strong>last day of the following month</strong>. Write an <strong>EOMONTH</strong> formula for the due date of the invoice in <code>A2</code>.',
            'grid' => [['Invoice date', 'Due date'], ['05/01/2026', '?']],
            'hint' => '<code>=EOMONTH(start_date, months)</code>: <code>0</code> = the same month, <code>1</code> = the following month.',
            'explanation' => 'The result is <strong>28/02/2026</strong>, the last day of February. EOMONTH returns a serial number, so format the cell as a date if it shows as 46081.',
        ],
        'af12' => [
            'category' => 'Reading formulas',
            'prompt' => 'Without typing the formula, what does <code>=SUMIFS(E2:E9,B2:B9,"South",C2:C9,"Coffee")</code> return for this data?',
            'grid' => $sales,
            'hint' => 'Mark the rows where the region is South <strong>and</strong> the product is Coffee, then add column E.',
            'explanation' => 'Two rows meet both conditions: 14 February (400) and 21 March (240). The total is <strong>640</strong>. The South row that sold Tea (400) is not counted.',
        ],
        'af13' => [
            'category' => 'Share of total',
            'prompt' => 'Write one formula for the <strong>percentage share</strong> of region <code>"North"</code> in total sales: North sales divided by the total of column E.',
            'grid' => $with(),
            'accept' => ['/^=sumifs\(e2:e9,b2:b9,"north"\)\/sum\(e2:e9\)$/', '/^=sumif\(b2:b9,"north",e2:e9\)\/sum\(e2:e9\)$/'],
            'canonical' => '=SUMIFS(E2:E9,B2:B9,"North")/SUM(E2:E9)',
            'hint' => 'Numerator = SUMIFS for North, denominator = SUM of the whole Sales column.',
            'explanation' => '1360 / 3500 = 0.389, which is <strong>39%</strong> after Home → Percent Style. A PivotTable gives the same result with Show Values As → % of Grand Total.',
        ],
    ],
];
