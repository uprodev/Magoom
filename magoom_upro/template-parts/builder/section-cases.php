<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php
	if($cases): ?>

		<section class="case-studies space-top">
			<div class="container">
				<ul class="case-studies__list">

					<?php foreach($cases as $post): 

						global $post;
						setup_postdata($post); ?>
						<?php get_template_part('parts/content', 'case') ?>
					<?php endforeach; ?>
					
					<?php wp_reset_postdata(); ?>

				</ul>
			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>