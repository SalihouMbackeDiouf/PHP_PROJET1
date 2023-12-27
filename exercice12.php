<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Adresse Client</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : '';
    $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : '';
    $adresse = isset($_POST["adresse"]) ? htmlspecialchars($_POST["adresse"]) : '';
    $ville = isset($_POST["ville"]) ? htmlspecialchars($_POST["ville"]) : '';
    $codePostal = isset($_POST["code_postal"]) ? htmlspecialchars($_POST["code_postal"]) : '';

    // Affichage des données dans un tableau XHTML
    echo "<h2>Données Client</h2>";
    echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td>$nom</td>
            <td>$prenom</td>
            <td>$adresse</td>
            <td>$ville</td>
            <td>$codePostal</td>
        </tr>
    </table>";
} else {
    // Affichage du formulaire si la page n'a pas été soumise via le formulaire
    echo "<h2>Adresse Client</h2>";
    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>
        <fieldset>
            <legend>Adresse client</legend>
            <label for='nom'>Nom :</label>
            <input type='text' name='nom' id='nom' required><br>

            <label for='prenom'>Prénom :</label>
            <input type='text' name='prenom' id='prenom' required><br>

            <label for='adresse'>Adresse :</label>
            <input type='text' name='adresse' id='adresse' required><br>

            <label for='ville'>Ville :</label>
            <input type='text' name='ville' id='ville' required><br>

            <label for='code_postal'>Code Postal :</label>
            <input type='text' name='code_postal' id='code_postal' required><br>
        </fieldset>

        <input type='submit' value='Soumettre'>
    </form>";
}
?>

</body>
</html>
