<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="banner-with-review-card space-top">

		<?php if ($image): ?>
			<div class="banner-with-review-card__img ibg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>

		<?php if ($card): ?>
			<div class="container banner-with-review-card__body">
				<div class="banner-review-card">

					<?php if ($card['icon_mobile']): ?>
						<?php if (pathinfo($card['icon_mobile']['url'])['extension'] == 'svg'): ?>
							<img src="<?= $card['icon_mobile']['url'] ?>" class="decor-icon-1" alt="<?= $card['icon_mobile']['alt'] ?>">
						<?php else: ?>
							<?= wp_get_attachment_image($card['icon_mobile']['ID'], 'full', false, array('class' => 'decor-icon-1')) ?>
						<?php endif ?>
					<?php endif ?>

					<?php if ($card['icon_desktop']): ?>
						<?php if (pathinfo($card['icon_desktop']['url'])['extension'] == 'svg'): ?>
							<img src="<?= $card['icon_desktop']['url'] ?>" class="decor-icon-2" alt="<?= $card['icon_desktop']['alt'] ?>">
						<?php else: ?>
							<?= wp_get_attachment_image($card['icon_desktop']['ID'], 'full', false, array('class' => 'decor-icon-2')) ?>
						<?php endif ?>
					<?php endif ?>

					<?php if ($card['text']): ?>
						<div class="banner-review-card__head"><?= $card['text'] ?></div>
					<?php endif ?>
					
					<div class="banner-review-card__body">

						<?php if ($card['photo']): ?>
							<div class="banner-review-card__avatar ibg">
								<?= wp_get_attachment_image($card['photo']['ID'], 'full') ?>
							</div>
						<?php endif ?>
						
						<div class="banner-review-card__content">

							<?php if ($card['name']): ?>
								<div class="banner-review-card__name title-3"><?= $card['name'] ?></div>
							<?php endif ?>

							<?php if ($card['position']): ?>
								<div class="banner-review-card__position"><?= $card['position'] ?></div>
							<?php endif ?>
							
						</div>
					</div>
				</div>
			</div>
		<?php endif ?>

	</section>

	<?php endif; ?>