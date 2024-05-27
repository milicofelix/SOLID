<?php

namespace Solid;

class CarrinhoCompras {

     //atributos
     private $itens;
     private $status;
     private $valorTotal;
 
     //métodos
     public function __construct() {
         $this->itens = [];
         $this->status = 'aberto';
         $this->valorTotal = 0;
     }
 
     public function exibirItens() {

        foreach($this->itens as $item) {
            echo $item['item']. ' - '. "R$ ".number_format($item['valor'], 2, ',', '.')."<br />";
        }
     }
 
     public function adicionarItem(string $item, float $valor) {
         array_push($this->itens, ["item" => $item, "valor" => $valor]);
         $this->valorTotal += $valor;
         return true;
     }
 
     public function exibirValorTotal() {
         return "R$ ".number_format($this->valorTotal, 2, ',', '.');
     }
 
     public function exibirStatus() {
         return $this->status;
     }
 
     public function confirmarPedido() {
 
         if($this->validarCarrinho()) {
             $this->status = 'confirmado';
             $this->enviarEmailConfirmacao();
 
             return true;
         }
 
         return false;
     }
 
     public function enviarEmailConfirmacao() {
         echo '<br/>.... envia e-mail de confirmação ...<br/>';
     }
 
     public function validarCarrinho() {
         return count($this->itens) > 0;
     }

}