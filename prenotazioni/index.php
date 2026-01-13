<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Prenotazioni
    </h1>

<?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>
    <h2> data di arrivo: $row[arrivo]</h2> <p>$row[nome] $row[cognome] importo:$row[importo] caparra:$row[caparra] </p> </div>";
}
?>
</body>
</html>