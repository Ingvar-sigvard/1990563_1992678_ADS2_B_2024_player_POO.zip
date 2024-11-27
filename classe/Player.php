<?php

require_once('Item.php')
require_once('Invetario.php')

class Player {
    private string $nick;
    private int $nivel;
    private Inventario $inventario;

    public function __construct($nick, $nivel) {
        $this-> inventario = new Inventario();
        $this-> inventario -> setCapacidadeMaxima(20 + ($nivel * 3));  
        $this-> nick  ($nick);
        $this-> nivel ($nivel);
    }

    public function getNick(): string {
        return $this->nome;
    }

    public function setNick(string $nickname): void {
        if (empty($nickname)) {
            $this->nickname = "Invalido"; 
        } else {
            $this->nickname = $nickname;
        }
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        if ($nivel <= 0) {
            $this->nivel = 1; 
        } else {
            $this->nivel = $nivel;
        }
    }

    public function elevarNivel(): void {
        $this->nivel = $this->nivel + 1;
        $elevar = $this->nivel * 3;
        $CapacidadeAumentada = $this->inventario->getCapacidadeMaxima() + $elevar;
        $this->inventario->setCapacidadeMaxima($CapacidadeAumentada);  
    }


    public function coletarItem(Item $item): bool {
        foreach ($this->inventario->getItens() as $itemInventario) {
        if ($itemInventario->getNome() == $item->getNome()) {
            return true;
             } else {
                return false;
            }
       } 
    }


    public function soltarItem(Item $item): bool {
        foreach ($this->itens as $index => $objeto) {
            if ($objeto->getNome() == $item->getNome()) { 
                unset($this->itens [$index]);
                return true; 
            }
        }
        return false; 
    }

    public function esvaziarInventario(): string{
        $this->inventario->esvaziar();
       return "Inventario vazio";
    }

}
?>