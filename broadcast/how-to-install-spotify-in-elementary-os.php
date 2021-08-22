<?php
$TextTitle = 'How to Install Spotify';
$WebTitle = 'How to Install Spotify in elementary OS &nbsp;&middot;&nbsp; how to elementary os';
$Canonical = 'how-to-install-spotify-in-elementary-os';
$FeaturedImage = '/images/how-to-install-spotify-in-elementary-os/spotify-in-elementary-os.png';
$Description = 'While Spotify has no supported release for Linux as such, their is, hidden away a little bit, a nice little "Previewspsp" release that runs reasonably well, even if it is not the most native of applications.';
$Keywords = 'How to Install Spotify elementary os';
require '../global.php';
require '../header.php';
?>

<h2>Install Spotify</h2>
<div class="section group">
	<div class="col span_1_of_2">
		<p>While Spotify has no supported release for Linux as such, their is, hidden away a little bit, a nice little "<a href="https://www.spotify.com/us/download/previews/">Preview</a>" release that runs reasonably well, even if it is not the most native of applications.</p>
		<blockquote>
			<p>This is a preview build of Spotify for Linux. As a preview release this version is still unsupported, but we're running it ourselves and will try to make sure it keeps pace with its Mac and Windows siblings.</p>
		</blockquote>
	</div>
	<div class="col span_1_of_2">
		<div class="infobox warning">
			<p><b>Do NOT run as Root.</b> This script is designed to be run as a normal user and elevate permissions with Sudo.</p>
			<p>By executing this script, you acknowledge that you have read and agree to the <a href="https://www.spotify.com/us/legal/end-user-agreement/">Spotify End User Agreement</a>.</p>
		</div>
	</div>
</div>
<textarea class="resize clickselect"><?php echo file_get_contents('https://gist.github.com/lewisgoddard/6778426/raw/af332ca56ebebb9a692d8be0b87c36b116969189/Install_Spotify_Preview_in_Linux.sh'); ?></textarea>
<div class="clear"></div>
<div class="section group">
	<div class="col span_1_of_2">
		<p></p>
	</div>
	<div class="col span_1_of_2">
		<a target="_blank" href="/images/how-to-install-spotify-in-elementary-os/spotify-in-elementary-os.png"><img class="round floatright" alt="Spotify in elementary OS" src="/images/how-to-install-spotify-in-elementary-os/spotify-in-elementary-os.png"></a>
	</div>
</div>

<div class="clear"></div>

<div class="breaker"></div>



<div class="section group">
	<div class="col span_1_of_1">
		<h3>Recommended Reading</h3>
		<h4><a href="/how-to-install-flash-for-midori-in-elementary-os">How to Install Flash for Midori</a></h4>
		<h4><a href="/how-to-disable-overlay-scrollbars-in-elementary-os">How to Disable Overlay Scrollbars</a></h4>
		<h4><a href="/how-to-display-hidden-auto-start-entries-in-elementary-os">How to Display Hidden Auto-Start Entries</a></h4>
	</div>
</div>

<?php
require '../footer.php';
