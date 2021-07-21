<?php 
include "Class/Controller.php";

$e1 = new Estoque('Sapato', 50 , 'Tipo A', 50);
$teste = new Teste;

echo $e1->getDetalhesProduto() ."<br/>". $e1->getDetalhesEstoque(). "<br/>". $teste->teste();
echo Teste::fonfon();


?>