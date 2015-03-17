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
 
  <div class="col-sm-3 col-md-2">
    <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
  </div><!-- /.col -->

  <div class="col-sm-7 col-sm-offset-3 col-md-6">
    <?php echo get_alpha_panel('Carousel'); ?>
    <?php echo get_alpha_panel('This week'); ?>
  </div><!-- /.col -->

  <div class="col-sm-3 col-md-2">
    <?php echo get_alpha_panel('Digital Branch'); ?>
    <?php echo get_alpha_panel('Staff Picks'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

  

