<?php mesmerize_get_header(); ?>
<template>
    <div class="alle_container">
        <img id="billede" src="" alt="">
    </div>
</template>
<main>
    <section class="sponsorer_container"> </section>
    <div id="sponsorer_wrapper">

        <img class="pil slide" src="<?php echo get_stylesheet_directory_uri()?>/img/pil2.png" alt="pil">
        <img class="pil_back" src="<?php echo get_stylesheet_directory_uri()?>/img/pil_back.png" alt="pil">

    </div>

    <section id="omos_wrapper">
        <h2>OM FREDERIKSSUND ESPORT</h2>
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

    <section id="gratis_wrapper">
        <button>FÅ EN GRATIS PRØVETIME</button>
    </section>

    <section id="spil_wrapper">
        <h2>SPIL</h2>
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
    let sponsorer;

    const dbUrl = "http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/wp-json/wp/v2/sponsor?per_page=100";

    async function getJson() {
        const data = await fetch(dbUrl);
        sponsorer = await data.json();
        console.log("sponsorer: ", sponsorer);

        visSponsorer();

    }

    function visSponsorer() {
        console.log("visSponsorer");
        sponsorer.reverse()
        const container = document.querySelector(".sponsorer_container");
        const template = document.querySelector("template");
        sponsorer.forEach(sponsor => {
            let klon = template.cloneNode(true).content;

            klon.querySelector("#billede").src = sponsor.sponsor.guid;
            klon.querySelector("#billede").addEventListener("click", () => visDetaljer(sponsor));

            container.appendChild(klon);


        })
    }

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
