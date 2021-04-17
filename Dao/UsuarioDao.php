<?php
//Conexão
include __DIR__ . '/../autoload.php';

class UsuarioDao
{
    function load()
    {
        global $conn;

        $sql = "SELECT * FROM padroesprojeto.usuario";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function loadRedeSocial($RedeSocialID)
    {
        global $conn;

        $sql = "SELECT * FROM padroesprojeto.redesocial WHERE RedeSocialID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $RedeSocialID);
        $stmt->execute();

        return $stmt->fetch();
    }
}
