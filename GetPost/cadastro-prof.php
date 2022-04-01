<?php
    $nome = $_POST['txtNome'];
    $CPF = $_POST['txtCPF'];
    $dataNasc = $_POST['data'];
    $Escola = $_POST['slEscola'];

        if($Escola == 1) {
            $Escola = "E.E Ernestina Del Buono Trama";
        } 
        else if ($Escola == 2) {
            $Escola = "E.E João de Castro Filho";
        }
        else if( $Escola == 3){
            $Escola = "E.E Chico Duarte";
        }
        else {
            $Escola = "E.E Felicio Sompae";
        }

    echo("O(a) professor ".$nome."  inscrito(a) no CPF: ".$CPF." com data de nascimento no dia: ".$dataNasc." <br> se cadastrou para vacinação no colégio ".$Escola.".");
?>