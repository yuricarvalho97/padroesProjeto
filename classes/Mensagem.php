<?php

//incluindo interface
require_once __DIR__ . '/../interfaces/PrototypeMensagem.php';

//Dao
require_once __DIR__ . '/../Dao/MensagemDao.php';

class Mensagem implements PrototypeMensagem
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

    //método responsável por procurar mensagens
    public static function find()
    {
        $MensagemDao = new MensagemDao;

        $mensagem = $MensagemDao->load();
        return $mensagem;
    }

    //método responsável por inserir as mensagens
    public static function insere(Mensagem $m)
    {
        $MensagemDao = new MensagemDao;

        return $MensagemDao->insert($m);
    }

    /*
        implementando o método clone da classe abstrata
    */
    public function clone()
    {
        //retornando a instância da mensagem
        return clone $this;
    }
}
