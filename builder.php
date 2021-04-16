<?php

//Iniciando a sessão
session_start();

//arquivo de conexao
require "autoload.php";

//CADASTRAR USUÁRIO
if (isset($_POST['btnEnviarFormularioUsuario'])) {
    $redesocial = '';

    //Verificando se a rede social existe
    switch ($_POST['cmpRedeSocial']) {
        case 'Instagram':
            require './classes/Instagram.php';
            $redesocial = new Instagram;

            $redesocial->setNomeRedeSocial($_POST["cmpRedeSocial"]);

            $instagram = Instagram::find($redesocial->getNomeRedeSocial());

            if (!$instagram) {
                Instagram::insere($redesocial->getNomeRedeSocial());
            }
            $redesocial->setRedeSocialID($instagram[0]);
            break;
        case 'Facebook':
            require './classes/Facebook.php';
            $redesocial = new Facebook;

            $redesocial->setNomeRedeSocial($_POST["cmpRedeSocial"]);

            $facebook = Facebook::find($redesocial->getNomeRedeSocial());

            if (!$facebook) {
                Facebook::insere($redesocial->getNomeRedeSocial());
            }
            $redesocial->setRedeSocialID($facebook[0]);
            break;
        case 'TipTop':
            require './classes/TipTop.php';
            $redesocial = new tipTop;

            $redesocial->setNomeRedeSocial($_POST["cmpRedeSocial"]);

            $tipTop = tipTop::find($redesocial->getNomeRedeSocial());

            if (!$tipTop) {
                tipTop::insere($redesocial->getNomeRedeSocial());
            }
            $redesocial->setRedeSocialID($tipTop[0]);
            break;
    }


    //Cria o novo usuário e seta os atributos recebidos pelo formulário
    $usuario = new Usuario;
    $usuario->setNomeUsuario($_POST["cmpNome"]);
    $usuario->setSobrenomeUsuario($_POST["cmpSobrenome"]);
    $usuario->setEmailUsuario($_POST["cmpEmail"]);
    $usuario->setTelefoneUsuario($_POST["cmpTelefone"]);
    $usuario->setSenhaUsuario($_POST["cmpSenha"]);
    $usuario->setRedeSocialUsuario($redesocial->getRedeSocialID());
    $usuario->setUsuarioAdmin($_POST["cmpAdmin"]);
    $confirmacao = Usuario::insere($usuario);

    if ($confirmacao) {
        $_SESSION['mensagem'] = 'Erro ao cadastrar o usuário!';
    } else {
        $_SESSION['mensagem'] = 'Usuário cadastrado com sucesso!';
    }
    header('Location: index.php');
}

//CADASTRAR MENSAGEM 
if (isset($_POST['enviarMensagem'])) {
    require './classes/Mensagem.php';

    $mensagem = new Mensagem;

    $mensagem->setMensageiroIDFK($_POST['cmpMensageiro']);
    $mensagem->setReceptorIDFK($_POST['cmpUsuarioReceptor']);
    $mensagem->setConteudo($_POST['cmpMensagem']);
    $confirmacao = Mensagem::insere($mensagem);

    if ($confirmacao) {
        $_SESSION['mensagem'] = 'Erro ao cadastrar a mensagem!';
    } else {
        $_SESSION['mensagem'] = 'Mensagem cadastrada com sucesso!';
    }
    header('Location: index.php');
}
