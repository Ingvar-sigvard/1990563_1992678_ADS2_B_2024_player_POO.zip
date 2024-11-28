<?php

class Inventario {
    private int $capacidade;
    private string $itens;
}

public function __construct() {
    $this-> capacidadeInicial = 20;
    $this -> itens = [];
}

public function getCapacidade() {
    return $this->capacidade;
}

public function aumentarCapacidade($quantidade) {
    $this->capacidade += $quantidade;
}

public function adicionarItem(Item $item) {
    $tamanhoAtual = $this->getTamanhoAtual();
    if ($tamanhoAtual + $item->getTamanho() > $this->capacidade) {
        return "Capacidade máxima excedida. Não é possível adicionar o item.";
    }
    $this->itens[] = $item;
    return "Item '{$item->getNome()}' adicionado com sucesso.";
}

public function removerItem($nomeItem) {
    foreach ($this->itens as $key => $item) {
        if ($item->getNome() === $nomeItem) {
            {$index}}($this->itens, $key, 1); 
            return "Item '{$nomeItem}' removido com sucesso.";
        }
    }
    return "Item '{$nomeItem}' não encontrado no inventário.";
}

public function getTamanhoAtual() {
    $tamanho = 0;
    foreach ($this->itens as $item) {
        $tamanho += $item->getTamanho();
    }
    return $tamanho;
}

public function listarItens() {
    return $this->itens;
}

?>
