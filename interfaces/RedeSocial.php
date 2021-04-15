<?php

interface RedeSocial
{
    public function enviarMensagemUsuario($mensagem);
    public function removerMensagem($codigoMensagem);
    public function criarUsuario(Usuario $u);
    public function removerUsuario($codigoUsuario);
}
