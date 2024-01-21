<?php
    require_once __DIR__ . '/modules/constants.php';
    require_once __DIR__ . '/modules/variables.php';
    require_once __DIR__  . '/modules/calcularResultadoMultiplicacaoEntreMatrizes.php';
    require_once __DIR__ . '/modules/mostrarMatriz.php';

    $a = MATRIZ_QUADRADA_A;
    $b = MATRIZ_QUADRADA_B;

    /*for ($linha = 0; $linha < count($a); $linha++) {
        for ($coluna = 0; $coluna <= count($a); $coluna++) {

        }
    }*/

    $matrizResultados[0][0] = ($a[0][0] * $b[0][0]) + ($a[0][1] * $b[1][0]);
    $matrizResultados[0][1] = ($a[0][0] * $b[0][1]) + ($a[0][1] * $b[1][1]);
    $matrizResultados[1][0] = ($a[1][0] * $b[0][0]) + ($a[1][1] * $b[1][0]);
    $matrizResultados[1][1] = ($a[1][0] * $b[0][1]) + ($a[1][1] * $b[1][1]);

    mostrarMatriz($matrizResultados);

    //mostrarMatriz(calcularResultadoMultiplicacaoEntreMatrizes(MATRIZ_QUADRADA_A, MATRIZ_QUADRADA_B));
    //mostrarMatriz(calcularResultadoMultiplicacaoEntreMatrizes(MATRIZ_NAO_QUADRADA_A, MATRIZ_NAO_QUADRADA_B));
?>