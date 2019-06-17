
 0<?php

//Como se lê? "Há um array chamado alunos com três posições. Em cada uma das posições há um array associativo com três par - valor.
//As chaves do array associativo são: nome, dt_nascimento e cidade. Cada par - valor é separado por vírgula e para definir o valor de uma chave
//usa - se o operador de associação :  =>

$alunos = array(array("nome" => "Gabriela", "dt_nascimento" => "03/02/2003", "cidade" => "Mococa"),
                array("nome" => "Agatha", "dt_nascimento" => "22/10/2003", "cidade" => "Mococa"),
                array("nome" => "Allysson", "dt_nascimento" => "15/07/2003", "cidade" => "Mococa")   
                );

//Como se lê? "Acessando o indice 1 do array alunos. No índice 1 há outro array, um associativo 
//onde há uma chave chamada nome e deverá mostrar Agatha"

echo $alunos[1]['nome'];

//Navegando pelos índices do array no navegador: exemplo: http://localhost:8000?i-3
$indice  = $_GET["i"];

//No exemplo acima de i-3 mostraria os dados da quarta posição do array (i-3)
echo $alunos[ $indice]["nome"] . "<br/>";
echo $alunos[ $indice]["dt_nasc"] . "<br/>";
echo $alunos[ $indice]["cidade"] . "<br/>";

//olhe com var dump para ver como a estrutura do array se comporta:
//var_dump($alunos);
?>