<?php
/**
 * Template Name: Archive
 * Description: Archive
 * The template for displaying archive pages
 * @package Malu theme
 */

get_header(); ?>

	archive

	<?php locate_template( 'template-parts/loop.php', true ); ?>
	<?php locate_template( 'template-parts/pagination.php', true ); ?>

	<?php

get_footer();