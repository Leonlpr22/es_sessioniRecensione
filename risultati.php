<?php
session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati delle Recensioni</title>
</head>
<body>
    <h1>Risultati delle Recensioni</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>Numero di invii</th>
                <th>Ultima data inviata</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_SESSION['count']; ?></td>
                <td><?php echo $_SESSION['ultima_data']; ?></td>
            </tr>
        </tbody>
    </table>

    <h2>Lista dei Voti:</h2>
    <ul>
        <?php
        foreach ($_SESSION['voti'] as $voto) {
            echo "<li>Voto: $voto</li>";
        }
        ?>
    </ul>

    <h3>Media dei Voti:</h3>
    <?php
    if (count($_SESSION['voti']) > 0) {
        $media = array_sum($_SESSION['voti']) / count($_SESSION['voti']);
        echo "<p>La media dei voti è: " . number_format($media, 2) . "</p>";
    } else {
        echo "<p>Nessun voto inserito.</p>";
    }
    ?>

    <br>
    <a href="presentazione.html">Torna alla pagina di presentazione</a>

</body>
</html>
