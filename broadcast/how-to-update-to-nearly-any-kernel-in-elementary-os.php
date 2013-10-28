<?php

	$TextTitle = 'How to Update to Nearly any Kernel';
	$WebTitle = 'How to Update to Nearly any Kernel in elementary OS &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'how-to-update-to-nearly-any-kernel-in-elementary-os';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = 'How to Update Nearly any Kernel elementary os';
	$Author = 'https://plus.google.com/u/0/105729291739660012806?rel=author';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

<h2>How to Update to Nearly any Kernel</h2>
<p></p>

<div class="section group">
	<div class="col span_1_of_2">
		<h3>3.2</h3>
		<p>_Default_</p>
	</div>
	<div class="col span_1_of_2">
		<h3>3.5</h3>
		<p>_Not_</p>
		<input type="text" class="clickselect" value="sudo apt-get install linux-generic-lts-quantal" />
	</div>
</div>

<div class="section group">
	<div class="col span_1_of_2">
		<h3>3.8</h3>
		<p>_Not_</p>
		<input type="text" class="clickselect" value="sudo apt-get install linux-generic-lts-raring" />
	</div>
	<div class="col span_1_of_2">
		<h3>Latest "Stable" (Unstable)</h3>
		<p></p>
	</div>
</div>

<div class="breaker"></div>

<div class="section group">
	<div class="col span_1_of_1">
		<h3>Recommended Reading</h3>
		<h4><a href="http://howtoelementaryos.org/how-to-display-hidden-auto-start-entries-in-elementary-os">How to Display Hidden Auto-Start Entries</a></h4>
		<h4><a href="http://howtoelementaryos.org/how-to-disable-overlay-scrollbars-in-elementary-os">How to Disable Overlay Scrollbars</a></h4>
		<h4><a href="http://howtoelementaryos.org/how-to-install-flash-for-midori-in-elementary-os">How to Install Flash for Midori</a></h4>
	</div>
</div>

<?php require '../footer.php'; } ?>
