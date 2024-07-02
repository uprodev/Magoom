<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="case-studies-secondary-section space-top">
		<div class="content-two-columns content-two-columns--media-bottom-on-mob">
			<div class="container case-studies-secondary-section__inner">
				<div class="content-two-columns__body">

					<?php if ($image_desktop || $image_mobile): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="case-studies-secondary-section__img ibg">
									<picture><source srcset="<?= $image_desktop ? $image_desktop['url'] : $image_mobile['url'] ?>" media="(min-width: 992px)" >
										<?= wp_get_attachment_image($image_mobile ? $image_mobile['ID'] : $image_desktop['ID'], 'full') ?>
									</picture>
								</div>
							</div>
						</div>
					<?php endif ?>
					
					<div class="content-two-columns__text-content">

						<?php if ($title): ?>
							<div class="content-two-columns__text-content-title-slot">
								<div class="case-studies-secondary-section__title title-2-subtitle"><?= $title ?></div>
							</div>
						<?php endif ?>

						<?php if ($text): ?>
							<div class="content-two-columns__text-content-text-slot">
								<div class="text-content last-no-margin"><?= $text ?></div>
							</div>
						<?php endif ?>

						<?php if ($link): ?>
							<div class="content-two-columns__text-content-btn-slot">
								<a href="<?= $link['url'] ?>" class="btn-default btn-default--primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>