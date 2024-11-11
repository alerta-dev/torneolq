<?php
$route = $_GET['route'] ?? 'inicio';

if ($route == 'inicio') {
    include 'inicio.php';
} elseif ($route == 'ranking') {
    include 'ranking.php';
} else {
    echo "<h1>404 - Página no encontrada</h1>";
}
?>
