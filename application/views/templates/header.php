<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title?></title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo base_url(); ?>js/jquery-1.11.0.min.js"></script>
        
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> 
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
        </script>
        <meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
	</script>
    </head>
    <body>
        <!-- //end-smoth-scrolling -->
        <!--header start here-->
        <div class="header">
          <div class="container">
            <div class="header-main">
              <div class="logo">
                <a href="<?=base_url();?>floreria">
                  <img src="<?php echo base_url(); ?>images/logo.png" alt="" title="">
                </a>
              </div>
              <div class="head-right">
                <div class="top-nav">
                  <span class="menu">
                    <img src="<?php echo base_url(); ?>images/icon.png" alt="" /></span>
                  <ul class="res">
                    <li><a class="<?=($this->uri->segment(1)==='floreria')?'active':''?>" href="<?=base_url();?>floreria">Home</a></li>
                    <li><a class="<?=($this->uri->segment(1)==='about')?'active':''?>" href="<?=base_url();?>about">Nosotros</a></li>
                    <li><a class="<?=($this->uri->segment(1)==='blog')?'active':''?>" href="<?=base_url();?>blog">Blog</a></li>
                    <li><a class="<?=($this->uri->segment(1)==='contact')?'active':''?>" href="<?=base_url();?>contact">Contacto</a></li>
                    <div class="clearfix">
                    </div>
                  </ul>
                  <!-- script-for-menu -->

                  <script>
                  $( "span.menu" ).click(function() {
                          $( "ul.res" ).slideToggle( 300, function() {
                          // Animation complete.
                       });
                  });
                  </script>

                  <!-- /script-for-menu -->
                </div>
                <div class="social">
                  <ul>
                    <li><a class="fa" href="https://www.facebook.com/pages/Donaji-Boutique-Floral/1406381856308855?fref=ts"></a></li>
                    <li><a class="tw" href="https://www.twitter.com/donajifloral"></a></li>
                    <li><a class="p" href="https://www.pinterest.com/malidonaji"></a></li>
                  </ul>
                </div>
                <div class="search-box">
                  <div id="sb-search" class="sb-search">
                    <form>
                    <input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="buscar">
                    <span class="sb-icon-search"></span>
                    </form>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                <!-- search-scripts -->
                <script src="<?php echo base_url(); ?>js/classie.js"></script>
                <script src="<?php echo base_url(); ?>js/uisearch.js"></script>
                <script>
                      new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts -->
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
        </div>
        <!--header end here-->
