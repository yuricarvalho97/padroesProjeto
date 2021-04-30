<?php

//conexão com o banco
require_once __DIR__ . "/classes/DBconexao.php";

//variável com a conexão da conexão
$conn = DBConexao::getInstance();

/*
    método responsável por fazer o require das classes que serão instanciadas.
    
    ex.: antes de fazer um "$class = new Class()", é necessário importar o arquivo q possui a classe.
        O autoload fará a inclusão do arquivo de forma automática para nós.
*/
spl_autoload_register(function ($class) {
    require_once __DIR__ . "/classes/" . $class . ".php";
});
