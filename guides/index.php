<!DOCTYPE html>
<html lang="da">
<?php
$page_title       = 'Guides om kørekort | ProDriving Køreskole Aalborg';
$page_description = 'Guides om kørekort i Aalborg: hvad et kørekort koster i 2026, de nye kørekortregler fra 1. juli 2026, og kørekort med ADHD eller ordblindhed.';
$page_canonical   = 'https://prodriving.dk/guides/';
$page_og_title    = 'Guides om kørekort – ProDriving';

$extra_schema = <<<'SCHEMA'
  <!-- Schema: BreadcrumbList -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Forside", "item": "https://prodriving.dk/" },
      { "@type": "ListItem", "position": 2, "name": "Guides", "item": "https://prodriving.dk/guides/" }
    ]
  }
  </script>
SCHEMA;

require __DIR__ . '/../partials/head-meta.php';
require __DIR__ . '/../partials/header.php';
?>

<main>

  <section class="page-hero">
    <div class="container">
      <nav class="breadcrumb" aria-label="Brødkrumme">
        <ol>
          <li><a href="/">Forside</a></li>
          <li><span aria-current="page">Guides</span></li>
        </ol>
      </nav>
      <h1>Guides om kørekort</h1>
      <p class="page-lead">Svar på de spørgsmål vi oftest får – om priser, regler og om at tage kørekort, når indlæring ikke er ligetil.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="related-grid">
        <a class="related-card" href="/guides/hvad-koster-korekort-aalborg/">
          <strong>Hvad koster et kørekort i Aalborg i 2026?</strong>
          <span>Hele regnestykket – både undervisningen og de udgifter, der betales separat.</span>
        </a>
        <a class="related-card" href="/guides/nye-korekortregler-2026/">
          <strong>Nye kørekortregler fra 1. juli 2026</strong>
          <span>Moduler erstatter lektioner. Sådan påvirker det dig, der skal i gang nu.</span>
        </a>
        <a class="related-card" href="/guides/korekort-adhd-ordblindhed/">
          <strong>Kørekort med ADHD eller ordblindhed</strong>
          <span>Det kan lade sig gøre – og her er, hvad der gør en forskel undervejs.</span>
        </a>
      </div>

      <div class="cta-band">
        <h2>Spørgsmål, der ikke står her?</h2>
        <p>Ring til Carina – så får du et konkret svar frem for et standardsvar.</p>
        <div class="cta-band-btns">
          <a href="tel:+4560441223" class="btn btn-wa">Ring: 60 44 12 23</a>
          <a href="/#tilmeld" class="btn btn-ghost">Skriv til os</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
