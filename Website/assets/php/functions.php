<?php
/*
* 	Author: Caspar Neervoort
*	Twitter: https://www.twitter.com/__Caspar__
*	Email: caspar.neervoort@gmail.com
*
*	Description:
*	The Functions PHP script runs with every page load, providing basic PHP functions to be used on every page.
*/

/* --- Session Handling Functions --- */

	include '_options.php';


/* --- Session Handling Functions --- */

	include '_account_session.php';


/* --- Miscellaneous Functions --- */

	include '_account_misc.php';
	include '_content_formatting.php';


/* --- Database Functions --- */

	include '_database_connection.php';


/* --- User Data Functions --- */

	include '_content_users.php';


/* --- Authentication / Registration Functions --- */

	include '_account_authentication.php';


/* --- Account Settings Functions --- */

	// include '_account_settings.php';
	// include '_account_preferences.php';


/* --- Action Handler --- */

	include '_actions.php';


/* --- Content --- */

	include '_content_template.php';
?>
