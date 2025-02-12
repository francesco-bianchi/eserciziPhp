<?php
    class Persona{
        protected $nome;
        protected $cognome;
    
    function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_cognome() {
        return $this->cognome;
    }

    function presentati(){
        echo "{$this->nome} {$this->cognome}";
    }
}
?>