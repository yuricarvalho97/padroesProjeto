<?php
require __DIR__ . "/../autoload.php";
require __DIR__ . "/../classes/Usuario.php";
require __DIR__ . "/../classes/Mensagem.php";
require __DIR__ . "/../classes/Instagram.php";
require __DIR__ . "/../classes/Facebook.php";
require __DIR__ . "/../classes/TipTop.php";

//Iniciando a sessão
session_start();

$usuariosContas = Usuario::find();
$mensagens = Mensagem::find();

$instagram = new Instagram;
$instagram->setNomeRedeSocial('Instagram');
$i = Instagram::find($instagram->getNomeRedeSocial());

$facebook = new Facebook;
$facebook->setNomeRedeSocial('Facebook');
$f = Facebook::find($facebook->getNomeRedeSocial());

$tipTop = new TipTop;
$tipTop->setNomeRedeSocial('TipTop');
$t = Facebook::find($tipTop->getNomeRedeSocial());

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padrões de projeto</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/default.css">
</head>

<body>