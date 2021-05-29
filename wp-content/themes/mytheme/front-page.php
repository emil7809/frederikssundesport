<?php mesmerize_get_header(); ?>

<main>
    <div id="sponsorer_wrapper">
        <section class="sponsorer_container">
            <img class="pil slide" src="<?php echo get_stylesheet_directory_uri()?>/img/pil2.png" alt="pil">
            <img class="pil_back" src="<?php echo get_stylesheet_directory_uri()?>/img/pil_back.png" alt="pil">
        </section>
    </div>

    <section id="omos_wrapper">

        <div id="omos_tekst">
            <h2>OM FREDERIKSSUND ESPORT</h2>
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    <br>
                </p>
            </div>

            <div>
                <p>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>

        </div>
        <div id="omos_billeder">
            <img class="img1" src="<?php echo get_stylesheet_directory_uri()?>/img/billiede1.png" alt="billede1">
            <img class="img2" src="<?php echo get_stylesheet_directory_uri()?>/img/billiede2.png" alt="billede2">
        </div>
    </section>

    <section id="gratis_wrapper">
        <button>FÅ EN GRATIS PRØVETIME</button>
    </section>

    <section id="spil">
        <h2>SPIL</h2>
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/csgo.jpg" alt="csgo">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/fortnite.jpg" alt="fortnite">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/lol.jpg" alt="lol">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/overwatch.jpg" alt="overwatch">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/rainbow.jpg" alt="rainbow">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/spil/valo.jpg" alt="valorant">
    </section>

</main>

<template>
    <div class="alle_container">
        <img id="billede" src="" alt="">
    </div>
</template>

<style>
    main {
        max-width: 1300px;
        margin: 0 auto;
        padding-right: 20px;
        padding-left: 20px;
        padding-bottom: 60px;
    }


    #sponsorer_wrapper {
        position: relative;
        overflow: hidden;
        width: 95vw;
    }

    .sponsorer_container {
        display: grid;
        grid-template-columns: repeat(10, 1fr);
        grid-gap: 30px;
        margin-top: 10px;
        overflow-x: scroll;
        scroll-behavior: smooth;
        margin-left: -30px;
        grid-gap: 10px;
        margin-left: 0px;
    }

    .podcast_container:before {
        display: none;
    }

    .alle_container {
        width: 350px;
    }

    #billede {
        width: 100%;
        cursor: pointer;
    }

    img {
        height: auto;
        max-width: 100%;
    }

    .pil {
        position: absolute;
        right: 10px;
        top: 45%;
        cursor: pointer;
    }

    .pil_back {
        position: absolute;
        left: 5px;
        top: 45%;
        cursor: pointer;
    }

    .alle_container {
        width: 350px;
    }

    .slide {
        animation-name: slide_kf;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    @keyframes slide_kf {
        0% {
            transform: translateX(0px);
        }

        100% {
            transform: translateX(-10px);
        }

    }

    @media only screen and (min-width: 600px) {

        #sponsorer_wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

    }

</style>

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
