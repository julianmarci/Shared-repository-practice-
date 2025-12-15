<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <button id= "primo_rosso">
            primo rosso
        </button>
        <button id="secondo_roso">
            secondo roso
        </button>
        <button id="tutti_roso">
            tutti roso
        </button>
        <button id= "primo_blu">
            primo blu
        </button>
        <button id="secondo_blu">
            secondo blu
        </button>
        <button id="tutti_blu">
            tutti blu
        </button>
    </div>
    <h2 class="primo">
        Primo gruppo
    </h2>
        <?php
            // Genera un número aleatorio entre 5 y 10
            $cantidadDivs = rand(5, 10);

            // Imprime la cantidad de divs
            for ($i = 0; $i < $cantidadDivs; $i++) {
                echo "<div>Div número " . ($i + 1) . "</div>";
            }
        ?>

    <h2 class= "secondo">
        Secondo gruppo
    </h2>
        <?php
            // Genera un número aleatorio entre 5 y 10
            $cantidadDivs = rand(10, 15);

            // Imprime la cantidad de divs
            for ($i = 0; $i < $cantidadDivs; $i++) {
                echo "<div>Div número " . ($i + 1) . "</div>";
            }
        ?>
</body>
</html>