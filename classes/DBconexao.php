<?php

require_once __DIR__ . '/../conf/database.php';

/*
    A class DBConexão está aplicando o padrão Singleton
*/
class DBConexao
{
    //definindo constantes para a conexão
    private static $host = HOST;
    private static $db = DB;
    private static $user = USER;
    private static $password = PASSWORD;

    //variável public estática para a conexão
    public static $instance;

    //deixando o construtor privato para que ninguém possa instanciar a Classe diretamente
    private function __construct()
    {
    }

    public static function getInstance()
    {
        try {
            // verificando se a variável instance não foi criada
            if (!isset(self::$instance)) {
                self::$instance = new PDO('mysql: host=' . self::$host . ';dbname=' . self::$db, self::$user, self::$password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            }

            return self::$instance;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
