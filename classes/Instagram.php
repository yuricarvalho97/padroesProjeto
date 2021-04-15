<?php

require_once __DIR__ . '/../interfaces/RedeSocial.php';

//Dao
require_once __DIR__ . '/../Dao/InstagramDao.php';

class Instagram implements RedeSocial
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
        $instagramDao = new InstagramDao;

        $facebook = $instagramDao->load($nomeRedeSocial);
        return $facebook;
    }

    //método responsável por inserir a rede social
    public static function insere($nomeRedeSocial)
    {
        $instagramDao = new InstagramDao;

        $instagramDao->insert($nomeRedeSocial);
    }

    public function enviarMensagemUsuario($mensagem)
    {
    }

    public function removerMensagem($codigoMensagem)
    {
    }

    public function criarUsuario(Usuario $u)
    {
       $usuarioDao = new UsuarioDao();
       $usuarioDao->insert($u);
       
    }

    public function removerUsuario($codigoUsuario)
    {
    }
}
