<?php

include 'bdd/config.php';
include 'classes/database.php';

class Formation {
    private $id;
    private $name;
    private $durée;
    private $abréviation;
    private $RNCP_niveau;
    private $nombre_module;

    public function __construct($id, $name, $durée, $abréviation, $RNCP_niveau, $nombre_module) {
        $this->id = $id;
        $this->name = $name;
        $this->durée = $durée;
        $this->abréviation = $abréviation;
        $this->RNCP_niveau = $RNCP_niveau;
        $this->nombre_module = $nombre_module;
    }

    public static function getAll($pdo) {
        $sql = "SELECT * FROM formations";
        $stmt = $pdo->query($sql);
        $formations = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $formations[] = new Formation($row['id'], $row['name'], $row['durée'], $row['abréviation'], $row['RNCP_niveau'], $row['nombre_module']);
        }

        return $formations;
    }
}

?>


