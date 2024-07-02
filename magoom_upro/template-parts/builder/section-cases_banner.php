<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="case-studies-intro">
		<div class="content-two-columns content-two-columns--hide-media-on-mob">
			<div class="container case-studies-intro__inner">
				<div class="content-two-columns__body">

					<?php if ($image): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="case-studies-intro__img ibg">
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</div>
							</div>
						</div>
					<?php endif ?>

					<div class="content-two-columns__text-content">

						<?php if ($titles): ?>
							<div class="content-two-columns__text-content-title-slot">
								<div class="case-studies-intro__title title-2-mob-lg">

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
								<h2 class="case-studies-intro__subtitle title-2-subtitle"><?= $subtitle ?></h2>
							</div>
						<?php endif ?>

						<?php if ($text): ?>
							<div class="content-two-columns__text-content-text-slot">
								<div class="text-content last-no-margin"><?= $text ?></div>
							</div>
						<?php endif ?>

					</div>
				</div>

				<?php if ($icon): ?>
					<div class="case-studies-intro__decor-icon">
						<?php if (pathinfo($icon['url'])['extension'] == 'svg'): ?>
							<img src="<?= $icon['url'] ?>" class="case-studies-intro__decor-icon" alt="<?= $icon['alt'] ?>">
						<?php else: ?>
							<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'case-studies-intro__decor-icon')) ?>
						<?php endif ?>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>