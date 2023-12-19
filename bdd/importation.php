<?php
include 'datas.php';
include 'config.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=Formatech;charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($formations as $formation) {
        $sql = "INSERT INTO formations (name, durée, abréviation, RNCP_niveau ) VALUES (:name, :duree, :abreviation, :niveau)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $formation['name'], 
            ':duree' => $formation['durée'],
            ':abreviation' => $formation['abréviation'],
            ':niveau' => $formation['RNCP_niveau'],
        ]);
    }

    echo "Data inserted successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}