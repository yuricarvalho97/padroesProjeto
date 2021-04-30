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
            break;
        case 'Facebook':
            require './classes/Facebook.php';
            $redesocial = new Facebook;

            $redesocial->setNomeRedeSocial($_POST["cmpRedeSocial"]);

            $facebook = Facebook::find($redesocial->getNomeRedeSocial());

            if (!$facebook) {
                Facebook::insere($redesocial->getNomeRedeSocial());
            }
            break;
        case 'TipTop':
            require './classes/TipTop.php';
            $redesocial = new tipTop;

            $redesocial->setNomeRedeSocial($_POST["cmpRedeSocial"]);

            $tipTop = tipTop::find($redesocial->getNomeRedeSocial());

            if (!$tipTop) {
                tipTop::insere($redesocial->getNomeRedeSocial());
            }
            break;
    }

    //CADASTRAR USUÁRIO
    switch ($_POST['cmpAdmin']) {
        case 0:
            //Se veio o valor 0 do formulário, cria um usuário padrão
            $usuario = new Usuario;
            $usuario->setNomeUsuario($_POST["cmpNome"]);
            $usuario->setSobrenomeUsuario($_POST["cmpSobrenome"]);
            $usuario->setEmailUsuario($_POST["cmpEmail"]);
            $usuario->setTelefoneUsuario($_POST["cmpTelefone"]);
            $usuario->setSenhaUsuario($_POST["cmpSenha"]);
            $usuario->setUsuarioAdmin($_POST["cmpAdmin"]);

        case 1:
            //Se veio o valor 1 do formulário, cria um usuário administrador
            $usuario = new UsuarioAdmin;
            $usuario->setNomeUsuario($_POST["cmpNome"]);
            $usuario->setSobrenomeUsuario($_POST["cmpSobrenome"]);
            $usuario->setEmailUsuario($_POST["cmpEmail"]);
            $usuario->setTelefoneUsuario($_POST["cmpTelefone"]);
            $usuario->setSenhaUsuario($_POST["cmpSenha"]);
            $usuario->setUsuarioAdmin($_POST["cmpAdmin"]);
            break;
    }

    //Insere o usuário na rede social selecionada
    switch ($_POST["cmpRedeSocial"]) {
        case 'Instagram':
            $redesocial = Instagram::find($_POST["cmpRedeSocial"]);
            $usuario->setRedeSocialUsuario($redesocial[0]);
            $confirmacao = Instagram::criarUsuario($usuario);
            break;
        case 'Facebook':
            $redesocial = Facebook::find($_POST["cmpRedeSocial"]);
            $usuario->setRedeSocialUsuario($redesocial[0]);
            $confirmacao = Facebook::criarUsuario($usuario);
            break;
        case 'TipTop':
            $redesocial = TipTop::find($_POST["cmpRedeSocial"]);
            $usuario->setRedeSocialUsuario($redesocial[0]);
            $confirmacao = TipTop::criarUsuario($usuario);
            break;
    }

    //Cria aviso de confirmação do cadastro
    if ($confirmacao) {
        $_SESSION['mensagem'] = 'Erro ao cadastrar o usuário!';
    } else {
        $_SESSION['mensagem'] = 'Usuário cadastrado com sucesso!';
    }
    header('Location: index.php');
}

//DELETAR USUÁRIO
if (isset($_POST['btnDeletarUsuario'])) {
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

    $confirmacao = $redesocial::removerUsuario($_POST['cmpUsuarioID']);

    if ($confirmacao) {
        $_SESSION['mensagem'] = 'Usuário deletado com sucesso!';
    } else {
        $_SESSION['mensagem'] = 'Erro ao deletar o usuário!';
    }

    header('Location: index.php');
}
