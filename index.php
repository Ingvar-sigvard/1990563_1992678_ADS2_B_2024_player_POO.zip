<?php
require_once 'class/Player.php';
require_once 'class/Inventario.php';
require_once 'class/Itens/Ataque.php';
require_once 'class/Itens/Defesa.php';
require_once 'class/Itens/Magia.php';

$player1 = new Player("Jogador 1", 1);
$player2 = new Player("Jogador 2", 1);

$ataque1 = new Ataque("Katana");
$ataque2 = new Ataque("Alabarda");
$defesa1 = new Defesa("Desviar");
$defesa2 = new Defesa("Armadura");
$magia1 = new Magia("Bola de Fogo");
$magia2 = new Magia("Bola de água");

$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player2->coletarItem($ataque2);
$player2->coletarItem($magia1);

echo $player1->getNickname() . " - Itens no inventário após subida de nível: </br>";
$player1->listarItens();


echo $player2->getNickname() . " - Itens no inventário após subida de nível: </br>";
$player2->listarItens();

$player1->subirNivel();

<?
