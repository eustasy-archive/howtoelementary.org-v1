<?php

	$TextTitle = 'How to Install Flash for Midori';
	$WebTitle = 'How to Install Flash for Midori in elementary OS &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'how-to-install-flash-for-midori-in-elementary-os';
	$FeaturedImage = '/images/how-to-install-flash-for-midori-in-elementary-os/midori-settings.png';
	$Description = 'One of the most requested things when dealing with elementary OS is the lack of Flash. Instead of suggesting different ways for each architecture to deal with this issue, we have lovingly crafted a small script for the use of any elementary system.';
	$Keywords = 'How to Install Flash Midori elementary os';
	$Author = 'https://plus.google.com/u/0/105729291739660012806?rel=author';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

<h2>Install Flash for Midori</h2>
<p>One of the most requested things when dealing with elementary OS is the lack of Flash. Installing the <span class="code">flashplugin-installer</span> package works for Chromium and Firefox, but the bundled browser, Midori, will not detect this on 64bit systems. Instead of suggesting different ways for each architecture to deal with this issue, we have lovingly crafted a small script for the use of any elementary system.</p>
<p>If you're not interested in how this works, skip to the next paragraph for the "how to" bit. Okay, the reason why Midori won't work with Flash nicely is fairly simple, and is rooted in it's code base. The way it accesses extensions requires them to be in 32bit, regardless of whether or not the system it is running on is. By default, however, elementary will only install the same architecture of Flash as your system. This set of commands downloads and extracts a 32bit copy of Flash, from their site.</p>
<div class="section group">
	<div class="col span_1_of_2">
		<p>This one single method will work in both 64bit and 32bit systems by using the 32bit flash natively, or emulating it. Either way, it uses <span class="code">nspluginwrapper</span>, which will pull in a lot of libraries (packages), but most of them should be quite small. You can download and execute this file or just copy and paste the whole block into your terminal, then follow the on-screen instructions. DO NOT run as SUDO. That doesn't work. Note that you may have to enable the extension (typically named <span class="code">Shockwave Flash</span>) in the Midori preferences, and then test your installation. <a href="http://www.adobe.com/software/flash/about/">adobe.com/software/flash/about/</a> Tested in elementary, but should work in any Debian based system.</p>
	</div>
	<div class="col span_1_of_2">
		<div class="infobox warning">
			<p><b>Do NOT run as Sudo/Root.</b> This will not work unless you use root as your default user.</p>
			<p>By executing this script, you acknowledge that you have read and agree to the <a href="http://www.adobe.com/products/eulas">Adobe Software Licensing Agreement</a>.</p>
			<p>We host no part of Adobe Flash, nor any other Adobe software for download. This script uses their official servers.</p>
		</div>
	</div>
</div>
<textarea class="resize clickselect">clear &&
echo 'Installing Flash for Midori' &&
read -p 'Press Enter to continue, or abort by pressing CTRL+C' nothing &&
mkdir -p ~/.mozilla/plugins &&
wget https://fpdownload.adobe.com/get/flashplayer/pdc/11.2.202.554/install_flash_player_11_linux.i386.tar.gz &&
tar -zxvf install_flash_player_11_linux.i386.tar.gz libflashplayer.so &&
rm install_flash_player_11_linux.i386.tar.gz &&
if [ $(getconf LONG_BIT) = '64' ]
then
	mv libflashplayer.so ~/.mozilla/plugins/libflashplayer.32.so &&
	sudo apt-get install nspluginwrapper:i386 libnss3:i386
else
	mv libflashplayer.so ~/.mozilla/plugins/libflashplayer.so &&
	sudo apt-get install nspluginwrapper
fi &&
nspluginwrapper -a -v -n -i</textarea>
<div class="clear"></div>
<div class="section group">
	<div class="col span_1_of_2">
		<p>Note that receiving the error <span class="code">wrong ELF class: ELFCLASS64</span> is to be expected. This is your 32bit <span class="code">nspluginwrapper</span> for Midori rejecting your 64bit copies of flash. Ignore these.</p>
		<p>Your script should end with an output like this.</p>
		<textarea class="resize" readonly>Auto-install plugins from /home/user/.mozilla/plugins
Looking for plugins in /home/user/.mozilla/plugins
Install plugin /home/user/.mozilla/plugins/libflashplayer.32.so</textarea>
		<div class="clear"></div>
		<p>That last line signifies a successful install. Remember to restart Midori if you had it open at the time, and enable the <span class="code">Shockwave Flash</span> extension in the preferences.</p>
	</div>
	<div class="col span_1_of_2">
		 <a target="_blank" href="/images/how-to-install-flash-for-midori-in-elementary-os/midori-settings.png"><img class="round floatright" alt="Midori Preferences - Extensions" src="/images/how-to-install-flash-for-midori-in-elementary-os/midori-settings.png"></a>
	</div>
</div>

<div class="clear"></div>

<div class="breaker"></div>

<div class="section group">
	<div class="col span_1_of_1">
		<h3>Recommended Reading</h3>
		<h4><a href="/how-to-disable-overlay-scrollbars-in-elementary-os">How to Disable Overlay Scrollbars</a></h4>
		<h4><a href="/how-to-silence-the-bell-in-elementary-os">How to Silence the Bell</a></h4>
		<h4><a href="/how-to-display-hidden-auto-start-entries-in-elementary-os">How to Display Hidden Auto-Start Entries</a></h4>
	</div>
</div>

<?php require '../footer.php'; } ?>
