<div class="share-wrapper">
	<span class="social-media-label">Share This Article</span>
	<ul class="social-share">

		<li>
			<a class="fa fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target=_"blank"></a>
		</li>

		<li>
			<a class="fa fa-twitter" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target=_"blank"></a>
		</li>

		<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
			$thumb_url = $thumb_url_array[0];
		?>

		<li>
			<a class="fa fa-pinterest" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $thumb_url; ?>&description=<?php the_permalink(); ?>" target="_blank"></a>
		</li>
	</ul>
</div>
