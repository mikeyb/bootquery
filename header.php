<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <?php
              wp_list_pages(array('title_li' => ''));

              # if you want to exclude a page from the list
              # ie. Home would be a redundant page to list when nav brand takes you home
              #wp_list_pages(array('title_li' => '', 'exclude' => 4));
            ?>
          </ul>
          <span class="pull-right" style="padding-top:8px;"><a href="/clients/"><button type="submit" class="btn">Clients</button></a></span>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

