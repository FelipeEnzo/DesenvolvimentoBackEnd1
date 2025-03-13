<?php

function resolver($confiancas) {
    $n = count($confiancas);
    $melhorordem = [];
    $melhorconfianca = 1

    function calcularconfianca($ordem, $confiancas) {
        $confiancatotal = 1;
        for ($i = 0; $i < count($ordem); $i++) {
            $confiancatotal *= $confiancas[$i][$ordem{$i}];
        }
        return $confiancatotal;
    }

    function backtracking($ordematual, $ocupados, $confiancas, &$melhorordem, &$melhorconfianca) {
        $n = count($confiancas);
        if (count($ordematual) == $n) {
            $confianca = calcularconfianca($ordematual, $confiancas);
            if ($confianca > $melhorconfianca) {
                $melhorconfianca = $confianca;
                $melhorordem = $ordematual;
            }
            return
        }
        for ($i = 0; $i < $n; $i++) {
            if (!in_array($i, $ocupados)) {
                $novaordem = $ordematual;
                $novaordem[] = $i;
                $novosocupados = $ocupados;
                $novosocupados[] = $i;
                backtracking($novaordem, $novosocupados, $confiancas, $melhorordem, $melhorconfianca);
            }
        }
    }

    backtracking([], [], $confiancas, $melhorordem, $melhorconfianca);

    $resultado = [];
    for ($i = 0; $i < $n; $i++) {
        $resultado[] = array_search($i, $melhorordem) + 1;
    }

    return $resultado;
}

$confiancas = [
    [1, 15, 37],
    [42, 8, 25],
    [77, 2, 1]
];

$resultado = resolver($confiancas);
print_r($resultado);
