<div <?php echo mesmerize_footer_container('footer-simple') ?>>
    <div <?php echo mesmerize_footer_background('footer-content center-xs') ?>>
        <div class="footer_wrapper">
            <!--
	        <div class="row middle-xs footer-content-row">
	            <div class="footer-content-col col-xs-12">

	            </div>
	        </div>
-->

            <div id="kontakt_wrapper" class="margin_bottom center">
                <h3>Kontakt Os</h3>
                <p>Formand: Søren Weimann <br>
                    Elmegårdvej 1A, Tørslev<br>
                    3630 Jægerspris<br>
                    saw@frederikssundesport.dk<br>
                    Tlf. 4029 7560<br>
                    CVR-nr. 41069325<br>
                </p>
            </div>

            <div id="nyttige" class="margin_bottom center">
                <h3>Nyttige Links</h3>
                <a href="">Om Os</a><br>
                <a href="">Nyheder</a><br>
                <a href="">Hold</a><br>
                <a href="">Shop</a><br>
            </div>

            <div id="follow" class="margin_bottom center">
                <h3>Følg Os</h3>
                <div id="some">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/icons/face.png" alt="facebook">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/icons/dis.png" alt="discord">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/icons/inst.png" alt="instergram">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/icons/tick.png" alt="tiktok">
                </div>
            </div>

            <div>

            </div>
        </div>
    </div>
</div>
<style>
    div:before,
    ul:before,
    article:before,
    aside:before,
    details:before,
    figcaption:before,
    figure:before,
    footer:before,
    header:before,
    hgroup:before,
    menu:before,
    nav:before,
    section:before,
    div:after,
    ul:after,
    article:after,
    aside:after,
    details:after,
    figcaption:after,
    figure:after,
    footer:after,
    header:after,
    hgroup:after,
    menu:after,
    nav:after,
    section:after {
        display: none;
    }

    .footer {
        /*
        width: 100%;
        max-width: 100%;
*/
        background: rgb(111, 111, 111);
        background: linear-gradient(180deg, rgba(111, 111, 111, 1) 0%, rgba(72, 72, 72, 1) 100%);
        text-align: left !important;

    }

    .footer_wrapper p {
        color: white !important;
        font-family: 'Oswald', sans-serif;
        font-weight: lighter;
        text-align: left;
        text-align: center !important;
        font-size: 1.5rem;
        line-height: 30px;
        padding: 0;
        margin: 0;
    }

    .footer_wrapper a {
        color: white !important;
        font-family: 'Oswald', sans-serif;
        font-weight: lighter !important;
        font-size: 1.5rem;
        line-height: 30px;
    }

    .footer_wrapper h3 {
        color: white !important;
        font-family: 'Oswald', sans-serif !important;
        font-weight: bold !important;
        font-size: 1.5rem;

    }

    #some img {

        width: 15vw;
        height: 15vw;
        padding: 10px;
    }

    .margin_bottom {
        margin-bottom: 50px;
    }

    .center {
        text-align: center;
    }

    #some {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    @media only screen and (min-width:600px) {

        .footer_wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 50px;

        }



        .footer_wrapper p {
            text-align: left !important;
        }

        .footer_wrapper a {
            text-align: left;
        }

        #some img {
            margin-top: 20px;
            width: 100px;
            height: 100px;
            padding: 0;
            margin: 0;

        }

        #some {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        #kontakt_wrapper {
            place-self: center;
        }

        #nyttige {
            place-self: center;
        }

        #follow {
            place-self: center;
        }

        .margin_bottom {
            margin-bottom: 0px;
        }

        h3 {
            margin-bottom: 50px;
        }


    }

</style>
