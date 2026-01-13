 <?php   
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $residenza = $_POST['residenza'];
    $importo = $_POST ['importo'];
    $caparra = $_POST ['caparra'];
    $saldo = $importo - $caparra;
    echo ("<p>Nome: " . $nome . "</p>");
    echo ("<p>Cognome: " . $cognome . "</p>");
    echo ("<p>Residenza: " . $residenza . "</p>");
    echo ("<p>Importo: " . $importo . "</p>");
    echo ("<p>Saldo: " . $saldo . "</p>");
    ?>

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
    <h2>
        Data di Arrivo
    </h2>
</body>
</html>