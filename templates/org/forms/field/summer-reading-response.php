<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You <?php if( !empty($crass->request['name']) ) : ?> <?php echo ' '.ucfirst($crass->request['name']); ?><?php endif; ?>!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <p>
      <?php if( 'adult' == $crass->request['age'] ) : ?>
      <a href="/assets/pdf/spl-summer-reading-log-2015-adult.pdf">
      <?php else: ?>
      <a href="/assets/pdf/spl-summer-reading-log-2015.pdf">
      <?php endif; ?>
      <b>Get your summer reading log now &rarr;</b>
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