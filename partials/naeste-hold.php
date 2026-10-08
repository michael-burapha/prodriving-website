<?php
/**
 * Next class start, read from the DrivePilot signup widget.
 *
 * The #1 competitor for "køreskole aalborg" puts its next class date in the
 * title tag and updates it by hand. This does the same automatically, so it
 * can never go stale or be forgotten.
 *
 * Fails quiet on purpose: if DrivePilot is slow, unreachable or changes its
 * markup, this returns null and the caller simply omits the date. A missing
 * date is fine; a wrong or stale one is not.
 */

const PRODRIVING_HOLD_URL   = 'https://system.drivepilot.dk/drivepilot_signup/65decca3-63ed-12ec-bb04-94e6f751e895/1/';
const PRODRIVING_HOLD_TTL   = 21600; // 6 hours
const PRODRIVING_HOLD_CACHE = __DIR__ . '/../cache/naeste-hold.json';

/**
 * @return array{dato:string, iso:string}|null  e.g. ['dato' => '27. oktober', 'iso' => '2026-10-27']
 */
function prodriving_naeste_hold(): ?array
{
    $cached = null;
    if (is_readable(PRODRIVING_HOLD_CACHE)) {
        $raw = @file_get_contents(PRODRIVING_HOLD_CACHE);
        $cached = $raw ? json_decode($raw, true) : null;
        if (is_array($cached) && isset($cached['fetched'])
            && (time() - (int)$cached['fetched']) < PRODRIVING_HOLD_TTL) {
            return $cached['hold'] ?? null;      // fresh enough
        }
    }

    $html = @file_get_contents(PRODRIVING_HOLD_URL, false, stream_context_create([
        'http' => ['timeout' => 3, 'ignore_errors' => true,
                   'header'  => "User-Agent: prodriving.dk next-class fetcher\r\n"],
    ]));

    if ($html === false || $html === '') {
        // Stale cache beats nothing; null if we have neither.
        return is_array($cached) ? ($cached['hold'] ?? null) : null;
    }

    $hold = prodriving_parse_foerste_hold($html);

    @mkdir(dirname(PRODRIVING_HOLD_CACHE), 0775, true);
    @file_put_contents(
        PRODRIVING_HOLD_CACHE,
        json_encode(['fetched' => time(), 'hold' => $hold]),
        LOCK_EX
    );

    return $hold;
}

/**
 * Pulls "27. Oktober 2026 17:00" style dates out of the widget and returns the
 * soonest one that has not already passed.
 */
function prodriving_parse_foerste_hold(string $html): ?array
{
    $maaneder = [
        'januar' => 1, 'februar' => 2, 'marts' => 3,     'april'    => 4,
        'maj'    => 5, 'juni'    => 6, 'juli'  => 7,     'august'   => 8,
        'september' => 9, 'oktober' => 10, 'november' => 11, 'december' => 12,
    ];

    if (!preg_match_all('/(\d{1,2})\.\s+([A-Za-zÆØÅæøå]+)\s+(\d{4})/u', $html, $m, PREG_SET_ORDER)) {
        return null;
    }

    $idag = (int)strtotime('today');
    $fundne = [];

    foreach ($m as $hit) {
        $maanedNavn = mb_strtolower($hit[2], 'UTF-8');
        if (!isset($maaneder[$maanedNavn])) {
            continue;                      // not a Danish month: ignore
        }
        $ts = mktime(0, 0, 0, $maaneder[$maanedNavn], (int)$hit[1], (int)$hit[3]);
        if ($ts !== false && $ts >= $idag) {
            $fundne[$ts] = $maanedNavn;    // keyed by ts, so duplicates collapse
        }
    }

    if (!$fundne) {
        return null;
    }

    ksort($fundne);
    $ts = array_key_first($fundne);

    return [
        'dato' => (int)date('j', $ts) . '. ' . $fundne[$ts],
        'iso'  => date('Y-m-d', $ts),
    ];
}
