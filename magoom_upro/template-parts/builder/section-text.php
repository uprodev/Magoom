<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-content-in-color-box bg-blue-light">
		<div class="container">
			<div class="text-content-in-color-box__title-slot">
				<div class="text-content-in-color-box__title title-2">

					<?php if ($icon): ?>
						<?php if (pathinfo($icon['url'])['extension'] == 'svg'): ?>
							<img src="<?= $icon['url'] ?>" class="title-icon-1" alt="<?= $icon['alt'] ?>">
						<?php else: ?>
							<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'title-icon-1')) ?>
						<?php endif ?>
					<?php endif ?>

					<?php if ($titles_desktop): ?>
						<div class="text-content-in-color-box__title-desk">

							<?php foreach ($titles_desktop as $index => $item): ?>
								<?php if ($item['text']): ?>
									<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
								<?php endif ?>
							<?php endforeach ?>

						</div>
					<?php endif ?>

					<?php if ($titles_mobile): ?>
						<div class="text-content-in-color-box__title-mob">

							<?php foreach ($titles_mobile as $index => $item): ?>
								<?php if ($item['text']): ?>
									<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
								<?php endif ?>
							<?php endforeach ?>

						</div>
					<?php endif ?>

				</div>
			</div>

			<?php if ($texts): ?>
				<div class="text-content-in-color-box__text">

					<?php foreach ($texts as $index => $item): ?>
						<?php if ($item['text']): ?>
							<div class="text-content-in-color-box__text-col-<?= $index + 1 ?> text-content last-no-margin"><?= $item['text'] ?></div>
						<?php endif ?>
					<?php endforeach ?>
					
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>