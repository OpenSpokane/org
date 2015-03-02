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

<div class="row">
  <!--
  <div class="col-md-3 col-md-push-9">
  -->
    <?php //echo do_shortcode('[spl_widget home-page facebook]'); ?>
    <!-- digital -->
    <!--
    <div class="spl-tile">
      <div class="spl-hero-panel spl-hero-primary" style="margin-bottom:6px;">
        <a href="/digital/" class="spl-hero-link">
          <h4 class="text-center normal">
            <i class="glyphicon glyphicon-cloud-download"></i>
            Digital Branch
          </h4>        
        </a>
      </div>
      <h6 class="text-center normal uppercase text-primary"><span class="hidden-md">Download </span>eBooks, music &amp; more</h6>
    </div>
    -->

    <!-- calendar -->
    <!--
    <div class="spl-tile">
      <div class="spl-hero-panel spl-hero-success"  style="margin-bottom:6px;">
        <a href="/calendar/" class="spl-hero-link">
          <h4 class="text-center normal">
            <i class="glyphicon glyphicon-calendar"></i>
            Library Calendar
          </h4>        
        </a>
      </div>
      <h6 class="text-center normal uppercase text-success">Classes, events &amp; storytimes</h6>
    </div>
    -->

  <!--</div>--><!-- /.col -->
  <div class="col-md-12">
    <div class="spl-tile spl-tile-default">
      <?php echo do_shortcode('[spl_widget home-page news]'); ?>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="spl-tile" style="background:#f5f5f5; color:#555;">
  <div class="spl-tile-body">
    <div class="row">
      <?php echo do_shortcode('[spl_widget home-page facebook]'); ?>
    </div><!-- /.row -->
  </div>
</div>

<div class="row">
  <div class="col-sm-7">
    <?php echo do_shortcode('[spl_widget home-page promo=tech]'); ?>
  </div><!-- /.col -->  
  <div class="col-sm-5">
    <?php echo do_shortcode('[spl_widget home-page promo=yearbooks]'); ?>
  </div><!-- /.col -->        
</div><!-- /.row -->

<div class="row">
  <div class="col-md-3 col-md-push-9">
    <?php echo do_shortcode('[spl_widget home-page calendar]'); ?>
  </div><!-- /.col -->

  <div class="col-md-9 col-md-pull-3">    
    
    <div class="row">
    <?php echo do_shortcode('[spl_widget home-page shuffle slides limit=3]'); ?>
    </div><!-- /.row -->    

    <?php echo do_shortcode('[spl_widget home-page shuffle posts limit=1]'); ?>
    
    <!--
    <div class="spl-tile spl-tile-boxed">
      <div class="spl-tile-body">
        <div class="row">
          <div class="col-sm-6">
            <h5 class="uppercase">Reading list</h5>
          </div>
          <div class="col-sm-6">
            <p class="text-right">
              <a class="btn btn-link" href="/new/">Newest titles <small>&rarr;</small></a> 
              <a class="btn btn-link" href="/browse/">Popular titles <small>&rarr;</small></a>
            </p>
          </div> 
        </div>
        <div class="row">
          <?php //echo do_shortcode('[spl_widget home-page browse]'); ?>
        </div>
      </div>
    </div>
    -->

    <?php //echo do_shortcode('[spl_widget home-page shuffle pages limit=1]'); ?>
    
    <div class="row">
      <div class="col-sm-9 col-sm-push-3">
        <?php //echo do_shortcode('[spl_widget home-page shuffle posts pages]'); ?>
      </div><!-- /.col -->
      <div class="col-sm-3 col-sm-pull-9">
        <?php //echo do_shortcode('[spl_widget home-page browse]'); ?>
      </div><!-- /.col -->      
    </div><!-- /.row -->

  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-9 col-sm-push-3">
    <h4 class="text-warning">The Fiction Queen</h4>
    <h6 class="text-muted uppercase">Reviews and reccomendations from Spokane Public Library's Susan Creed</h6>
    <img style="width:100px; height:100px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
    <p>
      I’m thoroughly enjoying the latest Mary Russell and Sherlock Holmes suspense novel, Dreaming Spies by Laurie King. 
      If you’re not familiar with this series you’ll want to start with The Beekeeper’s Apprentice, in which the young Miss Russell meets the retired Mr. Holmes. 
      After their romance and marriage, the couple have adventures solving mysteries all over the world.  
      The latest book takes place primarily in Japan in the 1920’s and involves a family with a long tradition of serving the emperor through their talents as Ninjas.
    </p>
  </div><!-- /.col -->
  <div class="col-sm-3 col-sm-pull-9">
  </div><!-- /.col -->      
</div><!-- /.row -->
