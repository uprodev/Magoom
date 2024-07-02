<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="case-studies-single-intro">
		<div class="content-two-columns content-two-columns--media-bottom-on-mob">
			<div class="container case-studies-single-intro__inner">
				<div class="content-two-columns__body">

					<?php if ($image): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="case-studies-single-intro__img ibg">
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</div>
							</div>
						</div>
					<?php endif ?>

					<div class="content-two-columns__text-content">
						<div class="case-studies-single-intro__body">

							<div class="case-studies-single-intro__info">

								<?php if ($field = get_field('client_logo')): ?>
									<div class="case-studies-single-intro__info-left">
										<div class="case-studies-single-intro__info-title"><?php _e('CLIENT:', 'Magoom') ?></div>
										<div class="case-studies-single-intro__logo">
											<?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
												<img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
											<?php else: ?>
												<?= wp_get_attachment_image($field['ID'], 'full') ?>
											<?php endif ?>
										</div>
									</div>
								<?php endif ?>

								<?php if ($field = get_field('industry')): ?>
									<div class="case-studies-single-intro__info-right">
										<div class="case-studies-single-intro__info-title"><?php _e('INDUSTRY:', 'Magoom') ?></div>
										<div class="case-studies-single-intro__info-text"><?= $field ?></div>
									</div>
								<?php endif ?>
								
							</div>

							<div class="case-studies-single-intro__title"><?php the_title() ?></div>

							<?php if ($text): ?>
								<div class="case-studies-single-intro__text text-content last-no-margin"><?= $text ?></div>
							<?php endif ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>