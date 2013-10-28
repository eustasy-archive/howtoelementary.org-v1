<?php

	$WebTitle = 'pull &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'pull';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = '';
	$Author = '';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	// This is the GitPull file. The correct URL to active it is:
	// http://howtoelementaryos.org/pull?auth=clfx9azu80bu584dxcogmhz3lcvi4wm77sv7sksqata6s49g6omjvbd7eyf8ls6j

	$Pull_Auth = htmlentities($_GET['auth'], ENT_QUOTES, 'UTF-8'); // Encode auth before using it.

	// If the auth is correct and Git posted a payload.
	// We can check for the payload to help stop attacks.
	// isset($_POST['payload'])

	if (isset($Pull_Auth) && $Pull_Auth === 'clfx9azu80bu584dxcogmhz3lcvi4wm77sv7sksqata6s49g6omjvbd7eyf8ls6j' && isset($_REQUEST['payload']) ) {

		// We're going to run a few commands now.
		// git reset --hard HEAD	// Cleans out uncommitted changes.
		// git clean -f -d			// Remove junk files.
		// git pull					// Get the latest version.

		$Pull_Output = nl2br( shell_exec('git reset --hard HEAD && git clean -f -d && git pull') ); // Capture the output.

	} else { // Or not.
		$Pull_Output = nl2br( shell_exec('git reset --hard HEAD') ); // Just tell us where we are
	}

// That is all.

	require '../header.php';

	echo '<h2>Pull</h2>';
	echo '<h3>' . $Pull_Output . '</h3>';

	require '../footer.php';

} ?>
