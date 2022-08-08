<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <style type="text/css">
        html {
            margin: 0 !important;
        }
    </style>
    <style type="text/css">
        .scroll-top {
          position: fixed;
          bottom: 15px;
          right: 15px;
          width: 35px;
          height: 28px;
          background-color: #BDBFC1;
          text-align: center;
          padding: 4px 0px 5px 0px;
          -webkit-transition: background-color 0.4s linear;
          -moz-transition: background-color 0.4s linear;
          -ms-transition: background-color 0.4s linear;
          -o-transition: background-color 0.4s linear;
          transition: background-color 0.4s linear;
        }
        .scroll-top:hover {
          background-color: #F97218;
        }
        .scroll-top a {
          color: #fff;
        }
    </style>
</head>

<body <?php body_class(); ?>>
   <div class="header">
       <div class="center-wr">
           <div class="clearfix">
               <div class="header-logo">
                   <a href="#" >
                       <img src="/assets/images/logo.png" />
                   </a>
                   <?php // the_custom_logo(); ?>
               </div> <!-- End of Header Logo -->
               <div class="header-navigation-menu">
                   <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                   <button>Contact Us</button>
               </div> <!-- End of Header navigation menu -->
               <div class="responsvie-nav-menu">
                  <a href="javascript:void(0);" class="responsive-icon">
                      <i class="fa fa-bars"></i>
                  </a>    
                  <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
               </div> <!-- Menu for responsive -->
           </div> <!-- End of clearfix -->
       </div> <!-- End of Center-wr -->
   </div> <!-- End of Header Class and Division -->
       
