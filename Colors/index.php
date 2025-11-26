<?php
// Número aleatorio de divs entre 10 y 30
$cantidad = rand(5, 30);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>colori</h1>
    <?php
for ($i = 1; $i <= $cantidad; $i++) {
    if ($i % 2 == 0) {
        echo "<div>Div $i: </div>";
    } else {
        echo "<div>Div $i: </div>";
    }
}

?>
<div>
    Final de página
</div>
</body>
</html>