<!DOCTYPE html>
<html>

<head>

  <title>
    Text A Potato
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="manifest" href="/manifest.json">
  <link rel="import" href="<?php bloginfo('template_directory'); ?>/src/text-a-potato-app.html">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

  <?php wp_head(); ?>


</head>

<body>

  <link rel="import" href="<?php bloginfo('template_directory'); ?>/src/potato-menu.php">

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