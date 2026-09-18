<?php include 'header.html'; ?>

<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opprett sak · Saklig</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="project-info">
            <h1>Kundeservice</h1>
            <p>Saklig er et planlagt ticketsystem der kunder kan sende inn henvendelser og følge sakene sine. Support skal kunne se, prioritere og svare på alle saker.</p>
            <p><strong>Sprint 1:</strong> Vi viser de viktigste sidene og enkel navigasjon. Database, innlogging og ekte innsending kommer senere.</p>
        </section>

        <section class="box form-box">
            <h2>Send inn en henvendelse</h2>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <label for="navn">Navn</label><br>
                <input id="navn" type="text" name="navn" required><br>

                <label for="epost">E-post</label><br>
                <input id="epost" type="email" name="epost" required><br>

                <label for="kategori">Kategori</label><br>
                <select id="kategori" name="kategori" required>
                    <option value="">Velg kategori</option>
                    <option value="teknisk">Teknisk støtte</option>
                    <option value="faktura">Betaling og faktura</option>
                    <option value="generelt">Generelt</option>
                </select><br>

                <label for="emne">Emne</label><br>
                <input id="emne" type="text" name="emne" required><br>

                <label for="beskrivelse">Beskrivelse</label><br>
                <textarea id="beskrivelse" name="beskrivelse" rows="5"></textarea><br>

                <label for="vedlegg">Vedlegg</label><br>
                <input id="vedlegg" type="file" name="vedlegg"><br>

                <button type="submit" name="submit">Send inn henvendelse</button><br>
            </form>
        </section>
    </main>
</body>
</html>
