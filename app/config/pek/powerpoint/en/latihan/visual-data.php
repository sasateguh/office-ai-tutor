<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'visual-data'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/visual-data.php.
 * Listed (in order) in ../../latihan.php.
 */
['pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Charts and diagrams',
    'icon' => 'chart-column',
    'tagline' => 'Chart types, chart data, linked Excel charts, and SmartArt',
    'description' => 'Choose a chart that answers the audience’s question, fix the data behind it, and decide when SmartArt fits or when your own diagram works better.',
    'color' => 'purple',
    'questions' => [
        $c('vd1', 'Chart types', '📈', 1, 'You want to show the <strong>number of students enrolling each month</strong> from January to December. Which chart is most suitable?',
            ['Pie', 'Line', 'Doughnut', 'Radar'], 1,
            'Data that changes over time.', 'A <strong>Line</strong> chart shows the trend from month to month. Pie and Doughnut show parts of one total, not change over time.'),
        $c('vd2', 'Chart types', '📊', 1, 'Your survey has respondents from <strong>nine faculties</strong>. Which chart is easiest to compare?',
            ['A pie with nine slices', 'A horizontal bar chart, sorted from largest to smallest', '3-D Pie', 'Line'], 1,
            'The eye compares lengths more accurately than angles.', 'A sorted <strong>bar</strong> chart makes comparison easy, and long faculty names fit on the axis. A pie is hard to read with more than five slices.'),
        $c('vd3', 'Chart data', '🧮', 2, 'A chart was added with Insert → Chart. A week later, one number needs fixing. Where do you change its data?',
            ['Type the new number on the chart label', 'Select the chart → Chart Design → Edit Data', 'Delete the chart and rebuild it', 'Format → Shape Fill'], 1,
            'PowerPoint chart data is kept in a small sheet behind the chart.', '<strong>Edit Data</strong> opens the chart data sheet. Change the values in the cells and the chart updates at once.'),
        $c('vd4', 'Chart data', '🧮', 2, 'Your chart shows months in the legend and faculties on the axis, but you want the opposite. What do you select?',
            ['Chart Design → Switch Row/Column (with Edit Data open)', 'Change Chart Type → Bar', 'Format Axis → Reverse order', 'Delete the legend'], 0,
            'Data rows and columns can swap roles.', '<strong>Switch Row/Column</strong> changes whether rows or columns become the series. The button is gray until the chart data is opened with Edit Data.'),
        $c('vd5', 'Chart types', '📊', 3, 'One slide must show <strong>sales revenue (RM thousand)</strong> and <strong>profit margin (%)</strong> together. The margin looks flat at the bottom because its scale is small. What is the solution?',
            ['Divide the revenue by 1,000', 'Change Chart Type → Combo: revenue as columns, margin as a line on the Secondary Axis', 'Two pie charts side by side', 'Delete the margin series'], 1,
            'Two different units need two axes.', 'A <strong>Combo</strong> chart lets each series have its own type. The <strong>Secondary Axis</strong> gives the percentage series its own scale on the right.'),
        $c('vd6', 'Chart clarity', '🎯', 2, 'Your chart uses a 3-D effect, heavy gridlines, a legend at the bottom, and six colors. What is the most suitable fix?',
            ['Add animation to draw attention', 'Use 2-D, remove gridlines you do not need, put data labels directly on the series, and use one accent color for the bar you want to stress', 'Make the legend larger', 'Change to Doughnut'], 1,
            'Every element that carries no information makes reading harder.', 'A 3-D effect distorts bar heights. <strong>Data labels</strong> on the series reduce the need to look at a legend, and <strong>one accent color</strong> shows the point you want to make.'),
        $c('vd7', 'SmartArt', '🔷', 1, 'Your slide has a bulleted list of five process steps. What is the fastest way to turn it into a diagram?',
            ['Draw five boxes and arrows by hand', 'Select the text box → Home → Convert to SmartArt → choose a process layout', 'Insert → Chart', 'Insert → Table'], 1,
            'A button in the Paragraph group on the Home tab.', '<strong>Convert to SmartArt</strong> turns an existing list into a diagram. List levels (Tab, Shift+Tab) become diagram levels.'),
        $c('vd8', 'SmartArt', '🔷', 3, 'Your SmartArt diagram needs one box placed freely outside the layout and each arrow animated separately. Which step fits, and what is its effect?',
            ['SmartArt Design → Reset Graphic; no effect', 'SmartArt Design → Convert → Convert to Shapes; the diagram becomes ordinary shapes and cannot be turned back into SmartArt', 'Ungroup twice; the layout stays SmartArt', 'Change Colors; the diagram stays SmartArt'], 1,
            'After converting, PowerPoint no longer manages the layout.', '<strong>Convert to Shapes</strong> gives full control over each shape. As a result, text no longer rearranges the diagram automatically. Duplicate the slide first if you want to keep the SmartArt version.'),
        $susun('vd9', 'Excel charts', '🔗', 2, 'Put the steps in order to insert a <strong>linked</strong> Excel chart and update it after the data changes.',
            ['In Excel, select the chart → Ctrl+C', 'In PowerPoint, Paste Options → Use Destination Theme & Link Data', 'Change the data in the Excel workbook that is now linked, then save', 'In PowerPoint, select the chart → Chart Design → Refresh Data'],
            'The link is made when pasting. The update is made after the data changes.',
            '<strong>Link Data</strong> keeps a link to the Excel workbook. <strong>Refresh Data</strong> pulls the latest values. If the workbook moves, fix the link in File → Info → Edit Links to Files.'),
        $c('vd10', 'Real work', '🎓', 3, 'Your research findings presentation has one slide with a <strong>table of 40 numbers</strong>. The examiners have only one minute for that slide. What is the most suitable approach?',
            ['Shrink the table font so every number fits', 'Show one chart for the main comparison with a title that states the finding, and move the full table to a backup slide', 'Read all 40 numbers aloud', 'Animate every row of the table'], 1,
            'The audience needs to know what to look at in a short time.', 'One chart with a title such as "The Faculty of Science scored highest" delivers the finding quickly. A <strong>backup slide</strong> after the closing slide holds the full table for examiner questions.'),
    ],
];
