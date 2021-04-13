<?php

class Usuario
{
    private $nomeUsuario;
    private $sobrenomeUsuario;
    private $celularUsuario;
    private $emailUsuario;
    private $senhaUsuario;
    private $redeSocialUsuario;

    function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    function getSobrenomeUsuario()
    {
        return $this->sobrenomeUsuario;
    }

    function setSobrenomeUsuario($sobrenomeUsuario)
    {
        $this->nomeUsuario = $sobrenomeUsuario;
    }

    function getCelularUsuario()
    {
        return $this->celularUsuario;
    }

    function setCelularUsuario($celularUsuario)
    {
        $this->celularUsuario = $celularUsuario;
    }

    function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    function setEmailUsuario($emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;
    }

    function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;
    }

    function getRedeSocialUsuario()
    {
        return $this->redeSocialUsuario;
    }

    function setRedeSocialUsuario($redeSocialUsuario)
    {
        $this->redeSocialUsuario = $redeSocialUsuario;
    }

    public function criarMensagem()
    {
    }

    public function removerMensagem()
    {
    }

    public function escolherRedeSocial()
    {
    }
}
