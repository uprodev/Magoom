<?php get_header(); ?>

<section class="text-banner bg-purple">
	<div class="container">

		<?php if(have_rows('titles_404', 'option')): ?>

			<div class="text-banner__title title-2">

				<?php if ($field = get_field('icon_404', 'option')): ?>
					<?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
						<img src="<?= $field['url'] ?>" class="title-icon" alt="<?= $field['alt'] ?>">
					<?php else: ?>
						<?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'title-icon')) ?>
					<?php endif ?>
				<?php endif ?>


				<?php while(have_rows('titles_404', 'option')): the_row() ?>

					<?php if ($field = get_sub_field('text')): ?>
						<span class="row-<?= get_row_index() ?>"><?= $field ?></span>
					<?php endif ?>

				<?php endwhile ?>

			</div>

		<?php endif ?>

		<?php if ($field = get_field('subtitle_404', 'option')): ?>
			<div class="text-banner__subtitle title-2-subtitle"><?= $field ?></div>
		<?php endif ?>

		<?php if ($field = get_field('text_404', 'option')): ?>
			<div class="text-banner__text text-content last-no-margin"><?= $field ?></div>
		<?php endif ?>

	</div>
</section>

<?php get_footer(); ?>