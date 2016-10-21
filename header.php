<!DOCTYPE html>
<html>

<head>

  <title>
    <?php wp_title(); ?>
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="manifest" href="/manifest.json">
  <link rel="import" href="<?php bloginfo('template_directory'); ?>/src/text-a-potato-app.html">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

  <?php wp_head(); ?>


   


</head>

<body>

  <link rel="import" href="<?php bloginfo('template_directory'); ?>/bower_components/iron-media-query/iron-media-query.html">
  <link rel="import" href="<?php bloginfo('template_directory'); ?>/bower_components/paper-icon-button/paper-icon-button.html">
  <link rel="import" href="<?php bloginfo('template_directory'); ?>/bower_components/iron-icons/iron-icons.html">


  <paper-icon-button id="toggleMenuButton" icon="menu" menuOpened="{{menuOpened}}"></paper-icon-button>
  <nav id="nav">
    <?php
wp_nav_menu(array(
'theme_location' => 'primay',
'container' => false,
'menu_class' => 'navbar-nav'
));
?>
  </nav>

  <!--
<potato-menu route="{{route}}" menu-items="{{menuItems}}"></potato-menu>
-->

  <div class="container">
    <div>
      <h1>TEXT-A-P
<img class="logo-potato" src="<?php bloginfo('template_directory'); ?>/assets/logo-potato.jpg"></img>TATO
</h1>
    </div>

  </div>