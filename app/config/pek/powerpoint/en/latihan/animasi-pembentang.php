<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'animasi-pembentang'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/animasi-pembentang.php.
 * Listed (in order) in ../../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Animation and delivery',
    'icon' => 'play',
    'tagline' => 'Animation Pane, animation timing, Morph, Presenter View, and control during a slide show',
    'description' => 'Good animation shows one idea at a time. Practice ordering effects, setting their timing, using Morph, and controlling the slide show without hunting for buttons in front of an audience.',
    'color' => 'amber',
    'questions' => [
        $c('ap1', 'Animation', '🎬', 1, 'Your slide has five animation effects and you want to see <strong>their order in one list</strong>. What should you open?',
            ['Animations → Animation Pane', 'Transitions → Effect Options', 'View → Slide Sorter', 'Home → Arrange'], 0,
            'A pane on the right, on the same tab as the effects gallery.', '<strong>Animations → Animation Pane</strong> lists every effect on the slide in playback order. Drag an effect in that list to change its order.'),
        $c('ap2', 'Animation', '🎬', 1, 'The title already has a Fade effect. You choose Zoom in the Animations gallery to add a second effect, but <strong>Fade disappears</strong>. What should you have used?',
            ['Effect Options', 'Animation Painter', 'Add Animation', 'Animation Pane → Play From'], 2,
            'The gallery replaces an effect. Another button adds one.', 'Choosing an effect in the gallery <strong>replaces</strong> the existing effect. <strong>Add Animation</strong> adds a new effect and keeps the old one.'),
        $c('ap3', 'Timing', '⏱️', 2, 'You want a picture to appear <strong>right after</strong> the title finishes appearing, without a click. What is the correct <strong>Start</strong> setting for the picture?',
            ['On Click', 'With Previous', 'After Previous', 'Delay 00.00'], 2,
            'The effect starts when the previous effect ends.', '<strong>After Previous</strong> starts the effect as soon as the previous effect ends. <strong>With Previous</strong> plays both at the same time, and <strong>On Click</strong> waits for a click.'),
        $p('ap4', 'Animation', '⌨️', 2, 'A shape already has an animation you like. Select that shape and press the shortcut to <strong>copy its animation</strong> (Animation Painter).', ['Alt+Shift+C'],
            'Like copying formatting (Ctrl+Shift+C), but with Alt instead of Ctrl.', '<strong>Alt+Shift+C</strong> copies the animation of the selected object. Select another object and press <strong>Alt+Shift+V</strong> to paste it.'),
        $c('ap5', 'Animation', '🎯', 2, 'A quiz slide has a question box and an answer box. The answer must appear <strong>only when you click the question box</strong>, not on an ordinary click. How do you do it?',
            ['Put the answer on the next slide', 'Select the answer animation → Animations → Trigger → On Click of → the question box', 'Set the answer Start to After Previous', 'Insert → Action → Hyperlink to: Next Slide'], 1,
            'A trigger can be set to a specific object on the slide.', '<strong>Trigger → On Click of</strong> ties the effect to a click on the chosen object. A click elsewhere on the slide does not play it.'),
        $c('ap6', 'Morph', '🔀', 2, 'You want a diagram to grow and move to the center smoothly between slide 4 and slide 5. Slide 5 is a copy of slide 4 with the picture already moved. <strong>Where</strong> must the Morph transition be applied?',
            ['On slide 4', 'On slide 5', 'On both slides', 'On the Slide Master'], 1,
            'A transition plays when its slide comes in.', 'A transition is applied to the slide you move <strong>to</strong>. Morph on slide 5 works out the change in position and size of the same objects on slides 4 and 5, then animates it.'),
        $p('ap7', 'Presenting', '⬜', 1, 'During a slide show you want to write on the lecture hall whiteboard without the slide getting in the way. Press the key for a <strong>white screen</strong>.', ['W', ','],
            'The first letter of the word white.', '<strong>W</strong> (or comma) shows a white screen. Press it again to return to the slide. <strong>B</strong> shows a black screen.'),
        $c('ap8', 'Presenter View', '🖥️', 2, 'You start the slide show with a projector, but <strong>your notes appear on the projector screen</strong> and the audience view is on your laptop. What is the fix?',
            ['Press Esc and reconnect the cable', 'In Presenter View: Display Settings → Swap Presenter View and Slide Show', 'View → Notes Page', 'Slide Show → Hide Slide'], 1,
            'Display settings are on the bar at the top of Presenter View.', '<strong>Display Settings → Swap Presenter View and Slide Show</strong> switches which screen shows the notes and which shows the slides, without ending the slide show.'),
        $p('ap9', 'Media', '▶️', 2, 'Your slide has a demo video inserted from your computer. During the slide show, press the shortcut to <strong>play or pause</strong> the video.', ['Alt+P', 'Ctrl+Space'],
            'Alt with the first letter of play.', '<strong>Alt+P</strong> plays or pauses a video inserted from your computer. <strong>Alt+Q</strong> stops it. These shortcuts do not work for online videos.'),
        $c('ap10', 'Timing', '⏱️', 2, 'You have 10 minutes and want to know <strong>how long each slide takes</strong> while you practice, without recording your voice. Which tool fits?',
            ['Slide Show → Record', 'Slide Show → Rehearse Timings', 'Transitions → Duration', 'Animations → Delay'], 1,
            'This tool only measures time.', '<strong>Rehearse Timings</strong> times each slide while you practice and offers to save the timings. If you do not want the slides to advance on their own in class, choose <strong>Set Up Slide Show → Advance slides → Manually</strong>.'),
        $c('ap11', 'Animation', '🎬', 3, 'Your lecturer asks for your findings slide to be <strong>easier to follow</strong>. The slide has four points that fly in with a sound and a spin. What is the most suitable change?',
            ['Add a Pulse emphasis effect so the points stand out more', 'Use one simple effect (Appear or Fade) and bring in the points one at a time as you discuss them', 'Remove all text and replace it with a video', 'Use a different transition on every slide'], 1,
            'Animation should help the audience follow, not draw attention to the animation itself.', 'One simple, consistent effect, with each point appearing as you discuss it, keeps the audience on the content. Sounds and spins pull attention away and slow the presentation down.'),
        $susun('ap12', 'Animation', '📝', 2, 'Put the steps in order to make the points in the body placeholder <strong>appear one paragraph at a time</strong>.',
            ['Select the body placeholder on the slide', 'Animations → choose Fade', 'Effect Options → By Paragraph', 'Animations → Preview to check the order'],
            'Effect Options appears only after an effect is applied.',
            'The effect must be applied to the placeholder first. Then <strong>Effect Options → By Paragraph</strong> splits it into one effect per paragraph, which you can check with <strong>Preview</strong>.'),
        $susun('ap13', 'Morph', '🔀', 3, 'Put the steps in order to build a <strong>Morph</strong> effect that moves a chart from the left to the center of the slide.',
            ['Place the chart on the left of the first slide', 'In the thumbnail pane, duplicate that slide (Duplicate Slide)', 'On the copy, move and enlarge the chart to the center', 'Select the copy → Transitions → Morph', 'Select the first slide → Slide Show → From Current Slide, then click to see the movement'],
            'The second slide must exist and differ before the transition is applied to it.',
            'Morph compares the same objects on two consecutive slides. Duplicate the slide, change the position on the copy, then apply Morph to that copy.'),
    ],
];
