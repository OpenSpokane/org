<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
  	<div class="row">
	  	<div class="col-md-4 col-md-push-8">
		  	<aside>
  				<ul class="nav nav-pills">
  				<?php
			  	$categories = get_the_category($post->ID);
					if ( is_array($categories)) { 
						foreach ( $categories as $category ) {
							echo '<li>';
							echo '<a class="" href="' . get_category_link($category->cat_ID) . '">';
							echo '<small>';
							echo '<i class="glyphicon glyphicon-pushpin text-success"></i> ';
							echo $category->name;
							echo '</small>';
							echo '</a>';
							echo '</li>';
						}
					}		
					?>
					</ul>
		  	</aside>
		  </div><!-- /.col -->
		  <div class="col-md-8 col-md-pull-4">
	    	<?php //the_excerpt(); ?>
	    	<?php the_content(); ?>
	    	<?php the_tags( 'Tags: ', ', ', '' ); ?> 
	  	</div>
	  </div><!-- /.col -->
  </div><!-- /.row -->
  <?php get_template_part('templates/entry-meta'); ?>
  <hr>
</article>
