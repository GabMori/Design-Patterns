<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'src/RelatorioBase.php';
require_once 'src/RelatorioDecorator.php';
require_once 'src/CabecalhoDecorator.php';
require_once 'src/CorDecorator.php';
require_once 'src/BordaDecorator.php';

    $relatorio = new RelatorioBase("Teste");

    $relatorioComCabecalho = new CabecalhoDecorator($relatorio, "Teste");
    $relatorioComCor = new CorDecorator($relatorioComCabecalho, "Azul");
    $relatorioComBorda = new BordaDecorator($relatorioComCor);

echo $relatorioComBorda->gerarRelatorio(); 
