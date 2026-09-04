<!DOCTYPE html>
<html lang="da">
<?php
$page_title       = 'ProDriving Køreskole Aalborg | Personlig køreundervisning';
$page_description = 'ProDriving køreskole i Aalborg. Små hold – vi tager hensyn til ADHD og ordblindhed. Kørekort til bil fra 12.995 kr inkl. moms. Ring til os på 60 44 12 23.';
$page_canonical   = 'https://prodriving.dk/';
$page_og_title    = 'ProDriving Køreskole Aalborg';
$page_og_description = 'Små hold. Personlig køreundervisning med hensyn til ADHD og ordblindhed. Aalborg centrum.';
$is_home = true;

$extra_schema = <<<'SCHEMA'
  <!-- Schema: FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Hvornår kan jeg begynde på mit kørekort?",
        "acceptedAnswer": { "@type": "Answer", "text": "Du kan starte, når du er 16 år og 9 måneder gammel – 3 måneder inden du fylder 17. Det betyder, at du kan have kørekortet i hånden allerede den dag du fylder 17 år." }
      },
      {
        "@type": "Question",
        "name": "Tager ProDriving hensyn til ADHD og ordblindhed?",
        "acceptedAnswer": { "@type": "Answer", "text": "Ja. Med små hold er der god plads og tid til at tilpasse undervisningen til den enkelte elev – uanset om du har ADHD, ordblindhed eller blot brug for lidt ekstra ro." }
      },
      {
        "@type": "Question",
        "name": "Hvad er inkluderet i de 12.995 kr?",
        "acceptedAnswer": { "@type": "Answer", "text": "Den lovmæssige pakke dækker: teoriundervisning, manøvrebane, manøvre på vej, mørkekørsel, små hold og hensyn til ADHD og ordblindhed. Betales separat: gebyr til færdselsstyrelsen (1.600 kr), førstehjælpskursus (ca. 700 kr), lægeattest (ca. 500 kr), pasfoto (ca. 100 kr), billeje til køreprøven (1.000 kr) samt ekstra køre lektioner (650 kr / lektion)." }
      },
      {
        "@type": "Question",
        "name": "Hvad er Generhvervelse?",
        "acceptedAnswer": { "@type": "Answer", "text": "Generhvervelse er for bilister, der har fået frakendt kørekortet og skal igennem et særligt forløb for at generhverve det. Individuelt tilpasset forløb til 3.695 kr." }
      },
      {
        "@type": "Question",
        "name": "Regler for 17-årige",
        "acceptedAnswer": { "@type": "Answer", "text": "Fra 1. juli 2025 må 17-årige køre alene kl. 05:00–20:00. Om natten (20:00–05:00) kræves en ledsager på mindst 24 år med dansk kørekort i mindst 5 år, som ikke har fået kørekortet frakendt inden for de seneste 5 år. Kører du alene om natten, koster det 3.000–4.000 kr. i bøde. Fuld selvstændighed opnås først ved 18 år." }
      }
    ]
  }
  </script>
SCHEMA;

