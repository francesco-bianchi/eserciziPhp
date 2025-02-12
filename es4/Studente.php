<?php
require_once("Persona.php");
    class Studente extends Persona implements JsonSerializable{
        protected $nome;
        protected $cognome;
        protected $matricola;
    
    function jsonSerialize(): array{
        return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'matricola' => $this->matricola
        ];
    }
    
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