<?php

//Dao
require_once __DIR__ . '/../Dao/Usuario_MensagemDao.php';

class Usuario_Mensagem
{
    private $UsuarioMensagemIDFK;
    private $UsuarioIDFK;
    private $MensagemIFDK;

    public function getUsuarioMensagemIDFK()
    {
        return $this->UsuarioMensagemIDFK;
    }

    public function setUsuarioMensagemIDFK($UsuarioMensagemIDFK)
    {
        $this->UsuarioMensagemIDFK = $UsuarioMensagemIDFK;
    }

    public function getUsuarioIDFK()
    {
        return $this->UsuarioIDFK;
    }

    public function setUsuarioIDFK($UsuarioIDFK)
    {
        $this->UsuarioIDFK = $UsuarioIDFK;
    }

    public function getMensagemIFDK()
    {
        return $this->MensagemIFDK;
    }

    public function setMensagemIFDK($MensagemIFDK)
    {
        $this->MensagemIFDK = $MensagemIFDK;
    }

    public static function insere(Usuario_Mensagem $m)
    {
        $Usuario_MensagemDao = new Usuario_MensagemDao;

        return $Usuario_MensagemDao->insert($m);
    }
}
