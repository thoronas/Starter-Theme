<div class="post-nav text-center">
	<div class="columns-4 prev-post">
	<?php previous_post_link( '%link',__('Prev Post'),  false); ?>
	</div>
	<div class="columns-4 <?php echo (get_previous_posts_link()?"":"left-align") ?>">
		<?php
			if( is_singular( 'give-back') ){
		?>
		<a href="<?php echo get_field('giving_back_landing_page', 'options'); ?>" class="blog-main-link"><?php _e('Back to Main', 'gramercy'); ?></a>

		<?php
			} else {
		?>
		<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="blog-main-link"><?php _e('Back to Main', 'gramercy'); ?></a>

		<?php
			}
		?>
	</div>
	<div class="columns-4 next-post">
	<?php next_post_link( '%link', __('Next Post','gramercy'),  false ); ?>
	</div>
</div>
