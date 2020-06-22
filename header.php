<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bioland
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand p-0">
                <?php if ($_SERVER['REQUEST_URI'] !== null) { ?>
                    <div class="navbar-brand">
                        <img src = "<?php echo  get_template_directory_uri() . '/assets/ASIK-LOGO-fix.png' ?>" alt="Logo" class="h-25 w-25 mt-2" >
                    </div>
                <?php } ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
        <?php endif; ?>