<?php


# This code is actually implementing the plugin functionality by having the Grader Title, Text Entry functionality and the view functionality

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {

    $ADMIN->add('root', new admin_category('Grader', get_string('pluginname', 'local_slack')));
    
    $settings = new admin_settingpage('local_slack_settings', get_string('settings', 'local_slack'));
    
    $settings->add(new admin_setting_configtext('local_slack/textentry',
                                                    get_string('textentrylabel', 'local_slack'),
                                                    '', PARAM_TEXT));
    $ADMIN->add('Grader', $settings);
    
	
	$ADMIN->add('Grader', new admin_externalpage('userdata', get_string('userdata', 'local_slack'),
                 new moodle_url('/local/slack/userdata.php')));
    
    
    
}
