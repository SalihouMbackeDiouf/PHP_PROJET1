<?php
$personnesExercice8 = array(
    'Dupont' => array('Jean', 'Paris', 25),
    'Martin' => array('Marie', 'Lyon', 30),
    'Dutronc' => array('Pierre', 'Marseille', 22)
);

echo "<h2>Exercice 8 : Utilisation de la boucle foreach</h2>";
echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>";

foreach ($personnesExercice8 as $nom => $infos) {
    echo "<tr>
            <td>$nom</td>
            <td>{$infos[0]}</td>
            <td>{$infos[1]}</td>
            <td>{$infos[2]}</td>
          </tr>";
}

echo "</table>";
?>

<?php
$personnesExercice9 = array(
    'Dupont' => array('prénom' => 'Jean', 'ville' => 'Paris', 'âge' => 25),
    'Martin' => array('prénom' => 'Marie', 'ville' => 'Lyon', 'âge' => 30),
    'Dutronc' => array('prénom' => 'Pierre', 'ville' => 'Marseille', 'âge' => 22)
);

echo "<h2>Exercice 9 : Utilisation de la boucle foreach</h2>";
echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>";

foreach ($personnesExercice9 as $nom => $infos) {
    echo "<tr>
            <td>$nom</td>
            <td>{$infos['prénom']}</td>
            <td>{$infos['ville']}</td>
            <td>{$infos['âge']}</td>
          </tr>";
}

echo "</table>";
?>
