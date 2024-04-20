<?php
include("Fatura.php");

$fatura1 = new Fatura("Anel de vidro simples",20,32,30.00);
echo "{$fatura1->toString()}";

?>