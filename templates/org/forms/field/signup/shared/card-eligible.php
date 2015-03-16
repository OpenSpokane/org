<div class="form-group">
  <div class="col-sm-9 col-sm-offset-3">
    <span class="help-block">
      Library card privileges are based on the address you provide.
    </span>
  </div>
</div>

<div class="form-group">
  <label for="spl-form-local" class="col-sm-3 control-label">My address is in</label>
  <div class="col-sm-3">
    <select class="form-control required" id="spl-form-locale" name="spl-form[signup][locale]">
      <option value="city" selected>The City of Spokane</option>
      <option value="county">Spokane County</option>
      <option value="other">Outside the area</option>
      <option value="unsure">I'm not sure</option>
    </select>
  </div>
  <div class="col-sm-6">
    <p>
      <i class="glyphicon glyphicon-share text-muted"></i>
      <a href="#" data-toggle="modal" data-target="#spl-card-eligible">Read more about library card eligibility</i></a>
    </p>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-3 col-sm-offset-3">
    <a href="#signup-address-alt" 
      class="btn btn-block btn-default"
      data-toggle="collapse">Add an address <span class="caret"></span></a> 
  </div>
  <div class="col-sm-6">
    <span class="help-block">
      If you have an address <i>other than your mailing address</i> that you would like to use for library card eligibility please add it here.
    </span>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="spl-card-eligible" tabindex="-1" role="dialog" aria-labelledby="spl-card-eligible-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="spl-terms-conditions-title">Library Card Eligibility &amp; Requirements</h4>
      </div>
      <div class="modal-body">
        <ul>
          <li>
            All-access cards are available to City of Spokane residents.
          </li>
          <li>
            Limited-access cards are available to Spokane County residents as part of a reciprocal program with <a href="http://www.scld.org">Spokane County Library District</a>.
          </li>
          <li>
            Non-residents may purchase all-access cards for a fee of $3.00 per month.
          </li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close!</button>
      </div>
    </div>
  </div>
</div>
      
<div class="collapse" id="signup-address-alt">
  <?php include 'card-address-alt.php'; ?>
</div>
