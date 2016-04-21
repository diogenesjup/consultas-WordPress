<!--
#
# DIOGENES OLIVEIRA DOS SANTOS JUNIOR
# WWW.DIOGENESJUNIOR.COM.BR
# CONTATO@DIOGENESJUNIOR.COM.BR
# 
-->
<!DOCTYPE html>
<html lang="pt-br"><head>
<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) {
  function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
  }
  add_action( 'wp_head', 'theme_slug_render_title' );
}
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   


<!-- FAVICON -->
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.jpg">    

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" media="all" />  
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-theme.css" media="all" />                 

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />

<link rel="stylesheet" type="text/css" media="(min-width: 481px) and (max-width: 1200px)" href="<?php bloginfo('stylesheet_directory'); ?>/css/tablet.css" />
<link rel="stylesheet" type="text/css" media="(max-width: 480px)" href="<?php bloginfo('stylesheet_directory'); ?>/css/phone.css" />

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


</head>
<body>
<!-- FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=568662526484663";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FACEBOOK -->



<!-- HEADERS -->
<!-- MENU MOBILE -->
    <nav class="navbar navbar-inverse navbar-fixed-top hidden-lg hidden-md" role="navigation" style="z-index:9999;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menu</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                <li><a href="<?php echo get_option('home'); ?>/quem-somos">Quem Somos</a></li>
                <li><a href="<?php echo get_option('home'); ?>/agenda-quintal-sete-cores">Agenda</a></li>
                <li><a href="<?php echo get_option('home'); ?>/atividades">Atividades</a></li>
                <li><a href="<?php echo get_option('home'); ?>/galeria-de-fotos">Galeria de Fotos</a></li>
                <li><a href="<?php echo get_option('home'); ?>/eventos-corporativos">Eventos Corporativos</a></li>
                <li><a href="<?php echo get_option('home'); ?>/contato">Contato</a></li>
              

                </ul>
            </div>
        </div>
    </nav>
<!-- MENU MOBILE -->
<header>
  
  <div class="container">
    <div class="row">

        <!-- LOGO -->
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 logo-desktop">
        <a href="<?php echo get_option('home'); ?>/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" alt="Quintal Sete Cores" alt="Quintal Sete Cores Logo" /<
        </a>
      </div>
      <!-- LOGO -->

      <!-- MENU DESKTOP -->
            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 menu-desktop">
                <div class="social">
                    <a href="#"><img id="social-one" src="<?php bloginfo('stylesheet_directory'); ?>/images/en.jpg" alt="en" /></a>
                    <a href="#"><img id="social-two" src="<?php bloginfo('stylesheet_directory'); ?>/images/pt.jpg" alt="pt" /></a>
                    <a href="#"><img id="social-facebook" src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.jpg" alt="Facebook Quintal Sete Cores" /></a>
                    <a href="#"><img id="social-instagram" src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram.jpg" alt="Instagram Quintal Sete Cores" /></a>
                </div>
              <ul>
                <li><a href="<?php echo get_option('home'); ?>/" <?php if(is_front_page()): ?>class="menu-ativo"<?php endif; ?>>Home</a></li>
                <li><a href="<?php echo get_option('home'); ?>/quem-somos" <?php if(is_page("quem-somos")): ?>class="menu-ativo"<?php endif; ?>>Quem Somos</a></li>
                <li><a href="<?php echo get_option('home'); ?>/agenda-quintal-sete-cores/" <?php if(is_page("agenda-quintal-sete-cores")): ?>class="menu-ativo"<?php endif; ?>>Agenda</a></li>
                <li><a href="<?php echo get_option('home'); ?>/atividades" <?php if(is_page("atividades")): ?>class="menu-ativo"<?php endif; ?>>Atividades</a></li>
                <li><a href="<?php echo get_option('home'); ?>/galeria-de-fotos" <?php if(is_page("galeria-de-fotos")): ?>class="menu-ativo"<?php endif; ?>>Galeria de Fotos</a></li>
                <li><a href="<?php echo get_option('home'); ?>/eventos-corporativos" <?php if(is_page("eventos-corporativos")): ?>class="menu-ativo"<?php endif; ?>>Eventos Corporativos</a></li>
                <li><a href="<?php echo get_option('home'); ?>/contato" <?php if(is_page("contato")): ?>class="menu-ativo"<?php endif; ?>>Contato</a></li>
              </ul>
            </div>
      <!-- MENU DESKTOP -->

    </div>
  </div>



</header>
<!-- HEADERS -->