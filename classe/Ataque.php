<?php

class Ataque extends Item {
    public function __construct(string $nome,string $classe) {
        parent::__construct($nome, 7, $classe);
    }
}

?>
