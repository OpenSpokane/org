<?php 
$spl_post_is_news_only = FALSE;
$categories = get_the_category($post->ID); 
foreach ( $categories as $category ) {
	if ( 'library-news' == $category->slug && 1 == count($categories) ) {
		$spl_post_is_news_only = TRUE;
	}
}
?>
<?php if ( FALSE === $spl_post_is_news_only ) :; ?>
<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
  	<div class="row">
	  	<div class="col-md-3 col-md-push-9">
		  	<aside>
  				<ul class="nav nav-pills">
  				<?php
			  	//$categories = get_the_category($post->ID);
					if ( is_array($categories)) { 
						foreach ( $categories as $category ) {
							if ( 'library-news' != $category->slug ) {
								echo '<li>';
								echo '<a class="" href="' . get_category_link($category->cat_ID) . '">';
								echo '<small class="text-success">';
								echo '<small class="glyphicon glyphicon-pushpin"></small> ';
								echo '<b>'.$category->name.'</b>';
								echo '</small>';
								echo '</a>';
								echo '</li>';
							}
						}
					}		
					?>
					</ul>
		  	</aside>
		  </div><!-- /.col -->
		  <div class="col-md-9 col-md-pull-3">
	    	<?php //the_excerpt(); ?>
	    	<?php the_content(); ?> 
	  	</div><!-- /.col -->
	  </div><!-- /.row -->
  </div>
  <?php get_template_part('templates/entry-meta'); ?>

  <?php
  $categories = get_the_category();
  //echo '<pre>';
	//print_r($categories);
	//echo '</pre>';
	//foreach ( $categories as $category ) { 
	  //echo '<img src="' . esc_url( 'http://example.com/images/' . intval( $category->term_id ) . '.jpg' ) . '" alt="' . esc_attr( $category->name ) . '" />'; 
	//}
	?>
  <hr>
</article>
<?php endif; ?>
