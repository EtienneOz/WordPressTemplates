<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print" />
    <?php wp_head(); ?>
  </head>
  <body>
 <?php include_once("analyticstracking.php") ?>
    <div class="wrap">
      <header id="presentation">
        <p class="titre"><a href="http://etienneozeray.fr/libre-blog/"><?php bloginfo('name'); ?></a></p>
        <p class="titre2"><?php bloginfo('description'); ?></p>
      </header>