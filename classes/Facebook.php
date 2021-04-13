<?php

//interface
require_once __DIR__ . '/../interfaces/RedeSocial.php';

//Dao
require_once __DIR__ . '/../Dao/FacebookDao.php';

class Facebook implements RedeSocial
{

    private $redeSocialID;
    private $nomeRedeSocial;

    public function getRedeSocialID()
    {
        return $this->redeSocialID;
    }

    public function setRedeSocialID($redeSocialID)
    {
        $this->redeSocialID = $redeSocialID;
    }

    public function getNomeRedeSocial()
    {
        return $this->nomeRedeSocial;
    }

    public function setNomeRedeSocial($nomeRedeSocial)
    {
        $this->nomeRedeSocial = $nomeRedeSocial;
    }

    //método responsável por procurar a redeSocial
    public static function find($nomeRedeSocial)
    {
        $facebookDao = new FacebookDao;

        $facebook = $facebookDao->load($nomeRedeSocial);
        return $facebook;
    }

    //método responsável por inserir a rede social
    public static function insere($nomeRedeSocial)
    {
        $facebookDao = new FacebookDao;

        $facebookDao->insert($nomeRedeSocial);
    }

    public function enviarMensagemUsuario($mensagem)
    {
    }
    public function removerMensagem($codigoMensagem)
    {
    }
    public function criarUsuario($dadosUsuario)
    {
        $redeSocialId = $dadosUsuario['redesocialId'];
        $admin = $dadosUsuario['admin'];
        $nome = $dadosUsuario['nome'];
        $sobrenome = $dadosUsuario['sobrenome'];
        $celular = $dadosUsuario['celular'];
        $email = $dadosUsuario['email'];
        $senha = $dadosUsuario['senha'];

        $conn = "INSERT INTO usuario(redesocialidfk, admin, nome, sobrenome, senha, created_at) VALUES ('$redeSocialId', '$admin', '$nome', '$sobrenome', '$senha', now())";
        $conn = "INSERT INTO email_usuario(usuarioidfk, enderecoemail) VALUES ('$usuarioidfk', '$email')";
    }
    public function removerUsuario($codigoUsuario)
    {
    }
}
