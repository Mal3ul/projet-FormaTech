<?php
include 'classes/Formation.php';

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
        <?php
            foreach ($formations as $formation) {
                echo '<tr>';
                echo '<td>' . $formation->id . '</td>'; 
                echo '<td>' . $formation->name . '</td>';
                echo '<td>' . $formation->durée . '</td>';
                echo '<td>' . $formation->abréviation . '</td>';
                echo '<td>' . $formation->RNCP_niveau . '</td>';
                echo '<td>' . $formation->nombre_module . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>