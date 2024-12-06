<?php

    $aluno = [
        "nome" => "Aluno 1",
        "sobrenome" => "Sobrenome 1",
        "idade" => 20,
        "sexo" => "Masculino",
        "curso" => "Curso 1"
    ];

    echo "O aluno ". $aluno["nome"] . " tem " . $aluno['idade'] . " anos." . " Ele está cursando " . $aluno['curso'];

    //Multidimensionais
    $multi = array(
        "nome" => "Aluno 2",
        "sobrenome" => "Sobrenome 2",
        "idade" => 20,
        "sexo" => "Masculino",
        "curso" => "Curso 2",
        "filiacao" => array(
            "pai" => array(
                "nome" => "Pai 1",
                "sobrenome" => "Sobrenome 1",
                "idade" => 20,
                "sexo" => "Masculino",
            ),
            "mae" => [
                "nome" => "Mae 2",
                "sobrenome" => "Sobrenome 2",
                "idade" => 20,
                "sexo" => "Feminino",
            ],
        ),
    );

    echo "<br><br>O aluno " . $multi["nome"] . " tem " . $multi['idade'] . " anos e é filho de " . $multi['filiacao']['mae']['nome'] . " e de " . $multi['filiacao']['pai']['nome'];


    //Adicionando valores em um array

    $valores = array();
    for($i = 0; $i < 10; $i++){
        $valores[$i] = $i+1000;
    }

    echo "<br><br>";
    print_r($valores);
    echo "<br><br>";
    unset($valores[8]);
    echo "<br><br>";
    print_r($valores);
    echo "<br><br>";

    $semIndice = array();
    for($i = 0; $i < 10; $i++){
        $semIndice[] = $i+100;
    }

    echo "<br><br>";
    print_r($semIndice);
    echo "<br><br>";
    unset($semIndice[8]);
    echo "<br><br>";
    print_r($semIndice);
