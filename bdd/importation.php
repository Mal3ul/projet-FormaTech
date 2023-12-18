<?php
include 'datas.php';
include 'config.php';

try {

    foreach ($formations as $formation) {
        $sql = "INSERT INTO formations (nom, abreviation, duree, niveau ) VALUES (:nom, :abreviation, :duree, :niveau)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $formation['nom'], 
            ':abreviation' => $formation['abreviation'],
            ':duree' => $formation['duree'],
            ':niveau' => $formation['niveau'],
        ]);
    }

    echo "Data inserted successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}