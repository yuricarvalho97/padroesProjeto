<?php
//Conexão
include __DIR__ . '/../autoload.php';

class UsuarioDao{

    function insert(Usuario $u)
    {
        global $conn;

        //Insere o novo usuário
        $sql = "INSERT INTO padroesprojeto.usuario(RedeSocialIDFK, Admin, Nome, SobreNome, Senha, Created_at) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $u->getRedeSocialUsuario());
        $stmt->bindValue(2, $u->getUsuarioAdmin());
        $stmt->bindValue(3, $u->getNomeUsuario());
        $stmt->bindValue(4, $u->getSobrenomeUsuario());
        $stmt->bindValue(5, $u->getSenhaUsuario());
        $stmt->execute();

        $usuarioID = $conn->lastInsertId();

        //Insere o telefone do usuário
        $sql = "INSERT INTO padroesprojeto.telefone_usuario(USUARIOIDFK, Numero) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $usuarioID);
        $stmt->bindValue(2, $u->getTelefoneUsuario());
        $stmt->execute();

        //Insere o e-mail do usuário
        $sql = "INSERT INTO padroesprojeto.email_usuario(USUARIOIDFK, EnderecoEmail) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $usuarioID);
        $stmt->bindValue(2, $u->getEmailUsuario());
        return $stmt->execute();

    }
}