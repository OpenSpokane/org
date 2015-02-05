<?php

function spl_get_home_url() {
  return home_url();
  //return 'http://www.spokanelibrary.org';
}

?>

<script>/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=289675684463099";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/</script>  

<header class="navbar-common navbar-fixed-top visible-xs visible-sm">
  <!--<div class="container">-->
  <ul class="nav nav-justified">
  <?php 
  wp_nav_menu( 
  array(
    'menu' => 'Common Navigation'
  , 'container' => false
  , 'items_wrap' => '%3$s'
  )); 
  ?>
  </ul>
  <!--</div>-->
</header>

<header class="navbar-masthead banner navbar navbar-inverse navbar-static-top visible-md visible-lg" role="banner">
  <div class="container">
    <div class="row">
    <div class="col-md-5">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo spl_get_home_url(); ?>/">
          <span class="text-hide"><?php bloginfo('name'); ?></span>
        </a>
      </div>
      <?php //if ( is_user_logged_in() ) :?>
      <h4 class="text-success normal pull-left" style="opacity:.9; margin-left: 16px; margin-top:50px;">
        <?php bloginfo('description'); ?>
      </h4>
      <?php //endif; ?>
    </div>
    <div class="col-md-7">

    <div id="spl-account-profile"></div>
    
    <?php //if ( is_user_logged_in() ) :?>
      <div class="row">
        <div class="col-md-12">
          <header id="spl-navbar-common" class="navbar-common navbar-static-top" style="border-left:1px solid rgb(0,85,135); border-right:1px solid rgb(0,85,135);">
            <!--<div class="container">-->
            <ul class="nav nav-justified">
            <?php 
            wp_nav_menu( 
            array(
              'menu' => 'Common Navigation'
            , 'container' => false
            , 'items_wrap' => '%3$s'
            )); 
            ?>
            </ul>
            <!--</div>-->
          </header>
        </div>
      </div>

      <?php //echo do_shortcode('[spl_widget enterprise-search]'); ?>
      <div class="text-right">
      <?php include('header-social-connect.php'); ?>
      </div>
    <?php //endif; ?>

    <script id="spl-account-profile-tmpl" type="text/x-handlebars-template">
      {{#if user.sessionToken}}
      <div class="pull-right" id="spl-account-profile">
        <div class="well well-sm clearfix" style="margin: 6px 0 0 0;  opacity:.9; border-left-width:5px;">
            <i class="glyphicon glyphicon-user text-muted"></i>
            <strong class="text-muted">{{user.firstName}}</strong>
            <a href="/account/"><small><strong>My Account</strong></small></a>
            <span class="text-muted">&nbsp;&nbsp;</span>
            
            <span class="">
              <i class="glyphicon glyphicon-log-out text-danger"></i>
              <a href="./?logout" class="text-danger"><small><strong>Logout</strong></small></a>
            </span>
          <!--  
            <br>
        
          {{#if user.holdRequests}}
            {{#if user.holdRequests.ready}}
            <a href="/account#holds" class="btn btn-sm btn-default">
              Ready to pickup
              <small class="badge">{{user.holdRequests.ready}}</small>
            </a>
            {{/if}}
          {{/if}}
          &nbsp;
          {{#if user.itemsOut}}
            {{#if user.itemsOut.overdue}}
            <a href="/account#cko" class="btn btn-sm btn-default">
              Overdue 
              <small class="badge">{{user.itemsOut.overdue}}</small>
            </a>
            {{/if}}
          {{/if}}
          -->
        </div>
      </div>
      {{/if}}
    </script>
  </div><!-- /.col -->
  </div><!-- /.row -->
  </div>
</header><!-- /.navbar -->


<header id="spl-navbar-primary" class="navbar-primary banner navbar navbar-inverse navbar-static-top spl-ribbon" style="margin-bottom:0px;" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-lg" href="<?php echo spl_get_home_url(); ?>/">
        <span class="logotype"><?php bloginfo('name'); ?></span>
      </a>
      <div class="visible-sm pull-right" style="margin-top: 8px; margin-right:20px;">
        <?php include('header-social.php'); ?>
      </div>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        /*
        if ( is_user_logged_in() && has_nav_menu('primary_navigation') ) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
        */
        if ( has_nav_menu('primary_navigation') ) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header><!-- /.navbar -->

<div class="container hidden-md hidden-lg" style="margin-top:0; margin-bottom:6px;">
  <div class="text-center">
  <?php include('header-social-connect.php'); ?>
  </div>
</div>

<?php 
switch ($post->post_name) {
  case 'search':
  case 'account':
    break;
  default:
    include('header-search.php'); 
    break;
}
?>
