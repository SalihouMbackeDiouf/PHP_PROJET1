<?php
function afficherTableauMultidimensionnel($tableau) {
    echo "<table border='1'>";
    
    // En-tête du tableau avec les clés des tableaux
    echo "<tr>";
    foreach (array_keys(current($tableau)) as $cle) {
        echo "<th>$cle</th>";
    }
    echo "</tr>";

    // Contenu du tableau
    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>$valeur</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

// Exemple d'utilisation
$tableauMultidimensionnel = array(
    array("Nom" => "Dupont", "Prénom" => "Jean", "Âge" => 30),
    array("Nom" => "Martin", "Prénom" => "Marie", "Âge" => 25),
    array("Nom" => "Dutronc", "Prénom" => "Pierre", "Âge" => 35)
);

afficherTableauMultidimensionnel($tableauMultidimensionnel);
?>
