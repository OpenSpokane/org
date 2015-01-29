<?php
/*
Template Name: Beta Home Page
*/
?>


<!--
<div class="row">
  <div class="col-md-6">
    <?php //echo do_shortcode('[spl_widget search-catalog]'); ?>
  </div>
  <div class="col-md-6">
    <div class="hidden-xs">
      <?php //echo do_shortcode('[spl_widget login-form]'); ?>
    </div>
  </div>
</div>
-->

<?php //get_template_part('templates/content', 'page'); ?>

<?php 
// conditionally display page content
$spl_home = $post->post_content;
$spl_home = trim($spl_home);
if ( !empty($spl_home) ): ;
?>
<div class="spl-hero-panel spl-hero-danger" style="margin-bottom:10px;">
  <h3 class="text-center">
    <span class="pull-left"><i class="glyphicon glyphicon-bullhorn"></i></span>
    Please read <small>important library news</small>
  </h3>
</div>
<?php echo $post->post_content; ?>
<hr>
<?php endif; ?>

<!--
<div class="visible-sm">
  <div class="navbar navbar-inverse" style="margin-top: 0px; margin-bottom: 0px; background:transparent; border:none;">
    <span class="text-muted">
      <b>Tip:</b> use the toggle (upper right) to browse our website.
    </span>
    <button type="button" style="float:none; margin-top:0; margin-right:0;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>     
  </div>
</div>
-->

<div class="row visible-xs">
  <div class="col-xs-12">
    <div class="list-group">
      <a href="/open/" class="list-group-item">
        <span class="text-primary">Is the library open?</span> <small>&rarr;</small>
      </a>
      <a href="/catalog/" class="list-group-item">
        <span class="text-primary">Library catalog</span> <small>&rarr;</small>
      </a>
      <a href="/login/" class="list-group-item">
        <span class="text-primary">My account</span> <small>&rarr;</small>
      </a>
      <a href="/storytime/" class="list-group-item">
        <span class="text-primary">Storytime schedules</span> <small>&rarr;</small>
      </a>
      <a href="/calendar/" class="list-group-item">
        <span class="text-primary">Check events calendar</span> <small>&rarr;</small>
      </a>
      <a href="/digital/" class="list-group-item">
        <span class="text-primary">Digital branch</span> <small>&rarr;</small>
      </a>
      <a href="/apps/" class="list-group-item">
        <span class="text-primary">Mobile apps</span> <small>&rarr;</small>
      </a>
      <a href="/connect/" class="list-group-item">
        <span class="text-primary">Contact the library</span> <small>&rarr;</small>
      </a>
      <a href="/new/" class="list-group-item">
        <span class="text-primary">Browse new arrivals</span> <small>&rarr;</small>
      </a>
      <a href="/browse/" class="list-group-item">
        <span class="text-primary">Staff picks &amp; popular titles</span> <small>&rarr;</small>
      </a>
      <a href="/news/" class="list-group-item">
        <span class="text-primary">Read library news</span> <small>&rarr;</small>
      </a>
    </div><!-- /.list-group -->
  </div><!-- /.col -->
</div><!-- /.row -->



<div class="row"> 
  
  <div class=" col-sm-12">
    <?php echo do_shortcode('[spl_carousel_beta auto random shuffle news posts promo=learning,digital slug=carousel title="Read. Learn. Discover."]'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->


<div class="spl-hero-panel spl-hero-primary spl-hero-digital">


  <div class="">

    <a class="btn btn-lg btn-block btn-link" style="color:#fff">
      <i class="glyphicon glyphicon-cloud-download"></i>
      Visit the <b>Digital Branch</b> <span class="hidden-xs">to <b>download</b> eBooks, music, &amp; more</span>
    </a>

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <a style="border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-60">
        <i class="glyphicon glyphicon-phone"></i>
        <br>
        <b>eBooks</b>
      </a>
      <a style="border:none;" class="btn btn-primary spl-blue-tint-50">
        <i class="glyphicon glyphicon-music"></i>
        <br>
        <b>Music</b>
      </a>
      <a style="border:none;" class="btn btn-primary spl-blue-tint-40">
        <i class="glyphicon glyphicon-headphones"></i>
        <br>
        <b>Audio Books</b>
      </a>
      <a style="border:none; border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-30">
        <i class="glyphicon glyphicon-book"></i>
        <br>
        <b>Magazines</b>
      </a>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->



<div class="row">

  <div class="col-md-5">

    <div class="spl-hero-panel spl-hero-warning">
      <h4 class="text-center">
        <i class="glyphicon glyphicon-calendar"></i>
        On our calendar
      </h4>
    </div>

    <?php echo do_shortcode('[spl_widget calendar-view widget-beta limit=5]'); ?>
    <!--
    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>
    -->    
    <p>
      <a class="btn btn-block btn-warning" href="/calendar/">
        <i class="glyphicon glyphicon-calendar"></i>
        <b>Coming up soon</b> <small>&rarr;</small>
      </a>
    </p>
    
  </div><!-- /.col -->
  
  <div class="col-md-7">
    <div class="hidden-xs">
      <div class="spl-hero-panel spl-hero-alt">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-thumbs-up"></i>
          What we're reading
        </h4>
      </div>
      <!--
      <p>
        <a class="btn btn-block btn-success" href="/browse/">
        <i class="glyphicon glyphicon-book"></i> 
        <b>What we're reading</b> <small>&rarr;</small>
        </a>
      </p>
      -->
      <?php echo do_shortcode('[spl_widget browse-list list=star widget limit=4]'); ?>
      <p>&nbsp;</p>
      <p class="text-right">
        <a class="btn btn-link btn-sm" href="/blog/">More staff picks &rarr;</a>
      </p>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->







