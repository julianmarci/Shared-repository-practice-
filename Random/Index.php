
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php   
    $random = rand(1, 3);
    if ($random == 1){
        echo ('<link rel="stylesheet" href="Style_1.css">');
    }
    elseif ($random == 2){
        echo('<link rel="stylesheet" href="Style_2.css">');
    }
    else{
        echo('<link rel="stylesheet" href="Style_3.css">') ;
    }
?>
</head>
<body>
    <h1>
        Css casuali
    </h1>
    <div>questo es un div dispari</div>
    <div>questo es un div pari</div>
    <div>questo es un div dispari</div>
    <div>questo es un div pari</div>
    <div>questo es un div dispari</div>
    <div>questo es un div pari</div>
    <div>questo es un div dispari</div>
    <div>questo es un div pari</div>
    <div>questo es un div dispari</div>
    <div>questo es un div pari</div>
    <div>questa è la fine della pagina</div>
</body>
</html>