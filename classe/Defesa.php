<?php

class Defesa extends Item {
    public function __construct(string $nome, string $classe) {
        parent::__construct($nome, 4, "Defesa");
    }
}
