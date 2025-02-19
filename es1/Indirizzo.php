<?php
    class Indirizzo implements JsonSerializable{
        protected $via;
        protected $numero_civico;
        protected $codice_postale;

    function jsonSerialize(): array{
        return [
            'via' => $this->via,
            'numero_civico' => $this->numero_civico,
            'codice_postale' => $this->codice_postale
        ];
    }
    
    function __construct($via, $numero_civico, $codice_postale) {
        $this->via = $via;
        $this->numero_civico = $numero_civico;
        $this->codice_postale = $codice_postale;
    }

    function set_codice_postale($codice_postale) {
        $this->codice_postale = $codice_postale;
    }
    function get_codice_postale() {
        return $this->codice_postale;
    }

    function set_numero_civico($numero_civico) {
        $this->numero_civico = $numero_civico;
    }
    function get_numero_civico() {
        return $this->numero_civico;
    }

    function set_via($via) {
        $this->via = $via;
    }
    function get_via() {
        return $this->via;
    }
}
?>