
    <?php 
    $pagetitel = "VeggieEats";
    include("header.php");
    ?>
    <section id="hero" class="img-header">
        <article class="content">
            <h1 class="hero-text">Att äta mer vegetariskt ska vara lätt, vi är här för att hjälpa dig</h1>
        </article>
        <div class="overlay"></div>
    </section>
    <main class="container main-container">
        <section class="popular">
            <h2>Nya recept</h2>
            <article class="recipes" data-user-popular>
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
                        </a>
                    </article>
                </template>
            </article>
        </section>
        <aside class="quote">
            <article class="content">
                <h3 class="quote-text">Använd filtreringsverktyget om du vill ha inspiration efter vilken bas du vill jobba med</h3>
                <a class="btn-primary" href="recepie.php">Till filtreringsvektyget</a>
            </article>
        </aside>
        <section class="popular">
            <h2>För nybörjare</h2>
            <article class="recipes" data-user-popular2>
                <!-- rör ej template HTML -->
                <template data-user-template>
                    <article class="card">
                        <a href="" data-link>
                            <img data-image>
                            <figcaption class="card-text">
                                <p class="p1" data-cat></p>
                                <h2 class="p1" data-header></h2>
                                <span class="material-symbols-outlined p1">
                                    schedule
                                </span>
                                <span data-time></span>
                            </figcaption>
                        </a>
                    </article>
                </template>
            </article>
        </section>
        <aside class="quote">
            <article class="content">
                <h3 class="quote-text">Utforska våra råd för att minska köttintaget och främja en mer hållbar kost.</h3>
                <a class="btn-primary" href="blogg.php">Till tips</a>
            </article>
        </aside>
        <section class="popular">
            <h2>Gamla goingar</h2>
            <article class="recipes" data-user-popular3="">
                <!-- rör ej template HTML -->
                <template data-user-template>
                    <article class="card">
                        <a href="" data-link>
                            <p data-cat></p>
                            <p data-time></p>
                            <h3 data-header></h3>
                            </header>
                            <img data-image>
                        </a>
                        <article class="card-text">
                        </article>
                </template>
            </article>
        </section>
    </main>
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
        <button id="only-necessary-button" style="display: none;">Avvisa</button>
        <button id="ok-button" style="display: none;">Godkänn</button>
        <div class="b">
        <a href="privacy-policy.php" class="integrity">Integritetspolicy</a>
        </div>
    </div>
    <script src="cookie-consent/cookie-consent.js"></script>
    <script src="js/script.js"></script>
    <script src="js/getRecept.js"></script>
</body>
</html>