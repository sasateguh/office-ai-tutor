<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'akademik-viva'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/akademik-viva.php.
 * Listed (in order) in ../../latihan.php. Real-work scenario: final year project presentation and viva.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Final year project and viva',
    'icon' => 'graduation-cap',
    'tagline' => 'Presentation structure, backup slides, notes, a PDF for examiners, and video',
    'description' => 'A real scenario: you present your final year project and answer the viva panel. Practice ordering your slides, preparing backup slides, sending a PDF to examiners, and inserting a demo video that plays in the lab.',
    'color' => 'purple',
    'questions' => [
        $c('av1', 'Structure', '🧭', 1, 'You have 15 minutes to present your final year project. Which order of sections is easiest for the panel to follow?',
            ['Findings → methodology → problem → conclusion', 'Problem and objectives → methodology → findings → conclusion and further work', 'Full literature review → problem → findings', 'Conclusion → appendices → objectives'], 1,
            'The panel needs to know the problem before judging how you solved it.', 'Start with the problem and objectives, explain the method, show the findings, then close with the conclusion and further work. In the presentation, the literature review needs only a few key references.'),
        $c('av2', 'Backup slides', '🗂️', 2, 'You prepare a backup slide with the full data table for panel questions. The slide <strong>should not appear</strong> during the normal presentation. How do you do it?',
            ['Delete the slide and keep it in another file', 'Place it after the closing slide, right-click its thumbnail → Hide Slide', 'Change the text color to white', 'Shrink the font so the panel does not notice'], 1,
            'A hidden slide stays in the file but is skipped during the slide show.', 'A slide hidden with <strong>Hide Slide</strong> is skipped during the slide show but can still be opened when you need it. Place it after the closing slide so the main presentation order is not disturbed.'),
        $c('av3', 'Backup slides', '🗂️', 3, 'During questions, the panel asks about data that is on a hidden backup slide. How do you open it in Presenter View <strong>without ending the slide show</strong>?',
            ['Press Esc, find the slide, then press F5', 'Select See all slides in Presenter View, then choose the backup slide', 'Press Page Down repeatedly', 'Open a separate PDF file'], 1,
            'Presenter View has a button that shows every slide as a thumbnail.', '<strong>See all slides</strong> shows every slide, including hidden ones. Choose the backup slide, answer the question, then return to the original slide the same way.'),
        $p('av4', 'Equations', '⌨️', 2, 'Your methodology slide needs your model equation. Click in a text box and press the shortcut to <strong>insert an equation</strong>.', ['Alt+='],
            'Alt with the equal sign.', '<strong>Alt+=</strong> inserts an equation box at the cursor. Type the equation with the <strong>Equation</strong> tab or linear notation.'),
        $c('av5', 'Notes', '📝', 1, 'You want to see the points to mention on each slide, but the panel should <strong>see only the slides</strong>. Where should you write those points?',
            ['In a small text box in the corner of the slide', 'In the Notes pane below the slide, then present with Presenter View', 'In comments (Review → New Comment)', 'On a hidden slide after each slide'], 1,
            'Presenter View shows something the audience cannot see.', 'Text in the <strong>Notes</strong> pane appears in Presenter View on your screen only. The projector shows the slides without notes.'),
        $c('av6', 'PDF for examiners', '📄', 2, 'The examiners ask for a PDF copy of your slides before the viva. Why is a PDF safer than sending the .pptx file?',
            ['A PDF is smaller in every case', 'The look of the slides, the fonts, and the layout stay the same on the examiner’s computer, and the content cannot be edited by accident', 'A PDF plays animations better', 'A PDF saves the notes automatically'], 1,
            'Think about another computer that may not have your fonts.', 'A PDF freezes the look of the slides. The examiners see what you see even if their computer lacks the same fonts. Animations and videos do not play in a PDF, so make sure every slide is still clear without animation.'),
        $c('av7', 'PDF for examiners', '📄', 2, 'Your supervisor wants a PDF that shows <strong>the slides with your speaker notes</strong> for review. How do you make it?',
            ['File → Export → Create PDF/XPS with the default settings', 'File → Print → choose Notes Pages, choose the Microsoft Print to PDF printer → Print', 'View → Notes Page → Save', 'Home → Copy all notes into Word'], 1,
            'Notes pages are printed, not exported with the usual settings.', 'Choose <strong>Notes Pages</strong> in the print settings and print to <strong>Microsoft Print to PDF</strong>. Each PDF page shows one slide with its notes below.'),
        $c('av8', 'Fonts', '🔤', 3, 'Your slides use a font that is not installed on the viva room computer. How do you make sure the font is <strong>not replaced</strong> when the file opens there?',
            ['Turn all text into pictures', 'File → Options → Save → Embed fonts in the file, then save', 'Save as .potx', 'Design → Variants → Fonts → Calibri'], 1,
            'The setting is in the Save section of Options.', '<strong>Embed fonts in the file</strong> stores the fonts in the file so other computers can display them. Some fonts do not allow embedding. Open the file on another computer before viva day to check.'),
        $c('av9', 'Video', '🎥', 2, 'The system demo video makes your file 400 MB and hard to send. How do you make it smaller <strong>inside PowerPoint</strong>?',
            ['File → Info → Compress Media → choose HD (720p) or Standard (480p)', 'Insert → Video → Online Videos', 'Home → Reset', 'File → Export → Change File Type → .ppsx'], 0,
            'The Multimedia section of the Info page.', '<strong>File → Info → Compress Media</strong> compresses inserted video and audio. Lower quality means a smaller file. Keep a copy of the original before compressing.'),
        $c('av10', 'Rehearsal', '🎙️', 2, 'You want feedback on <strong>speaking pace and filler words</strong> before the viva. Which PowerPoint tool gives it?',
            ['Review → Spelling', 'Slide Show → Rehearse with Coach', 'Slide Show → Hide Slide', 'View → Slide Sorter'], 1,
            'This tool listens while you practice.', '<strong>Rehearse with Coach</strong> (Speaker Coach) reports on pace, filler words, and reading the slide text aloud. It understands English only, so for a presentation in Malay use Rehearse Timings and a friend as a listener.'),
        $c('av11', 'Sources', '📚', 3, 'Your findings slide shows a chart from another study. How should the source be shown?',
            ['There is no need, because every source is in the report', 'A short citation in small text below the chart, and the full reference list on a references slide at the end', 'Write the full URL in the middle of the chart', 'Mention it verbally only'], 1,
            'The panel needs to know which work is yours and which is someone else’s on the slide itself.', 'A short citation on the slide separates your data from the other study’s data. A references slide at the end gives the full details without crowding the findings slide.'),
        $c('av12', 'Viva', '🎓', 3, 'An hour before the viva you arrive in the room, and its computer will be used. Which check is <strong>most important</strong>?',
            ['Change the theme to make it more attractive', 'Open the file in slide show on that computer: check the fonts, the demo video, and Presenter View on the projector', 'Add animation to every slide', 'Rename the file'], 1,
            'A problem that shows up only on another computer is the hardest to fix in front of the panel.', 'Replaced fonts, videos that do not play, and notes appearing on the projector are common problems on another computer. Check all three, and bring a PDF copy as a backup.'),
        $susun('av13', 'Video', '🎥', 3, 'The examiners ask for a recording of your presentation with your voice as a video. Put the steps in order.',
            ['Slide Show → Record → From Beginning, record your explanation for each slide', 'File → Export → Create a Video', 'Choose Full HD (1080p) and Use Recorded Timings and Narrations', 'Select Create Video, choose a folder, and save'],
            'The Use Recorded Timings and Narrations option only matters once a recording exists.',
            'Record first so PowerPoint has your voice and the timing of each slide. Then <strong>Create a Video</strong> uses that recording. Full HD suits computer screens. Higher quality means a larger file.'),
    ],
];
