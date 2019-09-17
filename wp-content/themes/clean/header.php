<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean
 */

?>
    <!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <header id="fh5co-header" role="banner">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="navbar-header"><a href="javascript:void(0)"
                                                      class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block"
                                                      data-toggle="collapse" data-target="#fh5co-navbar"
                                                      aria-expanded="false" aria-controls="navbar"><i></i></a> <a
                                    class="navbar-brand" href="https://www.free-css.com/free-css-templates">Clean</a>
                        </div>
                        <div id="fh5co-navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="https://www.free-css.com/free-css-templates"><span>Home <span
                                                    class="border"></span></span></a></li>
                                <li><a href="right-sidebar.php"><span>Right Sidebar <span class="border"></span></span></a>
                                </li>
                                <li class="active"><a href="left-sidebar.php"><span>Left Sidebar <span
                                                    class="border"></span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<div id="fh5co-main">
    <div class="fh5co-intro text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="intro-lead">Left Sidebar Page</h1>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
    </div>


<?php if (false): ?>
    <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'clean'); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if (is_front_page() && is_home()) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                          rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                         rel="home"><?php bloginfo('name'); ?></a></p>
            <?php
            endif;
            $clean_description = get_bloginfo('description', 'display');
            if ($clean_description || is_customize_preview()) :
                ?>
                <p class="site-description"><?php echo $clean_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'clean'); ?></button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
            ));
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
<?php endif; ?>