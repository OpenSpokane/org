      
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-stl-file" enctype="multipart/form-data" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="stl-file" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-file"></small>
              Send us your .stl file
            </legend>

            <!--
            <p>
              Please let us know where you would like to pickup your print, and what color filament to use.
            </p>
          -->
            <div class="form-group">
              <label for="" class="col-sm-4 control-label">
                Select a file
              </label>
              <div class="col-sm-8">
                <input type="file" class="required" id="spl-form-stl-file" name="spl-form[stl-file]">
                <span class="help-block">
                  <b>Reminder:</b> we only accept .stl files. 
                </span>
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-appt-location" class="col-sm-4 control-label">
                I will pickup at
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-pickup-location" name="spl-form[pickup-location]">
                  <option value="Downtown" selected>Downtown Library</option>
                  <option value="East Side">East Side Library</option>
                  <option value="Hillyard">Hillyard Library</option>
                  <option value="Indian Trail">Indian Trail Library</option>
                  <option value="Shadle">Shadle Library</option>
                  <option value="South Hill">South Hill Library</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                Use this filament color
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-pla-color" name="spl-form[pla-color]">
                  <option value="Black">Black</option>
                  <option value="White">White</option>
                  <option value="Blue">Blue</option>
                  <option value="Green">Green</option>
                  <option value="Brown">Brown</option>
                  <option value="Grey">Grey</option>
                  <option value="Orange">Orange</option>
                  <option value="Purpl">Purple</option>
                  <option value="Red">Red</option>
                  <option value="Magenta">Magenta</option>
                </select>
              </div>
            </div>
            <hr>
            
            <!--
            <p>
              Enter your library barcode and pin and we'll fill out your contact information.
            </p>
            -->
            <?php include 'common/field-login.php'; ?>
            <?php include 'common/field-contact-no-mail.php'; ?>
            <hr>
            <?php include 'common/field-contact-method-no-mail.php'; ?>

            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">
                Questions or special instructions
              </label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control" id="spl-form-message" name="spl-form[message]"></textarea>
              </div>
            </div>

            <hr>

            <p>
              <b>We'll contact you when your print is finished, or if we have any questions.</b>
            </p>

            <?php include 'common/field-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
