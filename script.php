<?php
session_start();

// Inizializzazione delle variabili di sessione
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
    $_SESSION['voti'] = [];
    $_SESSION['ultima_data'] = "";
}

// Recupero dei dati inviati dal modulo
$data = $_POST['data'] ?? "";
$voto = $_POST['voto'] ?? 0;

// Aggiornamento delle variabili di sessione
if ($data && $voto >= 1 && $voto <= 5) {
    $_SESSION['count']++;
    $_SESSION['voti'][] = $voto;
    $_SESSION['ultima_data'] = $data;
}

// Mostra i dati inviati
echo "<h1>Dati ricevuti</h1>";
echo "<p>Data: " . htmlspecialchars($data) . "</p>";
echo "<p>Voto: " . htmlspecialchars($voto) . "</p>";
echo "<br><a href='presentazione.html'>Torna al modulo</a>";
?>
