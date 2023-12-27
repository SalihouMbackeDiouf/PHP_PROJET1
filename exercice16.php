<?php
function sinus($angle, $unite = "radian") {
    switch (strtolower($unite)) {
        case "radian":
            return sin($angle);
        case "degre":
            return sin(deg2rad($angle));
        case "grade":
            return sin($angle * M_PI / 200);
        default:
            return "Unité non supportée";
    }
}

$angleEnRadian = 1.5;
$angleEnDegre = 90;
$angleEnGrade = 100;

echo "Sinus en radian : " . sinus($angleEnRadian) . "<br>";
echo "Sinus en degré : " . sinus($angleEnDegre, "degre") . "<br>";
echo "Sinus en grade : " . sinus($angleEnGrade, "grade") . "<br>";
?>
