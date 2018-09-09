<link href="<?php echo get_bloginfo('template_directory'); ?>/extlink.php" rel="stylesheet">
<div class="blog-post">
	<h2 class="blog-post-title"><a href="#"><?php the_title(); ?></a></h2>
	<div class="cover">
		<?php
		the_post_thumbnail('large');
		$value = rwmb_meta( 'trama' );
		echo $value;
		$attachment_id = attachment_url_to_postid( $image_url );
		echo $attachment_id;
		?>
	</div>
	<p style="text-align: center;  word-wrap: break-word;">
		<?php
		?>
	</p>
	</div><!-- /.blog-post -->