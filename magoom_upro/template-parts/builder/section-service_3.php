<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="services-single-secondary-section">
		<div class="content-two-columns content-two-columns--media-left">
			<div class="container services-single-secondary-section__inner">
				<div class="content-two-columns__body">

					<?php if ($image): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="services-single-secondary-section__img ibg">
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</div>
							</div>
						</div>
					<?php endif ?>
					
					<div class="content-two-columns__text-content">

						<?php if ($titles): ?>
							<div class="content-two-columns__text-content-title-slot">
								<div class="services-single-secondary-section__title title-2">

									<?php foreach ($titles as $index => $item): ?>
										<?php if ($item['text']): ?>
											<span class="row-<?= $index + 1 ?>"<?php if($index > 0) echo ' data-css-variable-width="--w" data-parent=".services-single-secondary-section__title"' ?>><?= $item['text'] ?></span>
										<?php endif ?>
									<?php endforeach ?>
									
								</div>
							</div>
						<?php endif ?>

						<?php if ($subtitle): ?>
							<div class="content-two-columns__text-content-sub-title-slot">
								<h2 class="services-single-secondary-section__subtitle title-2-subtitle"><?= $subtitle ?></h2>
							</div>
						<?php endif ?>

						<?php if ($text): ?>
							<div class="content-two-columns__text-content-text-slot">
								<div class="text-content last-no-margin"><?= $text ?></div>
							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>