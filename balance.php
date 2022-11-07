<?php

function balanceString(String $string) {
    //Array para armazenar chaves abertas
    $arrayBalance = [];
    //Array para identificar o inverso da chave que esta sendo procurada
    $arrayValueReverse = [
        ')' => '(',
        ']' => '[',
        '}' => '{',
    ];

    for ($i = 0; $i < strlen($string); $i++) {
        $ltAtual = $string[$i];
        //Verifica se a posição em questão é uma abertura
        if ($string[$i] == '(' || $string[$i] == '[' || $string[$i] == '{') {
            //Se for é inserido no array
            array_push($arrayBalance, $string[$i]);
        } else
        // Verifica se a posição em questão é um fechamento
        if ($string[$i] == ')' || $string[$i] == ']' || $string[$i] == '}') {
            // Verifica se a chave de fechamento condiz com a ultima aberta 
            if (end($arrayBalance) == $arrayValueReverse[$string[$i]]) {
                // Remove a chave aberta do array
                array_pop($arrayBalance);
            } else {
                // Se não inclui a chave no array
                array_push($arrayBalance, $string[$i]);
            }
        }
    }

    return !count($arrayBalance) ? 'Colchetes Balanceados' : 'Colchetes Desbalanceados!';
}

print balanceString('[{()}](){}');

