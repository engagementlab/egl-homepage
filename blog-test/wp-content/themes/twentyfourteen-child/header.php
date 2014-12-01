<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta property='og:title' content='Engagement Game Lab'>
	<meta property='og:description' content='We are an applied research lab at Emerson College that designs and studies playful approaches for civic engagement.'>
	<meta property='og:image' content='http://engagementgamelab.org/img/other/EGL_logo.png'>
	<meta name='author' content='Engagement Game Lab'>
	<meta name='keywords' content='EGL, Engagement Game Lab, Boston, Massachusetts, games, data visualization, civic engagement, research, social, gamification, social games, games for change'>
	<meta name='distribution' content='web'>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--< ?php wp_head(); ?>-->
	<link href='/css/custom-boostrap.css' rel='stylesheet'>
	<link href='/css/responsive-nav.css' rel='stylesheet'>
	<link href='/css/email-signup.css' rel='stylesheet'>
	<script type="text/javascript" src="//use.typekit.net/rgv4yci.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-41820986-1', 'engagementgamelab.org');
	  ga('send', 'pageview');
	</script>
</head>

<body <?php body_class(); ?>>
	<div class="wrap">
		<div class='navbar navbar-fixed-top'>   
			<div class='navbar-inner'>
				<div class='container-fluid'>
						<button type='button' class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<p class='tagline'>
						Researching and Designing Playful Civic Engagement 
					</p>
					<a class='brand' href='/'><img src='/img/other/EGL_logo.png'></a>
					<div class='nav-collapse collapse'>
						<ul class='nav'>
							<li class='dropdown'>
								<a href='/games' class='dropdown-toggle disabled' data-toggle='dropdown'>GAMES</a>
								<ul class='dropdown-menu'>
									<li><a data-target='#' href='/games/community-planit'>COMMUNITY PLANIT</a>
									<li><a data-target='#' href='/games/civic-seed'>CIVIC SEED</a></li>
									<li><a data-target='#' href='/games/riskhorizon'>RISK HORIZON</a></li>
									<li><a data-target='#' href='/games/participatory-chinatown'>PARTICIPATORY CHINATOWN</a></li>
									<li><a data-target='#' href='/games/@stake'>@STAKE</a></li>
									<li><a data-target='#' href='/games/upriver'>UPRIVER</a></li>
						            <li><a data-target='#' href='/games/bodaboda'>BODA-BODA</a></li>
									<li><a data-target='#' href='/games/hub2'>HUB2</a></li>
									<!-- <li><a data-target='#' href='/games/student-projects'>STUDENT PROJECTS</a></li> -->
								</ul>
							</li>
							<li class='dropdown'>
								<a href='/learning' class='dropdown-toggle disabled' data-toggle='dropdown'>LEARNING</a>
								<ul class='dropdown-menu'>
									<li><a data-target='#' href='/learning/#workshop'>WORKSHOPS AND TRAINING</a>
									<li><a data-target='#' href='/learning/#courses'>COURSES</a></li>
									<li><a data-target='#' href='/learning/#resources'>RESOURCES</a></li>
									<li><a data-target='#' href='/learning/#guidebooks'>GUIDEBOOKS</a></li>
								</ul>
							</li>
							<li class='dropdown'>
								<a href='/initiatives' class='dropdown-toggle disabled' data-toggle='dropdown'>INITIATIVES</a>
								<ul class='dropdown-menu'>
									<li><a data-target='#' href='/initiatives/#medialit'>MEDIA LITERACY & GLOBAL CHANGE</a></li>
									<li><a data-target='#' href='/initiatives/#engagementgames'>ENGAGEMENT GAMES</a></li>
									<li><a data-target='#' href='/initiatives/#civictech'>CIVIC TECHNOLOGY</a></li>
									
								</ul>
							</li>
							<li class='dropdown'>
								<a href='/research' class='dropdown-toggle disabled' data-toggle='dropdown'>RESEARCH</a>
								<ul class='dropdown-menu'>
									<li><a data-target='#' href='/research/#articles'>RESEARCH AREAS</a></li>
									<li><a data-target='#' href='/research/#books'>BOOKS</a></li>
									<li><a data-target='#' href='/blog'>BLOG</a></li>
									<!--<li><a data-target='#' href='/research/#reports'>REPORTS</a></li>-->
								</ul>
							</li>
							<li class='dropdown'>
								<a href='/about' class='dropdown-toggle disabled' data-toggle='dropdown'>ABOUT</a>
								<ul class='dropdown-menu'>
									<li><a data-target='#' href='/about/#whatwedo'>WHAT WE DO</a></li>
									<li><a data-target='#' href='/about/#people'>PEOPLE</a></li>
									<li><a data-target='#' href='/about/#press'>PRESS</a></li>
									<li><a data-target='#' href='/about/#partners'>PARTNERS</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<div class="header-main">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<div class="search-toggle">
					<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
				</div>

				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
			</div>

			<div id="search-container" class="search-box-wrapper hide">
				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
