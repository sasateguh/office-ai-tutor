<?php

declare(strict_types=1);

/**
 * Practice (EN) set 'semakan-kolaborasi'. Same id, mode, level, answers, correct_index, and option order as ../../latihan/semakan-kolaborasi.php.
 * Listed (in order) in ../latihan.php.
 */
['pintasan' => $p, 'pilihan' => $c, 'susun' => $susun] = require __DIR__ . '/../../../_soalan.php';
return [
    'name' => 'Review and collaboration',
    'icon' => 'message-square',
    'tagline' => 'Track Changes, comments, Compare, and editing together',
    'description' => 'Group documents and drafts checked by a supervisor pass through several hands. Practice tracking changes, replying to comments, comparing versions, and editing one file together.',
    'color' => 'purple',
    'questions' => [
        $c('sk1', 'Track Changes', '✍️', 1, 'Your supervisor wants to see every change you make to a chapter draft. What should you turn on <strong>before</strong> you start editing?',
            ['Review → Track Changes', 'View → Read Mode', 'File → Info → Protect Document', 'Review → Spelling & Grammar'], 0,
            'Changes are only tracked after this feature is on.', '<strong>Track Changes</strong> records insertions, deletions, and formatting changes from the moment it is turned on. Edits made before that are not recorded.'),
        $c('sk2', 'Track Changes', '✍️', 1, 'The document is full of red marks. You want to <strong>see how it would look if every change were accepted</strong>, without accepting them. Choose the Display for Review view:',
            ['Simple Markup', 'All Markup', 'No Markup', 'Original'], 2,
            'The view that hides every mark.', '<strong>No Markup</strong> shows the document as if all changes were accepted. The changes still exist; they are only hidden from view.'),
        $p('sk3', 'Track Changes', '📋', 2, 'The Reviewing Pane is open at the side of the screen and takes up space. Press the shortcut to <strong>close the Reviewing Pane</strong>.', ['Alt+Shift+C'],
            'C for Close, with two modifier keys.', '<strong>Alt+Shift+C</strong> closes the Reviewing Pane. Open it again from Review → Reviewing Pane.'),
        $c('sk4', 'Compare', '🔍', 2, 'Your supervisor edited a copy of your draft <strong>without</strong> Track Changes and sent it back. How do you see what changed?',
            ['Review → Compare → Compare, choose the original draft and the supervisor’s copy', 'Read both files line by line', 'Review → Track Changes in the supervisor’s copy', 'View → Side by Side only'], 0,
            'Word can find the differences between two files and show them as changes.', '<strong>Compare</strong> creates a third document that shows every difference as a tracked change. Turning on Track Changes now does not record edits that already happened.'),
        $c('sk5', 'Compare', '🔍', 2, 'Three group members each sent back their own copy with Track Changes. You want <strong>all their changes in one document</strong>. Which option is it?',
            ['Review → Compare → Combine', 'Copy and paste all three files into one document', 'Review → Accept → Accept All Changes in each file', 'Insert → Object → Text from File'], 0,
            'The second option under the Compare button.', '<strong>Combine</strong> merges the changes of several reviewers into one document, and each change keeps the name of its reviewer.'),
        $c('sk6', 'Comments', '💬', 2, 'A comment asks about a reference you have already fixed. You want to mark it done but <strong>keep the record of the conversation</strong>. What do you do?',
            ['Resolve the comment', 'Delete the comment', 'Reject the nearby change', 'Hide comments with No Markup'], 0,
            'This action can be reopened.', '<strong>Resolve</strong> marks the comment thread as done and keeps it. Delete removes the comment and its replies together.'),
        $c('sk7', 'Comments', '💬', 3, 'The group document is saved in the school OneDrive. You want one member to <strong>get a notification</strong> about your comment. How?',
            ['Type @ and the member’s name in the comment', 'Write the member’s name in bold', 'Colour the comment with Highlight', 'Send the file as an email attachment'], 0,
            'One symbol before a person’s name.', 'An <strong>@mention</strong> in a comment sends that person an email with a link to the comment. It needs the file in OneDrive or SharePoint and a work or school account.'),
        $c('sk8', 'Sharing', '👥', 3, 'Four group members want to edit the same report <strong>at the same time</strong>, without emailing copies. What is the right setup?',
            ['Save the .docx file in OneDrive or SharePoint, then Share it with the members', 'Each member keeps a copy on their own computer', 'Save it as a PDF and share it', 'Turn on Mark as Final'], 0,
            'Editing together needs one file in the cloud.', 'When the file is in <strong>OneDrive or SharePoint</strong> and shared, everyone edits the same file and sees where the others are working. Copies on separate computers must be merged back later.'),
        $c('sk9', 'Track Changes', '🔒', 3, 'You send a draft to a friend for review and want to make sure they <strong>cannot turn off Track Changes</strong>. Which option is it?',
            ['Review → Track Changes → Lock Tracking with a password', 'File → Info → Mark as Final', 'Restrict Editing → Filling in forms', 'Save as PDF'], 0,
            'An option in the menu of the Track Changes button itself.', '<strong>Lock Tracking</strong> keeps Track Changes on until the password is entered. The reviewer can still edit, but every edit is recorded.'),
        $susun('sk10', 'Compare', '🔍', 2, 'Put the steps in order to review edits your supervisor made <strong>without</strong> Track Changes.',
            ['Review → Compare → Compare', 'Choose your draft as the Original document and the supervisor’s copy as the Revised document, then OK',
             'In the comparison document that opens, use Next to Accept or Reject each change', 'Save the comparison document under a new file name'],
            'Changes can only be accepted after the comparison document exists.',
            'The <strong>Compare</strong> box asks for two files, then Word creates a third document. You accept or reject changes inside that document, and that document is saved as the new version.'),
    ],
];
