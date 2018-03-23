<?php get_template_part('templates/page', 'header'); ?>

<?php //get_search_form(); ?>

<div class="alert alert-warning">
	<h4>This is one of those 404 errors.</h4>
	<p>
  <?php _e('We could not find the page you are looking for.', 'roots'); ?>
  <?php _e('Please try searching or <a href="/sitemap/">check the sitemap</a>.', 'roots'); ?>
	</p>
	<p>
	<?php _e('If you have questions or believe you are seeing this page in error, <a href="/contact/">please contact us</a>.', 'roots'); ?>
	</p>
  <?php //_e('Sorry, but the page you were trying to view doesn’t exist.', 'roots'); ?>
</div>
<!--
<p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'roots'); ?></li>
  <li><?php _e('an out-of-date link', 'roots'); ?></li>
</ul>
-->
<?php get_search_form(); ?>

<p>&nbsp;</p>

<p>
<img style="margin:auto;" class="alignnone img-responsive img-rounded" src="/assets/img/jpg/gh.jpg">
</p>