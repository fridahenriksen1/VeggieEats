
<?php 
    $pagetitel = "Enskilda recept";
    include("header.php");
    ?>
    <main class="container ">
        <div class="recept" id="19">




        </div>
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
    <script src="../js/getRecept.js" defer></script>
    <script src="../cookie-consent/cookie-consent.js"></script>
</body>

</html>