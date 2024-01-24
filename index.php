<?php
    require_once __DIR__ . '/modules/constants.php';
    require_once __DIR__  . '/modules/calcularResultadoMultiplicacaoEntreMatrizes.php';
    require_once __DIR__ . '/modules/mostrarMatriz.php';

    echo "Matriz quadrada:";
    mostrarMatriz(calcularResultadoMultiplicacaoEntreMatrizes(MATRIZ_QUADRADA_A, MATRIZ_QUADRADA_B));
    echo "Matriz não quadrada:";
    mostrarMatriz(calcularResultadoMultiplicacaoEntreMatrizes(MATRIZ_NAO_QUADRADA_A, MATRIZ_NAO_QUADRADA_B));
?>