<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($image): ?>
		<section class="home-image-banner image-banner">
			<div class="image-banner__inner" style="background-image: url(<?= $image['url'] ?>);"></div>
		</section>
	<?php endif ?>

	<?php endif; ?>