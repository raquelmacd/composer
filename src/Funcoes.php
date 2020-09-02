<?php

namespace Trabalho;
class Funcoes{
    protected CLImate $climate;

    public function calcularAoQuadrado($numero){
        echo sprintf("Resultado: %s", $numero * $numero);
        
    }

    
    public function fatorial($input)  {
        $count =1;
        $fatorial = 1;
        $registro[$count] = $fatorial;
        while($count<=$input){
            $registro[$count] = $fatorial *= $count;
            $count++;
        }
        $input = $climate->confirm('Deseja ver como foi feito o cálculo?');
        if ($input->confirmed()) {
            while($count<=$input){
                echo sprintf("%s", $registro[$count]);
                $climate->br();
            }
        } 
        echo $fatorial;
                
    }
}