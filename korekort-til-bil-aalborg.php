<!DOCTYPE html>
<html lang="da">
<?php
$page_title       = 'Kørekort til bil i Aalborg | ProDriving Køreskole';
$page_description = 'Tag kørekort til bil i Aalborg hos ProDriving. Små hold, personlig undervisning og hensyn til ADHD og ordblindhed. Komplet pakke 12.995 kr inkl. moms.';
$page_canonical   = 'https://prodriving.dk/korekort-til-bil-aalborg/';
$page_og_title    = 'Kørekort til bil i Aalborg – ProDriving';

$extra_schema = <<<'SCHEMA'
  <!-- Schema: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Kørekort til bil (kategori B)",
    "serviceType": "Køreundervisning",
    "url": "https://prodriving.dk/korekort-til-bil-aalborg/",
    "description": "Komplet køreuddannelse til kategori B i Aalborg med små hold og hensyn til ADHD og ordblindhed.",
    "areaServed": { "@type": "City", "name": "Aalborg" },
    "provider": {
      "@type": "DrivingSchool",
      "name": "ProDriving",
      "url": "https://prodriving.dk",
      "telephone": "+4560441223"
    },
    "offers": {
      "@type": "Offer",
      "price": "12995",
      "priceCurrency": "DKK",
      "availability": "https://schema.org/InStock"
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
      { "@type": "ListItem", "position": 2, "name": "Kørekort til bil", "item": "https://prodriving.dk/korekort-til-bil-aalborg/" }
    ]
  }
  </script>
SCHEMA;

require __DIR__ . '/partials/head-meta.php';
require __DIR__ . '/partials/header.php';
?>

