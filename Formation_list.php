<?php
// Include database configuration
include 'bdd/config.php';

// Include Formation class definition
include 'classes/Formation.php';

// Include datas (if needed)
include 'bdd/datas.php';

// Fetch formations from the database
$formations = Formation::getAll($pdo);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formation List</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Abbreviation</th>
                <th>RNCP Level</th>
                <th>Module Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formations as $formation): ?>
                <tr>
                    <td><?= $formation->getId() ?></td>
                    <td><?= $formation->getName() ?></td>
                    <td><?= $formation->getDuration() ?></td>
                    <td><?= $formation->getAbbreviation() ?></td>
                    <td><?= $formation->getRNCPLevel() ?></td>
                    <td><?= $formation->getModuleCount() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
