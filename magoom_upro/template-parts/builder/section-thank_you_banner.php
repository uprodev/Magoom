<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-banner bg-blue-light">
		<div class="container">

			<?php if ($titles): ?>
				<div class="text-banner__title title-2">

					<?php if ($icon): ?>
						<?php if (pathinfo($icon['url'])['extension'] == 'svg'): ?>
							<img src="<?= $icon['url'] ?>" class="title-icon" alt="<?= $icon['alt'] ?>">
						<?php else: ?>
							<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'title-icon')) ?>
						<?php endif ?>
					<?php endif ?>

					<?php foreach ($titles as $index => $item): ?>
						<?php if ($item['text']): ?>
							<span class="row-<?= $index + 1 ?>"><?= $item['text'] ?></span>
						<?php endif ?>
					<?php endforeach ?>

				</div>
			<?php endif ?>

			<?php if ($subtitle): ?>
				<div class="text-banner__subtitle title-2-subtitle"><?= $subtitle ?></div>
			<?php endif ?>

			<?php if ($text): ?>
				<div class="text-banner__text text-content last-no-margin"><?= $text ?></div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>