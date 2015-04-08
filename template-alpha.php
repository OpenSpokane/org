<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($filler='&nbsp;', $h=140) {
    $html = '';
    $html .= '
              <div class="panel panel-default">
              <div class="panel-body">
                <div style="height:'.$h.'px;">
                '.$filler.'
                </div>
              </div>
              </div>
    ';

    return $html;
  }
?>


<?php 
// conditionally display page content
$spl_home = $post->post_content;
$spl_home = trim($spl_home);
if ( !empty($spl_home) ): ;
?>
<div class="spl-hero-panel spl-hero-danger" style="margin-bottom:10px;">
  <h4 class="text-center">
    <span class=""><i class="glyphicon glyphicon-bullhorn"></i></span>
    Please read <small class="hidden-xs">this important announcement</small>
  </h4>
</div>
<div style="margin-bottom:16px;">
  <?php echo $post->post_content; ?>
</div>
<?php endif; ?>



<div class="row">

  <div class="col-lg-10 col-lg-offset-1">
    
    <div class="row">

      <div class="col-md-3">
        
        <div class="panel spl-hero-panel spl-hero-primary spl-hero-digital">
          <a class="spl-hero-link" href="/download/">
            <h4 class="text-center">
              <i class="glyphicon glyphicon-cloud hidden-sm"></i>
              Digital Branch
            </h4>
            <div class="hidden-xs hidden-sm" style="height: 80px; overflow:hidden;">
              <img style="margin:auto;" class="img-responsive" src="/assets/img/promos/photos/spl-handheld.jpg">
            </div>
            <div class="digital-promo">
              <h5 class="text-center uppercase">Always open, always on</h5>
            </div>
            <div class="panel-body hidden-xs" style="background-image:url('/assets/img/spl-touch-bg.png'); background-position:-20px -20px;">
              <h5>eBooks &amp; downloads</h5>
              <h5 class="text-right">Research databases</h5>
              <h5>Mobile apps</h5>
              <h5 class="text-right">Technology training</h5>        
              <h5>Microsoft Certification</h5>
            </div> 
          </a>
        </div>

        
      </div><!-- /.col -->
      <div class="col-sm-8 col-md-6">

        <div class="panel spl-hero-panel spl-hero-muted">
          <?php echo do_shortcode('[spl_carousel_photo auto random slug=stage]'); ?>
        </div>

        
      </div><!-- /.col -->

      <div class="col-sm-4 col-md-3">
        
        <div class="panel spl-hero-panel spl-hero-calendar">
          <h4 class="text-center" style="">
            <i class="glyphicon glyphicon-calendar"></i> 
            Coming Up
          </h4>
          <div class="panel-body" style="background-image:url('/assets/img/spl-touch-bg.png'); background-position:120px 120px;">
            <div style="height:220px;">
              <?php echo do_shortcode('[spl_widget home-page carousel pause auto calendar embedded refresh]'); ?>
            </div>
            <h5 class="text-center">
              <a href="#">Calendar of Events <span class="text-muted">&rarr;</span></a>
            </h5>      
          </div>
        </div>

      </div>

    </div><!-- /.row -->


    <div class="panel spl-hero-panel spl-hero-success">
      <div class="panel-body" style="background:#fff !important;">
        <?php echo do_shortcode('[spl_widget home-page news]'); ?>
      </div>
    </div>

  </div><!-- /.col -->
</div><!-- /.row -->
