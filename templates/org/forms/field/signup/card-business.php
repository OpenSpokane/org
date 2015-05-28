<div class="panel panel-danger">
  <div class="panel-heading clearfix">
    <a class="btn btn-sm btn-danger pull-right" href="<?php echo $_SERVER['REQUEST_URI'] ;?>"><i class="glyphicon glyphicon-refresh"></i> Start over</a>
    <h4 class="panel-title">
      Library Card Application for Businesses &amp; Non-Profits
    </h4>
  </div>
  <div class="panel-body">

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Let's get started
      </legend>
      <?php include 'shared/card-name.php'; ?>
      <?php include 'shared/card-pin-cards.php'; ?>
      <?php include 'shared/card-online-only.php'; ?>
      <?php include 'shared/card-location.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Tell us how to reach you
      </legend>
      <?php include 'shared/card-contact.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Tell us about your business
      </legend>
      <?php include 'shared/card-bus-info.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Library card eligibility
      </legend>
      <?php include 'shared/card-eligible.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Complete your application
      </legend>
      <?php include 'shared/card-apply.php'; ?>
    </fieldset>  	

  </div><!-- /.panel-body -->
</div><!-- /.panel -->