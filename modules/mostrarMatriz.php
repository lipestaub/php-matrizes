<?php
    function mostrarMatriz(array $matriz) : void {
        echo "\n";
        
        for ($i = 0; $i < count($matriz); $i++) {
            echo implode(', ', $matriz[$i]) . "\n";
        }

        echo "\n";
    }
?>