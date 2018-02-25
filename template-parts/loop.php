<?php 

	$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

	$query_args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$the_query = new WP_Query( $query_args ); ?>

	<div class="row articles">
		<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );?>

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
