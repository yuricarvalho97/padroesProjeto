<?php

interface RedeSocial
{
    public function enviarMensagemUsuario($mensagem);
    public static function removerMensagem($codigoMensagem);
    public function criarUsuario(Usuario $u);
    public static function removerUsuario($codigoUsuario);
}
