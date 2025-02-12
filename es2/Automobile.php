<?php
require_once("Veicolo.php");
    class Automobile extends Veicolo{
        protected $marca;
        protected $anno;
        protected $modello;
    
    function __construct($marca, $anno, $modello) {
        $this->marca = $marca;
        $this->anno = $anno;
        $this->modello = $modello;
    }

    function set_modello($modello) {
        $this->modello = $modello;
    }
    function get_modello() {
        return $this->modello;
    }

    function stampaAuto(){
        echo $this -> stampaVeicolo() . " " . $this->modello . "<br>";
    }
}
?>