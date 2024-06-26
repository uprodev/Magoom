<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="about-us-intro">
		<div class="content-two-columns content-two-columns--media-bottom-on-mob">
			<div class="container about-us-intro__inner">
				<div class="content-two-columns__body">

					<?php if ($image): ?>
						<div class="content-two-columns__media">
							<div class="content-two-columns__media-inner">
								<div class="about-us-intro__img ibg" data-css-variable-height="--about-us-img-height">
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</div>
							</div>
						</div>
					<?php endif ?>

					<div class="content-two-columns__text-content">
						<div class="content-two-columns__text-content-title-slot">
							<div class="about-us-intro__title title-2-mob-lg">

								<?php if ($icon): ?>
									<?php if (pathinfo($icon['url'])['extension'] == 'svg'): ?>
										<img src="<?= $icon['url'] ?>" class="title-icon-1" alt="<?= $icon['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'title-icon-1')) ?>
									<?php endif ?>
								<?php endif ?>

								<?php if ($titles): ?>
									<?php foreach ($titles as $index => $item): ?>
										<?php if ($item['text']): ?>
											<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
										<?php endif ?>
									<?php endforeach ?>
								<?php endif ?>
								
							</div>
						</div>

						<?php if ($subtitle): ?>
							<div class="content-two-columns__text-content-sub-title-slot">
								<h2 class="title-2-subtitle uppercase"><?= $subtitle ?></h2>
							</div>
						<?php endif ?>

						<?php if ($text): ?>
							<div class="content-two-columns__text-content-text-slot">
								<div class="text-content last-no-margin"><?= $text ?></div>
							</div>
						<?php endif ?>

						<?php if ($link): ?>
							<div class="about-us-intro__btn content-two-columns__text-content-btn-slot">
								<a href="<?= $link['url'] ?>" class="btn-default btn-default--secondary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
							</div>
						<?php endif ?>

					</div>
				</div>

				<?php if ($bottom): ?>
					<div class="about-us-intro__card about-us-intro-card">

						<?php if ($bottom['icon']): ?>
							<?php if (pathinfo($bottom['icon']['url'])['extension'] == 'svg'): ?>
								<img src="<?= $bottom['icon']['url'] ?>" class="decor-cion" alt="<?= $bottom['icon']['alt'] ?>">
							<?php else: ?>
								<?= wp_get_attachment_image($bottom['icon']['ID'], 'full', false, array('class' => 'decor-cion')) ?>
							<?php endif ?>
						<?php endif ?>

						<?php if ($bottom['text']): ?>
							<div class="about-us-intro-card__head title-2-subtitle"><?= $bottom['text'] ?></div>
						<?php endif ?>
						
						<div class="about-us-intro-card__body">

							<?php if ($bottom['photo']): ?>
								<div class="about-us-intro-card__avatar ibg">
									<?php if (pathinfo($bottom['photo']['url'])['extension'] == 'svg'): ?>
										<img src="<?= $bottom['photo']['url'] ?>" class="decor-cion" alt="<?= $bottom['photo']['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($bottom['photo']['ID'], 'full') ?>
									<?php endif ?>
								</div>
							<?php endif ?>

							<div class="about-us-intro-card__content">

								<?php if ($bottom['name']): ?>
									<div class="about-us-intro-card__name title-3"><?= $bottom['name'] ?></div>
								<?php endif ?>

								<?php if ($bottom['position']): ?>
									<div class="about-us-intro-card__position"><?= $bottom['position'] ?></div>
								<?php endif ?>
								
							</div>
						</div>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>