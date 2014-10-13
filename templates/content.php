<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
  	<aside class="col-sm-4 col-md-push-8">
  		<div class="panel panel-primary">
  			<div class="panel-heading">
	  			<h4 class="panel-title">
	  				Posted in
	  			</h4>
  			</div>
  			<div class="panel-body">
  				<ul class="nav nav-list nav-stacked">
  				<?php
			  	$categories = get_the_category($post->ID);
					if ( is_array($categories)) { 
						foreach ( $categories as $category ) {
							echo '<li>'.$category->name.'</li>';
						}
					}		
					?>
					</ul>
  			</div>
	  	</div>
  	</aside>
    <?php the_excerpt(); ?>
  </div>
</article>
