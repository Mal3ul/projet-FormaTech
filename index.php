

class Module {
    public $id;
    public $name;
    public $duration;
    public $formation_id;

    public function __construct($id, $name, $duration, $formation_id) {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
        $this->formation_id = $formation_id;
    }
}

