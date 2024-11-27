<?php

require_once('Item.php')
require_once('Inventario.php')    

class Magia extends Item {
    public function __construct(string $nick,int $tamanho, string$classe) {
        parent::__construct($nome,$tamanho,$classe);
    }
}
