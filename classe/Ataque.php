<?php
require_once('Item.pgp')
require_once('Inventario.php')

class Ataque extends Item {
    public function __construct(string $nome, int $tamanho,string $classe)) {
        parent::__construct($nome, $tamanho, $classe);
    }
}

?>
