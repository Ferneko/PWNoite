<?php 
    // Comentarios em PHP - Linha
    /*
    <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    */
    //echo "Hello world - Meu nome é Fernando"; 
    $idade = 32;
    $nome = "Fernando";
    $Altura = 1.77;
    $solteiro = true;
    //$solteiro = 1;
    //echo $solteiro;
    //echo 10 < 12;
    CONST IDADE = 10;
    echo IDADE;
    if(10 > 12)
    {
        //echo "Mentira";
    }
    else
    {
        //echo "10 não é maior que 12";
    }
/*
    $nota1 = 6;
    if($nota1 >= 6)
    {
        echo "Aprovado";
    }
     else if($nota1 < 6 && $nota1 >= 2)
    {
        echo "Ainda tem chance";
    }
*/
    // Faça um If que calcule a média e escreva na tela
    // se foi aprovado ou não
    $nota1 = 8;
    $nota2 = 10;
    $media = $nota1+$nota2;
    //$media = $media/2;
    $media /= 2;
    //$soma += 10;
    //$soma = $soma + 10;
    //$mult *= 3;
    //$mult = $mult * 3;
    //$sub -= 5;
    //$sub = $sub - 5;

    if($media >= 6){
        echo "Aprovado";
    }else{
        echo "Reprovado";
    }
   // > Maior
   // < Menor
   // <= Menor igual que
   // >= Maior Igual que
   // == Mesmo valor
   //=== Mesmo tipo e Mesmo valor
   
    // && AND
    // || OR
    // ! Negação 

    //if(!10>12){} ! inverte o resultado do teste logico

    // % Resto da divisão

    //Concatenação
    $nome = "teste";
    echo "<br> <br> Fer " . $nome . " nando "."<br>";

    //Loop em PHP
    $contadora = 0;
    do{
        // Código a ser repetido
        $contadora ++;
    }while($contadora < 10);

    $cont = 0;
    while($cont < 10){
        //executa os codigos
        $cont++;
    }

    for($i = 0; $i < 10; $i++)
    {
        //Executa os codigos
        if ( $i % 2 == 0 )
        {
            echo "<p> ". $i ." é par</p>";
        }else{
            echo "<p> ". $i . " é impar</p>";
        }
    }
    
?>
