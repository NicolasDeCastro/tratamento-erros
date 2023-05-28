<?php
namespace alura\teste\curso_novo;
use DomainException;

class Minha_exception extends DomainException
{


  public function  __construct($valor_a_sacar,$saldo){
    $mensagem ="não foi possivel fazer o saque $valor_a_sacar,vc tem somente $saldo";
   parent::__construct($mensagem);
  }
public function postaNome():void
{
    echo"nicoNico";

}
}
/*try{
    throw new Minha_exception();
}catch(Minha_exception $erro){
    $erro->postaNome();

}*/