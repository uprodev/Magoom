<div class="services-card"<?php if($field = get_field('card_color')) echo ' style="background-color: ' . $field . '"' ?>>

	<?php if ($field = get_field('card_icon')): ?>
		<div class="services-card__icon">
			<?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
				<img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
			<?php else: ?>
				<?= wp_get_attachment_image($field['ID'], 'full') ?>
			<?php endif ?>
		</div>
	<?php endif ?>
	
	<div class="services-card__title title-2-subtitle"><?php the_title() ?></div>

	<?php if (has_excerpt()): ?>
		<div class="services-card__text text-content last-no-margin"><?php the_excerpt() ?></div>
	<?php endif ?>
	
	<a href="<?php the_permalink() ?>" class="services-card__btn btn-default btn-default--secondary">
		Learn more
	</a>
</div>