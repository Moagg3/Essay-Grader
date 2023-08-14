

<?php

require_once('../../config.php');

// Ensure the user is logged in.
require_login();

// Check capabilities if necessary (e.g., ensuring the user has permission to view this page).
require_capability('local/slack:viewpages', context_system::instance());

// Get the setting value.
$value = get_config('local_slack', 'textentry');
$PAGE->set_url(new moodle_url('/local/slack/userdata.php'));
$PAGE->set_title(get_string('userdata', 'local_slack'));
$PAGE->set_heading(get_string('userdata', 'local_slack'));

echo $OUTPUT->header();

// Display the setting value.
echo html_writer::tag('p', format_text($value, FORMAT_HTML));

echo $OUTPUT->footer();

