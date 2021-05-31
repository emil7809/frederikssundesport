<?php mesmerize_get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">



        <article>
            <img src="" alt="" id="img">
            <div>
                <h2></h2>
                <p class="tekst"></p>
                <p class="pris"></p>
                <button>Tilbage</button>
            </div>
        </article>

    </main>
    <script>
        let hold;
        const dbUrl = "http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/wp-json/wp/v2/hold/" + <?php echo get_the_ID() ?>;

        async function getJson() {
            const data = await fetch(dbUrl);
            hold = await data.json();
            console.log(hold);
            visHold();
        }

        function visHold() {
            document.querySelector("h2").textContent = hold.hold;
            document.querySelector("#img").src = hold.billede.guid;
            document.querySelector(".tekst").textContent = hold.beskrivelse;
            document.querySelector("button").addEventListener("click", tilbage);
        }

        function tilbage() {
            window.history.back();
        }

        getJson();

    </script>


</section><!-- #primary -->

<?php get_footer(); ?>
