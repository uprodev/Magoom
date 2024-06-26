<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if(have_rows('items_t', 'option')): ?>

		<section class="home-reviews reviews bg-blue-light">
			<div class="container">

				<?php if ($field = get_field('title_t', 'option')): ?>
					<h2 class="reviews__title title-2"><?= $field ?></h2>
				<?php endif ?>
				
				<?php if ($field = get_field('text_t', 'option')): ?>
					<div class="reviews__text text-content last-no-margin"><?= $field ?></div>
				<?php endif ?>
				
				<div class="reviews__carousel" data-slider="reviews-carousel">
					<div class="swiper">
						<div class="swiper-wrapper">

							<?php while(have_rows('items_t', 'option')): the_row() ?>

								<div class="swiper-slide">
									<div class="review-card"<?php if($field = get_sub_field('card_color')) echo ' style="background-color: ' . $field . ';"' ?>>

										<?php if ($field = get_sub_field('logo')): ?>
											<div class="review-card__logo">
												<?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
													<img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
												<?php else: ?>
													<?= wp_get_attachment_image($field['ID'], 'full') ?>
												<?php endif ?>
											</div>
										<?php endif ?>
										
										<div class="review-card__author">

											<?php if ($field = get_sub_field('photo')): ?>
												<div class="review-card__author-avatar">
													<?= wp_get_attachment_image($field['ID'], 'full') ?>
												</div>
											<?php endif ?>

											<div class="review-card__author-text">

												<?php if ($field = get_sub_field('name')): ?>
													<div class="review-card__author-name title-3"><?= $field ?></div>
												<?php endif ?>

												<?php if ($field = get_sub_field('position')): ?>
													<?= add_class_content($field, 'review-card__author-position') ?>
												<?php endif ?>

											</div>
										</div>

										<?php if ($field = get_sub_field('text')): ?>
											<div class="review-card__text text-content last-no-margin"><?= $field ?></div>
										<?php endif ?>

									</div>
								</div>

							<?php endwhile ?>

						</div>
					</div>
					<div class="reviews__carousel-nav-buttons carousel-buttons">
						<button class="carousel-btn btn-left icon-arrow-left"></button>
						<button class="carousel-btn btn-right icon-arrow-right"></button>
					</div>
				</div>
			</div>
		</section>

	<?php endif ?>

	<?php endif; ?>