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
        $redeSocialId = $dadosUsuario['redesocialId'];
        $admin = $dadosUsuario['admin'];
        $nome = $dadosUsuario['nome'];
        $sobrenome = $dadosUsuario['sobrenome'];
        $celular = $dadosUsuario['celular'];
        $email = $dadosUsuario['email'];
        $senha = $dadosUsuario['senha'];

       $conn = "INSERT INTO usuario(redesocialidfk, admin, nome, sobrenome, senha, created_at) VALUES ('$redeSocialId', '$admin', '$nome', '$sobrenome', '$senha', now())";
       $conn = "INSERT INTO email_usuario(usuarioidfk, enderecoemail) VALUES ('$usuarioidfk', '$email')";
    }
    public function removerUsuario($codigoUsuario)
    {
    }
}
