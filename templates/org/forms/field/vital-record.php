<div class="row">

  <div class="col-md-8">
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-contact" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="contact" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-search"></small>
              Search for obituaries or birth announcements
            </legend>
            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">My research question</label>
              <div class="col-sm-8">
                <label class="text-muted form-control-static">Please be as specific as possible with your question.</label>
                <textarea rows="6" class="form-control required" id="spl-form-question" name="spl-form[question]"></textarea>
              </div>
            </div>
            
            <?php include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php include 'common/field-contact-no-card.php'; ?>
            <?php include 'common/field-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">

    <div class="panel panel-warning">
      <div class="panel-heading">
        <h4>
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          Please note
        </h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
        <p>     
          This form is for obituary and birth announcement requests for <strong>out-of-town customers only</strong>. 
        </p>
        <p>
          If you live in the Spokane area, you are expected to come in to do your research. We'll be glad to help!
        </p>    
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

</div><!-- /.row -->
