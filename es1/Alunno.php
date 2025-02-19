<?php
require_once("Indirizzo.php");
require_once("Voto.php");
    class Alunno implements JsonSerializable{
        protected $nome;
        protected $cognome;
        protected $eta;
        protected $indirizzo;
        protected $voti_alunni = [];
        

    function __construct($nome, $cognome, $eta, $indirizzo, $voti_alunni) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = $indirizzo;
        $this->voti_alunni = $voti_alunni;
    }

    function jsonSerialize(): array{
        return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'eta' => $this->eta,
            'indirizzo' => $this->indirizzo,
            'voti_alunni' => $this->voti_alunni
        ];
    }
    

    function set_cognome($cognome) {
        $this->cognome = $cognome;
    }
    function get_cognome() {
        return $this->cognome;
    }

    function set_nome($nome) {
        $this->nome = $nome;
    }
    function get_nome() {
        return $this->nome;
    }

    function set_eta($eta) {
        $this->eta = $eta;
    }
    function get_eta() {
        return $this->eta;
    }

    function stampa(){
        echo "{$this->nome} {$this->cognome} {$this->eta} <br>";
    }
}
?>