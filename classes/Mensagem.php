<?php

//Dao
require_once __DIR__ . '/../Dao/MensagemDao.php';

class Mensagem
{
    private $MensagemID;
    private $MensageiroIDFK;
    private $ReceptorIDFK;
    private $Conteudo;


    public function getMensagemID()
    {
        return $this->MensagemID;
    }

    public function setMensagemID($MensagemID)
    {
        $this->MensagemID = $MensagemID;
    }

    public function getMensageiroIDFK()
    {
        return $this->MensageiroIDFK;
    }

    public function setMensageiroIDFK($MensageiroIDFK)
    {
        $this->MensageiroIDFK = $MensageiroIDFK;
    }

    public function getReceptorIDFK()
    {
        return $this->ReceptorIDFK;
    }

    public function setReceptorIDFK($ReceptorIDFK)
    {
        $this->ReceptorIDFK = $ReceptorIDFK;
    }

    public function getConteudo()
    {
        return $this->Conteudo;
    }

    public function setConteudo($Conteudo)
    {
        $this->Conteudo = $Conteudo;
    }

    public static function find()
    {
        $MensagemDao = new MensagemDao;

        $mensagem = $MensagemDao->load();
        return $mensagem;
    }

    public static function insere(Mensagem $m)
    {
        $MensagemDao = new MensagemDao;

        return $MensagemDao->insert($m);
    }
}