<main>

  <section class="page-hero">
    <img class="page-hero-img" src="/images/prodriving-vw-golf-skolevogn-aalborg.jpg" alt="ProDrivings skolevogn til køreundervisning i Aalborg" />
    <div class="container">
      <nav class="breadcrumb" aria-label="Brødkrumme">
        <ol>
          <li><a href="/">Forside</a></li>
          <li><span aria-current="page">Kørekort til bil</span></li>
        </ol>
      </nav>
      <h1>Kørekort til bil i Aalborg</h1>
      <p class="page-lead">Din første køreuddannelse fra bunden – med små hold, god tid til den enkelte og en kørelærer, der kender dig ved navn.</p>
      <div class="page-hero-price">
        <strong>12.995 kr</strong>
        <span>inkl. moms · undervisning</span>
      </div>
      <div class="hero-ctas">
        <a href="/#tilmeld-drivepilot" class="btn btn-wa">Tilmeld dig næste hold</a>
        <a href="tel:+4560441223" class="btn btn-ghost">Ring: 60 44 12 23</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="prose">

        <h2>Hvem er forløbet til?</h2>
        <p>Kørekort til bil – kategori B – er forløbet for dig, der skal have kørekort for første gang. Du behøver ingen forudsætninger og ingen erfaring bag rattet. Hos ProDriving i Aalborg kører vi i både <strong>manuel gear og automatgear</strong>, så du selv vælger, hvad der passer dig bedst.</p>
        <p>Du kan begynde, når du er <strong>16 år og 9 måneder</strong> – altså tre måneder inden du fylder 17. Timer du det rigtigt, kan du have kørekortet i hånden allerede den dag, du fylder 17 år.</p>

        <h2>Hvad er inkluderet i prisen?</h2>
        <p>De 12.995 kr dækker hele den lovpligtige undervisning. Der er ingen skjulte gebyrer i undervisningsdelen:</p>

        <div class="pakke-box">
          <h3>Din pakke indeholder</h3>
          <ul>
            <li>Teoriundervisning – minimum 30 lektioner</li>
            <li>Manøvrebane – 3 lektioner</li>
            <li>Manøvre på vej – 16 kørelektioner på vej</li>
            <li>Mørkekørsel – 1 kørelektion på vej</li>
            <li>Køreteknisk anlæg – 4 lektioner</li>
            <li>Små hold med plads til spørgsmål</li>
            <li>Hensyn til ADHD og ordblindhed</li>
          </ul>
        </div>

        <h2>Øvrige udgifter</h2>
        <p>Ud over undervisningen er der en række udgifter, der betales separat. De fastsættes af tredjepart – altså ikke af køreskolen – og er derfor vejledende:</p>
        <ul>
          <li>Gebyr til Færdselsstyrelsen – 1.600 kr</li>
          <li>Førstehjælpskursus – ca. 700 kr</li>
          <li>Lægeattest – ca. 500 kr</li>
          <li>Pasfoto – ca. 100 kr</li>
          <li>Billeje til køreprøven – 1.000 kr</li>
          <li>Online teorikode (gælder 140 dage) – 250 kr</li>
          <li>Ekstra kørelektioner, hvis du får brug for dem – 650 kr / lektion</li>
        </ul>
        <p>Har du brug for at fordele beløbet, er <strong>delbetaling mulig</strong> – spørg Carina, så finder vi en løsning.</p>

        <h2>Regler for 17-årige</h2>
        <p>Består du prøven som 17-årig, må du køre bil alene om dagen:</p>
        <ul>
          <li><strong>Alene kl. 05:00–20:00:</strong> du må køre helt uden ledsager i dagtimerne.</li>
          <li><strong>Ledsager kl. 20:00–05:00:</strong> om natten skal du have en ledsager med. Ledsageren skal mindst være 24 år, have haft dansk kørekort (kategori B) i mindst 5 år og ikke have fået kørekortet frakendt inden for de seneste 5 år.</li>
          <li><strong>Fuld selvstændighed:</strong> først når du fylder 18 år, må du køre alene på alle tidspunkter.</li>
        </ul>
        <p>Kører du alene om natten uden ledsager, koster det 3.000 kr. ved første overtrædelse, 3.500 kr. ved anden og 4.000 kr. ved tredje.</p>

        <h2>Nye kørekortregler fra 1. juli 2026</h2>
        <p>Fra 1. juli 2026 moderniseres køreuddannelsen i Danmark. Lektioner erstattes af <strong>moduler</strong>, der bygger oven på hinanden, og pensum udvides med elbiler, hybridbiler og miljøvenlig kørsel.</p>
        <p>Starter du <strong>inden 1. juli 2026</strong>, kan du færdiggøre dit kørekort under de nuværende regler frem til 31. december 2026. Er du i tvivl om, hvad der bedst kan betale sig for dig, så ring – vi kigger på det sammen.</p>

        <h2>Små hold – og plads til alle</h2>
        <p>Vi kører med små hold, fordi det giver Carina Hansen tid til den enkelte elev. Det betyder mere opmærksomhed, bedre plads til at stille spørgsmål og et roligere læringsmiljø.</p>
        <p>Vi tager også aktivt <strong>hensyn til ADHD og ordblindhed</strong> i undervisningen og tilpasser tempo og formidling efter dine behov. Det er noget, vi er stolte af – og vi er p.t. den eneste køreskole i Aalborg, der aktivt gør dette.</p>

        <h2>Kom i gang</h2>
        <p>Nye hold starter løbende med teori hver tirsdag og torsdag kl. 17:00 på Enggårdsgade 5, kld., 9000 Aalborg. Du kan se de aktuelle holdstarter og tilmelde dig direkte online.</p>

        <div class="cta-band">
          <h2>Klar til at komme i gang?</h2>
          <p>Se næste holdstart og tilmeld dig online – eller ring til Carina, hvis du har spørgsmål først.</p>
          <div class="cta-band-btns">
            <a href="/#tilmeld-drivepilot" class="btn btn-wa">Se holdstart og tilmeld dig</a>
            <a href="tel:+4560441223" class="btn btn-ghost">Ring: 60 44 12 23</a>
          </div>
        </div>

        <h2>Andre forløb hos ProDriving</h2>
        <div class="related-grid">
          <a class="related-card" href="/generhvervelse-aalborg/">
            <strong>Generhvervelse</strong>
            <span>Har du fået frakendt kørekortet betinget eller ubetinget?</span>
          </a>
          <a class="related-card" href="/saerlig-koreundervisning/">
            <strong>Særlig køreundervisning</strong>
            <span>Lovpligtigt forløb ved kørselsforbud i de første 3 år.</span>
          </a>
          <a class="related-card" href="/rutinetimer-aalborg/">
            <strong>Rutinetimer</strong>
            <span>Har du kørekort, men mangler rutine bag rattet?</span>
          </a>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
