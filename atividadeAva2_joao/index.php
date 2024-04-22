<?php
    include("Empregado.php");
    $empregado1 = new empregado("Joao", "lucas",2000);
    $empregado2 = new empregado("Pablo","oliveira",2300);
    echo ("{$empregado1->toString}");
    var_dump($empregado1);
    var_dump($empregado2);
?>