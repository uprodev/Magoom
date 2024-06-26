<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="services-single-primary-section bg-blue-light">
		<div class="content-two-columns content-two-columns--media-bottom-on-mob">
			<div class="container services-single-primary-section__inner">
				<div class="content-two-columns__body">

					<?php if ($right): ?>
						<div class="content-two-columns__media">
							<div class="services-single-primary-section__right">
								<div class="advantages-card">

									<?php if ($right['items']): ?>
										<?php foreach ($right['items'] as $index => $item): ?>
											<?php if ($item['text']): ?>
												<div class="advantages-card__decor-word advantages-card__decor-word-<?= $index + 1 ?>"<?php if($item['color']) echo ' style="background-color: ' . $item['color'] . '"' ?>><?= $item['text'] ?></div>
											<?php endif ?>
										<?php endforeach ?>
									<?php endif ?>
									
									<div class="advantages-card__body">

										<?php if ($right['icon']): ?>
											<div class="advantages-card__icon">
												<?php if (pathinfo($right['icon']['url'])['extension'] == 'svg'): ?>
													<img src="<?= $right['icon']['url'] ?>" alt="<?= $right['icon']['alt'] ?>">
												<?php else: ?>
													<?= wp_get_attachment_image($right['icon']['ID'], 'full') ?>
												<?php endif ?>
											</div>
										<?php endif ?>
										
										<?php if ($right['text']): ?>
											<div class="advantages-card__text"><?= $right['text'] ?></div>
										<?php endif ?>
										
									</div>
								</div>
							</div>
						</div>
					<?php endif ?>
					
					<?php if ($left): ?>
						<div class="content-two-columns__text-content">

							<?php if ($left['titles']): ?>
								<div class="content-two-columns__text-content-title-slot">
									<div class="services-single-primary-section__title title-2">

										<?php foreach ($left['titles'] as $index => $item): ?>
											<?php if ($item['text']): ?>
												<span class="row-<?= $index + 1 ?>"<?php if($index > 0) echo ' data-css-variable-width="--w" data-parent=".services-single-primary-section__title"' ?>><?= $item['text'] ?></span>
											<?php endif ?>
										<?php endforeach ?>

									</div>
								</div>
							<?php endif ?>

							<?php if ($left['subtitle']): ?>
								<div class="content-two-columns__text-content-sub-title-slot">
									<h2 class="services-single-primary-section__subtitle title-2-subtitle"><?= $left['subtitle'] ?></h2>
								</div>
							<?php endif ?>

							<?php if ($left['text']): ?>
								<div class="content-two-columns__text-content-text-slot">
									<div class="text-content last-no-margin"><?= $left['text'] ?></div>
								</div>
							<?php endif ?>

						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>