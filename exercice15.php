<?php
function transformerTableau(&$tableau) {
    foreach ($tableau as &$element) {
        $element = ucfirst(strtolower($element));
    }
}

// Exemple d'utilisation
$chaines = array("HELLO", "wOrLD", "PHp");
transformerTableau($chaines);
print_r($chaines);
?>
