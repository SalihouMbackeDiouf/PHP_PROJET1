<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Cercle</title>
</head>
<body>

<h2>Calcul d'un Cercle</h2>

<form action="" method="post">
    <label for="rayon">Entrez le rayon du cercle :</label>
    <input type="text" name="rayon" id="rayon" required>

    <input type="submit" value="Calculer">
</form>

<?php
if (isset($_POST['rayon'])) {
    $rayon = floatval($_POST['rayon']);

    if (!is_numeric($rayon)) {
        echo "<p>Veuillez saisir un nombre valide.</p>";
    } else {
        $diametre = 2 * $rayon;
        $perimetre = 2 * M_PI * $rayon;
        $surface = M_PI * pow($rayon, 2);

        echo "<p>Le diamètre du cercle est : $diametre</p>";
        echo "<p>Le périmètre du cercle est : $perimetre</p>";
        echo "<p>La surface du cercle est : $surface</p>";
    }
}
?>

</body>
</html>
