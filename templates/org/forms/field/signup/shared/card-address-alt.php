<div class="form-group">
  <label for="spl-form-street" class="col-sm-3 control-label">Street address</label>
  <div class="col-sm-3">
    <!--<textarea rows="3" class="form-control required spl-signup-address-alt" id="spl-form-street-alt" name="spl-form[signup][address-alt][street]"></textarea>-->
    <input type="text" class="form-control required spl-signup-address-alt" id="spl-form-street-alt-1" name="spl-form[signup][address-alt][street][1]" value="" placeholder="">
    <input type="text" class="form-control spl-signup-address-alt" id="spl-form-street-alt-2" name="spl-form[signup][address-alt][street][2]" value="" placeholder="">
  </div>
  <label for="spl-form-city" class="col-sm-1 control-label">City</label>
  <div class="col-sm-2">
    <input type="text" class="form-control required spl-signup-address-alt" id="spl-form-city-alt" name="spl-form[signup][address-alt][city]" value="" placeholder="">
  </div>
  <label for="spl-form-state" class="col-sm-1 control-label">State</label>
  <div class="col-sm-2">
    <!-- <input type="text" class="form-control required spl-signup-address-alt uppercase" id="spl-form-state-alt" name="spl-form[signup][address-alt][state]" value="" placeholder=""> -->
    <select class="form-control required spl-signup-address-alt" id="spl-form-state-alt" name="spl-form[signup][address-alt][state]">
      <?php include 'card-states.php'; ?>
    </select>
  </div>
  <label for="spl-form-zip" class="col-sm-1 col-sm-offset-3 control-label">ZIP</label>
  <div class="col-sm-2">
    <input type="text" class="form-control required spl-signup-address-alt uppercase" minlength="5" id="spl-form-zip-alt" name="spl-form[signup][address-alt][zip]" value="" placeholder="">
  </div>
</div>
