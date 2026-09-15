<?php include 'header.html'; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Kundeservice / Ticketsystem</title>
</head>
<body>
    <h1>Send inn en hendvendelse</h1>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        Navn:<br>
        <input type="text" name="navn" required><br>
        Epost:<br>
        <input type="email" name="epost" required><br>
        Kategori: <br>
        <select id="kategori" name="kategori" required>
            <option value="">--Velg kategori-- </option>
            <option value="teknisk">Teknisk støtte </option>
            <option value="faktura">Betaling og faktura </option>
            <option value="generelt">Generelt </option>
        </select><br>
        Emne: <br>
        <input type="text" name="emne" required><br>
        Beskrivelse: <br>
        <textarea name="beskrivelse" rows="5"></textarea><br>
        Vedlegg: <br>
        <input type="file" name="vedlegg"><br>
        <button type="submit" name="submit">Send inn hendvendelse</button>

    </form>
</body>
</html>