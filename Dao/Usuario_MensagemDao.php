<?php

include __DIR__ . '/../autoload.php';

class Usuario_MensagemDao
{
    function insert(Usuario_Mensagem $m)
    {
        global $conn;

        //Insere o novo usuário
        $sql = "INSERT INTO padroesprojeto.usuario_mensagem(UsuarioIDFK, MensagemIDFK) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(1, $m->getUsuarioIDFK());
        $stmt->bindValue(2, $m->getMensagemIFDK());

        return $stmt->execute();
    }
}
