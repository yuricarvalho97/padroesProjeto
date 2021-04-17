<?php

interface RedeSocial
{
    public function enviarMensagemUsuario($mensagem);
    public static function removerMensagem($codigoMensagem);
    public static function criarUsuario(Usuario $u);
    public static function removerUsuario($codigoUsuario);
}
