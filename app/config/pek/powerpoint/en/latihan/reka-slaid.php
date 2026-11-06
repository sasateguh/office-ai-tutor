<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'reka-slaid'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/reka-slaid.php.
 * Listed (in order) in ../../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Slide design',
    'icon' => 'palette',
    'tagline' => 'Typography, grid, guides, object layout, and pictures',
    'description' => 'A readable slide depends on text hierarchy, alignment, and properly prepared pictures. Practice design decisions and Picture Format commands.',
    'color' => 'amber',
    'questions' => [
        $p('rs1', 'Grid and guides', '📏', 1, 'Press the shortcut to <strong>show or hide guides</strong> (the lines you can drag).', ['Alt+F9'],
            'Alt with a function key, one before Selection Pane.', '<strong>Alt+F9</strong> shows or hides guides. Objects dragged near a guide snap to it.'),
        $p('rs2', 'Grid and guides', '📏', 1, 'Press the shortcut to <strong>show or hide gridlines</strong> on the slide.', ['Shift+F9'],
            'The same function key as guides, but with Shift.', '<strong>Shift+F9</strong> shows or hides the grid. Grid spacing is set in View → Show (small arrow) → Grid and Guides.'),
        $c('rs3', 'Typography', '🔤', 1, 'The slides will be shown in a lecture hall. What is a reasonable minimum font size for <strong>body text</strong>?',
            ['10 pt', '14 pt', '24 pt', '60 pt'], 2,
            'Picture a student in the back row.', 'Body text around <strong>24 pt</strong> and titles around 36 pt. Small text such as sources or chart labels no smaller than 14 pt. If the text does not fit, split it into two slides.'),
        $c('rs4', 'Typography', '🔤', 2, 'Your slides use four fonts and five text colors to separate titles, body text, and notes. What is a clearer approach?',
            ['Underline every title', 'Use the two theme fonts only and separate levels with size and weight', 'Use WordArt for titles', 'Give each level a brighter color'], 1,
            'Hierarchy can be built without adding fonts.', 'The theme fonts <strong>Headings</strong> and <strong>Body</strong> are enough. Size and weight separate three levels (title, body, note). Many colors make it harder for the eye to find what matters.'),
        $c('rs5', 'Arrange', '📐', 2, 'A logo must sit <strong>exactly in the center of the slide</strong>, not the center of other objects. Which Align setting is right?',
            ['Align → Align Selected Objects, then Align Center', 'Align → Align to Slide, then Align Center and Align Middle', 'Distribute Horizontally', 'Group, then drag to the center'], 1,
            'Align has two reference modes.', 'With <strong>Align to Slide</strong>, objects are aligned to the edges of the slide. Align Selected Objects aligns objects to each other.'),
        $c('rs6', 'Pictures', '🖼️', 2, 'A portrait photo looks <strong>distorted</strong> after resizing. How do you resize without distortion?',
            ['Drag the handle in the middle of a side', 'Drag a corner handle (with Lock aspect ratio still checked)', 'Change the Slide Size', 'Use Artistic Effects'], 1,
            'The handle that changes width and height together.', 'A <strong>corner</strong> handle keeps the ratio when <strong>Lock aspect ratio</strong> is checked (Picture Format → Size, small arrow). A side handle changes one direction only. To fix a picture that is already distorted: Reset Picture & Size.'),
        $c('rs7', 'Pictures', '🖼️', 2, 'A rectangular profile photo must appear as a <strong>perfect circle</strong>. What are the right steps?',
            ['Draw a white circle over the photo', 'Crop → Aspect Ratio → 1:1, then Crop → Crop to Shape → Oval', 'Picture Border → round', 'Remove Background'], 1,
            'An oval on a picture that is not square becomes an ellipse.', 'Crop to <strong>1:1</strong> first so the width equals the height. After that, <strong>Crop to Shape → Oval</strong> produces a circle, not an ellipse.'),
        $c('rs8', 'Pictures', '💾', 2, 'A presentation is 85 MB because of many phone photos and cannot be sent by email. What should you try first?',
            ['Turn every slide into a PDF', 'Picture Format → Compress Pictures: clear Apply only to this picture, choose a lower resolution, and Delete cropped areas of pictures', 'Delete the speaker notes', 'Save as an old .ppt file'], 1,
            'File size usually comes from photo resolution.', '<strong>Compress Pictures</strong> lowers the resolution of all pictures and removes the cropped parts. Removed parts cannot be restored, so keep a copy of the original first.'),
        $c('rs9', 'Pictures', '🖼️', 3, 'You want to show a product without the room behind it. Remove Background removes part of the product too. What should you do?',
            ['Cancel and just use another photo', 'Use Mark Areas to Keep and draw over the missing parts of the product, then Keep Changes', 'Set Transparency to 100%', 'Crop to Shape'], 1,
            'Remove Background can be corrected by hand.', '<strong>Mark Areas to Keep</strong> brings back parts removed by mistake. <strong>Mark Areas to Remove</strong> removes background that was left behind. Select <strong>Keep Changes</strong> to finish.'),
        $susun('rs10', 'Typography', '🔤', 3, 'A file from a classmate uses a font that the lecture room computer does not have. Put the steps in order to <strong>change that font on every slide</strong> at once.',
            ['Home → Replace (arrow) → Replace Fonts', 'Choose the missing font in the Replace list and the substitute font in the With list', 'Click Replace, then Close',
             'Press F5 and check that long text still fits in its box'],
            'The dialog box opens first. The result is checked after the change.',
            '<strong>Replace Fonts</strong> changes one font on every slide at once. If the slides use theme fonts, changing the theme fonts (Design → Variants → Fonts) gives the same result.'),
    ],
];
