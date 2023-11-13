
    <?php 
    $pagetitel = "VeggieEats";
    include("header.php");
    ?>


    <main>
        <h1>Integritetspolicy</h1>
    
        <h2>1. Insamling av personuppgifter</h2>
        <p>Vi samlar in personuppgifter enbart i syfte att förbättra din lärandeupplevelse på Designtrainr. De personuppgifter vi samlar in inkluderar anonymiserad information relaterad till din interaktion med webbplatsen, såsom sidvisningar, klick, sessionstider, heat maps och klickinspelningar. Dessa uppgifter samlar vi in genom webbanalysverktyg från Hotjar.</p>
    
        <h2>2. Dataskyddsaktiviteter</h2>
        <p>Verktygen från Hotjar hjälper oss att förstå hur användare navigerar och engagerar sig med vårt innehåll. De personuppgifter som samlas in via dessa verktyg lagras enbart i en anonymiserad form och används uteslutande för att förbättra vårt utbildningsinnehåll och hur sidan är uppbyggd.</p>
    
        <h2>3. Samtycke för Cookies</h2>
        <p>När du besöker Designtrainr kan du se en popup för samtycke till cookies. Denna popup ger dig möjlighet att ge eller dra tillbaka ditt samtycke för insamling av personuppgifter via cookies. Inga personuppgifter samlas in utan ditt uttryckliga samtycke. Du kan alltid ändra (återkalla ditt samtycke) via menyn på knappen Kakinställningar. </p>
    
        <h2>4. Datalagring</h2>
        <p>Personuppgifter som samlas in via Hotjar sparas i upp till 2 månader. Efter denna period raderas data automatiskt. Personuppgifterna raderas tidigare om du återkallar ditt samtycke.</p>
    
        <h2>5. Dina Rättigheter</h2>
        <p>Enligt den allmänna dataskyddsförordningen (GDPR) har du rättigheter över dina personuppgifter, inklusive rätten till åtkomst, rättelse eller radering. Om du har några frågor eller begäranden relaterade till dina personuppgifter, kontakta oss på jonatan.rist[at]sunne.se.</p>
    
        <h2>6. Ändringar i denna Integritetspolicy</h2>
        <p>Vi kan uppdatera denna Integritetspolicy emellanåt för att återspegla förändringar i våra dataskyddsaktiviteter eller lagkrav. Vänligen granska denna policy regelbundet för uppdateringar.</p>
    
        <h2>7. Kontakta Oss</h2>
        <p>Om du har några frågor eller funderingar angående vår dataskyddspraxis eller denna Integritetspolicy, vänligen kontakta oss på: jonatan.rist[at]sunne.se</p>
        <p>Genom att använda Designtrainr samtycker du till villkoren och praxis som beskrivs i denna Integritetspolicy. Din integritet är viktig för oss, och vi är engagerade i att upprätthålla de högsta standarderna för dataskydd.</p>
    </main>

    <footer id="main-footer">
        <section class="footer-inside">
            <h3>VeggieEats</h3>
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
    <script src="../cookie-consent/cookie-consent.js"></script>

</body>


<!-- <?php require "footer.php"; ?> -->