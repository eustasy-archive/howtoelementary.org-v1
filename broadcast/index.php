<?php
$WebTitle = 'a how to guide for elementary os &nbsp;&middot;&nbsp; tutorials and terminal command reference';
$Canonical = '';
$FeaturedImage = '';
$Description = '';
$Keywords = '';
require '../global.php';
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

require '../footer.php';
