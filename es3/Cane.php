<?php
    require_once("Animale.php");
    class Cane extends Animale implements JsonSerializable{

        function jsonSerialize(): array{
            return [
                'verso' => "baubau"
            ];
        }
}
?>