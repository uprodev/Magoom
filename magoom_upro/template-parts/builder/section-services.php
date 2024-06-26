<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-services">
		<div class="home-services__row-1">
			<div class="content-two-columns content-two-columns--hide-media-on-mob">
				<div class="container">
					<div class="content-two-columns__body">

						<?php if ($image): ?>
							<div class="content-two-columns__media">
								<div class="content-two-columns__media-inner">
									<div class="home-services__img">
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									</div>
								</div>
							</div>
						<?php endif ?>

						<div class="content-two-columns__text-content">
							<div class="content-two-columns__text-content-title-slot">
								<div class="home-services__title title-2">

									<?php if ($titles_mobile): ?>
										<div class="home-services__title-mob">

											<?php foreach ($titles_desktop as $index => $item): ?>
												<?php if ($item['text']): ?>
													<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
												<?php endif ?>
											<?php endforeach ?>

										</div>
									<?php endif ?>

									<?php if ($titles_desktop): ?>
										<div class="home-services__title-desk">

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
									<div class="home-services__subtile title-2-subtitle"><?= $subtitle ?></div>
								</div>
							<?php endif ?>

							<?php if ($text): ?>
								<div class="content-two-columns__text-content-text-slot">
									<div class="text-content last-no-margin"><?= $text ?></div>
								</div>
							<?php endif ?>

							<?php if ($link): ?>
								<div class="home-services__btn content-two-columns__text-content-btn-slot">
									<a href="<?= $link['url'] ?>" class="btn-default btn-default--primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
								</div>
							<?php endif ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-services__row-2">
			<div class="container">

				<?php if ($services): ?>
					<div class="services">

						<?php $wrap_counter = 1; ?>

						<?php foreach($services as $index => $post): 

							switch ($index) {
								case 0:
								$data_start_y = 200;
								$data_end_y = 0;
								break;
								case 1:
								$data_start_y = 50;
								$data_end_y = -186;
								break;
								case 3:
								$data_start_y = 200;
								$data_end_y = 0;
								break;
								
								default:
								break;
							}

							$is_wrap_start = $index == 0 || $index == 1 || $index == 3;
							$is_wrap_end = $index == 0 || $index == 2 || $index == 4;
							?>

							<?php if ($is_wrap_start): ?>
								<div class="services__col services__col-<?= $wrap_counter ?>" data-scroll-parallax data-start-y="<?= $data_start_y ?>" data-end-y="<?= $data_end_y ?>">
									<?php 
									$wrap_counter++;
								endif;
								?>

								<?php 
								global $post;
								setup_postdata($post); 
								?>

								<?php get_template_part('parts/content', 'service') ?>

								<?php if ($is_wrap_end): ?>
								</div>
							<?php endif ?>

						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					</div>
				<?php endif ?>
				
				<?php if ($link): ?>
					<div class="home-services__btn-mob">
						<a href="<?= $link['url'] ?>" class="btn-default btn-default--primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>