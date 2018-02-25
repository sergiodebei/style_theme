<?php
/**
 * Template part for displaying results in search pages
 * @package Malu theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php 
			if ( has_excerpt() ) {
			   the_excerpt();
			} else {
			    echo get_first_paragraph();
			}
		?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
