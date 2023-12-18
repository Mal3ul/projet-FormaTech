<?php
$pdo = new PDO('mysql:host=localhost;dbname=your_database;charset=utf8mb4', 'your_username', 'your_password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Insert data into the "employees" table
foreach ($formations as $formation) {
    $sql = "INSERT INTO formations (name, durée, abréviation, RNCP_niveau, nombre_module) VALUES (:name, :duree, :abreviation, :niveau, :module)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $formation['nom']);
    $stmt->bindParam(':duree', $formation['duree']);
    $stmt->bindParam(':abreviation', $formation['abreviation']);
    $stmt->bindParam(':niveau', $formation['niveau']);
    $stmt->bindParam(':module', true); // Assuming you want to set this to true for all records

    $stmt->execute();
}

// Insert data into the "modules" table
foreach ($modules as $module) {
    // First, check if the formation exists
    $formationName = $module['formation'];
    $formationId = $pdo->query("SELECT id FROM formations WHERE name = '$formationName'")->fetchColumn();

    if ($formationId) {
        // If the formation exists, insert the module
        $sql = "INSERT INTO modules (name, durée, module_id) VALUES (:name, :duree, :moduleId)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':name', $module['nom']);
        $stmt->bindParam(':duree', $module['duree']);
        $stmt->bindParam(':moduleId', $formationId);

        $stmt->execute();
    }
}
?>
