<?php

require_once __DIR__ . '/../interfaces/RedeSocial.php';

//Dao
require_once __DIR__ . '/../Dao/TipTopDao.php';

class TipTop implements RedeSocial
{

    private $redeSocialID;
    private $nomeRedeSocial;

    public function getRedeSocialID()
    {
        return $this->redeSocialID;
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
        $tipTopDao = new TipTopDao;

        $facebook = $tipTopDao->load($nomeRedeSocial);
        return $facebook;
    }

    //método responsável por inserir a rede social
    public static function insere($nomeRedeSocial)
    {
        $tipTopDao = new TipTopDao;

        $tipTopDao->insert($nomeRedeSocial);
    }


    public function enviarMensagemUsuario($mensagem)
    {
    }

    public function removerMensagem($codigoMensagem)
    {
    }

    public function criarUsuario($dadosUsuario)
    {
    }

    public function removerUsuario($codigoUsuario)
    {
    }
}
