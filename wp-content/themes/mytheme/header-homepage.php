<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
    <?php mesmerize_print_skip_link(); ?>
    <div id="page-top" class="header-top homepage">
        <?php mesmerize_print_header_top_bar(); ?>

        <?php mesmerize_get_navigation(); ?>
        <div id="logo_container">
            <a href="http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/"><img src="<?php echo get_stylesheet_directory_uri()?>/img/raven.jpg" alt="raven" id="logo"></a>
        </div>

    </div>


    <div id="page" class="site">

        <?php mesmerize_print_hero(); ?>



        <style>
            .navigation-bar.coloured-nav {
                background: linear-gradient(90deg, rgba(10, 0, 7, 1) 0%, rgba(51, 16, 40, 1) 35%, rgba(126, 12, 91, 1) 50%, rgba(51, 16, 40, 1) 65%, rgba(10, 0, 7, 1) 100%);
                z-index: 100 !important;
            }

            #logo_container {
                display: flex;
                justify-content: center;
            }

            #logo {
                width: 150px;
                margin-top: -90px;
                z-index: 100;
                position: fixed;
                margin-left: -90px;
            }

            .main_menu_col {
                justify-content: center;
            }

            #main_menu {}

            #menu-item-40 {
                margin-right: 200px;
            }

            #menu-item-43 {
                margin-left: 200px;
            }

            .logo_col {
                display: none;
            }

            #main_menu a {
                font-size: 1.5rem;
                padding-left: 20px;
                padding-right: 20px;
            }

            @media only screen and (max-width: 600px) {

                #logo {
                   display: none;
                }

                .main_menu_col {
                    justify-content: flex-end;
                }

                .logo_col {
                    display: block;
                }
            }

        </style>
