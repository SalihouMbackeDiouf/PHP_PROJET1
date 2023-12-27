<?php
// Fonction pour afficher le motif
function afficherMotif($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo "<br>";
    }
}

// Appel de la fonction avec $n = 10 (vous pouvez ajuster la valeur selon vos besoins)
afficherMotif(10);
?>
