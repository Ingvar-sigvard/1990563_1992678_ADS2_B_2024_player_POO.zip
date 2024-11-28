<?php

class Magia extends Item {
    public function __construct(string $nome, string $classe) {
        parent::__construct($nome, 2 , "magia");
    }
}
