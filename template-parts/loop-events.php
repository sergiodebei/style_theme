<?php 

	$today = date('Ymd');

	$meta_query = array (
	    'post_type' => 'event',
	    'meta_query' => array(
			// array(
		 //        'key'		=> 'start_date',
		 //        'compare'	=> '>=',
		 //        'type' => 'DATE',
		 //        'value'		=> $today,
		 //    ),
		     array(
		        'key'		=> 'end_date',
		        'compare'	=> '>=',
		        'value'		=> $today,
		    )
	    ),
	);

	$query_args = array(
		'post_type' => 'event',
		'posts_per_page' => 5,
		'order' => 'ASC',
		'meta_query' => $meta_query
	);

	$the_query = new WP_Query( $query_args ); ?>

	<div class="row fairs">
		<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'event' );?>

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
