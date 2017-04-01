<?php

	$WebTitle = 'about &nbsp;&middot;&nbsp; how to elementary os';
	$Canonical = 'about';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = '';
	$Author = '';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php'; ?>

<div class="section group">

	<div class="col span_5_of_12">
		<h2 id="founding">founding</h2>
		<p>With the success of <a href="http://howtoubuntu.org/">How to Ubuntu</a> after it's launch in Feburary 2012, <a href="http://www.eustasy.co.uk/">eustasy</a> continued to grow and share in the open-source community.</p>
		<p>Within the <a href="http://elementaryos.org/journal/luna-beta-1-released">first beta</a> of <a href="http://elementaryos.org">elementary os</a>, eustasy decided to drop support for Windows entirely, and <a href="http://www.eustasy.co.uk/blog/post/12/31/507/elementary-os/">set elementary os as it's preferred system</a>, citing speed, security, and ease of use.</p>
	</div>

	<div class="col span_2_of_12"><br></div>

	<div class="col span_5_of_12">
		<h2 id="technical">technical</h2>
		<p><a href="/">how to _______ elementary os</a> is hosted by <a href="https://www.digitalocean.com/?refcode=eca8f5e3972c">Digital Ocean</a> on a <a href="http://www.ubuntu.com/">Ubuntu</a> powered Server. <a href="http://nginx.org/‎">Nginx</a> and <a href="http://php.net/">PHP</a> have the critical roles of serving our content.</p>
		<p>This site was entirely developed using <a href="https://launchpad.net/scratch">Scratch</a> on <a href="http://elementaryos.org">elementary os</a>.</p>
	</div>

</div>

<div class="breaker"></div>

<div class="section group">

	<div class="col span_5_of_12">
		<h2 id="license">license</h2>
		<p>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_GB">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.</p>
		<p><a rel="license" class="cc" href="https://eustasy.org/licenses/#cc">c</a>  This is a <a href="http://creativecommons.org/">Creative Commons</a> license.</p>
		<p><a rel="license" class="cc" href="https://eustasy.org/licenses/#by">b</a>  You must provide attribution to <a href="/">how to _______ elementary os</a> when you display or use our work.</p>
		<p><a rel="license" class="cc" href="https://eustasy.org/licenses/#nc">n</a> You may not display or use this work as a source for commercial or financial gain.</p>
		<p><a rel="license" class="cc" href="https://eustasy.org/licenses/#sa">a</a> You must share your content in an equal or more legally free manner.</p>
	</div>

	<div class="col span_2_of_12"><br></div>

	<div class="col span_5_of_12">
	</div>

</div>

<?php require '../footer.php'; } ?>
