# bdr-teste
Teste bdr

QUESTÕES
<br/>
1. Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
“Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
de ambos (3 e 5), imprima “FizzBuzz”.
<br/>
2. Refatore o código abaixo, fazendo as alterações que julgar necessário.
1.
2.
3.<br/><br/><br/>
<?
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {4.
5.
6.
7.
8.
9.
header("Location: http://www.google.com");
exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
header("Location: http://www.google.com");
exit();
}

<br/>
3. Refatore o código abaixo, fazendo as alterações que julgar necessário.
1.
2.
3.<br/><br/><br/>
4.
5.
6.
7.
8.
9.
10.
11.
12.
13.
14.
<?php
class MyUserClass
{
public function getUserList()
{
$dbconn = new DatabaseConnection('localhost','user','password');
$results = $dbconn->query('select name from user');
sort($results);
return $results;
}
}<br/><br/>
4. Desenvolva uma API Rest para um sistema gerenciador de tarefas
(inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por
prioridade.<br/>
Desenvolver utilizando:
• Linguagem PHP (ou framework CakePHP);
• Banco de dados MySQL;
Diferenciais:
• Criação de interface para visualização da lista de tarefas;
• Interface com drag and drop;
• Interface responsiva (desktop e mobile);
