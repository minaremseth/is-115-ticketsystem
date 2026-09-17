<?php
require __DIR__ . '/tickets.php';
$tickets = $_SESSION['tickets'];
?>
<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin · Saklig</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.html'; ?>

<main class="container">
    <h1>Admin – alle saker</h1>
    <p>En enkel oversikt for supportbehandlere.</p>
    <section>
        <h2>Saksoversikt</h2>
        <div class="table-scroll box">
            <table>
                <caption class="sr-only">Alle saker med kunde, prioritet, status, ansvarlig og handlinger</caption>
                <thead>
                    <tr>
                        <th scope="col">Sak / kunde</th>
                        <th scope="col">Prioritet</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ansvarlig</th>
                        <th scope="col">Handlinger</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($tickets as $id => $ticket): ?>
                    <tr>
                        <td>
                            <a class="subject" href="ticket-detaljer.php?id=<?= $id ?>">
                                <span class="ticket-number">#<?= $id ?></span>
                                <?= escape($ticket['subject']) ?>
                            </a>
                            <span class="customer"><?= escape($ticket['customer']) ?></span>
                        </td>
                        <td>
                            <span class="priority <?= $ticket['priority'] === 'Høy' ? 'high' : '' ?>">
                                <?= escape($ticket['priority']) ?>
                            </span>
                        </td>
                        <td>
                            <span class="badge <?= status_class($ticket['status']) ?>">
                                <?= escape($ticket['status']) ?>
                            </span>
                        </td>
                        <td><?= escape($ticket['owner'] ?: 'Ikke tildelt') ?></td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="ticket-detaljer.php?id=<?= $id ?>">Åpne sak</a>
                                <?php if ($ticket['owner'] === ''): ?>
                                    <form method="post">
                                        <input type="hidden" name="csrf" value="<?= escape($_SESSION['csrf']) ?>">
                                        <input type="hidden" name="ticket_id" value="<?= $id ?>">
                                        <button type="submit">Ta saken</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($tickets)): ?>
                    <tr><td colspan="5">Ingen saker å vise ennå.</td></tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </section>
</main>
</body>
</html>
