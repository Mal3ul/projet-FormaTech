<?php
include 'bdd/config.php';
include 'classes/Formation.php';

$formations = Formation::getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formation Details</title>
</head>
<body>
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
