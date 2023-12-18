<?php


class Module {
    private $id; 
    private $name;
    private $durée;
    private $module_id;

    public function __construct($id, $name, $duration, $formation_id) {
        $this->id = $id;
        $this->name = $name;
        $this->durée = $durée;
        $this->module_id = $module_id;
    }

    public function getallinformations(){
        // Recupere toutes les formations
        $sql = "SELECT * FROM modules";
        $result = $conn->query($sql);
        $modules = [];
        while ($row = $result->fetch_assoc()) {
            $modules[] = new Module($row['id'], $row['name'], $row['duration'], $row['formation_id']);
        }
        return $modules;
    }
}


?>

