<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="companies space-top overflow-hidden">
		<div class="home-intro__carousel">
			<div class="container">
				<div class="home-intro__carousel-head">

					<?php if ($title): ?>
						<h2 class="title-2-subtitle"><?= $title ?></h2>
					<?php endif ?>

					<?php if ($text): ?>
						<div class="home-intro__carousel-head-text last-no-margin text-content"><?= $text ?></div>
					<?php endif ?>

				</div>
			</div>

			<?php if($gallery): ?>

				<div class="home-intro__carousel-logos" data-slider="carousel-logos">
					<div class="marquee">
						<div class="marquee-content">

							<?php foreach($gallery as $image): ?>

								<div class="swiper-slide">
									<?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
										<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									<?php endif ?>
								</div>

							<?php endforeach; ?>

						</div>
						<div class="marquee-content">

							<?php foreach($gallery as $image): ?>

								<div class="swiper-slide">
									<?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
										<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									<?php endif ?>
								</div>

							<?php endforeach; ?>

						</div>
					</div>
				</div>

			<?php endif; ?>

		</div>
	</section>

	<?php endif; ?>