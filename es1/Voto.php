<?php
    class Voto implements JsonSerializable{
        protected $voto;
        protected $materia;
        protected $descrizione;

    function jsonSerialize(): array{
        return [
            'voto' => $this->voto,
            'materia' => $this->materia,
            'descrizione' => $this->descrizione
        ];
    }

    
    function __construct($voto, $materia, $descrizione) {
        $this->voto = $voto;
        $this->materia = $materia;
        $this->descrizione = $descrizione;
    }

    function set_voto($voto) {
        $this->voto = $voto;
    }
    function get_voto() {
        return $this->voto;
    }

    function set_descrizione($descrizione) {
        $this->descrizione = $descrizione;
    }
    function get_descrizione() {
        return $this->descrizione;
    }

    function set_materia($materia) {
        $this->materia = $materia;
    }
    function get_materia() {
        return $this->materia;
    }
}
?>