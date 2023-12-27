<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs</title>
</head>
<body>

<h2>Affichage des Diviseurs</h2>

<form action="" method="post">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre" required>

    <input type="submit" value="Afficher Diviseurs">
</form>

<?php
if (isset($_POST['nombre'])) {
    $nombre = intval($_POST['nombre']);

    if (!is_numeric($nombre)) {
        echo "<p>Veuillez saisir un nombre valide.</p>";
    } else {
        echo "<p>Les diviseurs de $nombre sont : ";
        for ($i = 1; $i <= $nombre; $i++) {
            if ($nombre % $i == 0) {
                echo "$i ";
            }
        }
        echo "</p>";
    }
}
?>

</body>
</html>
