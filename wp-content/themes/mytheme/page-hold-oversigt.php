<?php mesmerize_get_header(); ?>

<main>

    <h2 class="vores_hold">Vores Hold</h2>

    <div class="line top"></div>

    <div class="oversigt_txt">
        <p>Medlemskab af Frederikssund Esport koster 750,- kr. pr. halvår. Som en del af medlemskabet får du en klubtrøje. Den bestilles når kontingentet er betalt første gang. Du kan se klubtrøjen her. Yderligere klubtøj og -udstyr kan købes i vores shop hos Epparel, hvis du har lyst. Bemærk, at tøjet specialfremstilles, så der kan være op til 7 ugers leveringstid.
            <br>
            <br>
            Husk at du bliver medlem i Frederikssund Esport – ikke kunde. Vi er en forening med ulønnede frivillige, og vi forventer derfor, at alle medlemmer bidrager til klubben. Det kan f.eks. være med hjælp til istandsættelse af klublokaler, hjælp til vores LAN-arrangementer eller andre events. Som udgangspunkt regner vi med, at forældrene bidrager for medlemmer under 15 år, men I afgør naturligvis selv derhjemme, hvem der giver en hånd med.
            <br>
            <br>
            Men ambitionerne rækker videre end det. Hvis der er interesse for andre spil, så udvider vi gerne løbende i den udstrækning vi kan finde trænere og tid i lokaler og på udstyret. Og så håber vi også, at vi på et tidspunkt kan have både bredde og elitehold.
            <br>
            <br>
            OBS!
            Det er en forudsætning for at tilmelde sig et hold, at du selv har en konto til det pågældende spil.
        </p>
    </div>

    <nav id="filtrering"><button data-hold="alle" class="valgt">Alle</button></nav>


</main>
<section id="hold_container"></section>

<template>
    <article>
        <h2 class="vores_hold"></h2>
        <div class="line"></div>
        <img src="" alt="">
        <p class="tekst"></p>
    </article>
</template>

<script>

    // Variabler
    let holdd;
    let categories;
    let filterHold = "alle";

    //url til REST API
    const dbUrl = "http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/wp-json/wp/v2/hold?per_page=100";
    const catUrl = "http://emilyhoolahan.com/kea/10_eksamen/frederikssundesport/wp-json/wp/v2/categories";

    //Funktion der henter henter data fra fra REST API
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

    // funktion der opretter filtrerings knapper af 'cat'egories
    function opretKnapper() {
        categories.forEach(cat => {
            document.querySelector("#filtrering").innerHTML += `<button class="filter" data-hold="${cat.id}">${cat.name}</button>`;
        })
        buttonsClick();
    }

    //funktion der gør det muligt at klikke på de individuelle filtrerings knapperne
    function buttonsClick() {
        document.querySelectorAll("#filtrering button").forEach(elm => {
            elm.addEventListener("click", filtrering);
        })
    }

    // funktion der henter data på den knap der er blevet trykket, i prossesen filtrere den data fra de andre knapper fra
    function filtrering() {
        filterHold = this.dataset.hold;
        document.querySelector(".valgt").classList.remove("valgt");
        this.classList.add("valgt");
        visHoldd();
    }

    //Funktion der henter Data og viser de valgte elementer
    function visHoldd() {
        let temp = document.querySelector("template");
        let container = document.querySelector("#hold_container");
        container.innerHTML = "";
        holdd.forEach(hold => {
            if (filterHold == "alle" || hold.categories.includes(parseInt(filterHold))) {
                let klon = temp.cloneNode(true).content;
                klon.querySelector("h2").textContent = hold.hold;
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
