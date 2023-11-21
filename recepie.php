
    <?php 
    $pagetitel = "VeggieEats";
    include("header.php");
    ?>


    <main>

        <section id="search" class="container">
            <h1>Sök bland alla recept</h1>
            <form id="search-bar" role='search'>
                <label for='header-search'>
                    <span class='visually-hidden'>Search</span>
                </label>
                <input type='search' id='header-search' placeholder="Sök recept" data-search>
                <button type='submit' id="btn-search">
                    <span class="material-symbols-outlined">search</span>
                    <span class='visually-hidden'>Submit Search</span>
                </button>
            </form>
            <form class="m1b" id="categorys" action="">
                <input class="chip" type="checkbox" id="categoryOne">
                <label for="categoryOne">Sallad</label>
                <input class="chip" type="checkbox" id="categoryTwo">
                <label for="categoryTwo">Tortilla</label>
                <input class="chip" type="checkbox" id="categoryThree">
                <label for="categoryThree">Pasta</label>
                <input class="chip" type="checkbox" id="categoryFour">
                <label for="categoryFour">Nudlar</label>
                <input class="chip" type="checkbox" id="categoryFive">
                <label for="categoryFive">Ris</label>
                <input class="chip" type="checkbox" id="categorySix">
                <label for="categorySix">Pizza</label>
                <input class="chip" type="checkbox" id="categorySeven">
                <label for="categorySeven">Couscous</label>
                <input class="chip" type="checkbox" id="categoryEight">
                <label for="categoryEight">Potatis</label>
            </form>
        </section>
        <section class="user-recipes container" data-user-cards>
            <!-- Use <template> to hold some content that will be hidden when the page loads. Use JavaScript to display it:  -->
            <template data-user-template>
                <article class="card">
                    <a class="card-content" href="" data-link>
                        <figure>
                            <div class="img-box">
                                <img data-image>

                            </div>
                            <figcaption class="card-text">
                                <p class="style-chips" data-cat></p>
                                <h2 data-header></h2>
                            </figcaption>
                        </figure>

                        <section class="time-box">
                            <span class="material-symbols-outlined p1">
                                schedule
                            </span>
                            <span data-time></span>
                        </section>
                        <!-- <div class="gradient"></div> -->
                    </a>
                </article>
            </template>

        </section>
      
    </main>
    <footer id="main-footer">
        <section class="footer-inside">
            <button id="cookie-settings-button" class="cookie-settings-button">Kakinställningar</button>
            <p class="footer-text">©Copyright 2023 VegieEats</p>
        </section>
    </footer>
      <!-- Cookie Popup -->
  <div id="cookie-popup" class="cookie-popup">
    <div class="popup-content">
        <span id="close-icon" class="close-icon">×</span>
        <h2>Vi använder kakor</h2>
        <p>Vi använder kakor för att göra ett så bra material som möjligt för sidan. Allting som samlas in är till för att förbättra upplevelsen på sidan och för att skapa ett så bra lärande material som möjligt.</p>
        <div class="cookie-switch-container">
            <span id="cookie-status" class="cookie-status">Kakinställningar</span>
            <label class="switch">
                <input type="checkbox" id="cookie-switch">
                <span class="slider round"></span>
            </label>
        </div>
        <button id="only-necessary-button" style="display: none;">Bara nödvändiga</button>
        <button id="ok-button" style="display: none;">Ok</button>
        <div class="b">
            <a href="privacy-policy.php" class="integrity">Integritetspolicy</a>

        </div>
    </div>
    <!-- <script src="js/chatgpt.js"></script> -->
    <script src="js/script.js" defer></script>
    <script src="cookie-consent/cookie-consent.js"></script>
</body>

</html>