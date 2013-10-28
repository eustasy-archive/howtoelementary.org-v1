<?php

	$TextTitle = 'How to Disable Overlay Scrollbars';
	$WebTitle = 'How to Disable Overlay Scrollbars in elementary OS &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'how-to-disable-overlay-scrollbars-in-elementary-os';
	$FeaturedImage = '';
	$Description = 'You may dislike the lack of buttons at the top and bottom of your scrollbar, as well as the thinness and occasional inconsistency of them.';
	$Keywords = 'How to Disable Overlay Scrollbars elementary os';
	$Author = 'https://plus.google.com/u/0/105729291739660012806?rel=author';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

<h2>Disable Overlay Scrollbars</h2>
<p>You may dislike the lack of buttons at the top and bottom of your scrollbar, as well as the thinness and occasional inconsistency of them.</p>
<p>Disable them by changing the <span class="code">ubuntu-overlay-scrollbars</span> setting in <span class="code">org > gnome > desktop > interface</span> to <span class="code">false</span>. You can do this with <span class="code">dconf-editor</span> or by running a gsettings command in the terminal.</p>
<input type="text" class="clickselect" value="gsettings set org.gnome.desktop.interface ubuntu-overlay-scrollbars false" />
<p>Alternatively, you can enable them again (the fallback is not so hot) by changing the setting to <span class="code">true</span>.</p>
<input type="text" class="clickselect" value="gsettings set org.gnome.desktop.interface ubuntu-overlay-scrollbars true" />
<div class="clear"></div>

<div class="breaker"></div>

<div class="section group">
	<div class="col span_1_of_2">
		<h3>Required Reading</h3>
		<h4><a href="http://howtoelementaryos.org/how-to-install-dconf-tools-in-elementary-os">How to Install DConf-Tools</a></h4>
	</div>
	<div class="col span_1_of_2">
		<h3>Recommended Reading</h3>
		<h4><a href="http://howtoelementaryos.org/how-to-silence-the-bell-in-elementary-os">How to Silence the Bell</a></h4>
	</div>
</div>

<?php require '../footer.php'; } ?>
