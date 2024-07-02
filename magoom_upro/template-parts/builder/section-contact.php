<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="contacts">
		<div class="container">
			<div class="contacts__body">
				<div class="contacts__col-1">
					<div class="contacts__title title-2-mob-lg">

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
				<div class="contacts__col-2">

					<?php if ($form): ?>
						<?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>