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
            <a href="http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/"><img src="<?php echo get_stylesheet_directory_uri()?>/img/logo_white.png" alt="logo" id="logo"></a>
        </div>

    </div>


    <div id="page" class="site">

        <?php mesmerize_print_hero(); ?>



        <style>
            .navigation-bar.coloured-nav {
                background: rgb(10, 0, 7);
                background: linear-gradient(270deg, rgba(10, 0, 7, 1) 0%, rgba(38, 39, 39, 1) 35%, rgba(80, 80, 80, 1) 50%, rgba(38, 39, 39, 1) 65%, rgba(10, 0, 7, 1) 100%);
                z-index: 80 !important;
                height: 100px;
            }

            #logo_container {
                display: flex;
                justify-content: center;
            }

            #logo {
                width: 150px;
                margin-top: -90px;
                z-index: 80;
                position: fixed;
                margin-left: -90px;
            }

            .main_menu_col {
                justify-content: center;
            }


            #menu-item-43 {
                margin-right: 200px;
            }

            #menu-item-40 {
                margin-left: 200px;
            }



            .logo_col {
                display: none;
            }

            #main_menu .active-line-bottom .main-menu .dropdown-menu a {
                font-size: 1rem;
                padding-left: 20px;
                padding-right: 20px;
            }



            ul.dropdown-menu ul {
                background-color: black !important;
            }


            ul.dropdown-menu ul a:hover {
                color: #00CBF5 !important;
            }


            .offcanvas_menu li.open>a,
            .offcanvas_menu li.open>a:hover {
                background-color: black;
                color: #00CBF5;
                border-left: 3px solid #00CBF5;
            }

            #offcanvas-wrapper {
                background-color: #262727;
            }

            .main_menu_col [data-component="offcanvas"] i.fa {
                font-size: 3rem;
            }

            #main_menu a:hover {
                color: #00CBF5 !important;
            }


            @media only screen and (max-width: 800px) {

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

            @media only screen and (max-width: 1200px) {

                #menu-item-43 {
                    margin-right: 100px !important;
                }

                #menu-item-40 {
                    margin-left: 100px !important;
                }

            }

        </style>
