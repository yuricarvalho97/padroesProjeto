<?php

interface RedeSocial
{
    public function enviarMensagemUsuario($mensagem);
    public function removerMensagem($codigoMensagem);
    public function criarUsuario($dadosUsuario);
    public function removerUsuario($codigoUsuario);
}