require __DIR__ . '/partials/head-meta.php';
require __DIR__ . '/partials/header.php';
?>
  <main>

    <!-- ── HERO ── -->
    <section class="hero" id="top">
      <!-- Background: video (desktop) -->
      <video class="hero-video" autoplay muted loop playsinline>
        <source src="/prodriving-aalborg-drone-hero.mp4" type="video/mp4" />
      </video>
      <!-- Background: image (mobile) -->
      <div class="hero-img-bg" role="img" aria-label="ProDriving køreskolens bil i Aalborg"></div>
      <!-- Gradient overlay -->
      <div class="hero-overlay" aria-hidden="true"></div>

      <div class="container">
        <div class="hero-badge">📍 Køreskole i Aalborg</div>
        <h1>Få dit <em>kørekort</em> – trygt og personligt</h1>
        <p class="hero-sub">
          Hos ProDriving kører vi med små hold. Carina Hansen har tid til dig.
        </p>
        <div class="hero-ctas">
          <a href="tel:+4560441223" class="btn btn-wa">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
            Ring til Carina
          </a>
          <a href="#priser" class="btn btn-ghost" style="color:#fff; border-color:rgba(255,255,255,.4);">Se priser</a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat">
            <strong>Små</strong>
            <span>hold med plads til dig</span>
          </div>
          <div class="hero-stat">
            <strong>16 år 9 mdr.</strong>
            <span>kan du starte</span>
          </div>
          <div class="hero-stat">
            <strong>Aalborg</strong>
            <span>Enggårdsgade 5, kld.</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ── USP STRIP ── -->
    <div class="usp-strip">
      <div class="container">
        <div class="usp-grid">
          <div class="usp-item">
            <span class="usp-icon">👥</span>
            <div class="usp-text"><strong>Små hold</strong><span>Personlig undervisning</span></div>
          </div>
          <div class="usp-item">
            <span class="usp-icon">🧠</span>
            <div class="usp-text"><strong>ADHD & ordblindhed</strong><span>Særligt hensyn</span></div>
          </div>
          <div class="usp-item">
            <span class="usp-icon">📍</span>
            <div class="usp-text"><strong>Aalborg centrum</strong><span>Enggårdsgade 5, kld.</span></div>
          </div>
          <div class="usp-item">
            <span class="usp-icon">💳</span>
            <div class="usp-text"><strong>Delbetaling mulig</strong><span>Del pakken over to betalinger</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- ── YDELSER ── -->
    <section class="section" id="ydelser">
      <div class="container">
        <p class="section-label">Start inden 1. juli 2026</p>
        <h2 class="section-title">Færdiggør kørekortet under de nuværende regler</h2>
        <p class="section-sub">Fra 1. juli ændres køreuddannelsen i Danmark – lektioner erstattes af moduler og pensum udvides. Starter du nu, kan du færdiggøre hele forløbet under de regler du kender, frem til 31. december 2026. Vi tilbyder alt hvad du har brug for.</p>

        <div class="ydelser-grid">
          <div class="ydelse-card">
            <div class="ydelse-icon">🚗</div>
            <h3>Kørekort til bil</h3>
            <p>Få dit første kørekort med personlig undervisning. Du kan starte allerede som 16 år og 9 måneder. Vi kører i både manuel og automatgear.</p>
            <a class="ydelse-more" href="/korekort-til-bil-aalborg/">Læs mere om kørekort til bil →</a>
          </div>
          <div class="ydelse-card">
            <div class="ydelse-icon">📋</div>
            <h3>Særlig køreundervisning</h3>
            <p>Har du mistet kørekortet inden for de første 3 år? Vi hjælper dig med at generhverve det med et målrettet forløb.</p>
            <a class="ydelse-more" href="/saerlig-koreundervisning/">Læs mere om særlig køreundervisning →</a>
          </div>
          <div class="ydelse-card">
            <div class="ydelse-icon">🔄</div>
            <h3>Generhvervelse</h3>
            <p>Særligt tilpasset forløb til bilister der skal generhverve kørekortet efter frakendelse. Individuel vejledning med Carina.</p>
            <a class="ydelse-more" href="/generhvervelse-aalborg/">Læs mere om generhvervelse →</a>
          </div>
          <div class="ydelse-card">
            <div class="ydelse-icon">⚙️</div>
            <h3>Rutinetimer</h3>
            <p>Allerede kørekort, men vil gerne øve dig? Vælg selv om du kører i manuel gear eller automatgear. Ingen forpligtelse.</p>
            <a class="ydelse-more" href="/rutinetimer-aalborg/">Læs mere om rutinetimer →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ── PRISER ── -->
    <section class="section priser-bg" id="priser">
      <div class="container">
        <p class="section-label">Priser</p>
        <h2 class="section-title">Gennemskuelige priser</h2>
        <p class="section-sub">Alle priser er inkl. moms. Ingen skjulte gebyrer.</p>

        <div class="info-banner">
          <span class="bi">ℹ️</span>
          <div>
            <strong>Nye regler fra 1. juli 2026:</strong> Køreuddannelsen moderniseres – moduler erstatter lektioner, og elbiler/hybridbiler tilføjes pensum. Starter du inden 1. juli, kan du færdiggøre forløbet under de nuværende regler frem til 31. december 2026.
            <a href="#faq" style="color:var(--accent); margin-left:.25rem;">Læs mere i FAQ →</a>
          </div>
        </div>

        <div class="priser-grid">
          <!-- Nyt kørekort -->
          <div class="pris-card featured">
            <div class="pris-badge">Mest populær</div>
            <h3>Kørekort til bil</h3>
            <p class="pris-desc">Alt hvad du skal bruge for at starte fra bunden</p>
            <div class="pris-amount">12.995 <sub>kr</sub></div>
            <p class="pris-inkl">inkl. moms · undervisning</p>
            <ul class="pris-includes">
              <li>Teoriundervisning</li>
              <li>Manøvrebane</li>
              <li>Manøvre på vej</li>
              <li>Mørkekørsel</li>
              <li>Små hold</li>
              <li>Hensyn til ADHD & ordblindhed</li>
            </ul>
            <a href="#tilmeld-drivepilot" class="btn btn-wa">Tilmeld dig</a>
          </div>

          <!-- Særlig -->
          <div class="pris-card">
            <h3>Særlig køreundervisning</h3>
            <p class="pris-desc">Til nye bilister der har mistet kørekortet inden for de første 3 år</p>
            <div class="pris-amount">7.995 <sub>kr</sub></div>
            <p class="pris-inkl">inkl. moms · undervisning</p>
            <ul class="pris-includes">
              <li>Målrettet køreuddannelse</li>
              <li>Personlig underviser</li>
              <li>Tilpasset dit behov</li>
            </ul>
            <a href="#tilmeld-drivepilot" class="btn btn-ghost">Tilmeld dig</a>
          </div>

          <!-- Generhvervelse -->
          <div class="pris-card">
            <h3>Generhvervelse</h3>
            <p class="pris-desc">Til bilister der skal generhverve kørekortet efter frakendelse</p>
            <div class="pris-amount">3.695 <sub>kr</sub></div>
            <p class="pris-inkl">inkl. moms · undervisning</p>
            <ul class="pris-includes">
              <li>Individuelt tilpasset forløb</li>
              <li>Personlig vurdering</li>
              <li>Carina Hansen er din underviser</li>
            </ul>
            <a href="#tilmeld-drivepilot" class="btn btn-ghost">Tilmeld dig</a>
          </div>
        </div>

        <p class="extras-title">Øvrige udgifter (betales separat)</p>
        <table class="extras-table">
          <tr><td>Gebyr til færdselsstyrelsen</td><td>1.600 kr</td></tr>
          <tr><td>Førstehjælpskursus</td><td>ca. 700 kr</td></tr>
          <tr><td>Lægeattest</td><td>ca. 500 kr</td></tr>
          <tr><td>Pasfoto</td><td>ca. 100 kr</td></tr>
          <tr><td>Billeje til køreprøven</td><td>1.000 kr</td></tr>
          <tr><td>Online teorikode (gælder 140 dage)</td><td>250 kr</td></tr>
          <tr><td>Ekstra køre lektioner</td><td>650 kr / lektion</td></tr>
          <tr><td>Rutinetimer</td><td>650 kr / lektion</td></tr>
        </table>
        <p style="font-size:.78rem; color:var(--muted); margin-top:1rem;">
          Alle priser er inkl. moms. Delbetaling er mulig – spørg Carina for mere info.
        </p>
        <p style="font-size:.75rem; color:var(--muted); margin-top:.5rem; line-height:1.6; border-top:1px solid var(--border); padding-top:.75rem;">
          * Priser på tredjepartsydelser (førstehjælpskursus, lægeattest, gebyr til Færdselsstyrelsen) er vejledende og fastsættes af den pågældende udbyder. ProDriving tager forbehold for trykfejl og prisændringer uden forudgående varsel.
        </p>
      </div>
    </section>

    <!-- ── HOLD START ── -->
    <section class="section" id="hold-start">
      <div class="container">
        <p class="section-label">Tilmelding</p>
        <h2 class="section-title">Næste hold starter</h2>
        <p class="section-sub">Teori hver tirsdag og torsdag kl. 17:00.</p>

        <div class="tilmeld-card" id="tilmeld-drivepilot" style="margin-top:2rem; scroll-margin-top:6rem;">
          <iframe src="https://system.drivepilot.dk/drivepilot_signup/65decca3-63ed-12ec-bb04-94e6f751e895/1/" width="100%" height="700" style="border:0; border-radius:var(--r-sm); display:block;" title="Tilmelding via DrivePilot"></iframe>
        </div>
      </div>
    </section>

    <!-- ── ADHD & ORDBLINDHED ── -->
    <section class="section adhd-section">
      <div class="container">
        <div class="adhd-grid">
          <div>
            <p class="section-label">Ingen er ens</p>
            <h2 class="section-title">Undervisning der passer til dig</h2>
            <p style="color:var(--muted); font-size:.93rem; line-height:1.75; margin-bottom:.75rem;">
              Med små hold er der plads til alle – uanset om du har ADHD, ordblindhed, eller blot trives bedre med ro og tid til at stille spørgsmål.
            </p>
            <p style="color:var(--muted); font-size:.93rem; line-height:1.75; margin-bottom:1.5rem;">
              ProDriving er den eneste køreskole i Aalborg, der aktivt tager dette hensyn i undervisningen.
            </p>
            <p style="margin-bottom:1.5rem;">
              <a class="ydelse-more" href="/guides/korekort-adhd-ordblindhed/">Læs mere om kørekort med ADHD eller ordblindhed →</a>
            </p>
            <div class="adhd-points">
              <div class="adhd-point">
                <span class="adhd-point-icon">👥</span>
                <div class="adhd-point-text">
                  <strong>Små hold</strong>
                  <span>Mere tid og opmærksomhed til den enkelte elev</span>
                </div>
              </div>
              <div class="adhd-point">
                <span class="adhd-point-icon">🧠</span>
                <div class="adhd-point-text">
                  <strong>Tilpasset undervisning</strong>
                  <span>Vi tilpasser tempo og formidling efter dine behov</span>
                </div>
              </div>
              <div class="adhd-point">
                <span class="adhd-point-icon">🤝</span>
                <div class="adhd-point-text">
                  <strong>Trygt læringsmiljø</strong>
                  <span>Ingen stress – vi går i dit tempo</span>
                </div>
              </div>
            </div>
          </div>

          <div class="media-col">
            <img
              src="/images/koereundervisning-elev-rat-limfjord-aalborg.jpg"
              alt="Køreundervisning hos ProDriving – elev bag rattet med Limfjordsbroen i baggrunden, Aalborg"
              style="width:100%;aspect-ratio:4/3;object-fit:cover;object-position:50% 38%;border-radius:var(--r);"
              loading="lazy"
              width="900" height="675"
            />
            <div style="display:flex;gap:.65rem;align-items:flex-start;">
              <video
                src="/videos/bestaaet-elev-prodriving-aalborg.mp4"
                style="width:42%;aspect-ratio:9/16;object-fit:cover;border-radius:var(--r-sm);display:block;flex-shrink:0;"
                autoplay muted loop playsinline
                title="Bestået elev hos ProDriving køreskole Aalborg"
              ></video>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── FAQ ── -->
    <section class="section" id="faq">
      <div class="container">
        <p class="section-label">Spørgsmål & svar</p>
        <h2 class="section-title">Ofte stillede spørgsmål</h2>

        <div class="faq-list">

          <div class="faq-item">
            <button class="faq-q">Hvornår kan jeg begynde på mit kørekort? <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Du kan starte, når du er <strong>16 år og 9 måneder</strong> – altså 3 måneder inden du fylder 17. Det betyder, at du kan have kørekortet i hånden allerede den dag du fylder 17 år.
            </div></div>
          </div>

          <div class="faq-item">
            <button class="faq-q">Hvad er inkluderet i de 12.995 kr? <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Den lovmæssige pakke dækker:
              <ul style="margin:.5rem 0 .75rem 1.2rem; line-height:1.9;">
                <li>Teoriundervisning (minimum 30 lektioner)</li>
                <li>Manøvrebane (3 lektioner)</li>
                <li>Manøvre på vej (16 køre lektioner på vej)</li>
                <li>Mørkekørsel (1 køre lektion på vej)</li>
                <li>Køreteknisk anlæg (4 lektioner)</li>
                <li>Små hold</li>
                <li>Hensyn til ADHD &amp; ordblindhed</li>
              </ul>
              Betales separat: gebyr til færdselsstyrelsen (1.600 kr), førstehjælpskursus (ca. 700 kr), lægeattest (ca. 500 kr), pasfoto (ca. 100 kr), billeje til køreprøven (1.000 kr) samt ekstra køre lektioner (650 kr / lektion).
            </div></div>
          </div>

          <div class="faq-item">
            <button class="faq-q">Tager ProDriving hensyn til ADHD og ordblindhed? <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Ja – og det er noget vi er stolte af. Med små hold har Carina Hansen tid og plads til at tilpasse undervisningen, så alle trives. Vi er p.t. den eneste køreskole i Aalborg der aktivt gør dette.
            </div></div>
          </div>

          <div class="faq-item">
            <button class="faq-q">Generhvervelse <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Hvis du har mistet dit kørekort enten betinget eller ubetinget, skal du bestå en teoretisk og praktisk prøve.<br><br>
              Vores pakkeløsning indeholder:
              <ul style="margin:.5rem 0 .75rem 1.2rem; line-height:1.9;">
                <li>Fri teori</li>
                <li>3 kørelektioner</li>
                <li>Leje af bil til den praktiske prøve</li>
              </ul>
            </div></div>
          </div>

          <div class="faq-item">
            <button class="faq-q">Særlig køreundervisning <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Særlig køreundervisning er et lovkrav for personer, der har fået et kørselsforbud.<br><br>
              Vores pakkeløsning indeholder lovkravet til undervisning:
              <ul style="margin:.5rem 0 .75rem 1.2rem; line-height:1.9;">
                <li>Fri teori (minimum 8 teorilektioner)</li>
                <li>8 kørelektioner</li>
                <li>Leje af bil til den praktiske prøve</li>
              </ul>
            </div></div>
          </div>

          <div class="faq-item">
            <button class="faq-q">Regler for 17-årige <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Fra 1. juli 2025 må 17-årige køre bil alene om dagen. Her er reglerne:
              <ul style="margin:.5rem 0 .75rem 1.2rem; line-height:1.9;">
                <li><strong>Alene kl. 05:00–20:00:</strong> Du må køre helt uden ledsager i dagtimerne.</li>
                <li><strong>Ledsager kl. 20:00–05:00:</strong> Om natten skal du have en ledsager med. Ledsageren skal mindst være 24 år, have haft dansk kørekort (kategori B) i mindst 5 år og ikke have fået kørekortet frakendt inden for de seneste 5 år.</li>
                <li><strong>Fuld selvstændighed:</strong> Først når du fylder 18 år, må du køre alene på alle tidspunkter.</li>
                <li><strong>Bøder ved overtrædelse:</strong> Kører du alene om natten uden ledsager, koster det 3.000 kr. ved første overtrædelse, 3.500 kr. ved anden og 4.000 kr. ved tredje.</li>
                <li><strong>Alle normale regler gælder:</strong> Fartgrænser og øvrige færdselsregler gælder fuldt ud – ingen undtagelser for nye bilister.</li>
              </ul>
            </div></div>
          </div>

          <div class="faq-item">
            <button class="faq-q">Hvad er Rutinetimer? <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Rutinetimer er til dig, der allerede har kørekortet men gerne vil øve dig – fx hvis du sjældent kører eller vil opbygge mere sikkerhed. Du vælger selv om du vil køre manuel gear eller automatgear. Pris: 650 kr / lektion inkl. moms.
            </div></div>
          </div>


          <div class="faq-item">
            <button class="faq-q">Hvad sker der med de nye kørekortregler fra 1. juli 2026? <span class="faq-chevron">▼</span></button>
            <div class="faq-a"><div class="faq-a-inner">
              Fra 1. juli 2026 moderniseres køreuddannelsen i Danmark. Lektioner erstattes af moduler, der bygger oven på hinanden, og pensum udvides med elbiler, hybridbiler og miljøvenlig kørsel. Starter du inden 1. juli 2026, kan du færdiggøre dit kørekort under de nuværende regler frem til 31. december 2026.
            </div></div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── OM CARINA ── -->
    <section class="section priser-bg" id="om">
      <div class="container">
        <p class="section-label">Din underviser</p>
        <h2 class="section-title">Om Carina Hansen</h2>

        <div class="om-grid">
          <div>
            <img
              src="/images/carina-hansen-koereskole-instruktor-aalborg.jpg"
              alt="Carina Hansen – kørelærer og ejer af ProDriving køreskole i Aalborg"
              style="width:100%;max-width:260px;aspect-ratio:3/4;object-fit:cover;object-position:center 15%;border-radius:var(--r);display:block;margin:0 auto;"
              loading="lazy"
              width="260" height="347"
            />
          </div>
          <div class="om-text">
            <p>Carina Hansen er kørelærer og ejer af ProDriving i Aalborg. Med over <strong>14 års erfaring</strong> bag rattet som underviser har hun tid og ro til at møde hver elev, der hvor de er.</p>
            <p>Carina har erfaring med elever med <strong>særlige udfordringer</strong> – herunder ADHD, ADD og ordblindhed. Hun tilpasser undervisningen til den enkelte, så alle kan lykkes uanset forudsætninger.</p>
            <p>ProDriving tilbyder kørekort til bil, generhvervelse, særlig køreundervisning samt rutinetimer i både manuel og automatgear. Skolen holder til i kælderen på Enggårdsgade 5 i Aalborg centrum.</p>
            <a href="tel:+4560441223" class="btn btn-wa" style="margin-top:1.5rem;">
              Ring til Carina: 60 44 12 23
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ── TILMELD DIG ── -->
    <section class="section priser-bg" id="tilmeld">
      <div class="container">
        <p class="section-label">Kontakt</p>
        <h2 class="section-title" style="text-align:center;">Kontakt os</h2>
        <p class="section-sub" style="text-align:center; margin:0 auto 2rem;">Skriv til os, så vender Carina tilbage hurtigst muligt.</p>

        <div class="tilmeld-card">
          <form action="/send.php" method="POST" id="tilmeldForm">

            <div class="form-row">
              <div class="form-group">
                <label for="navn">Navn *</label>
                <input type="text" id="navn" name="navn" placeholder="Dit fulde navn" required />
              </div>
              <div class="form-group">
                <label for="telefon">Telefon *</label>
                <input type="tel" id="telefon" name="telefon" placeholder="60 44 12 23" required />
              </div>
              <div class="form-group full">
                <label for="email">E-mail *</label>
                <input type="email" id="email" name="email" placeholder="din@email.dk" required />
              </div>
              <div class="form-group full">
                <label for="besked">Besked</label>
                <textarea id="besked" name="besked" placeholder="Skriv fx hvilket kursus du er interesseret i, eller hvornår du ønsker at starte…"></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-wa" style="width:100%; margin-top:1.5rem; font-size:1rem;">
              Send besked
            </button>

            <div class="form-success" id="formSuccess">
              ✓ Tak! Vi har modtaget din besked og vender tilbage hurtigst muligt.
            </div>
          </form>
        </div>
      </div>
    </section>

  </main>

<?php require __DIR__ . '/partials/footer.php'; ?>
