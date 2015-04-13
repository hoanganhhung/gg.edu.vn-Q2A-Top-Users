<?php
/*
	Plugin Name: gg.edu.vn Q2A Top Users
	Plugin URI: 
	Plugin Description: Provides a list of users with more points  for QA
	Plugin Version: 1.0.0
	Plugin Date: 2015-04-01
	Plugin Author: gg.edu.vn
	Plugin Author URI: http://gg.edu.vn
	Plugin License: WTFPL – Do What the Fuck You Want to Public License.
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI: 
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	qa_register_plugin_module('widget', 'qa-top-users.php', 'qa_top_users', 'Top Users');

/*
	Omit PHP closing tag to help avoid accidental output
*/
