<?php
// Session start gjør at vi kan bruke $_SESSION for å lagre og hente data mellom forespørsler
session_start();

function escape($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

// Mock data
$statuses = ['Åpen', 'Under behandling', 'Løst'];
if (!isset($_SESSION['tickets'])) {
    $_SESSION['tickets'] = [
        1001 => ['subject' => 'Får ikke logget inn', 'customer' => 'Emma Hansen', 'email' => 'emma@example.com', 'category' => 'Teknisk støtte', 'priority' => 'Høy', 'owner' => '', 'status' => 'Åpen', 'history' => [
            ['author' => 'Emma Hansen', 'type' => 'message', 'time' => '2026-09-15 09:15', 'text' => 'Jeg får en feilmelding når jeg prøver å logge inn. Kan dere hjelpe meg?'],
        ]],
        1002 => ['subject' => 'Spørsmål om faktura', 'customer' => 'Oliver Berg', 'email' => 'oliver@example.com', 'category' => 'Betaling og faktura', 'priority' => 'Normal', 'owner' => 'Support', 'status' => 'Under behandling', 'history' => [
            ['author' => 'Oliver Berg', 'type' => 'message', 'time' => '2026-09-14 13:20', 'text' => 'Jeg tror jeg har mottatt samme faktura to ganger. Kan dere sjekke dette?'],
            ['author' => 'Support', 'type' => 'reply', 'time' => '2026-09-15 08:30', 'text' => 'Hei Oliver! Vi undersøker fakturaen og kommer tilbake til deg.'],
        ]],
        1003 => ['subject' => 'Oppdatere kontaktinformasjon', 'customer' => 'Nora Dahl', 'email' => 'nora@example.com', 'category' => 'Generelt', 'priority' => 'Lav', 'owner' => 'Support', 'status' => 'Løst', 'history' => [
            ['author' => 'Nora Dahl', 'type' => 'message', 'time' => '2026-09-14 10:00', 'text' => 'Hvor kan jeg endre e-postadressen min?'],
            ['author' => 'Support', 'type' => 'reply', 'time' => '2026-09-14 10:25', 'text' => 'Hei Nora! Du kan endre e-postadressen under Min profil → Kontaktinformasjon.'],
            ['author' => 'Support', 'type' => 'event', 'time' => '2026-09-14 10:25', 'text' => 'Endret status fra Åpen til Løst.'],
        ]],
    ];
}

// CSRF token
if (!isset($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}

// Handle "take ticket" action
function valid_token()
{
    return isset($_POST['csrf']) && is_string($_POST['csrf']) && hash_equals($_SESSION['csrf'], $_POST['csrf']);
}

// Loggføring av handlinger på saker. Brukes for å vise historikk i ticket-detaljer.php.
function add_history(&$ticket, $text, $type)
{
    $ticket['history'][] = ['author' => 'Support', 'type' => $type, 'time' => (new DateTime('now', new DateTimeZone('Europe/Oslo')))->format('Y-m-d H:i'), 'text' => $text];
}

// Fargekodestatus for visning i tabell
function status_class($status)
{
    return ['Åpen' => 'open', 'Under behandling' => 'active', 'Løst' => 'resolved'][$status] ?? 'open';
}
