<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul PPCM</title>
</head>
<body>

<h2>Calcul du PPCM</h2>

<form action="" method="post">
    <label for="entier1">Entrez le premier entier :</label>
    <input type="text" name="entier1" id="entier1" required>

    <label for="entier2">Entrez le deuxième entier :</label>
    <input type="text" name="entier2" id="entier2" required>

    <input type="submit" value="Valider">
</form>

<?php
if (isset($_POST['entier1']) && isset($_POST['entier2'])) {
    $entier1 = intval($_POST['entier1']);
    $entier2 = intval($_POST['entier2']);

    if (!is_numeric($entier1) || !is_numeric($entier2)) {
        echo "<p>Veuillez saisir des entiers valides.</p>";
    } else {
        function calculerPPCM($a, $b) {
            $pgcd = $a;
            while ($pgcd % $b != 0) {
                $pgcd += $a;
            }
            return $pgcd;
        }

        $ppcm = calculerPPCM($entier1, $entier2);
        echo "<p>Le PPCM de $entier1 et $entier2 est : $ppcm</p>";
    }
}
?>

</body>
</html>
