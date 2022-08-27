<?php

function ImprimirQuebra()
{
    echo "<br>";
    echo "<hr>";
    echo "<br>";
}
function ImprimirTexto($texto)
{
    echo $texto."<br>";
}
$meuTexto = "Aqui vai uma string de qualquer tipo de dados"."32";
ImprimirTexto("Fernando");
ImprimirQuebra();
ImprimirTexto($meuTexto);
#ImprimirTexto();
ImprimirQuebra();

function Adicao($numero1, $numero2)
{
    return $numero1+$numero2;
}
function Subtracao($numero1, $numero2)
{
    return $numero1 - $numero2;
}
function Multiplcacao($numero1, $numero2)
{
    return $numero1 * $numero2;
}
function Divisao($numero1, $numero2)
{
    return $numero1 / $numero2;
}
function Media($numero1, $numero2){
    return Adicao($numero1,$numero2)/2;
}
//Adicao(12,8);
//Subtracao(12,8);
//Multiplcacao(12,8);
//Divisao(12,8);
$media = Media(8,9);
ImprimirTexto(  Media(8,9)  );
ImprimirTexto( Adicao(5432, 4567));

function LendariaCalculadora($numero1, $numero2, $operacao){
    if($operacao == "+"){
        ImprimirTexto(Adicao($numero1,$numero2));
    }else if($operacao == "-"){
        ImprimirTexto(Subtracao($numero1,$numero2));
    }else if($operacao == "*"){
        ImprimirTexto(Multiplcacao($numero1,$numero2));
    }else if($operacao == "/"){
        ImprimirTexto(Divisao($numero1,$numero2));
    }else if($operacao == "m"){
        ImprimirTexto(Media($numero1,$numero2));
    }else {
        ImprimirTexto("Operação Inválida");
    }
}
LendariaCalculadora(12,8,"+");
?>