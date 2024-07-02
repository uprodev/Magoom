<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="stats space-top">
		<div class="container stats__inner">

			<?php if ($title): ?>
				<div class="stats__title title-2-subtitle"><?= $title ?></div>
			<?php endif ?>
			
			<?php if ($items): ?>
				<ul class="stats__list">

					<?php foreach ($items as $item): ?>
						<?php if ($item['title'] || $item['value'] || $item['text']): ?>
							<li>
								<div class="stats-card bg-blue-light">

									<?php if ($item['title']): ?>
										<div class="stats-card__title"><?= $item['title'] ?></div>
									<?php endif ?>
									
									<div class="stats-card__body">

										<?php if ($item['value']): ?>
											<div class="stats-card__value"><?= $item['value'] ?></div>
										<?php endif ?>

										<?php if ($item['text']): ?>
											<div class="stats-card__text"><?= $item['text'] ?></div>
										<?php endif ?>

									</div>
								</div>
							</li>
						<?php endif ?>
					<?php endforeach ?>
					
				</ul>
			<?php endif ?>

			<?php if ($icon): ?>
				<div class="stats__decor">
					<?php if (pathinfo($icon['url'])['extension'] == 'svg'): ?>
						<img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
					<?php else: ?>
						<?= wp_get_attachment_image($icon['ID'], 'full') ?>
					<?php endif ?>
				</div>
			<?php endif ?>
			
		</div>
	</section>

	<?php endif; ?>