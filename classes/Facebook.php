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
        $nome = $_POST['cmpNome'];
        $nomeUsuario = filter_var($nome, FILTER_SANITIZE_STRING);

        $sobrenome = $_POST['cmpSobrenome'];
        $sobrenomeUsuario = filter_var($sobrenome, FILTER_SANITIZE_STRING);

        $telefone = $_POST['cmpTelefone'];
        $telefoneUsuario = filter_var($telefone, FILTER_SANITIZE_STRING);

        $email = $_POST['cmpEmail'];
        $emailUsuario = filter_var($email, FILTER_SANITIZE_EMAIL);

        $senha = $_POST['cmpSenha'];
        $senhaUsuario = filter_var($senha, FILTER_SANITIZE_STRING);
    }
    public function removerUsuario($codigoUsuario)
    {
    }
}
