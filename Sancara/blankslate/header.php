



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/blankslate/assets/css/styles.min.css">
<link href="https://fonts.googleapis.com/css?family=Exo:800|Quicksand:300&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
  <nav class="navbar navbar-expand-lg">
    <div class="logo-container col-5">
      <?php csl_CustomSiteLogo_show_logo(); ?>
    </div>
    <button style="color:white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php wp_nav_menu("menu_class=navbar-nav") ?>
      </div>
    </div>
  </nav>
</header>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a012e2f980.js" crossorigin="anonymous"></script>
