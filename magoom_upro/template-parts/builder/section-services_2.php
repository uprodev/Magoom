<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="services-intro">
		<div class="content-two-columns content-two-columns--media-bottom-on-mob content-two-columns--hide-media-on-desk"> 
			<div class="container services-intro__inner">
				<div class="content-two-columns__body">

					<?php if ($image): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="services-intro__img ibg">
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</div>
							</div>
						</div>
					<?php endif ?>

					<div class="content-two-columns__text-content">
						<div class="content-two-columns__text-content-title-slot">
							<div class="services-intro__title title-2-mob-lg">

								<?php if ($icon): ?>
									<?php if (pathinfo($icon['url'])['extension'] == 'svg'): ?>
										<img src="<?= $icon['url'] ?>" class="title-icon-1" alt="<?= $icon['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'title-icon-1')) ?>
									<?php endif ?>
								<?php endif ?>

								<?php if ($titles_mobile): ?>
									<div class="services-intro__title-mob">

										<?php foreach ($titles_desktop as $index => $item): ?>
											<?php if ($item['text']): ?>
												<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
											<?php endif ?>
										<?php endforeach ?>

									</div>
								<?php endif ?>

								<?php if ($titles_desktop): ?>
									<div class="services-intro__title-desk">

										<?php foreach ($titles_desktop as $index => $item): ?>
											<?php if ($item['text']): ?>
												<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
											<?php endif ?>
										<?php endforeach ?>

									</div>
								<?php endif ?>

							</div>
						</div>

						<?php if ($subtitle): ?>
							<div class="content-two-columns__text-content-sub-title-slot">
								<div class="title-2-subtitle"><?= $subtitle ?></div>
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

	<?php if ($services): ?>
		<section class="services-list space-top">
			<div class="container">
				<div class="services">

					<?php $wrap_counter = 1; ?>

					<?php foreach($services as $index => $post): 

						$is_wrap_start = $index == 0 || $index == 2 || $index == 5;
						$is_wrap_end = $index == 1 || $index == 4 || $index == 8;

						?>

						<?php if ($is_wrap_start): ?>
							<div class="services__col services__col-<?= $wrap_counter ?>">
								<?php 
								$wrap_counter++;
							endif;
							?>

							<?php get_template_part('parts/content', 'service') ?>

							<?php if ($is_wrap_end): ?>
							</div>
						<?php endif ?>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>