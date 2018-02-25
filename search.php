<?php
/**
 * The template for displaying search results pages
 * Template Name: Search
 * Description: Search 
 * @package Malu theme
 */

get_header(); ?>

	<?php
		if ( have_posts() ) : ?>

			<h1><?php printf( esc_html__( 'Search results: %s', 'malutheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				 get_template_part( 'template-parts/content', 'search' );

			endwhile;
			

			get_search_form();

			the_widget( 'WP_Widget_Recent_Posts' );

		else :
			
			get_template_part( 'template-parts/content', 'none' );

		endif;
	?>

<?php
get_footer();
