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

    function insertMensagem($m)
    {
        global $conn;

        //Insere o novo usuário
        $sql = "INSERT INTO padroesprojeto.mensagem(MensageiroIDFK, ReceptorIDFK, Conteudo, Created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(1, $m->getMensageiroIDFK());
        $stmt->bindValue(2, $m->getReceptorIDFK());
        $stmt->bindValue(3, $m->getConteudo());
        $stmt->execute();

        return $conn->lastInsertId();
    }

    function deleteMensagem($codigoMensagem)
    {
        global $conn;

        $sql = "DELETE FROM padroesprojeto.usuario_mensagem WHERE MensagemIDFK = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $codigoMensagem);

        if ($stmt->execute()) {
            $sql1 = "DELETE FROM padroesprojeto.mensagem WHERE MensagemID = ?";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->bindValue(1, $codigoMensagem);
            return $stmt1->execute();
        }
    }

    function removeUsuario($codigoUsuario)
    {
        global $conn;

        $sql = "DELETE FROM padroesprojeto.usuario_mensagem WHERE UsuarioIDFK = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $codigoUsuario);
        $stmt->execute();

        if ($stmt->execute()) {
            $sql1 = "DELETE FROM padroesprojeto.telefone_usuario WHERE UsuarioIDFK = ?";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->bindValue(1, $codigoUsuario);
            $stmt1->execute();

            $sql2 = "DELETE FROM padroesprojeto.email_usuario WHERE UsuarioIDFK = ?";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bindValue(1, $codigoUsuario);
            $stmt2->execute();

            $sql3 = "DELETE FROM padroesprojeto.mensagem WHERE MensageiroIDFK = ?";
            $stmt3 = $conn->prepare($sql3);
            $stmt3->bindValue(1, $codigoUsuario);

            if ($stmt3->execute()) {
                $sql4 = "DELETE FROM padroesprojeto.usuario WHERE UsuarioID = ?";
                $stmt4 = $conn->prepare($sql4);
                $stmt4->bindValue(1, $codigoUsuario);
                return $stmt4->execute();
            }
        }
    }
}
