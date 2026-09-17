<?php
require __DIR__ . '/tickets.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    $id = array_key_first($_SESSION['tickets']);
}

$ticket = $_SESSION['tickets'][$id] ?? null;
$error = '';
$notice = '';

if ($ticket && ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $reply = is_string($_POST['reply'] ?? null) ? trim($_POST['reply']) : '';
    $newStatus = is_string($_POST['status'] ?? null) ? $_POST['status'] : '';

    if (!valid_token()) {
        $error = 'Skjemaet har utløpt. Last siden på nytt og prøv igjen.';
    } elseif (!in_array($newStatus, $statuses, true)) {
        $error = 'Velg en gyldig status.';
    } elseif ($reply === '' && $newStatus === $ticket['status']) {
        $error = 'Skriv et svar eller velg en annen status.';
    } else {
        if ($reply !== '') {
            add_history($ticket, $reply, 'reply');
        }

        if ($newStatus !== $ticket['status']) {
            add_history($ticket, 'Status endret fra ' . $ticket['status'] . ' til ' . $newStatus . '.', 'event');
            $ticket['status'] = $newStatus;
        }

        $_SESSION['tickets'][$id] = $ticket;
        $notice = 'Endringene er lagret i demoen.';
    }
}
?>
<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saksdetaljer · Saklig</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.html'; ?>

<main class="container">
    <p><a href="admin.php">← Tilbake til admin</a></p>

    <?php if (!$ticket): ?>
        <section class="box">
            <h1>Fant ikke saken</h1>
            <p>Velg en sak fra adminoversikten.</p>
        </section>
    <?php else: ?>
        <h1>Sak #<?= $id ?> – <?= escape($ticket['subject']) ?></h1>
        <p>Dette er en forenklet detaljside med eksempeldata for Sprint 1.</p>

        <?php if ($error): ?>
            <p class="notice error" role="alert"><?= escape($error) ?></p>
        <?php endif; ?>

        <?php if ($notice): ?>
            <p class="notice" role="status"><?= escape($notice) ?></p>
        <?php endif; ?>

        <section class="box">
            <h2>Om saken</h2>
            <dl class="ticket-info">
                <dt>Kunde</dt><dd><?= escape($ticket['customer']) ?></dd>
                <dt>E-post</dt><dd><?= escape($ticket['email']) ?></dd>
                <dt>Kategori</dt><dd><?= escape($ticket['category']) ?></dd>
                <dt>Prioritet</dt><dd><?= escape($ticket['priority']) ?></dd>
                <dt>Ansvarlig</dt><dd><?= escape($ticket['owner'] ?: 'Ikke tildelt') ?></dd>
                <dt>Status</dt><dd><?= escape($ticket['status']) ?></dd>
            </dl>
        </section>

        <section class="box">
            <h2>Meldinger og historikk</h2>
            <ol class="messages">
            <?php foreach ($ticket['history'] as $entry): ?>
                <li class="message">
                    <p class="message-heading">
                        <strong><?= escape($entry['author']) ?></strong>
                        <span><?= escape(date('d.m.Y H:i', strtotime($entry['time']))) ?></span>
                    </p>
                    <p><?= nl2br(escape($entry['text'])) ?></p>
                </li>
            <?php endforeach; ?>
            </ol>
        </section>

        <section class="box form-box">
            <h2>Svar eller endre status</h2>
            <form method="post" action="ticket-detaljer.php?id=<?= $id ?>">
                <input type="hidden" name="csrf" value="<?= escape($_SESSION['csrf']) ?>">

                <label for="reply">Nytt svar</label>
                <textarea id="reply" name="reply" rows="5" placeholder="Skriv et svar til kunden"></textarea>

                <label for="status">Status</label>
                <select id="status" name="status">
                <?php foreach ($statuses as $status): ?>
                    <option value="<?= escape($status) ?>" <?= $ticket['status'] === $status ? 'selected' : '' ?>>
                        <?= escape($status) ?>
                    </option>
                <?php endforeach; ?>
                </select>

                <button type="submit">Lagre</button>
            </form>
        </section>
    <?php endif; ?>
</main>
</body>
</html>
