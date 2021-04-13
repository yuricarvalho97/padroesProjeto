<?php

//Conexao
include __DIR__ . '/../autoload.php';

class InstagramDao
{
    function load($nomeRedeSocial)
    {
        global $conn;

        $sql = "SELECT * FROM padroesprojeto.redesocial WHERE NomeRedeSocial = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nomeRedeSocial]);

        return $stmt->fetch();
    }

    function insert($nomeRedeSocial)
    {
        global $conn;

        $sql = 'INSERT INTO padroesprojeto.redesocial (NomeRedeSocial) VALUES (?)';
        $stmt = $conn->prepare($sql);

        return $stmt->execute([$nomeRedeSocial]);
    }
}
