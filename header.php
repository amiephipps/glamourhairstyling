<?php
/**
 * The header template
 *
 * @package master_theme
 */
?>
 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
   <meta charset="<?php bloginfo( "charset" ); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="author" href="humans.txt" />
   <title><?php wp_title( '|', true, 'right' ); ?></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
   <?php wp_head(); // Lets other plugins and files tie into our theme's <head>?>
</head>
 
<body <?php body_class(); ?>>

   <header id="home">
      <a href="#main" class="screen-reader-text" id="skiptomain"><?php esc_html_e('Skip to content', 'master_theme'); ?></a>

      <div class="banner" role="banner">
         
         <h1 class="logo">
            <a href="<?php echo esc_url( home_url( "/" ) ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
               <?php bloginfo( "name", 'display' ); ?>
            </a>
         </h1>
         
         <p>705-888-9999</p>
         
         <nav role="navigation">
            <i class="fa fa-bars fa-3x hamburger"></i>
            <ul class="siteMenu">
               <li><a href="#home" class="smoothScroll">Home</a></li>
               <li><a href="#services"  class="smoothScroll">Services</a></li>
               <li><a href="#about"  class="smoothScroll">About</a></li>
               <li><a href="#contact"  class="smoothScroll">Contact</a></li>
            </ul>
         </nav>  

      </div>

      <img src="<?php bloginfo('template_url'); ?>/assets/hair1.jpg" alt="">

   </header><!--  header -->