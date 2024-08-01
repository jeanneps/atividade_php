<?php
//questão 1. Crie uma variável em PHP, atribua um valor e exiba na página.
$mensagem = "Olá, mundo!";
echo $mensagem;
echo "<br>";
?>
<?php
/* 2. Exiba na tela as variáveis nome, idade, endereco e curso fazendo a
concatenação dos valores dentro do seguinte texto.
a. “Ola eu sou Fulano, tenho XX anos, moro em XYZ e faço o
curso de ZZZ no SENAC”*/

$nome ="jeane";
$idade = "26";
$endereco = "coroadinho";
$curso = "programador web";

$texto = " Olá, meu nome é " .$nome. " tenho " . $idade. " anos moro no " .$endereco. " faço o curso de " .$curso. " no senac";
echo $texto
?>
<?php
/*3. Faça um programa que leia 2 variáveis e exiba na tela: soma, subtração,
multiplicação e divisão.*/
function dividir ($a,$b) {
return $b!=0 ? $a/$b :" não é possivel dividir por 0"; }

$numero1 = 10 ;
$numero2 = 5;

$soma = "$numero1 + $numero2";
$subtracao ="$numero1 - $numero2";
$multiplicacao ="$numero1 * $numero2";
$divisao = "dividir($numero1,$numero2)";
echo "<br>";
echo "numero1 : $numero1 <br>";
echo "numero2 : $numero2 <br>";
echo "soma : $soma <br>";
echo "subtracao : $subtracao <br>";
echo "multiplicacao : $multiplicacao <br>";
echo "divisao : $divisao <br>";
?>
<?php
/*4. Faça um programa que leia 2 números e exiba quem é maior, menor ou se eles são
iguais. */
$n1 = 5;
$n2 = 5;

echo "<br>";
echo "<br>";
 if ($n1>$n2) {
    echo "n1 ($n1) é maior que ($n2).";
} elseif ($n1 < $n2) {
    echo "n1 ($n1) é menor que ($n2).";
} else {
    echo  "n1 ($n1) é igual a ($n2)";
}
echo "<br>";
?>

<?php
//questao 5
/* 5. Faça um programa que leia uma string e verifique se ela contém as letras ‘a’ e ‘o’.
Caso sim escreva “Contem”, caso contrário escreva “Nao Contem”.
a. Dica: use a função do php str_contains() que recebe como argumentos
a string a ser lida e o valor a ser procurado.*/ 

$texto = "Olá, meu nome é jeane tenho 26 anos moro no coroadinho faço o curso de programador web no senac";

echo "<br>";
echo "<br>";
if (str_contains($texto,"a") && (str_contains($texto,"o")) ) {
    echo " contem";

} else {
    echo " não contem";
}

?>

<?php 
/*6. Crie uma função que retorna o próprio argumento enviado para ela. Faça o chamado
dessa função exibindo na tela o resultado.*/
echo "<br>";
echo "<br>";
function mensagem ( $mensagem){
return $mensagem; }
 
$resultado = mensagem ($mensagem);
echo $resultado;

?>

<?php 
/*7. Crie uma função de verificação de senha. Ela deve retornar true para senhas válidas
e false para senhas inválidas.
a. Regras:
i. Senha deve ter mais de 8 caracteres
ii. Deve ter pelo menos uma letra maiúscula
iii. Deve ter pelo menos uma letra minúscula
iv. Deve conter pelo menos um número
b. Dica, use as funções ctype do PHP
i. ctype_upper() - verifica maiúsculas
ii. ctype_lower() - verifica minúsculas
iii. ctype_digit() - verifica números*/
echo "<br>";
echo "<br>";



?>
<?php 
/*8. Usando o operador ternário faça uma questão que leia uma idade e indique se é
maior de idade ou não.*/
echo "<br>";
echo "<br>";
$idade = 26;
 $resultado= $idade >= 18 ? "Voce é maior de idade" : "voce é menor de idade";
 echo $resultado;
?>
<?php 
/*9. Percorra o array abaixo e exiba o nome e a nota dos aprovados (nota maior ou igual
a 7).*/

?>
<?php 
/*10. Crie uma função que calcule a área de um círculo. Fórmula: a = pi * raio
2
Valor teste raio = 4, área ~ 50.27*/

?>
<?php 
/*11. Crie uma função que receba um número como parâmetro e retorna um array de
todos os números pares de 0 até o número enviado. Chame a função, depois,
percorra e exiba os valores do array resultante.
a. Exemplo:
i. entrada 10
ii. saída = um array com [0, 2, 4, 6, 8, 10]*/


?>
<?php 
/*12. Crie uma função que recebe um ano como parâmetro e devolve a qual século ele
pertence. A contagem de século é do ano 1 ao ano 100, ou seja, 1901-2000 é século
20 e 2001-2100 é século 21.
a. exemplo
i. entrada: 1950 // saída: século 20;
ii. entrada: 2005 // saída: século 21;
iii. entrada: 1900 // saída: século 19;*/

?>
<?php 
/*13. Crie uma função que recebe uma string e verifica se ela é ou não um Palíndromo.
Palíndromos são palavras que se pode ler, indiferentemente, da esquerda para a
direita ou vice-versa. Exemplo: arara.*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




</body>
</html>