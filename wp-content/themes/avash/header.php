<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avash
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="wrapper">
	
<div id="header" class="sticky clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<!-- <li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li> -->
							<!-- /SEARCH -->

							

						</ul>
						<!-- /BUTTONS -->


						<!-- Logo -->
						<a class="logo pull-left" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							
						<!-- <h1>g'day mate!</h1> -->
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gday.jpg" alt="...">
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<span class="topMain-icon">
												<i class="et-globe"></i>
												HOME
											</span>
										</a>
										
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="<?php echo get_permalink( get_page_by_path( 'about-me' ) ) ?>">
											<span class="topMain-icon">
												<i class="et-profile-male"></i>
												WHO AM I
											</span>
										</a>
										
									</li>
									
									<!-- <li class="dropdown mega-menu">
										<a class="dropdown-toggle" href="<?php echo get_permalink( get_page_by_path( 'what-i-have-done' ) ) ?>">
											<span class="topMain-icon">
												<i class="et-target"></i>
												WHAT I'VE DONE
											</span>
										</a>
										
									</li> -->
									<!-- <li class="dropdown">
										<a class="dropdown-toggle" href="#">
											<span class="topMain-icon">
												<i class="et-browser"></i>
												BLOG
											</span>
										</a>
										
									</li> -->
									 <li class="dropdown">
										<a class="dropdown-toggle" href="<?php echo get_permalink( get_page_by_path( 'places' ) ) ?>">
											<span class="topMain-icon">
												<i class="et-bike"></i>
												WHERE I'VE BEEN
											</span>
										</a>
										
									</li> 
									<li class="dropdown"><!-- BLOG -->
										<a class="dropdown-toggle" href="<?php echo get_permalink( get_page_by_path( 'contact-me' ) ) ?>">
											<span class="topMain-icon">
												<i class="et-chat"></i>
												CONTACT ME
											</span>
										</a>
										
									</li>
									
									
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			

					<?php


					if(is_home() || is_front_page() ):
					 

else: ?>

<section class="page-header">
				<div class="container">

					<h1><?php if(is_archive()) echo the_archive_title(); else echo the_title(); ?></h1>
					<?php

if ( function_exists('yoast_breadcrumb') ) 
{
	yoast_breadcrumb('<div class="breadcrumb">','</div>');

}

?>

</div>
			</section>

<?php endif; ?>

				