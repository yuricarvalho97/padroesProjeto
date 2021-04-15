<?php

//DAO
require_once __DIR__ . '/../Dao/UsuarioDao.php';

class Usuario
{
    private $usuarioAdmin;
    private $nomeUsuario;
    private $sobrenomeUsuario;
    private $telefoneUsuario;
    private $emailUsuario;
    private $senhaUsuario;
    private $redeSocialUsuario;


    function getUsuarioAdmin()
    {
        return $this->usuarioAdmin;
    }
    function setUsuarioAdmin($usuarioAdmin)
    {
        $this->usuarioAdmin = $usuarioAdmin;
    }
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
        $this->sobrenomeUsuario = $sobrenomeUsuario;
    }

    function getTelefoneUsuario()
    {
        return $this->telefoneUsuario;
    }

    function setTelefoneUsuario($telefoneUsuario)
    {
        $this->telefoneUsuario = $telefoneUsuario;
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

    //Método para inserir usuário
    public static function insere(Usuario $u){
        $usuarioDao = new UsuarioDao;
        $usuarioDao->insert($u);
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
