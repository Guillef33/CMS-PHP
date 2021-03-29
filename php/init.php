<?php
try {
$pdo = new PDO ('mysql:host=localhost;dbname=cms', 'root', '');
} catch (PDOExpection $e) {
    echo "No se pudo conectar a la base de datos. Error: " . $e;
}



?>