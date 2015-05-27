<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Thank You <?php if( !empty($crass->request['name']) ) : ?> <?php echo ' '.ucfirst($crass->request['name']); ?><?php endif; ?>!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <p>
      <i class="glyphicon glyphicon-download-alt"></i>
      <?php if( 'adult' == $crass->request['age'] ) : ?>
      <a href="/assets/pdf/spl-summer-reading-log-2015-adult.pdf">
      <?php else: ?>
      <a href="/assets/pdf/spl-summer-reading-log-2015.pdf">
      <?php endif; ?>
      <b>Get your summer reading log now</b>
      </a>
    </p>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php
/*
echo '<pre>';
//print_r($crass);
//print_r($crass->result);
print_r($crass->request); 
echo '</pre>';
*/
?>