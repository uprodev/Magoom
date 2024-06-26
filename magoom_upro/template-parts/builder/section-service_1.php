<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="services-single-intro bg-green">
		<div class="content-two-columns content-two-columns--media-bottom-on-mob">
			<div class="container services-single-intro__inner">
				<div class="content-two-columns__body">

					<?php if ($image): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="services-single-intro__img ibg">
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</div>
							</div>
						</div>
					<?php endif ?>
					
					<div class="content-two-columns__text-content">

						<?php if ($titles): ?>
							<div class="content-two-columns__text-content-title-slot">
								<div class="services-single-intro__title title-2-mob-lg">

									<?php foreach ($titles as $index => $item): ?>
										<?php if ($item['text']): ?>
											<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
										<?php endif ?>
									<?php endforeach ?>
									
								</div>
							</div>
						<?php endif ?>

						<?php if ($subtitle): ?>
							<div class="content-two-columns__text-content-sub-title-slot">
								<h2 class="services-single-intro__subtitle title-2-subtitle"><?= $subtitle ?></h2>
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