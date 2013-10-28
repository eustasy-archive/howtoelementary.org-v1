<?php

	$TextTitle = 'How to Install DConf-Tools';
	$WebTitle = 'How to Install DConf-Tools in elementary OS &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'how-to-install-dconf-tools-in-elementary-os';
	$FeaturedImage = '';
	$Description = 'A commonly used program to access the more complex settings and options available to you is DConf Editor, a part of the DConf-Tools package.';
	$Keywords = 'How to Install DConf-Tools dconf tools editor elementary os';
	$Author = 'https://plus.google.com/u/0/105729291739660012806?rel=author';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

<h2>Install DConf-Tools</h2>
<p>A commonly used program to access the more complex settings and options available to you is DConf Editor, a part of the DConf-Tools package.</p>
<p>You can install the program by clicking the install button below, or executing the command in your terminal.</p>
<div class="section group">
	<div class="col span_3_of_4">
		<input type="text" class="clickselect" value="sudo apt-get install dconf-tools" />
	</div>
	<div class="col span_1_of_4">
		<a href="apt://dconf-tools" class="button">Install</a>
	</div>
</div>
<div class="clear"></div>

<div class="breaker"></div>

<div class="section group">
	<div class="col span_1_of_1">
		<h3>Recommended Reading</h3>
		<h4><a href="http://howtoelementaryos.org/how-to-disable-overlay-scrollbars-in-elementary-os">How to Disable Overlay Scrollbars</a></h4>
		<h4><a href="http://howtoelementaryos.org/how-to-silence-the-bell-in-elementary-os">How to Silence the Bell</a></h4>
	</div>
</div>

<?php require '../footer.php'; } ?>
