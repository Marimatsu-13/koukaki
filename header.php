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
	<header>
        <div class="burger">
                    <span class="bar1"></span>
                    <span class="bar"></span>
                    <span class="bar2"></span>
        </div>
        <nav id="site-navigation" class="main-navigation">
            <ul class="menu-navigation">
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                <li class="hide"><a href="#story">Histoire</a></li>
                <li class="hide"><a href="#characters">Personnages</a></li>
                <li class="hide"><a href="#place">Lieu</a></li>
                <li class="hide"><a href="#studio">Studio Koukaki</a></li>
                <img class="background hide black-cat" src="\wp-content\themes\foce-child\images\Black-cat.png">
                <img class="background hide blue-cat" src="\wp-content\themes\foce-child\images\Blue-cat.png">
                <img class="background hide orange-cat" src="\wp-content\themes\foce-child\images\Orange-cat.png">
                <img class="background2 hide sunflower" src="\wp-content\themes\foce-child\images\Sunflower.png">
                <img class="background2 hide flower" src="\wp-content\themes\foce-child\images\Flower.png">
            </ul>
            
		</nav><!-- #site-navigation -->
    
	</header><!-- #masthead -->
