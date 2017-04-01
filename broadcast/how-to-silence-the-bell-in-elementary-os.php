<?php

	$TextTitle = 'How to Silence the Bell';
	$WebTitle = 'How to Silence the Bell in elementary OS &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'how-to-silence-the-bell-in-elementary-os';
	$FeaturedImage = '';
	$Description = 'I am going to go out on a limb here, and presume you have at some point heard a little "duhm" noise when trying to scroll to far, or backspace when a box is empty, or some similar basic error. I happen to find these little reminders quite informative, but to some people they can be plain annoying.';
	$Keywords = 'How to Silence Disable bell Alarm elementary os';
	$Author = 'https://plus.google.com/u/0/105729291739660012806?rel=author';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>



<h2>Silence the Bell</h2>
<p>I am going to go out on a limb here, and presume you have at some point heard a little "duhm" noise when trying to scroll to far, or backspace when a box is empty, or some similar basic error. I happen to find these little reminders quite informative, but to some people they can be plain annoying.</p>
<p>Fortunately there is an easy way for you to disable it, either using <span class="code">dconf-editor</span> to uncheck <span class="code">audible-bell</span> in <span class="code">org > gnome > desktop > wm > preferences</span>, or by executing the following command.</p>
<input type="text" class="clickselect" value="gsettings set org.gnome.desktop.wm.preferences audible-bell false" />
<p>You can enable it again either by re-checking that box, or by changing <span class="code">false</span> to <span class="code">true</span>in a similar way.</p>
<input type="text" class="clickselect" value="gsettings set org.gnome.desktop.wm.preferences audible-bell true" />

<div class="breaker"></div>

<div class="section group">
	<div class="col span_1_of_2">
		<h3>Required Reading</h3>
		<h4><a href="/how-to-install-dconf-tools-in-elementary-os">How to Install DConf-Tools</a></h4>
	</div>
	<div class="col span_1_of_2">
		<h3>Recommended Reading</h3>
		<h4><a href="/how-to-disable-overlay-scrollbars-in-elementary-os">How to Disable Overlay Scrollbars</a></h4>
	</div>
</div>

<?php require '../footer.php'; } ?>
