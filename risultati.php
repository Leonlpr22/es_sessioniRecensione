<?php
session_start();

// Recupero dei dati dalla sessione
$count = $_SESSION['count'] ?? 0;
$voti = $_SESSION['voti'] ?? [];
$ultima_data = $_SESSION['ultima_data'] ?? "";

// Calcolo della media dei voti
$media = 0;
if ($count > 0) {
    $media = array_sum($voti) / $count;
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati Recensioni</title>
</head>
<body>
    <h1>Risultati Recensioni</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Numero di invii</th>
                <th>Ultima data inviata</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo htmlspecialchars($ultima_data); ?></td>
            </tr>
        </tbody>
    </table>

    <h3>Media recensioni: <?php echo round($media, 2); ?></h3>

    <h3>Voti delle recensioni:</h3>
    <ul>
        <?php foreach ($voti as $voto) : ?>
            <li><?php echo $voto; ?></li>
        <?php endforeach; ?>
    </ul>

    <br><a href="presentazione.html">Torna al modulo</a>
</body>
</html>
