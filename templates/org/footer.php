<div id="spl-more" style="/*background:rgb(100,150,75);*/">

  <!-- <a name="spl-more">&nbsp;</a> -->
  <div style="padding-top: 20px; margin-bottom: 20px; background-color: rgb(100,150,75); background-image: url(/assets/img/png/bg-book-cart.jpg); background-repeat: no-repeat; background-position: center;">
  <footer class="content-info container" role="contentinfo">
    <!--<hr>-->
    <?php
    /*
    if ( is_user_logged_in() ) {
      include('footer-bottom-navbar.php');
    }
    */
    ?>
    <?php if ( 'learn.spokanelibrary.org' != $_SERVER['SERVER_NAME'] ) : ?>
      <?php include('footer-bottom-navbar.php'); ?>
    <?php endif; ?>
  </footer>
  </div>

  <footer class="content-info container" role="contentinfo">

    <div class="row">
      <div class="col-xs-8 col-sm-6">

        <div class="media">
          <div class="media-left pull-left">
            <a href="/">
              <img class="media-object" style="width:100px; height:80px; margin:auto;" src="/assets/img/spl-touch-hidpi.png" alt="Spokane Public Library logo">
            </a>
          </div>
          <div class="media-body">
            <h5 class="media-heading"><a href="/">Spokane Public Library</a></h5>
            <address class="help-block" style="">
            906 West Main Avenue
            <br>
            Spokane, WA 99201
            <br>
            509.444.5300
          </address>
          </div>
        </div>

      </div><!-- /.col -->

      <div class="col-xs-8 col-sm-6">

        <div class="media">
          <div class="media-right pull-right">
            <a href="/">
              <img class="media-object" style="width:width:75px; height:90px; margin:auto;" src="/assets/img/png/city-spokane-logo-hidpi.png" alt="City of Spokane logo">
            </a>
          </div>
          <div class="media-body text-right">
            <h5 class="media-heading help-block">A division of the<br>City of Spokane</h5>
            <h6 class="media-heading"><a href="https://my.spokanecity.org/">my.spokanecity.org</h6>
          </div>
        </div>

      </div><!-- /.col -->
      <!--
      <div class="col-xs-4 col-sm-3 text-center">
        <a href="https://my.spokanecity.org/">
          <img alt="City of Spokane logo" class="" style="width:75px; height:90px;" src="/assets/img/png/city-spokane-logo-hidpi.png">
        </a>
        <h6 class="help-block">
          <a href="https://my.spokanecity.org/">Division of the<br>City of Spokane</a>
        </h6>
      </div>--><!-- /.col -->
      <!--<div class="col-sm-3 hidden-xs text-center">
        <a href="http://www.fdlp.gov">
          <img alt="Federal Depository Library Program logo" 
                title="This library is a congressionally designated depository for U.S. Government documents. Public access to the government documents collection is guaranteed by public law. (Title 44 United States Code)" 
                class="" 
                style="width:200px; margin:auto;" 
                src="/assets/img/png/fdlp-emblem-logo-text-color">
        </a>
      </div>--><!-- /.col -->
      <!--<div class="col-sm-3 hidden-xs text-right">
        <a href="/">
          <img alt="Spokane Public Library logo" class="" style="width:170px; height:80px; margin:auto;" src="/assets/img/SPL-Logo-hidpi.png">
        </a>
      </div>--><!-- /.col -->      
    </div><!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <!--
        <p class="text-muted">
          &copy; <?php echo date('Y'); ?> <?php //bloginfo('name'); ?>
        </p>
        -->
      </div><!-- /.col -->
    </div><!-- /.row -->

    <?php echo do_shortcode('[spl_widget login-form modal label]'); ?>
    <?php echo do_shortcode('[spl_widget my-account profile]'); ?>

  </footer>

  <span class="visible-xs"></span>
  <span class="visible-sm"></span>
  <span class="visible-md"></span>
  <span class="visible-lg"></span>

</div>
<p>&nbsp;</p>
<div id="fb-root"></div>