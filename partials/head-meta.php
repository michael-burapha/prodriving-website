<?php
/**
 * Shared <head> boilerplate. Pages set these variables before requiring this file:
 *   $page_title        (required)
 *   $page_description  (required)
 *   $page_canonical     e.g. "https://prodriving.dk/generhvervelse-aalborg/"
 *   $page_og_title      defaults to $page_title
 *   $page_og_description defaults to $page_description
 *   $extra_schema       raw <script type="application/ld+json">...</script> block(s), page-specific
 */
$page_canonical      = $page_canonical      ?? 'https://prodriving.dk/';
$page_og_title       = $page_og_title       ?? $page_title;
$page_og_description = $page_og_description ?? $page_description;
$extra_schema        = $extra_schema        ?? '';

// Cache-bust the stylesheet on every change. Cloudflare caches /assets/style.css
// by URL for hours, so without this a CSS fix stays invisible behind a stale
// edge copy until the TTL expires or someone purges by hand.
$css_path    = dirname(__DIR__) . '/assets/style.css';
$css_version = is_file($css_path) ? filemtime($css_path) : '1';
?>
<head>
  <meta name="google-site-verification" content="en-oxu0T_jFo_1_TxHpR9KvoNVPj5XH7UAef7BUERes" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6GH4MTFEDH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-6GH4MTFEDH');
  </script>
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>" />

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />

  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($page_og_title) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($page_og_description) ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= htmlspecialchars($page_canonical) ?>" />
  <meta property="og:locale" content="da_DK" />
  <meta property="og:image" content="https://prodriving.dk/og-image.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- Schema: DrivingSchool (site-wide) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "DrivingSchool",
    "name": "ProDriving",
    "url": "https://prodriving.dk",
    "telephone": "+4560441223",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Enggårdsgade 5, kld.",
      "addressLocality": "Aalborg",
      "postalCode": "9000",
      "addressCountry": "DK"
    },
    "description": "Køreskole i Aalborg med små hold. Særligt hensyn til ADHD og ordblindhed. Kørekort til bil, generhvervelse, særlig køreundervisning og rutinetimer.",
    "currenciesAccepted": "DKK",
    "priceRange": "kr 650 – kr 12.995",
    "founder": { "@type": "Person", "name": "Carina Hansen" }
  }
  </script>

<?= $extra_schema ?>
  <link rel="stylesheet" href="/assets/style.css?v=<?= $css_version ?>" />
</head>
