<?php
    require_once __DIR__ . '/modules/constants.php';
    require_once __DIR__ . '/modules/variables.php';
    require_once __DIR__  . '/modules/calcularResultadoMultiplicacaoEntreMatrizes.php';
    require_once __DIR__ . '/modules/mostrarMatriz.php';

    mostrarMatriz(calcularResultadoMultiplicacaoEntreMatrizes(MATRIZ_QUADRADA_A, MATRIZ_QUADRADA_B));
    mostrarMatriz(calcularResultadoMultiplicacaoEntreMatrizes(MATRIZ_NAO_QUADRADA_A, MATRIZ_NAO_QUADRADA_B));
?>