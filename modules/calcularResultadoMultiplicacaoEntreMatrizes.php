<?php
    function calcularResultadoMultiplicacaoEntreMatrizes(array $matrizA, array $matrizB) : array {
        for ($i = 0; $i < count($matrizA); $i++) {
            for ($j = 0; $j < count($matrizB[0]); $j++) {
                $resultado = 0;
                for ($k = 0; $k < count($matrizA[0]); $k++) {
                    $resultado += $matrizA[$i][$k] * $matrizB[$k][$j];
                }          
                $resultados[$i][$j] = $resultado;
            }            
        }
    
        return $resultados;
    }
?>