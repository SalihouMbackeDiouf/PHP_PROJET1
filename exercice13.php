<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
</head>
<body>

<?php
// Définir les valeurs par défaut
$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';

// Initialiser le montant de la TVA et le prix TTC
$montantTVA = 0;
$prixTTC = 0;

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valider et récupérer les données du formulaire
    if (is_numeric($prixHT) && is_numeric($tauxTVA)) {
        // Calculer le montant de la TVA et le prix TTC
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    } else {
        echo "<p style='color: red;'>Veuillez saisir des valeurs numériques valides.</p>";
    }
}
?>

<h2>Calcul TVA</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="prixHT">Prix HT :</label>
    <input type="text" name="prixHT" id="prixHT" value="<?php echo $prixHT; ?>" required><br>

    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" name="tauxTVA" id="tauxTVA" value="<?php echo $tauxTVA; ?>" required><br>

    <input type="submit" value="Calculer">
</form>

<?php
// Afficher le montant de la TVA et le prix TTC
if ($montantTVA > 0 && $prixTTC > 0) {
    echo "<h3>Résultats :</h3>";
    echo "<label for='montantTVA'>Montant de la TVA :</label>";
    echo "<input type='text' id='montantTVA' value='$montantTVA' readonly><br>";

    echo "<label for='prixTTC'>Prix TTC :</label>";
    echo "<input type='text' id='prixTTC' value='$prixTTC' readonly><br>";
}
?>

</body>
</html>
