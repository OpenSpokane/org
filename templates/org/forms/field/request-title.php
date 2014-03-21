<div class="row">

  <div class="col-md-12">
    
    <div class="spl-login" data-callback-method="loadUserFormFields">
    <?php echo do_shortcode('[spl_widget login-form label post=request intro="Please login to get started."]'); ?>
    </div>
    
    <?php echo get_query_var('bib') ?>

    <?php if ( true == do_shortcode('[spl_widget auth-user]') ) : ?>
        
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-request" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="request" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-barcode"></small>
              <?php echo $_SESSION['spl']['user']->borrowerBarcode; ?>
            </legend>

            <div class="col-md-4">
            <?php include 'common/field-contact-location.php'; ?>
            </div>
            <div class="col-md-8">
              <label>My name</label>
              <p>
                <button type="button" class="btn btn-block btn-success" data-toggle="collapse" data-target="#spl-form-request-edit-contact">
                  <i class="glyphicon glyphicon-edit"></i>
                  Edit my contact info
                  <span class="caret"></span>
                </button>
              </p>
              <div class="collapse" id="spl-form-request-edit-contact">
              <?php include 'common/field-contact.php'; ?>
              </div>
            </div>
            
          </fieldset>
            <?php include 'request/title.php'; ?>
            
            <?php //include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php //include 'common/field-contact.php'; ?>
            <?php //include 'common/field-submit.php'; ?>
            
          
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

    <?php endif; ?>

  </div><!-- /.col -->

</div><!-- /.row -->
