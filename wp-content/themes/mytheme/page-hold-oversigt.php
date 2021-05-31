<?php mesmerize_get_header(); ?>

<main>

    <div class="line"></div>

    <div class="oversigt_txt">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>

    <div class="line"></div>

    <nav id="filtrering"><button data-hold="alle">Alle</button></nav>

</main>
<section id="hold_container"></section>

<template>
    <article>
        <img src="" alt="">
        <p class="tekst"></p>
    </article>
</template>

<script>
    let holdd;
    let categories;
    let filterHold = "alle";

    const dbUrl = "http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/wp-json/wp/v2/hold?per_page=100";
    const catUrl = "http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/wp-json/wp/v2/categories";

    async function getJson() {
        const data = await fetch(dbUrl);
        const catdata = await fetch(catUrl);

        holdd = await data.json();
        categories = await catdata.json();

        console.log(holdd);
        console.log(categories);

        visHoldd();
        opretKnapper();
    }

    function opretKnapper() {
        categories.forEach(cat => {
            document.querySelector("#filtrering").innerHTML += `<button class="filter" data-hold="${cat.id}">${cat.name}</button>`;


        })

        buttonsClick();
    }

    function buttonsClick() {
        document.querySelectorAll("#filtrering button").forEach(elm => {
            elm.addEventListener("click", filtrering);
        })
    }

    function filtrering() {
        filterHold = this.dataset.hold;
        visHoldd();
    }

    function visHoldd() {
        let temp = document.querySelector("template");
        let container = document.querySelector("#hold_container");
        container.innerHTML = "";
        holdd.forEach(hold => {
            if (filterHold == "alle" || hold.categories.includes(parseInt(filterHold))) {
                let klon = temp.cloneNode(true).content;
                klon.querySelector("img").src = hold.billede.guid;
                klon.querySelector(".tekst").textContent = hold.beskrivelse;
                klon.querySelector("article").addEventListener("click", () => {
                    location.href = hold.link;
                })
                container.appendChild(klon);
            }
        })

    }

    getJson();

</script>


<?php get_footer(); ?>
