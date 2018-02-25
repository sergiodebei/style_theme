<?php
/**
 * Template part for displaying posts.
 * @package Malu theme
 */
?>

<article class="single_article" id="post-<?php the_ID(); ?>">
    <div class="sa_visual" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
    </div>
    <div class="sa_content">
        <div class="sa_title">
        	<p><?php the_title(); ?></p>
        </div>
        <div class="sa_details">
            <span><?php echo get_the_date('d/m/Y'); ?></span> - <a href="<?php echo get_field( "file" ); ?>" download>Download full article</a>
        </div>
        <div class="sa_text">
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
</article><!-- #post-## -->
