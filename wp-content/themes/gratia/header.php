<?php ?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '&#45;', true, 'right' ); ?></title>
<meta name="robots" content="follow, index" />
<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" />
<link rel="shortcut icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-180x180.png">
<meta name="msapplication-TileColor" content="#fff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144.png">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<?php if(ot_get_option( 'slider_image1' ) != ''){ ?>
<style>
.carousel-bg1 {
  background:#87bdd9 url(<?php echo ot_get_option( 'slider_image1' ); ?>) 0% 80% no-repeat;
  -ms-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<?php } ?>
<?php if(ot_get_option( 'slider_image2' ) != ''){ ?>
<style>
.carousel-bg2 {
  background:#87bdd9 url(<?php echo ot_get_option( 'slider_image2' ); ?>) 0% 80% no-repeat;
  -ms-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<?php } ?>
<?php if(ot_get_option( 'slider_image3' ) != ''){ ?>
<style>
.carousel-bg3 {
  background: #87bdd9 url(<?php echo ot_get_option( 'slider_image3' ); ?>) 0% 80% no-repeat;
  -ms-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<?php } ?>
<?php if(ot_get_option( 'slider_image4' ) != ''){ ?>
<style>
.carousel-bg4 {
  background: #87bdd9 url(<?php echo ot_get_option( 'slider_image4' ); ?>) 0% 80% no-repeat;
  -ms-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<?php } ?>
<?php if(ot_get_option( 'slider_image4' ) != ''){ ?>
<style>
.carousel-bg4 {
  background: #87bdd9 url(<?php echo ot_get_option( 'slider_image4' ); ?>) 0% 80% no-repeat;
  -ms-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<?php } ?>
<?php if(ot_get_option( 'slider_image5' ) != ''){ ?>
<style>
.carousel-bg5 {
  background: #87bdd9 url(<?php echo ot_get_option( 'slider_image5' ); ?>) 0% 80% no-repeat;
  -ms-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<?php } ?>
<?php if(ot_get_option( 'slider_image6' ) != ''){ ?>
<style>
.carousel-bg6 {
  background: #87bdd9 url(<?php echo ot_get_option( 'slider_image6' ); ?>) 0% 80% no-repeat;
  -ms-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
}
</style>
<?php } ?>
</head>
<body <?php body_class(); ?>>
    <div class="top-bg-small show-for-small"></div>
    <div class="top-bg hide-for-small"></div>
    <header class="main show-for-small-down">
        <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <li class="name">
              <h1>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="svg">
              <object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/img/images/logo-horizontal.svg" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="145" height="45"></object>
              </a>
              </h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
          </ul>
          <section class="top-bar-section">
          	<?php $args = array( 'menu' => 'mainnav', 'container' => false, 'menu_id' => false); wp_nav_menu($args); ?>
          </section>
        </nav>
        </header>
        <header class="main hidden-for-small">
        <div class="row">
        <div class="small-3 small-centered columns fade-animate">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/logo-hover.png" width="0" height="0" class="hide" alt="">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
          <div class="logo"></div>
        </a>
        </div>
        </div>
        <div class="row fade-animate">
        <?php $args = array( 'menu' => 'mainnav', 'container' => 'nav', 'container_id' => 'desktop-nav', 'menu_id' => false); wp_nav_menu($args); ?>
        </div>
        </header>