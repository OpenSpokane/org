<div class="row">

  <div class="col-md-8">
    
    <div class="panel panel-primary">
      <div class="panel-body">
        <p class="lead text-center" style="margin-bottom:0;">
        <a href="/ask">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          For research questions, please <strong>ask a librarian</strong> &rarr;
        </a>
        </p>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    
    <?php //echo do_shortcode('[spl_widget login-form label]'); ?>
    
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
              <small class="glyphicon glyphicon-envelope"></small>
              Send us an email
            </legend>
            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                <button type="button" class="btn btn-xs btn-info hidden-xs" data-toggle="collapse" data-target="#spl-explain-query-type">
                  <i class="glyphicon glyphicon-info-sign"></i>
                </button>
                A question about
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-query-type" name="spl-form[query-type]">
                  <option value="library">Using the library</option>
                  <option value="account">My Account</option>
                  <option value="website">The library website</option>
                  <option value="other">Something else</option>
                </select>
                <span class="help-block collapse" id="spl-explain-query-type">
                  We use this information to route your inquiry.
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="spl-form-contact-method" class="col-sm-4 control-label">
                <button type="button" class="btn btn-xs btn-info hidden-xs" data-toggle="collapse" data-target="#spl-explain-contact-method">
                  <i class="glyphicon glyphicon-info-sign"></i>
                </button>
                Contact method
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-contact-method" name="spl-form[contact-method]">
                  <option value="email" selected>Email</option>
                  <option value="phone">Telephone</option>
                  <option value="postal">Postal Mail</option>
                </select>
                <span class="help-block collapse" id="spl-explain-contact-method">
                  We prefer to respond using email; let us know what works for you. 
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">Your message</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
              </div>
            </div>
            
            <?php include 'common/form-login.php'; ?>
            <?php include 'common/form-contact.php'; ?>
            <?php include 'common/form-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">
    <?php echo do_shortcode('[spl_widget custom-page page=contact-info]'); ?>
    <p>
      <a class="btn btn-block btn-primary" title="How do I?" href="/how">
        <i class="glyphicon glyphicon-question-sign"></i>
        Frequently Asked Questions &rarr;
      </a>
    </p>




    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Spokane Public Library</h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
        <p>     
          <blockquote>
          906 West Main Street 
          <br />
          Spokane, WA 99201
          </blockquote>
        </p>
        <h4>
        <abbr title="Phone">Ph.</abbr> 509.444.5300
        </h4>
        <p>
          <a class="" href="/branch">
            Branch Locations &amp; Hours &rarr;
          </a>
        </p>
        <hr>
        <h4 class="text-muted">
          Asked &amp; answered
        </h4>
        <p>
          <a class="btn btn-block btn-primary" title="How do I?" href="/how">
            <i class="glyphicon glyphicon-question-sign"></i>
            Frequently Asked Questions &rarr;
          </a>
        </p>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
  </div><!-- /.col -->

</div><!-- /.row -->
