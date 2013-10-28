<?php

	$Request = parse_url($_SERVER['REQUEST_URI']);

	if (substr($Request['path'], -4, 4) == '.php') {
		header ('HTTP/1.1 301 Moved Permanently');
		header ('Location: http://howtoelementaryos.org'.$Canonical);
	}

?>
