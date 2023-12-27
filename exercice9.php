<?php
// Exercice 9 : Tableau multidimensionnel associatif (clés : noms, valeurs : tableaux associatifs)
$personnesExercice9 = array(
    'Dupont' => array('prénom' => 'Jean', 'ville' => 'Paris', 'âge' => 25),
    'Martin' => array('prénom' => 'Marie', 'ville' => 'Lyon', 'âge' => 30),
    'Dutronc' => array('prénom' => 'Pierre', 'ville' => 'Marseille', 'âge' => 22)
);

// Affichage du tableau
echo "<h2>Exercice 9 : Tableau multidimensionnel associatif (tableaux associatifs)</h2>";
echo "<pre>";
print_r($personnesExercice9);
echo "</pre>";
?>
