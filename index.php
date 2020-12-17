<?php
require_once("class/venda.php");


$venda = new itemVenda(1, 1);
$venda = new itemVenda(2, 2);
$venda = new itemVenda(3, 3);

//$venda->insertVenda();
$r=  $venda->getVenda();

print_r($r)


?>