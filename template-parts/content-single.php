<?php
/**
 * The template part for displaying single posts
 * @package Malu theme
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_title(); ?>
	<?php echo $post->post_content; ?>

</div><!-- #post-## -->

<a href="javascript:history.go(-1)">Back</a>
