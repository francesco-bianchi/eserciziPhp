<?php
    class Veicolo{
        protected $marca;
        protected $anno;
    
    function __construct($marca, $anno) {
        $this->marca = $marca;
        $this->anno = $anno;
    }

    function get_marca() {
        return $this->marca;
    }

    function get_anno() {
        return $this->anno;
    }

    function stampaVeicolo(){
        echo "{$this->marca} {$this->anno}";
    }
}
?>