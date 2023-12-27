<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirages Aléatoires</title>
</head>
<body>

<h2>Choisissez un nombre de trois chiffres</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nombreInitial">Nombre Initial :</label>
    <input type="number" name="nombreInitial" id="nombreInitial" required min="100" max="999">
    <input type="submit" value="Commencer les tirages">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le nombre initial saisi par l'utilisateur
    $nombreInitial = isset($_POST['nombreInitial']) ? intval($_POST['nombreInitial']) : null;

    if ($nombreInitial >= 100 && $nombreInitial <= 999) {
        // Utilisation de la boucle while
        $nombreTireWhile = null;
        $coupsWhile = 0;

        while ($nombreTireWhile !== $nombreInitial) {
            $nombreTireWhile = rand(100, 999);
            $coupsWhile++;
        }

        echo "<p>Nombre de coups avec la boucle while : $coupsWhile</p>";

        // Utilisation de la boucle for
        $nombreTireFor = null;
        $coupsFor = 0;

        for (; $nombreTireFor !== $nombreInitial; $coupsFor++) {
            $nombreTireFor = rand(100, 999);
        }

        echo "<p>Nombre de coups avec la boucle for : $coupsFor</p>";
    } else {
        echo "<p style='color: red;'>Veuillez saisir un nombre de trois chiffres valide.</p>";
    }
}
?>

</body>
</html>
