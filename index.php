<?php
// Dichiarazione di variabili
$numeriDivisibili = [];

// Trova i numeri divisibili per 3 tra 0 e 100
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        $numeriDivisibili[] = $i;
    }
}

// Calcolo del conteggio e della media
$conteggio = count($numeriDivisibili);
$somma = array_sum($numeriDivisibili);
$media = $conteggio > 0 ? $somma / $conteggio : 0;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Es23 PHP </title>
</head>
<body>

    <div class = "div1">
        <h1>Numeri Divisibili per 3</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Numeri</th>
                    <th>Conteggio</th>
                    <th>Media</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= implode(", ", $numeriDivisibili) ?></td>
                    <td><?= $conteggio ?></td>
                    <td><?= number_format($media, 2) ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>