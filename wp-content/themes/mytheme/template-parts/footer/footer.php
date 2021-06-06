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
                <h4>Kontakt Os</h4>
                <p>Formand: Søren Weimann <br>
                    Elmegårdvej 1A, Tørslev<br>
                    3630 Jægerspris<br>
                    saw@frederikssundesport.dk<br>
                    Tlf. 4029 7560<br>
                    CVR-nr. 41069325<br>
                </p>
            </div>

            <div id="nyttige" class="margin_bottom center">
                <h4>Nyttige Links</h4>
                <a href="http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/om-os/">Om Os</a><br>
                <a href="http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/kalender/#NYHEDER">Nyheder</a><br>
                <a href="http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/hold-oversigt/">Hold</a><br>
                <a href="http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/shop/">Shop</a><br>
            </div>

            <div id="follow" class="margin_bottom center">
                <h4>Følg Os</h4>
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
        background: rgb(111, 111, 111);
        background: linear-gradient(180deg, rgba(111, 111, 111, 1) 0%, #1f1f1f 100%);
        text-align: left !important;
        margin-top: 100px;
    }

    .footer_wrapper {
        padding: 20px;
    }

    .footer-simple .footer-content {
        padding-top: 0px;
        padding-bottom: 0px;
        border-top: 0px;
    }

    .footer_wrapper p {
        color: white !important;
        font-family: 'Work Sans', sans-serif;
        font-weight: normal;
        font-size: 1rem;
        text-align: left;
        text-align: center !important;
        font-size: 1rem;
        padding: 0;
        margin: 0;
        color: white;

    }

    .footer_wrapper a {
        color: white !important;
        font-family: 'Work Sans', sans-serif;
        font-weight: normal;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
    }

    .footer_wrapper h4 {
        color: white !important;
        font-family: 'Oswald', sans-serif !important;
        font-weight: bold !important;
        font-size: 1.4rem;
        margin-bottom: 40px;

    }

    #some img {

        width: 15vw;
        height: 15vw;
        padding: 10px;
        cursor: pointer;
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

        .footer {
            margin-top: 300px;
        }

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
            width: 50px;
            height: 50px;
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

        .footer a:hover {
            color: #00CBF5 !important;
        }


    }

</style>
