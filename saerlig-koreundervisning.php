<!DOCTYPE html>
<html lang="da">
<?php
$page_title       = 'Særlig køreundervisning i Aalborg – kørselsforbud | ProDriving';
$page_description = 'Har du fået kørselsforbud som ny bilist? Særlig køreundervisning er et lovkrav. Fri teori, 8 kørelektioner og billeje i Aalborg – 7.995 kr.';
$page_canonical   = 'https://prodriving.dk/saerlig-koreundervisning/';
$page_og_title    = 'Særlig køreundervisning i Aalborg – ProDriving';

$extra_schema = <<<'SCHEMA'
  <!-- Schema: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Særlig køreundervisning (kørselsforbud)",
    "serviceType": "Køreundervisning",
    "url": "https://prodriving.dk/saerlig-koreundervisning/",
    "description": "Lovpligtig særlig køreundervisning i Aalborg for bilister med kørselsforbud. Fri teori med minimum 8 teorilektioner, 8 kørelektioner og leje af bil til den praktiske prøve.",
    "areaServed": { "@type": "City", "name": "Aalborg" },
    "provider": {
      "@type": "DrivingSchool",
      "name": "ProDriving",
      "url": "https://prodriving.dk",
      "telephone": "+4560441223"
    },
    "offers": {
      "@type": "Offer",
      "price": "7995",
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
      { "@type": "ListItem", "position": 2, "name": "Særlig køreundervisning", "item": "https://prodriving.dk/saerlig-koreundervisning/" }
    ]
  }
  </script>
SCHEMA;

require __DIR__ . '/partials/head-meta.php';
require __DIR__ . '/partials/header.php';
?>

<main>

  <section class="page-hero">
    <img class="page-hero-img" src="/images/koereundervisning-instruktor-elev-aalborg.jpg" alt="Kørelærer og elev under køreundervisning i Aalborg" />
    <div class="container">
      <nav class="breadcrumb" aria-label="Brødkrumme">
        <ol>
          <li><a href="/">Forside</a></li>
          <li><span aria-current="page">Særlig køreundervisning</span></li>
        </ol>
      </nav>
      <h1>Særlig køreundervisning i Aalborg</h1>
      <p class="page-lead">Har du fået et kørselsforbud som ny bilist? Så er særlig køreundervisning et lovkrav – og vi guider dig hele vejen igennem.</p>
      <div class="page-hero-price">
        <strong>7.995 kr</strong>
        <span>inkl. moms · undervisning</span>
      </div>
      <div class="hero-ctas">
        <a href="/#tilmeld-drivepilot" class="btn btn-wa">Tilmeld dig</a>
        <a href="tel:+4560441223" class="btn btn-ghost">Ring: 60 44 12 23</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="prose">

        <h2>Hvad er særlig køreundervisning?</h2>
        <p>Særlig køreundervisning er et <strong>lovkrav for personer, der har fået et kørselsforbud</strong>. Kørselsforbud gives typisk til nye bilister, der begår en alvorlig færdselsovertrædelse inden for de første 3 år efter, de har fået kørekort.</p>
        <p>Det er ikke det samme som at få kørekortet frakendt. Ved kørselsforbud skal du gennemføre et lovpligtigt undervisningsforløb og bestå prøverne på ny, før du må køre igen.</p>

        <h2>Hvad indeholder pakken?</h2>
        <p>Vores pakkeløsning dækker hele lovkravet til undervisning:</p>

        <div class="pakke-box">
          <h3>Vores pakkeløsning indeholder</h3>
          <ul>
            <li>Fri teori – minimum 8 teorilektioner</li>
            <li>8 kørelektioner</li>
            <li>Leje af bil til den praktiske prøve</li>
          </ul>
        </div>
        <p>Har du brug for flere kørelektioner end de otte, koster de 650 kr pr. lektion. Delbetaling er mulig – spørg Carina.</p>

        <h2>Sådan foregår forløbet</h2>
        <ol>
          <li><strong>Afklaring.</strong> Vi taler om, hvad der er sket, og hvad myndighederne konkret kræver af dig, så du ved præcis hvad der skal til.</li>
          <li><strong>Teori.</strong> Minimum 8 teorilektioner, hvor vi genopfrisker reglerne og går i dybden med de situationer, der førte til forbuddet.</li>
          <li><strong>8 kørelektioner.</strong> Fokuseret træning bag rattet, tilpasset dine behov og det, prøvesagkyndige lægger vægt på.</li>
          <li><strong>Prøverne.</strong> Du går op til teoriprøve og praktisk prøve. Bilen til den praktiske prøve er med i pakken.</li>
        </ol>

        <h2>Et forløb uden løftede pegefingre</h2>
        <p>De fleste, der ender med et kørselsforbud, har det skidt nok med det i forvejen. Hos ProDriving får du en underviser, der tager dig alvorligt og fokuserer på det, der skal til for at komme videre – ikke på det, der gik galt.</p>
        <p>Med små hold er der tid til den enkelte, og vi tager aktivt hensyn til <strong>ADHD og ordblindhed</strong> i undervisningen.</p>

        <h2>Kørselsforbud eller frakendelse?</h2>
        <p>De to ting forveksles ofte – men de kræver hver sit forløb:</p>
        <ul>
          <li><strong>Kørselsforbud</strong> (typisk som ny bilist i de første 3 år) → <strong>særlig køreundervisning</strong>, som er lovpligtig. Det er denne side.</li>
          <li><strong>Betinget eller ubetinget frakendelse</strong> → <strong><a href="/generhvervelse-aalborg/">generhvervelse</a></strong>, hvor du skal bestå teoretisk og praktisk prøve igen.</li>
        </ul>
        <p>Er du i tvivl om, hvad der gælder i din situation, så ring på <a href="tel:+4560441223">60 44 12 23</a>, inden du tilmelder dig – så finder vi ud af det sammen.</p>

        <div class="cta-band">
          <h2>Kom godt igennem forløbet</h2>
          <p>Se næste holdstart og tilmeld dig online – eller ring, hvis du vil tale om din situation først.</p>
          <div class="cta-band-btns">
            <a href="/#tilmeld-drivepilot" class="btn btn-wa">Se holdstart og tilmeld dig</a>
            <a href="tel:+4560441223" class="btn btn-ghost">Ring: 60 44 12 23</a>
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
