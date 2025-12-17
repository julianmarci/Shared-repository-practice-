<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Groups</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Groups</h1>

    <div class="buttons">
        <button id="btn_red_1">Red 1</button>
        <button id="btn_blue_1">Blue 1</button>
        <button id="primo_giallo">Primo Giallo</button>

        <button id="btn_red_2">Red 2</button>
        <button id="btn_blue_2">Blue 2</button>
        <button id="secondo_giallo">Secondo Giallo</button>

        <button id="btn_red_all">All Red</button>
        <button id="btn_blue_all">All Blue</button>

        <button id="terzo_rosso">Terzo Rosso</button>
        <button id="terzo_blu">Terzo Blu</button>
        <button id="terzo_giallo">Terzo Giallo</button>

        <button id="tutti_giallo">Tutti Giallo</button>

    </div>
    <h2>
        Primo Gruppo
    </h2>
    <div>
        <?php
        // Genera un número aleatorio entre 5 y 10
        $cantidadDivs = rand(5, 10);
        // Imprime la cantidad de divs
        for ($i = 0; $i < $cantidadDivs; $i++) {
            echo "<div>Div número " . ($i + 1) . "</div>";
        }
        ?>
    </div>
    <h2>
        Secondo Gruppo
    </h2>
    <div>
        <?php
        // Genera un número aleatorio entre 5 y 10
        $cantidadDivs = rand(10, 15);
        // Imprime la cantidad de divs
        for ($i = 0; $i < $cantidadDivs; $i++) {
            echo "<div>Div número " . ($i + 1) . "</div>";
        }
        ?>
    </div>
    <h2>
        Terzo Gruppo
    </h2>
    <div>
        <?php
        // Genera un número aleatorio entre 5 y 10
        $cantidadDivs = rand(5, 20);
        // Imprime la cantidad de divs
        for ($i = 0; $i < $cantidadDivs; $i++) {
            echo "<div>Div número " . ($i + 1) . "</div>";
        }
        ?>
    </div>

    <script src="00.js"></script>
</body>
</html>
