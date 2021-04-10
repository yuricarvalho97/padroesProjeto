<?php

require_once __DIR__ . '/../interfaces/RedeSocial';

class Facebook implements RedeSocial
{

    private $nomeRedeSocial;

    public function getNomeRedeSocial()
    {
        return $this->nomeRedeSocial;
    }

    public function setNomeRedeSocial($nomeRedeSocial)
    {
        $this->nomeRedeSocial = $nomeRedeSocial;
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
