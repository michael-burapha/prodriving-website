<!DOCTYPE html>
<html lang="da">
<?php
$page_title       = 'Generhvervelse af kørekort i Aalborg | ProDriving';
$page_description = 'Mistet kørekortet betinget eller ubetinget? ProDriving i Aalborg hjælper dig med generhvervelse. Fri teori, 3 kørelektioner og billeje – 3.695 kr.';
$page_canonical   = 'https://prodriving.dk/generhvervelse-aalborg/';
$page_og_title    = 'Generhvervelse af kørekort i Aalborg – ProDriving';

$extra_schema = <<<'SCHEMA'
  <!-- Schema: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Generhvervelse af kørekort",
    "serviceType": "Køreundervisning",
    "url": "https://prodriving.dk/generhvervelse-aalborg/",
    "description": "Forløb til generhvervelse af kørekort i Aalborg efter betinget eller ubetinget frakendelse. Fri teori, 3 kørelektioner og leje af bil til den praktiske prøve.",
    "areaServed": { "@type": "City", "name": "Aalborg" },
    "provider": {
      "@type": "DrivingSchool",
      "name": "ProDriving",
      "url": "https://prodriving.dk",
      "telephone": "+4560441223"
    },
    "offers": {
      "@type": "Offer",
      "price": "3695",
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
      { "@type": "ListItem", "position": 2, "name": "Generhvervelse", "item": "https://prodriving.dk/generhvervelse-aalborg/" }
    ]
  }
  </script>
SCHEMA;

require __DIR__ . '/partials/head-meta.php';
require __DIR__ . '/partials/header.php';
?>

<main>

  <section class="page-hero">
    <img class="page-hero-img" src="/images/koereelev-ved-skolevogn-aalborg-limfjord.jpg" alt="Elev ved ProDrivings skolevogn i Aalborg" />
    <div class="container">
      <nav class="breadcrumb" aria-label="Brødkrumme">
        <ol>
          <li><a href="/">Forside</a></li>
          <li><span aria-current="page">Generhvervelse</span></li>
        </ol>
      </nav>
      <h1>Generhvervelse af kørekort i Aalborg</h1>
      <p class="page-lead">Har du fået frakendt kørekortet – betinget eller ubetinget? Vi hjælper dig trygt gennem prøverne, så du kan komme lovligt bag rattet igen.</p>
      <div class="page-hero-price">
        <strong>3.695 kr</strong>
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

        <h2>Hvad er generhvervelse?</h2>
        <p>Generhvervelse er forløbet for dig, der har <strong>mistet dit kørekort enten betinget eller ubetinget</strong>. For at få kørekortet igen skal du bestå både en <strong>teoretisk og en praktisk prøve</strong>.</p>
        <p>Det kan virke uoverskueligt at skulle op til prøve igen – især hvis der er gået nogle år, siden du sad på skolebænken. Derfor er forløbet hos ProDriving individuelt tilpasset: vi tager udgangspunkt i, hvor du står, i stedet for at køre dig gennem et standardprogram.</p>

        <h2>Hvad indeholder pakken?</h2>
        <div class="pakke-box">
          <h3>Vores pakkeløsning indeholder</h3>
          <ul>
            <li>Fri teori</li>
            <li>3 kørelektioner</li>
            <li>Leje af bil til den praktiske prøve</li>
          </ul>
        </div>
        <p>«Fri teori» betyder, at du kan følge teoriundervisningen, så længe du har brug for det – ikke et fast antal gange. Har du brug for flere kørelektioner end de tre, koster de 650 kr pr. lektion.</p>

        <h2>Sådan foregår forløbet</h2>
        <ol>
          <li><strong>En snak om din situation.</strong> Vi starter med at afklare, hvad der er sket, og hvad myndighederne kræver af netop dig.</li>
          <li><strong>Teori.</strong> Du følger teoriundervisningen og genopfrisker reglerne – herunder det, der er ændret, siden du sidst tog prøven.</li>
          <li><strong>Kørelektioner.</strong> Tre lektioner bag rattet, hvor vi får styr på rutinen og de ting, prøvesagkyndige kigger efter.</li>
          <li><strong>Prøverne.</strong> Du går op til den teoretiske og den praktiske prøve. Bilen til den praktiske prøve er med i pakken.</li>
        </ol>

        <h2>Individuel vejledning med Carina</h2>
        <p>Carina Hansen er din underviser hele vejen igennem. Med små hold er der tid til den enkelte, og du skal ikke føle dig som et nummer i rækken – uanset hvorfor du står, hvor du står.</p>
        <p>Vi tager også aktivt hensyn til <strong>ADHD og ordblindhed</strong> i undervisningen og tilpasser tempo og formidling efter dine behov.</p>

        <h2>Er det generhvervelse eller særlig køreundervisning, du skal bruge?</h2>
        <p>De to forløb forveksles ofte, men de dækker forskellige situationer:</p>
        <ul>
          <li><strong>Generhvervelse</strong> – du har fået kørekortet frakendt betinget eller ubetinget og skal bestå teoretisk og praktisk prøve igen.</li>
          <li><strong><a href="/saerlig-koreundervisning/">Særlig køreundervisning</a></strong> – du har fået et <strong>kørselsforbud</strong>, typisk som ny bilist inden for de første 3 år. Her er et lovpligtigt undervisningsforløb en betingelse.</li>
        </ul>
        <p>Er du i tvivl om, hvad der gælder for dig, så ring til os på <a href="tel:+4560441223">60 44 12 23</a> – så finder vi ud af det sammen, inden du betaler for noget.</p>

        <div class="cta-band">
          <h2>Kom lovligt bag rattet igen</h2>
          <p>Se næste holdstart og tilmeld dig online – eller ring, hvis du først vil tale om din situation.</p>
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
