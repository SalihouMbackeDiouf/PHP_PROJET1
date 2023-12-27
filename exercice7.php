<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Parfait</title>
</head>
<body>

<h2>Test Nombre Parfait</h2>

<form action="" method="post">
    <label for="nombre_parfait">Entrez un nombre :</label>
    <input type="text" name="nombre_parfait" id="nombre_parfait" required>

    <input type="submit" value="Tester">
</form>

<?php
if (isset($_POST['nombre_parfait'])) {
    $nombreParfait = intval($_POST['nombre_parfait']);

    if (!is_numeric($nombreParfait)) {
        echo "<p>Veuillez saisir un nombre valide.</p>";
    } else {
        $sommeDiviseurs = 0;
        for ($i = 1; $i < $nombreParfait; $i++) {
            if ($nombreParfait % $i == 0) {
                $sommeDiviseurs += $i;
            }
        }

        if ($sommeDiviseurs == $nombreParfait) {
            echo "<p>$nombreParfait est un nombre parfait.</p>";
        } else {
            echo "<p>$nombreParfait n'est pas un nombre parfait.</p>";
        }
    }
}
?>

</body>
</html>
