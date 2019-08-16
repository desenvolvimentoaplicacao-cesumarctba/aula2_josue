<?php

while(1) {

  echo 'On - ligar calculadora ';
  echo 'Off - desligar calculadora ';
  $es_calc = readline(' ');

  if ($es_calc == 'On') {

    echo ' 1 - Adição ';
    echo ' 2 - Subtração ';
    echo ' 3 - Multiplicação ';
    echo ' 4 - Divisão ';


    $operacao = readline('Escolha um operador: ');
    $valor1 = readline('Informe o primeiro valor: ');
    $valor2 = readline('Informe o segundo valor: ');

    switch($operacao) {
      case 1: 
        $resultado = $valor1 + $valor2;
      break;
      case 2: 
        $resultado = $valor1 - $valor2;
      break;
      case 3: 
        $resultado = $valor1 * $valor2;
      break;
      case 4: 
        $resultado = $valor1 / $valor2;
      break;
      default;
        echo 'Operação Inválida!!!';
      return 0;
    }

    echo 'Resultado: '.$resultado;
  } else if ($es_calc == 'Off') {
      echo 'Desligada';
      return 0;
  }
}