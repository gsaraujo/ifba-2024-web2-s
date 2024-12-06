<?php

    $numeros = [10,20,30,40,50,60,70,80,90];
    print_r($numeros);
    $aleatorio = array_rand($numeros,1);//pega um número aleatório a partir chaves do array
    echo "<br>Chave: " . $aleatorio . "<br> Valor: " . $numeros[$aleatorio];

    echo "<br>";

    $outrosNumeros = array(100,200,300,400,500,600,700,800,900);
    print_r($outrosNumeros);
    $aleatorio = array_rand($outrosNumeros,1);
    echo "<br>Chave: " . $aleatorio . "<br> Valor: " . $outrosNumeros[$aleatorio];