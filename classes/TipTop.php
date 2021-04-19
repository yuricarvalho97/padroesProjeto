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

    public static function find($nomeRedeSocial)
    {
        $tipTopDao = new TipTopDao;

        $facebook = $tipTopDao->load($nomeRedeSocial);
        return $facebook;
    }

    public static function insere($nomeRedeSocial)
    {
        $tipTopDao = new TipTopDao;

        $tipTopDao->insert($nomeRedeSocial);
    }

    public static function insereMensagem(Mensagem $mensagem)
    {
        $TipTopDao = new TipTopDao;

        return $TipTopDao->insertMensagem($mensagem);
    }

    public static function removerMensagem($codigoMensagem)
    {
        $TipTopDao = new TipTopDao;

        return $TipTopDao->deleteMensagem($codigoMensagem);
    }

    public static function criarUsuario(Usuario $u)
    {
        $tipTopDao = new TipTopDao();
        $tipTopDao->insertUsuario($u);
    }

    public static function removerUsuario($codigoUsuario)
    {
        $TipTopDao = new TipTopDao;

        return $TipTopDao->removeUsuario($codigoUsuario);
    }
}
