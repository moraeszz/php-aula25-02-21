<?php

/** exibir o nome de usuário e seu ano de nascimento 
 * 
 * 
 * Exemplo: Olá, fulano de tal, você nasceu em 1988
 * 
*/

$nome = "Rafaela";
$idade = 17;
$calculoNascimento = (2021 - $idade); /** ou $calculoNascimento = date("Y") - $idade; **/

echo "<h1>Olá, $nome, você nasceu em $calculoNascimento</h1>";

/** Outro modo de imprimir 
 * echo "Hoje é" . date("d/m/Y");
 * 
**/


