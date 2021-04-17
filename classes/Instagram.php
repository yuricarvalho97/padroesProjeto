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

        $instagram = $instagramDao->load($nomeRedeSocial);
        return $instagram;
    }

    //método responsável por inserir a rede social
    public static function insere($nomeRedeSocial)
    {
        $instagramDao = new InstagramDao;

        $instagramDao->insert($nomeRedeSocial);
    }

    public static function insereMensagem(Mensagem $mensagem)
    {
        $instagramDao = new InstagramDao;

        return $instagramDao->insertMensagem($mensagem);
    }

    public static function removerMensagem($codigoMensagem)
    {
        $instagramDao = new InstagramDao;

        return $instagramDao->deleteMensagem($codigoMensagem);
    }

    public function enviarMensagemUsuario($mensagem)
    {
    }

    public static function criarUsuario(Usuario $u)
    {
        $instagramDao = new InstagramDao();
        $instagramDao->insertUsuario($u);
    }

    public static function removerUsuario($codigoUsuario)
    {
        $instagramDao = new InstagramDao;

        return $instagramDao->removeUsuario($codigoUsuario);
    }
}
