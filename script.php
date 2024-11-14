<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;              
    $_SESSION['voti'] = [];             
    $_SESSION['ultima_data'] = '';        
}

// Verifica se i dati sono stati inviati tramite POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $data = $_POST['data'];
    $voto = $_POST['voto'];

    $_SESSION['count']++;

    $_SESSION['voti'][] = $voto;

    $_SESSION['ultima_data'] = $data;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script PHP - Dati Inviati</title>
</head>
<body>
    <h1>Dati Inviati</h1>
    
    <p>Numero di invii: <?php echo $_SESSION['count']; ?></p>
    <p>Ultima data inviata: <?php echo $_SESSION['ultima_data']; ?></p>

    <h2>Voti delle recensioni inviate:</h2>
    <ul>
        <?php
        foreach ($_SESSION['voti'] as $voto) {
            echo "<li>Voto: $voto</li>";
        }
        ?>
    </ul>

    <br>
    <a href="presentazione.html">Torna alla pagina di presentazione</a>

    <?php include 'footer.php'; ?>
</body>
</html>
