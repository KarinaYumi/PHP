    <?php

    //Exercício 1 - Desenvolva uma página que a partir dos números de uma placa de um veículo informe o dia de rodízio de um veículo.
    $placa = "MNS2757";
    echo($placa[strlen($placa)-1]);
    switch($placa[strlen($placa)-1]){
        case 1:
        case 2:
            echo(" Segunda-Feira");
            break;

        case 3:
        case 4:
            echo(" Terça-Feira");
            break;

        case 5:
        case 6:
            echo(" Quarta-Feira");
            break;

        case 7:
        case 8:
            echo(" Quinta-Feira");
            break;

        case 9:
        case 0:
            echo(" Sexta-Feira");
            break;
    }
    echo("<br>");
    //Exercício 2 - Desenvolva uma página que a partir de três números inteiros e determine qual é o menor e qual é o maior.

    $num1 = 1000;
    $num2 = 20;
    $num3 = 21;
    
    $variaveis = array($num1, $num2, $num3);
    echo "O maior número é: ".max($variaveis);
    echo "<br> O menor número é: ".min($variaveis);
    
    echo("<br>");

    //Exercício 3 - Criar uma página que leia o salário de um funcionário e o departamento que ele trabalha. Para o departamento Operacional, o aumento será de 15%. Para o departamento de desenvolvimento deverão ser aplicadas as seguintes regras:

    // $depto = 1;//Operacional
    // $depto = 2;//Desenvolvimento
    // · para 1.500,00 <= salarioAtual < 1.750,00: aumento igual a 12%
    // · para 1.750,00 <= salarioAtual < 2.000,00: aumento igual a 10%
    // · para 2.000,00 <= salarioAtual < 3.000,00: aumento igual a 7%
    // · para acima de 3.000,00: aumento igual a 5%.

    $salarioAtual = 1800;
    $depto = 2;

    $resultado;

    if($depto == 1){
        $resultado = $salarioAtual * 1.15;
    }else if($depto == 2){
        if($salarioAtual < 1750){
            $resultado = $salarioAtual * 1.12;
        } else if ($salarioAtual < 2000){
            $resultado = $salarioAtual  * 1.10;
        } else if($salarioAtual < 3000){
            $resultado = $salarioAtual * 1.07;
        }else{
            $resultado = $salarioAtual * 1.05;
        }
    }

    echo("O novo salário será de: ".$resultado);
    echo("<br>");

    //Exercício 4 - Desenvolva um programa para calcular a potência de um número por uma base qualquer. O programa deverá realizar a leitura da base e do expoente.

    $numero = 2;
    $expoente = 2;
    $resultado = $numero;

    for($i = 1; $i < $expoente; $i++){
        $resultado = $resultado * $numero;
    }
    echo("O resultado da potência é de: ".$resultado);
    echo("<br>");

    //Exercício 5 - Desenvolva uma página que ao ler um número diga se ele é primo ou não.
    $num = 5;
    $cont = 0;
    for($i = 1; $i <= $num; $i++){
        if($num % $i == 0){
            $cont++;
        }
    }
    if($cont == 2){
        echo("O número " .$num. " é primo!");
    }else {
        echo("O número ".$num. " NÃO é primo!");
    }
    echo("<br>");

    //Exercício 6 - Desenvolva um programa para calcular a soma de todos os números ímpares de 1 à 20 e a multiplicação de todos os números pares de 1 à 20.
    $multi = 1;
    $soma = 0;
    for( $i = 1 ; $i <=20; $i++){
            if ($i % 2  == 1) {
                $soma += $i;
            } else if ($i % 2  == 0){
                $multi *= $i;
            }
        }   
        echo("A multiplicação dos números pares é de: ".$multi. "<br>");
        echo("A soma dos números ímpares é de: ".$soma);
