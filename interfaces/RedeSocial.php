<?php

interface RedeSocial
{
    public static function removerMensagem($codigoMensagem);
    public static function criarUsuario(Usuario $u);
    public static function removerUsuario($codigoUsuario);
    public static function find($nomeRedeSocial);
    public static function insere($nomeRedeSocial);
    public static function insereMensagem(Mensagem $mensagem);
}
