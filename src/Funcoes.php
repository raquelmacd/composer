<?php

namespace Trabalho;
class Funcoes{

    public function calcularAoQuadrado($numero){
        echo sprintf("Resultado: %s", $numero * $numero);
    }

    
    public function fatorial($input)  {

        $fat = gmp_fact($input);

         echo 'O resultado de ('.$input.')! é: '.gmp_strval($fat);
                
    }

    public function calcularRaiz($input){
        echo 'A raiz quadrada de '.$input.' é : '.sqrt($input);
    }
}