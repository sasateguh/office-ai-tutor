<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'master-layout'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/master-layout.php.
 * Listed (in order) in ../../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Masters and layouts',
    'icon' => 'layers',
    'tagline' => 'Slide Master, layouts, placeholders, themes, and .potx templates',
    'description' => 'The Slide Master keeps the look of every slide in one place. Practice building your own layouts, fixing slides that drift from the master, and saving a template for other people.',
    'color' => 'purple',
    'questions' => [
        $c('ml1', 'Slide Master', '🎨', 1, 'Where do you open the view for editing the <strong>Slide Master</strong>?',
            ['Design → Format Background', 'View → Slide Master', 'Home → Layout', 'Insert → Header & Footer'], 1,
            'Slide Master is a view, like Normal and Slide Sorter.', '<strong>View → Slide Master</strong> opens the master and all the layouts under it. Select <strong>Close Master View</strong> to return to your slides.'),
        $c('ml2', 'Slide Master', '🎨', 1, 'In Slide Master view, the <strong>largest thumbnail at the top</strong> and the smaller thumbnails below it are different. What is the difference?',
            ['Top thumbnail = first slide; the others = the following slides', 'Top thumbnail = the master (every layout inherits from it); the small ones = layouts, each for the slides that use it', 'They are the same, only the size differs', 'The small thumbnails are for printing only'], 1,
            'One parent, several children.', 'A change to the <strong>master</strong> (top thumbnail) flows to every layout. A change to one <strong>layout</strong> affects only the slides that use that layout.'),
        $p('ml3', 'Placeholders', '⌨️', 2, 'You are typing in the title placeholder. Press the shortcut to <strong>move to the next placeholder</strong> without the mouse.', ['Ctrl+Enter'],
            'The key that usually starts a new line, with Ctrl.', '<strong>Ctrl+Enter</strong> moves to the next title or body placeholder. If it is the last placeholder, PowerPoint inserts a new slide with the same layout.'),
        $c('ml4', 'Layouts', '📐', 2, 'Someone moved and recolored the placeholders on one slide, so it no longer matches its layout. What is the quickest way to restore it?',
            ['Delete the slide and retype it', 'Home → Reset', 'Design → Themes → choose another theme', 'Press Ctrl+Z many times'], 1,
            'A button next to Layout on the Home tab.', '<strong>Home → Reset</strong> returns the position, size, and formatting of the placeholders to the layout settings. The text you typed stays.'),
        $c('ml5', 'Placeholders', '🖼️', 2, 'Every lecturer profile slide needs a photo in the <strong>same position and size</strong>. What is the most suitable approach?',
            ['Insert a photo on each slide and measure its position with the ruler', 'In Slide Master, select the layout → Insert Placeholder → Picture, then draw the box', 'Put the photo on the master', 'Crop each photo'], 1,
            'An empty box waiting for a picture, prepared on the layout.', 'A <strong>picture placeholder</strong> on the layout fixes the place and size. A photo inserted into it is cropped to fit the box.'),
        $c('ml6', 'Slide Master', '🔢', 2, 'The slide number placeholder is on the Slide Master, but <strong>no numbers appear</strong> on the slides. Which step was missed?',
            ['Type the number on each slide', 'Insert → Header & Footer → check Slide number → Apply to All', 'View → Notes Page', 'Design → Slide Size'], 1,
            'The placeholder alone is not enough. It must be turned on.', 'Slide numbers, the date, and the footer appear only when turned on in <strong>Insert → Header & Footer</strong>. Check <strong>Don’t show on title slide</strong> if the title slide should not have a number.'),
        $c('ml7', 'Slide Master', '🎨', 3, 'You built a second master for appendix slides. After changing the theme, that master <strong>disappeared</strong> because no slide used it. How do you prevent this?',
            ['Save the file as PDF', 'Select that master in Slide Master view → Preserve', 'Lock the file with a password', 'Copy the master to another file'], 1,
            'The pin icon on the Slide Master tab.', 'PowerPoint can remove masters that are not in use. <strong>Preserve</strong> keeps one even when no slide uses it at the moment.'),
        $c('ml8', 'Templates', '💾', 3, 'Your department wants every lecturer to start with the same master, layouts, and colors. Which file format should you share?',
            ['A .pptx with sample slides', '.potx (PowerPoint Template)', '.pdf', '.ppsx (PowerPoint Show)'], 1,
            'A file that opens as a new copy.', 'Save with <strong>File → Save As → PowerPoint Template (*.potx)</strong>. Opening a template creates a new presentation, so the original file is not overwritten.'),
        $susun('ml9', 'Layouts', '📐', 2, 'Put the steps in order to build a <strong>new layout with a picture placeholder</strong> and apply it to a slide.',
            ['View → Slide Master', 'Slide Master → Insert Layout', 'Insert Placeholder → Picture, then draw the box on the new layout', 'Close Master View',
             'Select a slide → Home → Layout → choose the new layout'],
            'The layout must exist before a placeholder can be drawn on it.',
            'Open the master view, create the layout, place the placeholder on it, then close the master view. The new layout appears in the <strong>Home → Layout</strong> list after that.'),
        $susun('ml10', 'Themes', '🎨', 3, 'Put the steps in order to change the <strong>theme accent color</strong> to the university brand color so charts and SmartArt follow it.',
            ['Design → Variants → More arrow → Colors → Customize Colors', 'Set Accent 1 to the brand color code', 'Name the color scheme and click Save',
             'Check the charts and SmartArt: their color now follows Accent 1'],
            'The color scheme is saved after its colors are set.',
            'Theme colors are used by charts, SmartArt, and shapes. Change <strong>Accent 1</strong> once and every object that uses theme colors changes. Colors picked by hand on an object do not change.'),
    ],
];
