
<?php 
    $pagetitel = "Enskilda recept";
    include("header.php");
    ?>
    <main class="container ">
        <div class="recept" id="8">




        </div>
    </main>
    <footer id="main-footer">
        <section class="footer-inside">
            <h3>VeggieEats</h3>
            <!-- <p>Skriv in din mejl här du, du kommer ändå inte få något</p>
            <form action="/" id="newsletter">
                <label for="email">
                    <span class="visually-hidden">Email</span>
                </label>
                <input class="textField" type="text" name="email" id="email" placeholder="Email">
                <input class="btn btn-submit" type="submit" value="Skicka">
            </form> -->
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
            <a href="/cookie-consent/privacy-policy.html" class="integrity">Integritetspolicy</a>

        </div>
    </div>
    <script src="../js/getRecept.js" defer></script>
    <script src="../cookie-consent/cookie-consent.js"></script>
</body>

</html>