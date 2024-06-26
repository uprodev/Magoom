<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="cta">
		<div class="content-two-columns">
			<div class="container cta__inner">
				<div class="content-two-columns__body">

					<?php if ($field = get_field('image', 'option')): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="cta__img">
									<?= wp_get_attachment_image($field['ID'], 'full') ?>
								</div>
							</div>
						</div>
					<?php endif ?>

					<div class="content-two-columns__text-content">
						<div class="content-two-columns__text-content-title-slot">
							<div class="cta__title title-2">

								<?php if(have_rows('titles_mobile_cta', 'option')): ?>

									<div class="cta__title-mob">

										<?php while(have_rows('titles_mobile_cta', 'option')): the_row() ?>

											<?php if ($field = get_sub_field('text')): ?>
												<span class="row-<?= get_row_index() ?>"><?= $field ?></span>
											<?php endif ?>

										<?php endwhile ?>

									</div>

								<?php endif ?>

								<?php if(have_rows('titles_desktop_cta', 'option')): ?>

									<div class="cta__title-desk">

										<?php while(have_rows('titles_desktop_cta', 'option')): the_row() ?>

											<?php if ($field = get_sub_field('text')): ?>
												<span class="row-<?= get_row_index() ?>"><?= $field ?></span>
											<?php endif ?>

										<?php endwhile ?>

									</div>

								<?php endif ?>

							</div>
						</div>

						<?php if ($field = get_field('description', 'option')): ?>
							<div class="content-two-columns__text-content-text-slot">
								<div class="text-content last-no-margin"><?= $field ?></div>
							</div>
						<?php endif ?>

						<?php if ($field = get_field('button_cta', 'option')): ?>
							<div class="cta__btn content-two-columns__text-content-btn-slot">
								<a href="<?= $field['url'] ?>" class="btn-default btn-default--primary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
							</div>
						<?php endif ?>

					</div>
				</div>

				<?php if ($field = get_field('icon', 'option')): ?>
					<div class="cta__decor">
						<?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
							<img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
						<?php else: ?>
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						<?php endif ?>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>