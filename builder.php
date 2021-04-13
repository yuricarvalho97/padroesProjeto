<?php

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

}
