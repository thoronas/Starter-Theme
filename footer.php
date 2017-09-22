<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crew_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info row">
			<div class="social-sharing columns-12">
				<?php if(have_rows('social_media', 'options')): ?>
					<ul class="social-media">
					<?php while(have_rows('social_media', 'options')): the_row(); ?>

						<li>
							<?php $link = get_sub_field('link'); ?>
							<?php $logo = get_sub_field('social_media');  ?>
							<a href="<?php echo $link; ?>" target="_blank"><i class="fa fa-<?php echo $logo; ?>"  aria-hidden="true"></i></a>

						</li>

					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
