<?php

require_once('Item.php');
require_once('Inventario.php');
require_once('Player.php');
require_once('Magia.php');
require_once('Defesa.php');
require_once('Ataque.php');

$player = new Player("Jogador1", 5);

echo "Nick: " . $player->getNick() . "<br>";
echo "Nível: " . $player->getNivel() . "<br>";

$espada = new Ataque("Espada Longa", 5, "Ataque");
$escudo = new Defesa("Escudo de Ferro");
$feitiço = new Magia("Bola de Fogo", 3, "Mágico");

echo $player->getInventario()->adicionarItem($espada) . "<br>";
echo $player->getInventario()->adicionarItem($escudo) . "<br>";
echo $player->getInventario()->adicionarItem($feitiço) . "<br>";

echo "Itens no inventário:<br>";
foreach ($player->getInventario()->listarItens() as $item) {
    echo "- " . $item->getNome() . " (Classe: " . $item->getClasse() . ")<br>";
}

echo $player->soltarItem($espada) ? "Item removido com sucesso.<br>" : "Falha ao remover o item.<br>";

$player->elevarNivel();
echo "Nível elevado: " . $player->getNivel() . "<br>";
echo "Capacidade do inventário: " . $player->getInventario()->getCapacidade() . "<br>";

echo $player->esvaziarInventario() . ;

echo "Itens no inventário após esvaziar:<br>";
foreach ($player->getInventario()->listarItens() as $item) {
    echo "- " . $item->getNome() . "<br>";
}
