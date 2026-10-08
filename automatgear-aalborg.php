<!DOCTYPE html>
<html lang="da">
<?php
$page_title       = 'Kørekort til automatgear i Aalborg | ProDriving';
$page_description = 'Tag kørekort i automatgear i Aalborg – samme pris som manuelt, 12.995 kr. Få styr på kode 78, og hvordan du får den fjernet igen med 7 lektioner.';
$page_canonical   = 'https://prodriving.dk/automatgear-aalborg/';
$page_og_title    = 'Kørekort til automatgear i Aalborg – ProDriving';

$extra_schema = <<<'SCHEMA'
  <!-- Schema: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Kørekort til automatgear",
    "serviceType": "Køreundervisning",
    "url": "https://prodriving.dk/automatgear-aalborg/",
    "description": "Køreundervisning og kørekort i automatgear i Aalborg. Samme pakke og pris som manuelt gear.",
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
      { "@type": "ListItem", "position": 2, "name": "Kørekort til automatgear", "item": "https://prodriving.dk/automatgear-aalborg/" }
    ]
  }
  </script>
SCHEMA;

require __DIR__ . '/partials/head-meta.php';
require __DIR__ . '/partials/header.php';
?>

<main>

  <section class="page-hero">
    <img class="page-hero-img" style="object-position: 50% 30%;" src="/images/koereelev-vindue-prodriving-aalborg.jpg" alt="Elev bag rattet i ProDrivings skolevogn i Aalborg" />
    <div class="container">
      <nav class="breadcrumb" aria-label="Brødkrumme">
        <ol>
          <li><a href="/">Forside</a></li>
          <li><span aria-current="page">Automatgear</span></li>
        </ol>
      </nav>
      <h1>Kørekort til automatgear i Aalborg</h1>
      <p class="page-lead">Du vælger selv, om du vil køre op i manuelt gear eller automatgear. Prisen er den samme – men der er én ting, du skal vide først.</p>
      <div class="page-hero-price">
        <strong>12.995 kr</strong>
        <span>inkl. moms · samme pris som manuelt</span>
      </div>
      <div class="hero-ctas">
        <a href="/#tilmeld-drivepilot" class="btn btn-wa">Se næste holdstart</a>
        <a href="tel:+4560441223" class="btn btn-ghost">Ring: 60 44 12 23</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="prose">

        <h2>Hos os koster det det samme</h2>
        <p>Hos ProDriving kører vi i <strong>både manuelt gear og automatgear</strong>, og pakken koster det samme – <strong>12.995 kr</strong> for den lovpligtige undervisning. Du skal altså ikke betale ekstra for at køre op i en automatbil. Se hele regnestykket med gebyrer på siden om <a href="/guides/hvad-koster-korekort-aalborg/">kørekort pris i Aalborg</a>.</p>

        <h2>Hvem vælger automatgear?</h2>
        <ul>
          <li>Du skal alligevel køre elbil eller hybridbil – de er næsten alle sammen automatiske.</li>
          <li>Du vil hellere bruge energien på trafikken end på koblingen.</li>
          <li>Du har prøvet manuelt gear og synes, det driller.</li>
          <li>Du har en skade eller et handicap, der gør kobling besværlig.</li>
        </ul>
        <p>Der er ikke noget "nemmere" i at tage kørekort i automatgear – du skal igennem præcis de samme moduler, den samme teoriprøve og den samme køreprøve. Du har bare én ting mindre at holde styr på undervejs.</p>

        <h2>Det vigtige: kode 78</h2>
        <p>Består du den praktiske køreprøve i en bil med automatgear, får dit kørekort <strong>kode 78</strong>. Det betyder, at du kun må køre biler med automatgear – både i Danmark og i udlandet.</p>
        <p>Det er ikke permanent, men det forsvinder heller ikke af sig selv. Vil du senere køre manuelt, skal du aktivt have koden fjernet.</p>

        <h3>Sådan får du kode 78 fjernet</h3>
        <p>Der er to veje, og den ene er langt den mest brugte for almindeligt bilkørekort:</p>
        <div class="pakke-box">
          <h3>7 lektioner i manuel bil (kun kategori B)</h3>
          <ul>
            <li>Du tager 7 lektioner praktisk køreundervisning i en bil med manuelt gear hos en godkendt kørelærer</li>
            <li>Mindst 3 af lektionerne skal være på offentlig vej – og må ikke være motorvejskørsel</li>
            <li>Du skal ikke op til en ny køreprøve</li>
            <li>Du får i stedet <strong>kode 148</strong>, som er en national dansk kode</li>
          </ul>
        </div>
        <p>Vær opmærksom på, at kode 148 kun gælder i Danmark. Kørekortet har ikke EU-koden, og du kan derfor opleve, at din ret til at køre manuelt ikke bliver anerkendt i udlandet.</p>
        <p>Den anden vej er at <strong>bestå en praktisk køreprøve i en bil med manuelt gear</strong>. Så bortfalder kode 78 helt, og du må køre både manuelt og automatisk – også i udlandet. Der er ikke krav om køretimer først, men de fleste har gavn af nogle stykker.</p>
        <p>Vi kører i begge geartyper, så skal du have koden fjernet – ad den ene eller den anden vej – kan vi hjælpe. Ring til Carina på <a href="tel:+4560441223">60 44 12 23</a>, så finder vi ud af, hvad der passer dig.</p>

        <h2>Skal du vælge manuelt eller automatgear?</h2>
        <p>Et ærligt råd: tænk på, hvad du skal køre i de næste par år, ikke hvad der er nemmest lige nu.</p>
        <ul>
          <li><strong>Vælg manuelt</strong>, hvis du vil kunne låne hvilken som helst bil, køre i udlandet uden at tænke over det, eller måske skal køre varebil eller arbejdsbil.</li>
          <li><strong>Vælg automatgear</strong>, hvis du ved, du skal køre elbil eller automatbil, eller hvis koblingen står i vejen for at lære resten.</li>
        </ul>
        <p>Er du i tvivl, så prøv begge dele i de første lektioner – så mærker du hurtigt forskellen.</p>

        <p style="font-size:.82rem; margin-top:1.75rem; padding-top:.75rem; border-top:1px solid var(--border);">
          Reglerne om kode 78 og kode 148 er beskrevet hos <a href="https://www.fstyr.dk/privat/koerekort/koerekort-med-manuelt-gear-eller-automatgear" target="_blank" rel="noopener">Færdselsstyrelsen</a>. Regler og gebyrer kan ændre sig – tjek de officielle sider, eller spørg os. Opdateret oktober 2026.
        </p>

        <div class="cta-band">
          <h2>Klar til at komme i gang?</h2>
          <p>Se næste holdstart og tilmeld dig – eller ring, hvis du vil snakke gear først.</p>
          <div class="cta-band-btns">
            <a href="/#tilmeld-drivepilot" class="btn btn-wa">Se holdstart og tilmeld dig</a>
            <a href="tel:+4560441223" class="btn btn-ghost">Ring: 60 44 12 23</a>
          </div>
        </div>

        <h2>Andre forløb hos ProDriving</h2>
        <div class="related-grid">
          <a class="related-card" href="/korekort-til-bil-aalborg/">
            <strong>Kørekort til bil</strong>
            <span>Hele forløbet til kategori B – manuelt eller automatgear.</span>
          </a>
          <a class="related-card" href="/rutinetimer-aalborg/">
            <strong>Rutinetimer</strong>
            <span>Har du kørekort, men mangler rutine bag rattet?</span>
          </a>
          <a class="related-card" href="/guides/hvad-koster-korekort-aalborg/">
            <strong>Hvad koster et kørekort?</strong>
            <span>Hele regnestykket – også udgifterne der betales separat.</span>
          </a>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
