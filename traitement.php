<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'Vendre':
                header("Location: vendre.php");
                exit();
            case 'Acheter':
                header("Location: acheter.php");
                exit();
            case 'Louer':
                header("Location: louer.php");
                exit();
            default:
                // Redirection vers une page par défaut en cas de choix invalide
                header("Location: index.html");
                exit();
        }
    }
}
?>
