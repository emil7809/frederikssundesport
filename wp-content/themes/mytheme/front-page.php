<?php mesmerize_get_header(); ?>

<main>

    <div id="sponsorer_wrapper">

        <div class="sponsorer_container">
            <div class="img_cont"><img src="<?php echo get_stylesheet_directory_uri()?>/img/sponsorer/asetek.png" alt="aitaexchange"></div>
            <div class="img_cont"><img src="<?php echo get_stylesheet_directory_uri()?>/img/sponsorer/ditaexchange.png" alt="ditaexchange"></div>
            <div class="img_cont"><img src="<?php echo get_stylesheet_directory_uri()?>/img/sponsorer/lokalbolig.png" alt="lokalbolig"></div>
            <div class="img_cont"><img src="<?php echo get_stylesheet_directory_uri()?>/img/sponsorer/sandberg.png" alt="sandberg"></div>
            <div class="img_cont"><img src="<?php echo get_stylesheet_directory_uri()?>/img/sponsorer/hardortopsoe.png" alt="hardortopsoe"></div>
            <div class="img_cont"><img src="<?php echo get_stylesheet_directory_uri()?>/img/sponsorer/minorsupport.png" alt="minorsupport"></div>
            <div class="img_cont"><img src="<?php echo get_stylesheet_directory_uri()?>/img/sponsorer/skolen_bifrost.png" alt="skolen_bifrost"></div>
        </div>

        <img class="pil slide" src="<?php echo get_stylesheet_directory_uri()?>/img/pil2.png" alt="pil">
        <img class="pil_back" src="<?php echo get_stylesheet_directory_uri()?>/img/pil_back.png" alt="pil">

    </div>

    <section id="omos_wrapper">
        <h2>VELKOMMEN TIL <br> FREDERIKSSUND ESPORT</h2>
        <div class="omos_container">
            <div class="col1">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        <br>
                    </p>
                </div>

                <div class="p2">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>

            <div class="col2">
                <img class="img1" src="<?php echo get_stylesheet_directory_uri()?>/img/billiede1.png" alt="billede1">
                <img class="img2" src="<?php echo get_stylesheet_directory_uri()?>/img/billiede2.png" alt="billede2">
            </div>

        </div>

    </section>

    <section id="youtube">
        <iframe src="https://www.youtube.com/embed/4In7oSxCiM0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <section id="gratis_wrapper">
        <h2>FÅ EN GRATIS <br>PRØVETIME</h2>
        <button>TILMELD DIG</button>
    </section>

    <section id="spil_wrapper">
        <h2>VORES SPIL</h2>
        <div class="line"></div>
        <div id="spil">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/csgo.jpg" alt="csgo">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/fortnite.jpg" alt="fortnite">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/lol.jpg" alt="lol">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/overwatch.jpg" alt="overwatch">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/rainbow.jpg" alt="rainbow">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/valo.jpg" alt="valorant">
        </div>
    </section>

</main>





<script>
    //---------SCROLL VED KLIK-----------

    //---første pil
    document.querySelector(".pil").onclick = function() {
        document.querySelector(".sponsorer_container").scrollLeft += 1100;
    };

    document.querySelector(".pil_back").onclick = function() {
        document.querySelector(".sponsorer_container").scrollLeft -= 1100;
    };

    getJson();

</script>

<?php get_footer(); ?>
