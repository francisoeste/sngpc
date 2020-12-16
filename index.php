<?php
require_once("class/venda.php");


$venda = new itemVenda(1, 1);
$venda = new itemVenda(2, 2);

$venda->insertVenda();



?>