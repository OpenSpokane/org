<?php
/*
Template Name: Intranet Home Page
*/
?>


<div class="row">

  <!--<div class="col-lg-10 col-lg-offset-1">-->
  <div class="col-sm-12">
        
    <nav class="navbar-common panel panel-primary" style="margin-bottom:16px; background:rgb(170,215,240);">
        <ul class="nav nav-justified">
        <?php 
        wp_nav_menu( 
        array(
          'menu' => 'Quick Links'
        , 'container' => false
        , 'items_wrap' => '%3$s'
        )); 
        ?>
        </ul>
    </nav>

    <?php 
    // conditionally display page content
    $spl_home = $post->post_content;
    $spl_home = trim($spl_home);
    if ( !empty($spl_home) ): ;
    ?>
    <div class="panel spl-hero-panel spl-hero-announce">
      <?php 
      if ( $post->post_excerpt): ; 
      ?>
      <h4 class="text-center hero-heading">
        <i class="glyphicon glyphicon-bullhorn"></i>
        <?php echo $post->post_excerpt; ?>
      </h4>
      <?php endif; ?>
      <div class="panel-body">
        <?php echo $post->post_content; ?>
      </div>
    </div>

    <?php endif; ?>
    
    <div class="row">
      
      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet spl-hero-brand-blue-h">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-bullhorn"></i>
            News &amp; Announcements</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <p>
              <a class="btn btn-sm btn-block btn-inverse" href="mailto:commsupport@spokanelibrary.org">
              <small class="glyphicon glyphicon-plus-sign"></small> 
              Make a Communications Request</a>
            </p>
            <?php echo do_shortcode('[spl_widget category-posts slug=spl count=3 format=excerpt]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/spl/"><b>More</b> Library News</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet spl-hero-brand-gray-a">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-cog"></i>
            Tech Alerts</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <p>
              <a class="btn btn-sm btn-block btn-inverse" href="mailto:itsupport@spokanelibrary.org">
              <small class="glyphicon glyphicon-plus-sign"></small> 
              Make a Tech Request</a>
            </p>
            <?php echo do_shortcode('[spl_widget category-posts slug=tech count=3 format=excerpt]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/tech/"><b>More</b> Tech Alerts</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="clearfix"></div>

      <div class="col-md-6">
        <div class="panel spl-hero-intranet spl-hero-brand-blue-b">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-list"></i>
            Director's Notes</h4>
          </div><!-- /.panel-heading -->
          
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget category-posts slug=director count=3 format=excerpt]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/director/"><b>More</b> Director's Notes</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet spl-hero-brand-green-a">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-edit"></i>
            Public Services Desk</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget category-posts slug=ps count=3 format=excerpt]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/ps/"><b>More</b> from Public Services</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="clearfix"></div>

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet spl-hero-brand-orange-a">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-thumbs-up"></i>
            ___ Deserves a Star</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget category-posts slug=star count=3 format=excerpt]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/star/"><b>See More</b> Stars</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet spl-hero-brand-purple-a">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-barcode"></i>
            Support Services Desk</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget category-posts slug=ss count=3 format=excerpt]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/ss/"><b>More</b> from Support Services</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="clearfix"></div>

    </div><!-- /.row -->

  </div><!-- /.col -->
</div><!-- /.row -->


