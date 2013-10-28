<?php

	$TextTitle = 'How to Display Hidden Auto-Start Entries';
	$WebTitle = 'How to Display Hidden Auto-Start Entries in elementary OS &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'how-to-display-hidden-auto-start-entries-in-elementary-os';
	$FeaturedImage = '';
	$Description = 'By default, your machine is chock-full of Startup Applications you\'re not allowed to see, and you can significantly speed up your startup times by disabling the ones you don\'t need.';
	$Keywords = 'How to Display Hidden Auto-Start Entries elementary os';
	$Author = 'https://plus.google.com/u/0/105729291739660012806?rel=author';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

<h2>Display Hidden Auto-Start Entries</h2>
<div class="section group">
	<div class="col span_1_of_2">
		<div class="infobox">
			<p>'By default, your machine is chock-full of Startup Applications you're not allowed to see, and you can significantly speed up your startup times by disabling the ones you don't need.</p>
			<p>You execute this command in the terminal to show them all.</p>
		</div>
	</div>
	<div class="col span_1_of_2">
		<div class="infobox warning">
			<p>Using <b>Sudo</b> can result in severe system damage.</p>
			<p>Make sure you type this code correctly, or copy and paste the entire command.</p>
		</div>
	</div>
</div>
<input type="text" class="clickselect" value="sudo sed -i 's/NoDisplay=true/NoDisplay=false/g' /etc/xdg/autostart/*.desktop" />
<p>I disabled <span class="code">Bluetooth</span>, <span class="code">Chat</span>, <span class="code">Gwibber</span>, <span class="code">Onboard</span>, <span class="code">Orca</span>, and <span class="code">Personal File Sharing</span>.
<p>Careful not to edit or remove any you don't understand!</p>

<div class="breaker"></div>

<div class="section group">
	<div class="col span_1_of_1">
		<h3>Recommended Reading</h3>
		<h4><a href="http://howtoelementaryos.org/how-to-install-dconf-tools-in-elementary-os">How to Install DConf-Tools</a></h4>
		<h4><a href="http://howtoelementaryos.org/how-to-disable-overlay-scrollbars-in-elementary-os">How to Disable Overlay Scrollbars</a></h4>
		<h4><a href="http://howtoelementaryos.org/how-to-silence-the-bell-in-elementary-os">How to Silence the Bell</a></h4>
	</div>
</div>

<?php require '../footer.php'; } ?>
