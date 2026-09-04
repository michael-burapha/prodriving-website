<!DOCTYPE html>
<html lang="da">
<?php
$page_title       = 'Rutinetimer i Aalborg – kørelektioner uden forpligtelse | ProDriving';
$page_description = 'Har du kørekort, men mangler rutine bag rattet? Book rutinetimer i Aalborg hos ProDriving. Manuel gear eller automatgear – 650 kr pr. lektion inkl. moms.';
$page_canonical   = 'https://prodriving.dk/rutinetimer-aalborg/';
$page_og_title    = 'Rutinetimer i Aalborg – ProDriving';

$extra_schema = <<<'SCHEMA'
  <!-- Schema: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Rutinetimer",
    "serviceType": "Køreundervisning",
    "url": "https://prodriving.dk/rutinetimer-aalborg/",
    "description": "Rutinetimer i Aalborg for bilister med kørekort, der vil genopbygge rutine og sikkerhed bag rattet. Manuel gear eller automatgear, ingen forpligtelse.",
    "areaServed": { "@type": "City", "name": "Aalborg" },
    "provider": {
      "@type": "DrivingSchool",
      "name": "ProDriving",
      "url": "https://prodriving.dk",
      "telephone": "+4560441223"
    },
    "offers": {
      "@type": "Offer",
      "price": "650",
      "priceCurrency": "DKK",
      "availability": "https://schema.org/InStock",
      "description": "Pris pr. lektion inkl. moms"
    }
  }
  </script>
  <!-- Schema: BreadcrumbList -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Forside", "item": "https://prodriving.dk/" },
      { "@type": "ListItem", "position": 2, "name": "Rutinetimer", "item": "https://prodriving.dk/rutinetimer-aalborg/" }
    ]
  }
  </script>
SCHEMA;

require __DIR__ . '/partials/head-meta.php';
require __DIR__ . '/partials/header.php';
?>

<main>

  <section class="page-hero">
    <img class="page-hero-img" src="/images/koereelev-prodriving-bil-aalborg.jpg" alt="Bilist bag rattet under rutinetimer i Aalborg" />
    <div class="container">
      <nav class="breadcrumb" aria-label="Brødkrumme">
        <ol>
          <li><a href="/">Forside</a></li>
          <li><span aria-current="page">Rutinetimer</span></li>
        </ol>
      </nav>
      <h1>Rutinetimer i Aalborg</h1>
      <p class="page-lead">Du har kørekortet – men rutinen mangler. Book lige præcis de timer, du har brug for. Ingen pakke, ingen forpligtelse.</p>
      <div class="page-hero-price">
        <strong>650 kr</strong>
        <span>pr. lektion inkl. moms</span>
      </div>
      <div class="hero-ctas">
        <a href="tel:+4560441223" class="btn btn-wa">Ring og book: 60 44 12 23</a>
        <a href="/#tilmeld" class="btn btn-ghost">Skriv til os</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="prose">

        <h2>Hvem er rutinetimer til?</h2>
        <p>Rutinetimer er til dig, der <strong>allerede har kørekortet</strong>, men gerne vil øve dig. Måske kører du sjældent, måske er der gået år siden sidst – eller måske vil du bare have mere sikkerhed i trafikken, før du kaster dig ud i det igen.</p>
        <p>Typiske situationer, vi hjælper med:</p>
        <ul>
          <li>Du har haft kørekort længe, men har ikke kørt i årevis</li>
          <li>Du er lige blevet bilejer og vil have rutinen på plads først</li>
          <li>Du skal skifte fra automatgear til manuel gear – eller omvendt</li>
          <li>Du er utryg ved bestemte situationer: motorvej, rundkørsler, parallelparkering eller bykørsel i Aalborg</li>
          <li>Du vil køre en tur igennem med en kørelærer, inden du skal på en længere køretur</li>
        </ul>

        <h2>Manuel gear eller automatgear – du vælger</h2>
        <p>Du bestemmer selv, om du vil køre i <strong>manuel gear eller automatgear</strong>. Skal du vænne dig til en anden geartype end den, du er vant til, er rutinetimer en oplagt og billig måde at gøre det på med en kørelærer ved siden af.</p>

        <h2>Ingen pakke, ingen binding</h2>
        <div class="pakke-box">
          <h3>Sådan fungerer det</h3>
          <ul>
            <li>650 kr pr. lektion inkl. moms</li>
            <li>Du booker kun de timer, du har brug for</li>
            <li>Ingen pakkeløsning og ingen forpligtelse</li>
            <li>Vi kører i og omkring Aalborg – du er med til at bestemme ruten</li>
          </ul>
        </div>
        <p>Vi aftaler forløbet fra gang til gang. Nogle har brug for én enkelt tur for at få selvtilliden tilbage, andre booker en håndfuld timer over et par uger. Begge dele er helt fine.</p>

        <h2>I dit tempo</h2>
        <p>Carina Hansen har mange års erfaring som kørelærer og er vant til elever, der er utrygge bag rattet. Der er ingen prøve at bestå og ingen tidsplan at følge – vi kører i dit tempo og arbejder med præcis det, du synes er svært.</p>
        <p>Vi tager også aktivt hensyn til <strong>ADHD og ordblindhed</strong>, og tilpasser tempo og formidling efter dine behov.</p>

        <div class="cta-band">
          <h2>Book en rutinetime</h2>
          <p>Ring til Carina og aftal en tid, der passer dig – eller skriv, så vender vi tilbage hurtigst muligt.</p>
          <div class="cta-band-btns">
            <a href="tel:+4560441223" class="btn btn-wa">Ring: 60 44 12 23</a>
            <a href="/#tilmeld" class="btn btn-ghost">Skriv til os</a>
          </div>
        </div>

        <h2>Andre forløb hos ProDriving</h2>
        <div class="related-grid">
          <a class="related-card" href="/korekort-til-bil-aalborg/">
            <strong>Kørekort til bil</strong>
            <span>Din første køreuddannelse – kategori B fra bunden.</span>
          </a>
          <a class="related-card" href="/generhvervelse-aalborg/">
            <strong>Generhvervelse</strong>
            <span>Har du fået frakendt kørekortet betinget eller ubetinget?</span>
          </a>
          <a class="related-card" href="/saerlig-koreundervisning/">
            <strong>Særlig køreundervisning</strong>
            <span>Lovpligtigt forløb ved kørselsforbud i de første 3 år.</span>
          </a>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
