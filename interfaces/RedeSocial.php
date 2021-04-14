<?php

interface RedeSocial
{
    public function enviarMensagemUsuario($mensagem);
    public function removerMensagem($codigoMensagem);
    public function criarUsuario($dadosUsuario, $redesocialID);
    public function removerUsuario($codigoUsuario);
}
