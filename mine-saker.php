<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mine saker · Saklig</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <main class="container">
        <h1>Mine saker</h1>
        <p>Her skal kunden senere kunne følge sine egne henvendelser.</p>
        <div class="table-scroll box">
            <table>
                <thead>
                    <tr><th>Saks-ID</th><th>Emne</th><th>Kategori</th><th>Dato</th><th>Status</th></tr>
                </thead>
                <tbody>
                    <tr><td colspan="5">Ingen saker å vise ennå.</td></tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
