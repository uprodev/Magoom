<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-intro" data-home-intro>
		<div class="home-intro__inner">

			<?php if ($row_1): ?>
				<div class="home-intro__row-1">
					<div class="container">
						<div class="home-intro__title home-intro__title--desk">

							<?php foreach ($row_1 as $index => $item): ?>
								<?php
								if ($item['image']) {
									$image_class = 'title-icon-' . strval($index + 1);
									if (pathinfo($item['image']['url'])['extension'] == 'svg'): 
										?>
										<img src="<?= $item['image']['url'] ?>" class="<?= $image_class ?>" alt="<?= $item['image']['alt'] ?>">
										<?php 
									else: 
										wp_get_attachment_image($item['image']['ID'], 'full', false, array('class' => $image_class));
									endif;
								}
								?>
							<?php endforeach ?>

							<?php foreach ($row_1 as $index => $item): ?>
								<?php if ($item['text']): ?>
									<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
								<?php endif ?>
							<?php endforeach ?>

						</div>
						<div class="home-intro__title home-intro__title--mob">
							
							<?php foreach ($row_1 as $index => $item): ?>
								<?php
								if ($item['image']) {
									$image_class = 'title-icon-' . strval($index + 1);
									if (pathinfo($item['image']['url'])['extension'] == 'svg'): 
										?>
										<img src="<?= $item['image']['url'] ?>" class="<?= $image_class ?>" alt="<?= $item['image']['alt'] ?>">
										<?php 
									else: 
										wp_get_attachment_image($item['image']['ID'], 'full', false, array('class' => $image_class));
									endif;
								}
								?>
							<?php endforeach ?>

							<?php foreach ($row_1 as $index => $item): ?>
								<?php if ($item['text']): ?>
									<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
								<?php endif ?>
							<?php endforeach ?>

						</div>
					</div>
				</div>
			<?php endif ?>
			
			<?php if ($row_2): ?>
				<div class="home-intro__row-2">
					<div class="home-intro__carousel">
						<div class="container">
							<div class="home-intro__carousel-head">

								<?php if ($row_2['title']): ?>
									<h2 class="title-2-subtitle"><?= $row_2['title'] ?></h2>
								<?php endif ?>

								<?php if ($row_2['text']): ?>
									<div class="home-intro__carousel-head-text last-no-margin text-content">
										<p><?= $row_2['text'] ?></p>
									</div>
								<?php endif ?>

							</div>
						</div>

						<?php if($row_2['gallery']): ?>

							<div class="home-intro__carousel-logos" data-slider="carousel-logos">
								<div class="marquee">
									<div class="marquee-content">

										<?php foreach($row_2['gallery'] as $image): ?>

											<div class="swiper-slide">
												<?= wp_get_attachment_image($image['ID'], 'full') ?>
											</div>

										<?php endforeach; ?>

									</div>
									<div class="marquee-content">

										<?php foreach($row_2['gallery'] as $image): ?>

											<div class="swiper-slide">
												<?= wp_get_attachment_image($image['ID'], 'full') ?>
											</div>

										<?php endforeach; ?>

									</div>
								</div>
							</div>

						<?php endif; ?>

					</div>
				</div>
			<?php endif ?>

			<?php if ($link): ?>
				<div class="container">
					<div class="home-intro__btn-mob">
						<a href="<?= $link['url'] ?>" class="btn-default btn-default--secondary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>