<h4 class="byline author vcard"><?php echo __('~', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></h4>
<time class="published text-warning" datetime="<?php echo get_the_time('c'); ?>"><small>Posted <?php echo get_the_date(); ?></small></time>
<br>
<small class="text-muted widget_tag_cloud">
	<?php the_tags( 'Tags: ', ', ', '' ); ?>
</small>