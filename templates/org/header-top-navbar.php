<?php

function spl_get_home_url() {
  //return home_url();
  return 'http://www.spokanelibrary.org';
}

?>

<script>/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=289675684463099";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/</script>  

<header class="navbar-common navbar-fixed-top">
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
</header>

<!--<header class="navbar-common banner navbar navbar-fixed-top" role="navigation">
  <ul class="nav nav-justified">
    <li>
      <a href="<?php echo spl_get_home_url(); ?>/">
        <span class="visible-xs"><i class="glyphicon glyphicon-home"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-home"></i> Home</span>
      </a>
    </li>
    <li>
      <a href="/account/">
        <span class="visible-xs"><i class="glyphicon glyphicon-user"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-user"></i> My Account</span>
      </a>
    </li>
    <li>
      <a href="/search/">
        <span class="visible-xs"><i class="glyphicon glyphicon-search"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-search"></i> Search</span>
      </a>
    </li>
    <li>
      <a href="/browse/">
        <span class="visible-xs"><i class="glyphicon glyphicon-book"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-book"></i> Browse</span>
      </a>
    </li>
    <li>
      <a href="/download/">
        <span class="visible-xs"><i class="glyphicon glyphicon-download-alt"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-download-alt"></i> Download</span>
      </a>
    </li>
    <li>
      <a href="/connect/">
        <span class="visible-xs"><i class="glyphicon glyphicon-envelope"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-envelope"></i> Contact Us</span>
      </a>
    </li>
  </ul>
</header>--><!-- /.navbar -->

<header class="navbar-masthead banner navbar navbar-inverse navbar-static-top visible-md visible-lg" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo spl_get_home_url(); ?>/">
        <span class="text-hide"><?php bloginfo('name'); ?></span>
      </a>
    </div>

    <div id="spl-account-profile"></div>

    <div class="pull-right" style="width:360px; margin-top: 10px; margin-right: 10px;">
    <div class="row">
      <div class="col-xs-4">
        <p>  
          <a class="btn btn-block btn-default btn-sm"
            href="http://facebook.com/spokanelibrary" 
            title="">
            <img src="/assets/img/icons/16px/facebook.png">
            <b>Facebook</b></a>
        </p>
      </div><!-- /.col -->
      <div class="col-xs-4">
        <p>
          <a class="btn btn-block btn-default btn-sm text-info" 
            href="http://twitter.com/spokanelibrary" 
            title="">
            <img src="/assets/img/icons/16px/twitter.png">
            <b>Twitter</b></a>
        </p>
      </div><!-- /.col -->
      <div class="col-xs-4">
        <p>
          <a class="btn btn-block btn-default btn-sm text-info" 
            href="/about/" 
            title="">
            <i style="border:0px solid #ccc !important; border-radius:4px; padding:2px 3px; margin:0px; color:#fff; background: rgb(100,150,75);" class="text-success glyphicon glyphicon-thumbs-up"></i>
            <b>Support Us</b></a>
        </p>
      </div><!-- /.col -->
    </div><!-- /.row -->
    </div>


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

  </div>
</header><!-- /.navbar -->


<header class="navbar-primary banner navbar navbar-inverse navbar-static-top" style="margin-bottom:0;" role="banner">
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
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header><!-- /.navbar -->
<!--
<header class="navbar-primary banner navbar navbar-default navbar-static-top" style="padding-top: 2px;" role="search">
-->

<header class="navbar navbar-default" style="padding-top: 2px;">

<!--
<header style="margin: 10px 0;">
-->
  <div class="container">
    <?php echo do_shortcode('[spl_widget enterprise-search]'); ?>
  </div>
</header>

