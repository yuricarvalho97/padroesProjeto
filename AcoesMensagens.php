<?php
/*
    Arquivo responsável por CADASTRAR e DELETAR as mensagens
*/

//Iniciando a sessão
session_start();

//arquivo de conexao
require "autoload.php";

//CADASTRAR MENSAGEM 
if (isset($_POST['enviarMensagem'])) {
    require './classes/Mensagem.php';
    require './classes/Usuario_Mensagem.php';
    $redesocial = '';

    //CRIANDO INSTÂNCIA DE MENSAGEM
    $mensagem = new Mensagem;

    $mensagem->setMensageiroIDFK($_POST['cmpMensageiro']);
    $mensagem->setReceptorIDFK($_POST['cmpUsuarioReceptor']);
    $mensagem->setConteudo($_POST['cmpMensagem']);

    switch ($_POST['cmpRedeSocialID']) {
        case 'Instagram':
            require './classes/Instagram.php';
            $redesocial = new Instagram;

            //CRIANDO CLONE DA MENSAGEM PARA O INSTAGRAM
            $mensagemInstagram = $mensagem->clone();

            $mensagemID = $redesocial::insereMensagem($mensagemInstagram);

            $mensagemInstagram->setMensagemID($mensagemID);

            //cadastrando Cadastrando mensagem_Usuario
            $usuarioMensagem = new Usuario_Mensagem;

            $usuarioMensagem->setUsuarioIDFK($mensagemInstagram->getMensageiroIDFK());
            $usuarioMensagem->setMensagemIFDK($mensagemInstagram->getMensagemID());

            break;
        case 'Facebook':
            require './classes/Facebook.php';
            $redesocial = new Facebook;

            //CRIANDO CLONE DA MENSAGEM PARA O FACEBOOK
            $mensagemFacebook = $mensagem->clone();

            $mensagemID = $redesocial::insereMensagem($mensagemFacebook);

            $mensagemFacebook->setMensagemID($mensagemID);

            //cadastrando Cadastrando mensagem_Usuario
            $usuarioMensagem = new Usuario_Mensagem;

            $usuarioMensagem->setUsuarioIDFK($mensagemFacebook->getMensageiroIDFK());
            $usuarioMensagem->setMensagemIFDK($mensagemFacebook->getMensagemID());
            break;
        case 'TipTop':
            require './classes/TipTop.php';
            $redesocial = new tipTop;

            //CRIANDO CLONE DA MENSAGEM PARA O TIP TOP
            $mensagemTipTop = $mensagem->clone();

            $mensagemID = $redesocial::insereMensagem($mensagemTipTop);

            $mensagemTipTop->setMensagemID($mensagemID);

            //cadastrando Cadastrando mensagem_Usuario
            $usuarioMensagem = new Usuario_Mensagem;

            $usuarioMensagem->setUsuarioIDFK($mensagemTipTop->getMensageiroIDFK());
            $usuarioMensagem->setMensagemIFDK($mensagemTipTop->getMensagemID());
            break;
    }

    $confirmacao = Usuario_Mensagem::insere($usuarioMensagem);

    if ($confirmacao) {
        $_SESSION['mensagem'] = 'Mensagem cadastrada com sucesso!';
    } else {
        $_SESSION['mensagem'] = 'Erro ao cadastrar a mensagem!';
    }
    header('Location: index.php');
}

//DELETAR MENSAGEM
if (isset($_POST['btnDeletarMensagem'])) {

    $nomeRedesocial = Usuario::findRedeSocial($_POST['cmpRedeSocialID']);

    switch ($nomeRedesocial[1]) {
        case 'Instagram':
            require './classes/Instagram.php';
            $redesocial = new Instagram;
            break;
        case 'Facebook':
            require './classes/Facebook.php';
            $redesocial = new Facebook;
            break;
        case 'TipTop':
            require './classes/TipTop.php';
            $redesocial = new tipTop;
            break;
    }

    $confirmacao = $redesocial::removerMensagem($_POST['cmpMensagemDeletarID']);

    if ($confirmacao) {
        $_SESSION['mensagem'] = 'Mensagem deletada com sucesso!';
    } else {
        $_SESSION['mensagem'] = 'Erro ao deletar a mensagem!';
    }

    header('Location: index.php');
}
