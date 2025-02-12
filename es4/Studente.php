<?php
require_once("Persona.php");
    class Studente extends Persona{
        protected $nome;
        protected $cognome;
        protected $matricola;
    
    function __construct($nome, $cognome, $matricola) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->matricola = $matricola;
    }

    function set_matricola($matricola) {
        $this->matricola = $matricola;
    }
    function get_matricola() {
        return $this->matricola;
    }

    function stampaStudente(){
        echo $this -> presentati() . " " . $this->matricola . "<br>";
    }
}
?>