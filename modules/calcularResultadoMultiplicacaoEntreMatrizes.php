<?php
    function calcularResultadoMultiplicacaoEntreMatrizes(array $matrizA, array $matrizB) : array {
        $linhaResultado = 0;
        $colunaResultado = 0;
        $resultados = [];
        $count = 1;

        for ($i = 0; $i < count($matrizA); $i++) {
            $resultado = 0;

            echo "\n\nVOLTA " . $count . "\n\n";
            for ($j = 0; $j < count($matrizA[$i]); $j++) {
                echo "matrizA[$i][$j] (" . $matrizA[$i][$j] . ") * matrizB[$j][$i] (" . $matrizB[$j][$i] . ") = ";
                $resultado += $matrizA[$i][$j] * $matrizB[$j][$i];
                echo $resultado . "\n\n";
            }

            for ($j = 0; $j < count($matrizA[$i]); $j++) {
                echo "matrizA[$i][$j] (" . $matrizA[$i][$j] . ") * matrizB[$j][$i] (" . $matrizB[$j][$i] . ") = ";
                $resultado += $matrizA[$i][$j] * $matrizB[$j][$i];
                echo $resultado . "\n\n";
            }
            $count++;
            echo $resultado . "\n";
            //$resultados[$i][$j] = $resultado;
        }
    
        return $resultados;
    }
?>