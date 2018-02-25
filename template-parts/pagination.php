<!-- pagination -->
<div class="navigation">
	<div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
	<div class="alignright"><?php next_posts_link('More &raquo;') ?></div>
</div>

<?php echo paginate_links( '' ); ?>
<!-- /pagination -->