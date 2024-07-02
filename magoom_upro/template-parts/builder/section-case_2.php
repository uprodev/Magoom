<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="case-studies-description space-top">
			<div class="container">
				<ul class="case-studies-description__list">

					<?php foreach ($items as $item): ?>
						<?php if ($item['title'] || $item['text']): ?>
							<li>
								<div class="case-studies-description-card"<?php if($item['background_color']) echo ' style="background-color: ' . $item['background_color'] . '"' ?>>

									<?php if ($item['title']): ?>
										<div class="case-studies-description-card__title title-2-subtitle"><?= $item['title'] ?></div>
									<?php endif ?>
									
									<?php if ($item['text']): ?>
										<div class="case-studies-description-card__text text-content last-no-margin"><?= $item['text'] ?></div>
									<?php endif ?>
									
								</div>
							</li>
						<?php endif ?>
					<?php endforeach ?>
					
				</ul>
			</div>

		</section>
	<?php endif ?>

	<?php endif; ?>