<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/10/15
 * Time: 17:25
Refatore o código abaixo, fazendo as alterações que julgar necessário.
1.
2.
3.
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
 */

if(isset($_SESSION['Loggedin']))
{
    if ($_SESSION['Loggedin'])
    {
        header("Location: http://www.google.com");
        exit();
    }
}
//Verifica por cookie caso não exista session
if(isset($_COOKIE['Loggedin']))
{
    if ($_COOKIE['Loggedin'])
    {
        header("Location: http://www.google.com");
        exit();
    }
}

?>