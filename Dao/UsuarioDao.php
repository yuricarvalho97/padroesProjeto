<?php
//Conexão
include __DIR__ . '/../autoload.php';

class UsuarioDao{

    function insert(Usuario $u)
    {
        global $conn;

        $sql = 'INSERT INTO padroesprojeto.usuario(RedeSocialIDFK, Admin, Nome, SobreNome, Senha, Created_at) VALUES (1, 0, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $u->getNomeUsuario());
        $stmt->bindValue(2, $u->getSobrenomeUsuario());
        $stmt->bindValue(3, $u->getSenhaUsuario());
        $stmt->bindValue(4, 'NOW()');
        return $stmt->execute();
    
    }
}