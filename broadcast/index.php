<?php

	$WebTitle = 'a how to guide for elementary os &nbsp;&middot;&nbsp; tutorials and terminal command reference';
	$Canonical = '';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = '';
	$Author = '';

	require '../global.php';

if (htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == '/' . $Canonical) {

	require '../header.php';

			$loop = 0;
			echo '
		<div class="section group home">
			<div class="section group">';
			$items = glob('*.php', GLOB_NOSORT);
			array_multisort(array_map('filemtime', $items), SORT_NUMERIC, SORT_DESC, $items);
			foreach($items as $entry) {
				if ($entry != 'index.php' && $entry != 'about.php') {
					require $entry;
					echo '
				<div class="col span_5_of_12">
					<h2><a href="/' . $Canonical . '">' . $TextTitle . '</a></h2>
					<p class="textright"><small>' . date ('d/m/Y', filemtime($entry)) .'</small></p>
					<p>' . $Description . '</p>
				</div>';
					$loop = $loop + 1;
					if (is_int($loop/2)) {
						echo '
			</div>
			<div class="breaker"></div>
			<div class="section group">';
					} else {
						echo '
				<div class="col span_2_of_12"><br></div>';
					}
				}
			}
			echo '
			</div>
		</div>
		<div class="breaker"></div>';
		?>

		<div class="section group">
			<div class="col span_5_of_12">
				<a class="twitter-timeline" href="https://twitter.com/howtoelementary" data-widget-id="378582109423546368">Tweets by @howtoelementary</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="col span_2_of_12"><br></div>
			<div class="col span_5_of_12">
				<div class="g-page" data-width="427" data-href="//plus.google.com/102500040175226797826" data-rel="publisher"></div>
				<script>
					(function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					})();
				</script>
			</div>
		</div>

<?php require '../footer.php'; } ?>
