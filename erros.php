<?php

//tratamento de erros, há varios tipos de erros e excessões, vc pode ser expecifico caso saiba qual erro ou excessão vai dar, como a runtimeexception
//ou usando polimorfismo , ser mais generico, erros e excessões são classes que herdam da throwable, então , ao ives de vc ser expecifico no erro
//seja generico usando EXCEPTION ou ERROR, ou mais ainda usando a interface mãe THROWABLE
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    }catch(Throwable $problemas){
      $problemas->getMessage().PHP_EOL;
    }catch (RuntimeException $probleminha) {
        echo $probleminha->getMessage().PHP_EOL;
    }catch( DivisionByZeroError $erro){
        echo"problema de disão por zero";
    }
    echo 'Saindo da função 1' . PHP_EOL;
}
function funcao2()
{
 
    echo 'Entrei na função 2' . PHP_EOL;
    $divisao = intdiv(5, 0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';
    $divisao = intdiv(5, 0);
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}


echo "main ";
funcao1();
echo "saiu da main";


/**
 * @throws Exception
 */
function funcaoQueLancaExcecao()
{}

try {
    funcaoQueLancaExcecao();
} catch (Exception $e) {
}
