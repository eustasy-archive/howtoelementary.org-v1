<?php

// This is a per-page 301 to strip trailing php extensions
if (substr($_SERVER['REQUEST_URI'], -4, 4) == '.php') {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: http://howtoelementaryos.org'.rtrim($_SERVER['REQUEST_URI'], '.php'));
}

?><!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Article">
<head>

	<meta charset="utf-8">
	<meta name="description" content="<?php echo $Description; ?>">
	<meta name="keywords" content="<?php echo $Keywords; ?>">
	<meta name="author" content="<?php echo $Author; ?>">
	<meta name="title" content="<?php echo $WebTitle; ?>">
	<meta name="image" content="<?php echo $FeaturedImage; ?>">
	<meta itemprop="name" content="<?php echo $WebTitle; ?>">
	<meta itemprop="description" content="<?php echo $Description; ?>">
	<meta itemprop="image" content="<?php echo $FeaturedImage; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<title><?php echo $WebTitle; ?></title>

	<link rel="canonical" href="http://howtoelementaryos.org/<?php echo $Canonical; ?>">
	<link rel="publisher" href="https://plus.google.com/102500040175226797826">
	<link rel="icon" href="http://www.eustasy.co.uk/favicon.ico">
	<link rel="shortcut icon" href="http://www.eustasy.co.uk/favicon.ico">
	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Sans+Mono|Droid+Serif:400,700,400italic,700italic|Raleway:200,300,400">
	<link rel="stylesheet" media="all" href="http://howtoelementaryos.org/style.css">

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-28932148-7']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects and Selectivisr -->
	<script src="http://howtoelementaryos.org/scripts/modernizr.min.js"></script>
	<!--[if (lt IE 9) & (!IEMobile)]><script src="http://howtoelementaryos.org/scripts/selectivizr.min.js"></script><![endif]-->

</head>

<body>

	<div id="skiptomain"><a href="#content">skip to main content</a></div>

	<header>
		<h1><a href="http://howtoelementaryos.org/">how to elementary os</a></h1>
		<!--
		<nav class="section group">
			<div class="col span_1_of_9">
				<a class="menu" href="#">Home</a>
			</div>
			<div class="col span_1_of_9">
				<a class="menu" href="#">Guides</a>
			</div>
			<div class="col span_1_of_9">
				<a class="menu" href="#">Commands</a>
			</div>
			<div class="col span_1_of_9">
				<a class="menu" href="#">Downloads</a>
			</div>
			<div class="col span_1_of_9">
				<a class="menu" href="#">Wallpapers</a>
			</div>
			<div class="col span_1_of_9">
				<a class="menu" href="#">Icons</a>
			</div>
			<div class="col span_1_of_9">
				<a class="menu" href="#">Mock Ups</a>
			</div>
			<div class="col span_1_of_9">
				<a class="menu" href="#">Disqus</a>
			</div>
		-->
			<div class="col span_1_of_9 floatright social">
				<a rel="publisher" href="https://www.facebook.com/howtoelementaryos"><img src="http://howtoelementaryos.org/images/social-facebook.png"></a>
				<a rel="publisher" href="https://plus.google.com/102500040175226797826"><img src="http://howtoelementaryos.org/images/social-google-plus.png"></a>
				<a rel="publisher" href="https://twitter.com/howtoelementary"><img src="http://howtoelementaryos.org/images/social-twitter.png"></a>
			</div>
		<!--
		</nav>
		-->
	</header>

	<div id="content">
