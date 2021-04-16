<?php

include __DIR__ . '/../autoload.php';

class MensagemDao
{
    function load()
    {
        global $conn;

        $sql = "SELECT * FROM padroesprojeto.mensagem";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function insert(Mensagem $m)
    {
        global $conn;

        //Insere o novo usuário
        $sql = "INSERT INTO padroesprojeto.mensagem(MensageiroIDFK, ReceptorIDFK, Conteudo, Created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(1, $m->getMensageiroIDFK());
        $stmt->bindValue(2, $m->getReceptorIDFK());
        $stmt->bindValue(3, $m->getConteudo());

        return $stmt->execute();
    }
}
