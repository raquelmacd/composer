<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

use Trabalho\Funcoes;

$menu= new Funcoes();


$climate->border('###',30);
$climate->out('[1] Raiz Quadrada');
$climate->out('[2] Fatorial');
$climate->out('[3] Ao Quadrado');
$climate->border('###',30);

$input = $climate->input('Escolha uma das opções acima:');
$input->accept(['1','2','3']);
$opcao = $input->prompt();
$climate->border('-',30);

switch ($opcao){
    case '1':
        $input = $climate->input('Digite um número: ');
        $resp = $input->prompt();
        $climate->border('-',30);
        return;
    case '2':
        $input = $climate->input('Digite um número: ');
        $resp = $input->prompt();
        $climate->br();
        return;
    case '3':
        $input = $climate->input('Digite um número: ');
        $resp = $input->prompt();
        $menu->calcularAoQuadrado($resp);
        $climate->br();
        $input = $climate->confirm('Deseja ver como foi feito o cálculo?');
        if ($input->confirmed()) {
            echo sprintf('%s  X  %s',  $resp ,$resp);
            $climate->br();
        }
        $climate->border('-',30);
        return;
    }
    