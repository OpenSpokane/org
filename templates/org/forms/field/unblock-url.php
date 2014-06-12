<?php if ( !empty($spl['unblock']['url']['host']) ) : ?> 
<div class="panel panel-danger">
  <div class="panel-heading">
    <h4>
      <i class="glyphicon glyphicon-warning-sign"></i>
      Hi There. The website you are trying to access has been blocked.
    </h4>
  </div>
  <div class="panel-body">
      <p class="lead">
          Please fill out the form below to request a review of this website.
      </p>
      <p>
          We will be happy to unblock it if we find that the content is not in violation of our <a href="#spl-internet-policy" data-toggle="modal">Internet Use Policy</a>.
      </p>
      <p>
        All unblock requests are processed within <strong class="serif">72</strong> hours. 
        <a href="#"
            data-toggle="collapse" 
            data-target="#unblock-explain" 
            >What if I need this website unblocked <em>right now?</em> <i class="icon-chevron-down"></i></a>
      </p>
      <div id="unblock-explain" class="collapse">
        <blockquote>
          Good question.
          First, <strong>make sure you submit this form</strong> using the button below so that we can assess the correct URL.
          Next, walk over to the nearest <em>Reference &amp; Information</em> desk and ask that the reference librarian on staff make an interim evaluation of your request.
          We'll be glad to help.
          <a href="#" 
              data-toggle="collapse" 
              data-target="#unblock-explain"
              >Hide <i class="glyphicon glyphicon-chevron-up"></i></a>
        </blockquote>
      </div>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->
<?php endif; ?>