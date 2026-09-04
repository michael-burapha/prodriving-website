<?php
/**
 * Cookie bar, policy modal, floating phone, header + mobile menu.
 * Pages set $is_home = true on the homepage so section links stay as in-page
 * anchors (preserving smooth scroll); subpages get "/#anchor" so they jump home.
 */
$is_home = $is_home ?? false;
$h = $is_home ? '' : '/';
?>
<body>

  <!-- ── COOKIE BAR ── -->
  <div class="cookie-bar" id="cookieBar">
    <p>Vi bruger teknisk nødvendige cookies for at sikre hjemmesidens funktion. Læs vores <a href="#" onclick="openPolicy(event)">privatlivs- og cookiepolitik</a>.</p>
    <div class="cookie-bar-btns">
      <button class="btn-cookie-reject" onclick="rejectCookies()">Afvis ikke-nødvendige</button>
      <button class="btn-cookie-accept" onclick="acceptCookies()">Accepter</button>
    </div>
  </div>

  <!-- ── POLICY MODAL ── -->
  <div class="policy-overlay" id="policyOverlay">
    <div class="policy-modal">
      <button class="policy-close" onclick="closePolicy()" aria-label="Luk">✕</button>
      <h2>Privatlivs- og cookiepolitik</h2>

      <h3>Dataansvarlig</h3>
      <p>ProDriving · CVR 30416627 · Enggårdsgade 5, kld., 9000 Aalborg<br>
      Telefon: 60 44 12 23 · E-mail: info@prodriving.dk</p>

      <h3>Hvilke oplysninger indsamler vi?</h3>
      <p>Når du udfylder kontaktformularen, indsamler vi:</p>
      <ul>
        <li>Navn</li>
        <li>Telefonnummer</li>
        <li>E-mailadresse</li>
        <li>Besked (valgfrit)</li>
      </ul>

      <h3>Formål og retsgrundlag</h3>
      <p>Vi behandler dine oplysninger for at besvare din henvendelse og vejlede om vores undervisning. Retsgrundlaget er GDPR artikel 6, stk. 1, litra b (opfyldelse af aftale eller foranstaltninger på din anmodning).</p>

      <h3>Opbevaring</h3>
      <p>Vi opbevarer dine oplysninger i op til 2 år efter din seneste henvendelse, medmindre lovgivningen kræver en længere opbevaringsperiode.</p>

      <h3>Deling af oplysninger</h3>
      <p>Vi deler ikke dine personoplysninger med tredjepart uden dit samtykke, medmindre vi er retligt forpligtet hertil.</p>

      <h3>Dine rettigheder</h3>
      <p>Du har efter GDPR ret til:</p>
      <ul>
        <li>Indsigt i dine personoplysninger</li>
        <li>Berigtigelse af urigtige oplysninger</li>
        <li>Sletning ("retten til at blive glemt")</li>
        <li>Begrænsning af behandling</li>
        <li>Dataportabilitet</li>
        <li>Indsigelse mod behandling</li>
      </ul>
      <p>Kontakt os på <a href="mailto:info@prodriving.dk">info@prodriving.dk</a> for at gøre brug af dine rettigheder.<br>
      Du kan også klage til <a href="https://www.datatilsynet.dk" target="_blank" rel="noopener">Datatilsynet</a> · dt.dk · tlf. 33 19 32 00.</p>

      <h3>Cookies</h3>
      <p>Denne hjemmeside anvender udelukkende teknisk nødvendige cookies. Vi bruger lokal lagring (localStorage) til at huske dit cookiesamtykke. Vi anvender ingen sporings- eller analysecookies.</p>
      <p>Teknisk nødvendige cookies kan ikke frameldes, da de er nødvendige for hjemmesidens grundlæggende funktion. Du kan altid slette cookies i din browsers indstillinger.</p>

      <h3>Ændringer</h3>
      <p>Vi forbeholder os retten til at opdatere denne politik. Væsentlige ændringer vil fremgå tydeligt på hjemmesiden.</p>

      <p style="margin-top:1.5rem; font-size:.78rem;">Sidst opdateret: juni 2026</p>
    </div>
  </div>

  <!-- ── FLOATING PHONE ── -->
  <a href="tel:+4560441223" class="wa-float" aria-label="Ring til os: 60 44 12 23">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
  </a>

  <!-- ── HEADER ── -->
  <header class="header">
    <div class="container header-inner">
      <a href="<?= $is_home ? '#top' : '/' ?>" class="logo"><img src="/images/prodriving-logo.png" alt="ProDriving" /></a>

      <nav aria-label="Primær navigation">
        <ul class="nav-links">
          <li><a href="<?= $h ?>#ydelser">Ydelser</a></li>
          <li><a href="<?= $h ?>#priser">Priser</a></li>
          <li><a href="<?= $h ?>#hold-start">Hold start</a></li>
          <li><a href="<?= $h ?>#faq">FAQ</a></li>
          <li><a href="<?= $h ?>#kontakt">Kontakt</a></li>
        </ul>
      </nav>

      <a href="<?= $h ?>#tilmeld-drivepilot" class="btn btn-wa nav-tilmeld">Tilmeld dig</a>

      <a href="tel:+4560441223" class="btn btn-wa nav-wa">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
        60 44 12 23
      </a>

      <a href="<?= $h ?>#tilmeld-drivepilot" class="btn btn-wa mob-tilmeld">Tilmeld dig</a>

      <button class="hamburger" id="hamburger" aria-label="Åbn menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- ── MOBILE MENU ── -->
  <div class="mobile-menu" id="mobileMenu" role="navigation" aria-label="Mobil navigation">
    <a href="<?= $h ?>#ydelser"    onclick="closeMenu()">Ydelser</a>
    <a href="<?= $h ?>#priser"     onclick="closeMenu()">Priser</a>
    <a href="<?= $h ?>#hold-start" onclick="closeMenu()">Hold start</a>
    <a href="<?= $h ?>#faq"        onclick="closeMenu()">FAQ</a>
    <a href="<?= $h ?>#kontakt"    onclick="closeMenu()">Kontakt</a>
    <a href="<?= $h ?>#tilmeld-drivepilot" class="btn btn-wa m-wa" onclick="closeMenu()">Tilmeld dig</a>
    <a href="tel:+4560441223" class="btn btn-wa m-wa" onclick="closeMenu()">
      Ring: 60 44 12 23
    </a>
  </div>
