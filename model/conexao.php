<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=bancodeteste', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Conectado</p>";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>