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
}
