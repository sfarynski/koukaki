<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <ul class="nav-menu">
                <li class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </li>
                
            </ul>
            <div id="menu_burger" class="nav_burger">
                <ul class="burger">
                    <a id="closeBtn" href="#" class="close">×</a>
                    <!-- ajout de l'image du logo -->
                    <img class="logo_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_burger.png'; ?>" alt="logo Fleurs d'oranger &amp; chats errants">
                    <!-- ajout de l'image de l'orchidé violette -->
                    <img class="orchid_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="image d'une orchidé violette">
                    <!-- ajout de l'image du chat bleu -->
                    <img class="chat_bleu_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat_bleu_burger.png'; ?>" alt="image d'un chat bleu">
                    <!-- ajout de l'image de marguerite -->
                    <img class="marguerite_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/sunflower_burger.png'; ?>" alt="image d'une marguerite">
                    <!-- ajout de l'image de fleur -->
                    <img class="random_flower_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower_burger.png'; ?>" alt="image d'une fleur">
                    <!-- début de mes liens du menu -->
                        <li class="story_burger title_anim"><a class="lien_burger" href="#story">Histoire</a></li>
                        <li class="title_anim"><a class="lien_burger" href="#characters">Personnages</a></li>
                        <li class="lieu_burger title_anim"><a class="lien_burger" href="#place">Lieu</a></li>
                        <li class="studio_burger title_anim"><a class="lien_burger" href="#studio">Studio Koukaki</a></li>
                    <!-- ajout de l'image de la fleur orange -->
                    <img class="flower_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower_burger.png'; ?>" alt="image d'une fleur orange">
                    <!-- ajout de l'image du chat gris -->
                    <img class="chat_gris_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat_gris_burger.png'; ?>" alt="image d'un chat gris">
                    <!-- ajout de l'image du chat roux -->
                    <img class="chat_roux_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat_roux_burger.png'; ?>" alt="image d'un chat roux">
                    <!-- ajout de l'image de la fleur hibiscus -->
                    <img class="hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus.png'; ?>" alt="image d'une fleur hibiscus">
                    <!-- ajout de de l'image studio koukaki -->
                    <img class="title_logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/studio_koukaki_burger.png'; ?>" alt="logo Studio Koukaki">
                </ul>
            </div>
            <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
