<?php

/*
    Fazendo uso do padrão prototype para implementar clones para as mensagens (Pode ser observado em AcoesMensagens)
*/
interface PrototypeMensagem
{
    //método responsável por clonar as mensagens
    function clone();
}
